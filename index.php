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
    <div id="progress-bar"></div>
    <?php
    require_once "include/connexionbdd.php";
    require_once "include/AffichageBdd.php";
    
    $request = $pdo->prepare("SELECT content FROM text_content");
    $request->execute();
    $resultText = $request->fetchAll(PDO::FETCH_ASSOC);
    $request = $pdo->prepare("SELECT link FROM images");
    $request->execute();
    $resultIm = $request->fetchAll(PDO::FETCH_ASSOC);
    $request = $pdo->prepare("SELECT project_link FROM images");
    $request->execute();
    $resultImProj = $request->fetchAll(PDO::FETCH_ASSOC);

    require_once "include/header.php"; ?>
    <section class="containerVideo">
        <video width="1920" height="1080" id="introLooped"  onclick="changeToEndIntro()" autoplay muted loop aria-label="vidéo introductive incitant à descendre plus bas sur le site">
            <source src="asset/medias/logo_animation loop_final_fr.mp4" type="video/mp4">
            Votre navigateur ne supporte pas la balise video.
        </video>
    </section>
    <section class="containerStart">
        <div class="containerPhoto">
            <img src="asset/img/n_josse.jpg" id="photo" alt="photographie de Nathaniel Josse" class="imgProfil">
        </div>
        <div class="rectanglePres">
            <p><?php AffichageBdd::affichage($resultText, 0);?><p>
        </div>
    </section>
    <section class="title">
        <p><span class="prenom">Nathaniel </span><span class="nom">Josse</span></p>
        <p><span class="dev">Développeur </span><span class="web">Web</span></p>
    </section>
    <div class="containerRectangleDiago">
        <div class="rectangleDiago"></div>
    </div>
    <div class="rectangleSelec">
        <h2>Sélection de réalisations</h2>
    </div>
    <section class="selecHomeRea">
        <?php if(!empty(AffichageBdd::retour($resultImProj, 0))){
            echo "<a href=" . AffichageBdd::retour($resultImProj, 0) . " target='_blank'> <img src=" . AffichageBdd::retour($resultIm, 0) . " alt='capture d'écran d'une première réalisation' class='rea1Home'></a>";
            } else {
                echo "<img src=" . AffichageBdd::retour($resultIm, 0) . " alt='capture d'écran d'une première réalisation' class='rea1Home'>";
            }?>
        <?php if(!empty(AffichageBdd::retour($resultImProj, 1))){
            echo "<a href=" . AffichageBdd::retour($resultImProj, 1) . " target='_blank'> <img src=" . AffichageBdd::retour($resultIm, 1) . " alt='capture d'écran d'une deuxième réalisation' class='rea2Home'></a>";
            } else {
                echo "<img src=" . AffichageBdd::retour($resultIm, 1) . " alt='capture d'écran d'une deuxième réalisation' class='rea2Home'>";
            }?>
        <?php if(!empty(AffichageBdd::retour($resultImProj, 2))){
            echo "<a href=" . AffichageBdd::retour($resultImProj, 2) . " target='_blank'> <img src=" . AffichageBdd::retour($resultIm, 2) . " alt='capture d'écran d'une troisième réalisation' class='rea3Home'></a>";
            } else {
                echo "<img src=" . AffichageBdd::retour($resultIm, 2) . " alt='capture d'écran d'une troisième réalisation' class='rea3Home'>";
            }?>
    </section>
    <section class="knowMoreTitle">
        <h2>En savoir plus sur moi</h2>
    </section>
    <section class="knowMoreContainer">
        <a href="asset/files/cv.pdf" target="_blank">
            <section class="cv">
                <div class="horizontal">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 64 64" stroke-width="2.5" stroke="#CACBD2" fill="none" class="duration-300 transform transition-all" style="width: 60px; height: 60px;"><path stroke-linecap="round" d="M25.15 7.74h25.66v48.52H13.19V20.6L25.15 7.74z"></path><path d="M25.17 7.74l-.02 12.86H13.19M18.34 47.67h17.01M18.34 41.14h27.01M18.34 35.04h27.01M18.34 28.94h27.01"></path></svg>
                    <p>Mon CV</p>
                </div>
                <p>Pour connaître mes compétences détaillées, ainsi que ce que je recherche actuellement.</p>
            </section>
        </a>
        <a href="pages/contact.php" target="_blank">
            <section class="contact">
                <div class="horizontal">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 64 64" stroke-width="2.5" stroke="#CACBD2" fill="none" class="duration-300 transform transition-all" style="width: 48px; height: 48px;"><circle cx="32" cy="18.14" r="11.14"></circle><path d="M54.55 56.85A22.55 22.55 0 0032 34.3h0A22.55 22.55 0 009.45 56.85z"></path></svg>
                    <p>Contact</p>
                </div>
                <p>Pour m’envoyer un message directement sur une page de Contact dédiée.</p>
            </section>
        </a>
    </section>
    <div id="shareCopy"><p>Pour partager mon site, cliquez ici pour en copier le lien !</p></div>
    <script src="asset/js/script.js"></script>
</body>

<footer>
    <p>© Nathaniel Josse - 2023 - </p>
    <p><a href="pages/mleg.php" title="mentions legales">Mentions légales</a></p>
</footer>
</html>