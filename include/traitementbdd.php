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
    <header>
        <img src="../asset/img/logotype_nathaniel_test.png" alt="logo" class="logo">
        <nav>
            <ul>
                <li><a href="../index.php" title="accueil">Accueil</a></li>
                <li><a href="#" title="realisations">Réalisations</a></li>
                <li><a href="pages/contact.php" title="contact">Contact</a></li>
            </ul>
        </nav>
    </header>
<?php

$pdo = new PDO("mysql:host=localhost;dbname=projet_fil_rouge", "root", "", [PDO::ATTR_ERRMODE => PDO::ERRMODE_SILENT]);

if($_POST && $_POST["objet"] && $_POST["message"] && $_POST["email"]){
    $ajout = $pdo->prepare("INSERT INTO contact (email, objet, message) VALUES (:email, :objet, :message)");
    $ajout->bindValue(":email", $_POST["email"]);
    $ajout->bindValue(":objet", $_POST["objet"]);
    $ajout->bindValue(":message", $_POST["message"]);
    $resultat = $ajout->execute();
    if( $resultat ){
        echo "<div class='successMessage'>Merci pour votre message, il a bien été transmis.</div>";
        exit;
    } else {
        echo "<div class='errorMessage'>Erreur lors de l'envoi du message, veuillez réessayer.</div>";
    }
}
?>
</body>
<footer>
    <script src="asset/js/script.js"></script>
    <p>© Nathaniel Josse - 2023 - </p>
    <p><a href="pages/mleg.php" title="mentions legales">Mentions légales</a></p>
</footer>