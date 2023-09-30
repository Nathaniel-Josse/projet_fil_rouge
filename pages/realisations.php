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
    require_once "../include/AffichageBdd.php";
    $request = $pdo->prepare("SELECT link_rea_code FROM realisations_code");
    $request->execute();
    $resultReaCodeIm = $request->fetchAll(PDO::FETCH_ASSOC);
    $request = $pdo->prepare("SELECT project_link_rea_code FROM realisations_code");
    $request->execute();
    $resultReaCodeProj = $request->fetchAll(PDO::FETCH_ASSOC);
    $request = $pdo->prepare("SELECT alt_rea_code FROM realisations_code");
    $request->execute();
    $resultReaCodeAlt = $request->fetchAll(PDO::FETCH_ASSOC);
    $request = $pdo->prepare("SELECT caption_rea_code FROM realisations_code");
    $request->execute();
    $resultReaCodeCap = $request->fetchAll(PDO::FETCH_ASSOC);
    $request = $pdo->prepare("SELECT link_rea_graph FROM realisations_graph");
    $request->execute();
    $resultReaGraphIm = $request->fetchAll(PDO::FETCH_ASSOC);
    $request = $pdo->prepare("SELECT alt_rea_graph FROM realisations_graph");
    $request->execute();
    $resultReaGraphAlt = $request->fetchAll(PDO::FETCH_ASSOC);
    $request = $pdo->prepare("SELECT caption_rea_graph FROM realisations_graph");
    $request->execute();
    $resultReaGraphCap = $request->fetchAll(PDO::FETCH_ASSOC); ?>
    <main>
        <h1 class="co">Réalisations</h1>
        <section class="containerRea1">
            <div class="titleRea1">
                <h2>Développement Web (Html, CSS, PHP)</h2>
            </div>
            <section class="Rea1">
            <?php if(!empty(AffichageBdd::retour($resultReaCodeProj, 0))){
            echo "<figure><a href=" . AffichageBdd::retour($resultReaCodeProj, 0) . " target='_blank'><img src=" . AffichageBdd::retour($resultReaCodeIm, 0) . " alt=" . AffichageBdd::retour($resultReaCodeAlt, 0) . " class='rea1Home'></a><figcaption>" . AffichageBdd::retour($resultReaCodeCap, 0) . "</figcaption></figure>";
            } else {
                echo "<figure><img src=" . AffichageBdd::retour($resultReaCodeIm, 0) . " alt=" . AffichageBdd::retour($resultReaCodeAlt, 0) . " class='rea1Code'><figcaption>" . AffichageBdd::retour($resultReaCodeCap, 0) . "</figcaption></figure>";
            }?>
            <?php if(!empty(AffichageBdd::retour($resultReaCodeProj, 1))){
            echo "<figure><a href=" . AffichageBdd::retour($resultReaCodeProj, 1) . " target='_blank'><img src=" . AffichageBdd::retour($resultReaCodeIm, 1) . " alt=" . AffichageBdd::retour($resultReaCodeAlt, 1) . " class='rea2Code'></a><figcaption>" . AffichageBdd::retour($resultReaCodeCap, 1) . "</figcaption></figure>";
            } else {
                echo "<figure><img src=" . AffichageBdd::retour($resultReaCodeIm, 1) . " alt=" . AffichageBdd::retour($resultReaCodeAlt, 1) . " class='rea2Code'><figcaption>" . AffichageBdd::retour($resultReaCodeCap, 1) . "</figcaption></figure>";
            }?>
            <?php if(!empty(AffichageBdd::retour($resultReaCodeProj, 2))){
            echo "<figure><a href=" . AffichageBdd::retour($resultReaCodeProj, 2) . " target='_blank'><img src=" . AffichageBdd::retour($resultReaCodeIm, 2) . " alt=" . AffichageBdd::retour($resultReaCodeAlt, 2) . " class='rea3Code'></a><figcaption>" . AffichageBdd::retour($resultReaCodeCap, 2) . "</figcaption></figure>";
            } else {
                echo "<figure><img src=" . AffichageBdd::retour($resultReaCodeIm, 2) . " alt=" . AffichageBdd::retour($resultReaCodeAlt, 2) . " class='rea3Code'><figcaption>" . AffichageBdd::retour($resultReaCodeCap, 2) . "</figcaption></figure>";
            }?>
            </section>
        </section>
        <section class="containerRea2">
            <div class="titleRea2">
                <h2>Graphique (Reproductions de Pixel Arts)</h2>
            </div>
            <section class="Rea2">
                <?php echo "<figure><img src=" . AffichageBdd::retour($resultReaGraphIm, 0) . " alt=" . AffichageBdd::retour($resultReaGraphAlt, 0) . " class='rea1Graph'><figcaption>" . AffichageBdd::retour($resultReaGraphCap, 0) . "</figcaption></figure>"; ?>
                <?php echo "<figure><img src=" . AffichageBdd::retour($resultReaGraphIm, 1) . " alt=" . AffichageBdd::retour($resultReaGraphAlt, 1) . " class='rea2Graph'><figcaption>" . AffichageBdd::retour($resultReaGraphCap, 1) . "</figcaption></figure>"; ?>
                <?php echo "<figure><img src=" . AffichageBdd::retour($resultReaGraphIm, 2) . " alt=" . AffichageBdd::retour($resultReaGraphAlt, 2) . " class='rea3Graph'><figcaption>" . AffichageBdd::retour($resultReaGraphCap, 2) . "</figcaption></figure>"; ?>
            </section>
        </section>
    </main>
</body>
<footer>
    <script src="../asset/js/script.js"></script>
    <p>© Nathaniel Josse - 2023 - </p>
    <p><a href="mleg.php" title="mentions legales">Mentions légales</a></p>
</footer>