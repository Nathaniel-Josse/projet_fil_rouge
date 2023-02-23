<?php
session_start();

require_once "AffichageBdd.php";

if(isset($_POST['submit'])){
    if(isset($_POST['user']) and !empty($_POST['user'])){
        if(isset($_POST['mdp']) and !empty($_POST['mdp'])){

            $password = sha1($_POST['mdp']);

            $pdo = new PDO("mysql:host=localhost;dbname=projet_fil_rouge", "root", "", [PDO::ATTR_ERRMODE => PDO::ERRMODE_SILENT]);
            $request = $pdo->prepare("SELECT username FROM adm");
            $request->execute();
            $verifUser = $request->fetchAll(PDO::FETCH_ASSOC);
            $request = $pdo->prepare("SELECT mdp FROM adm");
            $request->execute();
            $verifMdp = $request->fetchAll(PDO::FETCH_ASSOC);

            if(($_POST['user'] == AffichageBdd::retour($verifUser,0)) and ($password == AffichageBdd::retour($verifMdp,0))){
                $_SESSION['admin'] = $_POST['user'];
                setcookie($name = "passDash", $value="54a850jsp");
                echo "Yes";
                header("Location:../pages/dashboard.php");
            } else {
                header("Location:../index.php");
            }

        }
    }
}