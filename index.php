<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name ="robots" content="all">    
    <title>Portfolio Web</title>
    <!-- Importation de Bootstrap pour le carrousel --> <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="asset/css/style.min.css">
    <link rel="apple-touch-icon" sizes="180x180" href="asset/img/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="asset/img/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="asset/img/favicon-16x16.png">
    <link rel="manifest" href="asset/img/site.webmanifest">
    <meta name="author" content="Nathaniel">
</head>
<body>
    <?php
    require_once "include/AffichageBdd.php";
    
    $pdo = new PDO("mysql:host=localhost;dbname=projet_fil_rouge", "root", "", [PDO::ATTR_ERRMODE => PDO::ERRMODE_SILENT]);
    $request = $pdo->prepare("SELECT content FROM text_content");
    $request->execute();
    $result = $request->fetchAll(PDO::FETCH_ASSOC);
    /* foreach ($result[0] as $key => $value) {
        echo $key . "=>" . $value . "<br>";
    }
    foreach ($result[1] as $key => $value) {
        echo $key . "=>" . $value . "<br>";
    } */

    ?>
    <header>
        <img src="asset/img/logotype_nathaniel_test.png" alt="logo" class="logo">
        <nav>
            <ul>
                <li><a href="index.php" title="accueil">Accueil</a></li>
                <li><a href="pages/realisations.php" title="realisations">Réalisations</a></li>
                <li><a href="pages/contact.php" title="contact">Contact</a></li>
            </ul>
        </nav>
    </header>
    <div class="containerVideo">
        <video width="1920" height="1080" id="introLooped"  onclick="changeToEndIntro()" autoplay muted loop>
            <source src="asset/medias/logo_animation_loop.mp4" type="video/mp4">
            Votre navigateur ne supporte pas la balise video.
        </video>
    </div>
    <div class="containerStart">
        <div class="container1">
            <img src="asset/img/n_josse.jpg" alt="photographie de Nathaniel Josse" class="imgProfil">
            <p><?php AffichageBdd::affichage($result, 0);?><p>
        </div>
<!--
        <div id="carouselExampleIndicators" class="carousel slide m-3" data-bs-ride="carousel">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0"
                    class="active" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
                    aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"
                    aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="asset/img/carrousel_image_1.png" class="d-block w-100" alt="Mario en pixels">
                </div>
                <div class="carousel-item">
                    <img src="asset/img/carrousel_image_2_tmp.png" class="d-block w-100" alt="Mario en pixels dans l'autre sens">
                </div>
                <div class="carousel-item">
                    <img src="asset/img/carrousel_image_3_tmp.png" class="d-block w-100" alt="Mario en pixels à l'envers">
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"
                data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"
                data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>

-->
        

    </div>

</body>

<footer>
    <script src="asset/js/script.js"></script>
    <p>© Nathaniel Josse - 2023 - </p>
    <p><a href="pages/mleg.php" title="mentions legales">Mentions légales</a></p>
</footer>
</html>