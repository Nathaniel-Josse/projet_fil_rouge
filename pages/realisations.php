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
    <?php
    require_once "../include/headerPages.php";
    require_once "../include/connexionbdd.php";
    require_once "../include/Affichagebdd.php";
    $request = $pdo->prepare("SELECT link_rea_code FROM realisations_code");
    $request->execute();
    $resultReaCodeIm = $request->fetchAll(PDO::FETCH_ASSOC);
    $request = $pdo->prepare("SELECT project_link_rea_code FROM realisations_code");
    $request->execute();
    $resultReaCodeProj = $request->fetchAll(PDO::FETCH_ASSOC);
    $request = $pdo->prepare("SELECT link_rea_graph FROM realisations_graph");
    $request->execute();
    $resultReaGraphIm = $request->fetchAll(PDO::FETCH_ASSOC); ?>
    <h1 class="co">Réalisations</h1>
    <div class="containerRea1">
        <div class="titleRea1">
            <p>Développement Web (Html, CSS, PHP)</p>
        </div>
        <div class="Rea1">
        <?php if(!empty(AffichageBdd::retour($resultReaCodeProj, 0))){
            echo "<a href=" . AffichageBdd::retour($resultReaCodeProj, 0) . " target='_blank'> <img src=" . AffichageBdd::retour($resultReaCodeIm, 0) . " alt='capture d'écran d'une réalisation' class='rea1Code'></a>";
            } else {
                echo "<img src=" . AffichageBdd::retour($resultReaCodeIm, 0) . " alt='capture d'écran d'une réalisation' class='rea1Code'>";
            }?>
        <?php if(!empty(AffichageBdd::retour($resultReaCodeProj, 1))){
            echo "<a href=" . AffichageBdd::retour($resultReaCodeProj, 1) . " target='_blank'> <img src=" . AffichageBdd::retour($resultReaCodeIm, 1) . " alt='capture d'écran d'une réalisation' class='rea2Code'></a>";
            } else {
                echo "<img src=" . AffichageBdd::retour($resultReaCodeIm, 1) . " alt='capture d'écran d'une réalisation' class='rea2Code'>";
            }?>
        <?php if(!empty(AffichageBdd::retour($resultReaCodeProj, 2))){
            echo "<a href=" . AffichageBdd::retour($resultReaCodeProj, 2) . " target='_blank'> <img src=" . AffichageBdd::retour($resultReaCodeIm, 2) . " alt='capture d'écran d'une réalisation' class='rea3Code'></a>";
            } else {
                echo "<img src=" . AffichageBdd::retour($resultReaCodeIm, 2) . " alt='capture d'écran d'une réalisation' class='rea3Code'>";
            }?>
        </div>
    </div>
    <div class="containerRea2">
        <div class="titleRea2">
            <p>Graphique (Reproductions de Pixel Arts)</p>
        </div>
        <div class="Rea2">
            <?php echo "<img src=" . AffichageBdd::retour($resultReaGraphIm, 0) . " alt='capture d'écran d'une réalisation' class='rea1Graph'>"; ?>
            <?php echo "<img src=" . AffichageBdd::retour($resultReaGraphIm, 1) . " alt='capture d'écran d'une réalisation' class='rea2Graph'>"; ?>
            <?php echo "<img src=" . AffichageBdd::retour($resultReaGraphIm, 2) . " alt='capture d'écran d'une réalisation' class='rea3Graph'>"; ?>
        </div>
    </div>
</body>
<footer>
    <script src="asset/js/script.js"></script>
    <p>© Nathaniel Josse - 2023 - </p>
    <p><a href="mleg.php" title="mentions legales">Mentions légales</a></p>
</footer>