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
            $request = $pdo->prepare("SELECT link FROM images WHERE id_image = $id");
            $request->execute();
            $contenuIm = $request->fetchAll(PDO::FETCH_ASSOC);
            $contenuImLien = AffichageBdd::retour($contenuIm, 0);
            $request = $pdo->prepare("SELECT project_link FROM images WHERE id_image = $id");
            $request->execute();
            $contenuIm = $request->fetchAll(PDO::FETCH_ASSOC);
            $contenuImLienProjet = AffichageBdd::retour($contenuIm, 0);
            if($_SERVER["REQUEST_METHOD"] == "POST"){
                $imLink = $_POST['imLink'];
                $projectLink = $_POST['projectLink'];
                $modifText = "UPDATE images SET link = :imLink, project_link = :projectLink WHERE id_image = $id";
                $prepRequete=$pdo->prepare($modifText);
                $prepRequete->bindValue(":imLink", $imLink);
                $prepRequete->bindValue(":projectLink", $projectLink);
                $prepRequete->execute();
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
    <link rel="stylesheet" href="../../asset/css/style.min.css">
    <link rel="apple-touch-icon" sizes="180x180" href="asset/img/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="asset/img/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="asset/img/favicon-16x16.png">
    <link rel="manifest" href="asset/img/site.webmanifest">
    <meta name="author" content="Nathaniel">
</head>
<body>
    <h1 class="mt-5 co">Modification de l'image n°<?= $id ?> sur la page d'Accueil ?</h1>
    <section class="ml-5 mr-5">
        <form action="" method="post">
            <label for="linktoupdate" class="form-label">Lien de l'image que vous voulez modifier :</label><br>
            <textarea id="texttoupdate" placeholder="<?= $contenuImLien ?>" cols=50 rows=5 class="form-control" name="imLink"></textarea><br>
            <label for="projectlinktoupdate" class="form-label">Lien du projet GitHub que vous voulez modifier :</label><br>
            <textarea id="texttoupdate" placeholder="<?= $contenuImLienProjet ?>" cols=50 rows=5 class="form-control" name="projectLink"></textarea><br>
            <button type="submit" class="btn btn-success mr-1">Confirmer la modification</button>
            <a href="../dashboard.php" class="btn btn-danger">Annuler la modification</a>
        </form>
    </section>
</body>