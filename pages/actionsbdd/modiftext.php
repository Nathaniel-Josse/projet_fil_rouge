<?php
require_once "../include/connexionbdd.php";
require_once "../include/Affichagebdd.php";
$request = $pdo->prepare("SELECT cookie FROM cookies");
$request->execute();
$resultCook = $request->fetchAll(PDO::FETCH_ASSOC);
if($_COOKIE["passDash"] == AffichageBdd::retour($resultCook, 0)){
    $id = $_GET["id"];

} else {
    header("location:../../index.php");
}