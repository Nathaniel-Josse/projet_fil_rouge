<?php
if($_COOKIE["passDash"] == "54a850jsp"){
    $pdo = new PDO("mysql:host=localhost;dbname=projet_fil_rouge", "root", "", [PDO::ATTR_ERRMODE => PDO::ERRMODE_SILENT]);
    $id = $_GET["id"];

} else {
    header("location:../../index.php");
}