<?php
require_once "../../include/connexionbdd.php";
require_once "../../include/Affichagebdd.php";
$request = $pdo->prepare("SELECT cookie FROM cookies");
$request->execute();
$resultCook = $request->fetchAll(PDO::FETCH_ASSOC);
if($_COOKIE["passDash"] == AffichageBdd::retour($resultCook, 0)){
    $id = $_GET["id"];

    if($id) {
        if(is_numeric($id)) {
            if($_SERVER["REQUEST_METHOD"] == "POST"){
                $supprContact = $pdo->exec("DELETE FROM contact WHERE id_contact = $id");
                header("location:../dashboard.php");
                exit;
            }
        }
    }

} else {
    header("location:../../index.php");
    exit;
}

?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name ="robots" content="all">    
    <title>Portfolio Web</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="asset/css/style.min.css">
    <link rel="apple-touch-icon" sizes="180x180" href="asset/img/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="asset/img/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="asset/img/favicon-16x16.png">
    <link rel="manifest" href="asset/img/site.webmanifest">
    <meta name="author" content="Nathaniel">
</head>
<body>
    <h1 class="mt-10">Voulez-vous vraiment supprimer le message n°<?= $id ?> ?</h1>

    <form method="post">
        <div class="d-flex justify-content-between">
            <button class="btn btn-success">Confirmer</button>
            <a href="../dashboard.php" class="btn btn-danger">Annuler</a>
        </div>
    </form>
</body>