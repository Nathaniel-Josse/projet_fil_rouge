<?php
require_once "../include/connexionbdd.php";
require_once "../include/Affichagebdd.php";
$request = $pdo->prepare("SELECT cookie FROM cookies");
$request->execute();
$resultCook = $request->fetchAll(PDO::FETCH_ASSOC);
if(!isset($_COOKIE["passDash"])){
    ?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name ="robots" content="all">    
    <title>Portfolio Web</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="../asset/css/style.min.css">
    <link rel="apple-touch-icon" sizes="180x180" href="../asset/img/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="../asset/img/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="../asset/img/favicon-16x16.png">
    <link rel="manifest" href="../asset/img/site.webmanifest">
    <meta name="author" content="Nathaniel">
</head>
<body>
    <?php require_once "../include/headerPages.php"; ?>
    <h1 class="co">Connexion</h1>
    <?php require_once "../include/admTraitement.php"; ?>
    <div class="formAdm">
        <form action="" method="POST" id="formAdm">
            <label for="user" class="form-label"> User : </label><br>
            <input type="text" class="form-control" name="user" id="user" placeholder="Votre username"><br>
            <label for="mdp" class="form-label"> Mot de passe : </label><br>
            <input type="password" class="form-control" name="mdp" id="mdp" placeholder="Votre mot de passe"><br>
            
            <input type="submit" name="submit" value="Se connecter">
        </form>
    </div>

</body>
<footer>
    <script src="asset/js/script.js"></script>
    <p>© Nathaniel Josse - 2023 - </p>
    <p><a href="mleg.php" title="mentions legales">Mentions légales</a></p>
</footer>

<?php } else {
    if($_COOKIE["passDash"] == AffichageBdd::retour($resultCook, 0)){
        header("location:dashboard.php");
    }
}