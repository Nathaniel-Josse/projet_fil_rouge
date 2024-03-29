<?php
require_once "../include/connexionbdd.php";
require_once "../include/Affichagebdd.php";
$request = $pdo->prepare("SELECT cookie FROM cookies");
$request->execute();
$resultCook = $request->fetchAll(PDO::FETCH_ASSOC);
if($_COOKIE["passDash"] == AffichageBdd::retour($resultCook, 0)){
    session_start()

    ?>
    <!DOCTYPE html>
    <html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta name ="robots" content="all">    
        <title>Portfolio Web</title>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.2.3/css/bootstrap.min.css" integrity="sha512-SbiR/eusphKoMVVXysTKG/7VseWii+Y3FdHrt0EpKgpToZeemhqHeZeLWLhJutz/2ut2Vw1uQEj2MbRF+TVBUA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <link rel="stylesheet" href="../asset/css/style.min.css">
        <link rel="apple-touch-icon" sizes="180x180" href="../asset/img/apple-touch-icon.png">
        <link rel="icon" type="image/png" sizes="32x32" href="../asset/img/favicon-32x32.png">
        <link rel="icon" type="image/png" sizes="16x16" href="../asset/img/favicon-16x16.png">
        <link rel="manifest" href="../asset/img/site.webmanifest">
        <meta name="author" content="Nathaniel">
    </head>
    <body>
        <?php require_once "../include/headerPages.php"; ?>

        <h1 class="co"><?= "Bonjour " . $_SESSION['admin'];?></h1>

        <?php
        $request = $pdo->prepare("SELECT * FROM contact");
        $request->execute();
        $resultContact = $request->fetchAll(PDO::FETCH_ASSOC);
        $request = $pdo->prepare("SELECT * FROM text_content");
        $request->execute();
        $resultText = $request->fetchAll(PDO::FETCH_ASSOC);
        $request = $pdo->prepare("SELECT * FROM images");
        $request->execute();
        $resultIm = $request->fetchAll(PDO::FETCH_ASSOC);
        $request = $pdo->prepare("SELECT * FROM realisations_code");
        $request->execute();
        $resultReaCode = $request->fetchAll(PDO::FETCH_ASSOC);
        $request = $pdo->prepare("SELECT * FROM realisations_graph");
        $request->execute();
        $resultReaGraph = $request->fetchAll(PDO::FETCH_ASSOC); ?>

        <h2 class="h2_a">Messages du formulaire de contact</h2>
        <table class="table table-bordered tableA">
            <thead class="thead-dark">
                <tr>
                    <th>ID</th>
                    <th>Email</th>
                    <th>Objet</th>
                    <th>Message</th>
                    <th>Date d'envoi</th>
                    <th>Supprimer</th>
                </tr>
            </thead>

            <tbody>
                <?php foreach($resultContact as $key => $resultC): ?>
                <tr>
                    <?php AffichageBdd::affichageTableauContact($resultC); ?>
                </tr>
                <?php endforeach; ?>
            </tbody>
            <tfoot>

            </tfoot>
        </table>

        <h2 class="h2_a">Textes de l'accueil</h2>

        <table class="table table-bordered tableA">
            <thead class="thead-dark">
                <tr>
                    <th>ID</th>
                    <th>Texte</th>
                    <th>Modifier</th>
                </tr>
            </thead>

            <tbody>
                <?php foreach($resultText as $resultT): ?>
                <tr>
                    <?php AffichageBdd::affichageTableauTexte($resultT); ?>
                </tr>
                <?php endforeach; ?>
            </tbody>
            <tfoot>

            </tfoot>
        </table>

        <h2 class="h2_a">Réas de la page Home</h2>

        <table class="table table-bordered tableA">
            <thead class="thead-dark">
                <tr>
                    <th>ID</th>
                    <th>Lien img</th>
                    <th>Lien Projet</th>
                    <th>Alts</th>
                    <th>Captions</th>
                    <th>Modifier</th>
                </tr>
            </thead>

            <tbody>
                <?php foreach($resultIm as $resultI): ?>
                <tr>
                    <?php AffichageBdd::affichageTableauReaHome($resultI); ?>
                </tr>
                <?php endforeach; ?>
            </tbody>
            <tfoot>

            </tfoot>
        </table>

        <h2 class="h2_a">Réas de code de la page Réalisations</h2>

        <table class="table table-bordered tableA">
            <thead class="thead-dark">
                <tr>
                    <th>ID</th>
                    <th>Lien img</th>
                    <th>Lien Projet</th>
                    <th>Alts</th>
                    <th>Captions</th>
                    <th>Modifier</th>
                </tr>
            </thead>

            <tbody>
                <?php foreach($resultReaCode as $resultRC): ?>
                <tr>
                    <?php AffichageBdd::affichageTableauReaCode($resultRC); ?>
                </tr>
                <?php endforeach; ?>
            </tbody>
            <tfoot>

            </tfoot>
        </table>

        <h2 class="h2_a">Réas de graphisme de la page Réalisations</h2>

        <table class="table table-bordered tableA">
            <thead class="thead-dark">
                <tr>
                    <th>ID</th>
                    <th>Lien img</th>
                    <th>Alts</th>
                    <th>Captions</th>
                    <th>Modifier</th>
                </tr>
            </thead>

            <tbody>
                <?php foreach($resultReaGraph as $resultRG): ?>
                <tr>
                    <?php AffichageBdd::affichageTableauReaGraph($resultRG); ?>
                </tr>
                <?php endforeach; ?>
            </tbody>
            <tfoot>

            </tfoot>
        </table>


    </body>
    <footer>
        <script src="../asset/js/script.js"></script>
        <p>© Nathaniel Josse - 2023 - </p>
        <p><a href="mleg.php" title="mentions legales">Mentions légales</a></p>
    </footer>
<?php
} else {
    header("location:../index.php");
    exit;
}