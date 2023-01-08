<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name ="robots" content="all">    
    <title>Portfolio Web</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="asset/css/style.min.css">
</head>
<body>
    <div class="containerStart">
        <header>
            <p>Logo</p>
            <nav>
                <ul>
                    <li>Accueil</li>
                    <li>Présentation</li>
                    <li>Réalisations</li>
                    <li>Contact</li>
                </ul>
            </nav>
        </header>
        <div class="container1">
            <img src="asset/img/n_josse.jpg" alt="photographie de Nathaniel Josse" class="imgProfil">
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Totam quisquam temporibus aut aspernatur excepturi iure enim illum, veritatis fugit nihil! Quibusdam voluptate reiciendis voluptatem tenetur sunt, iure vel explicabo ducimus.
            Autem maxime quis hic impedit labore libero, aliquid ullam? Praesentium ex nobis perferendis repellat animi aperiam officiis, asperiores quisquam consectetur, corporis a cumque quo corrupti voluptates laudantium, ab distinctio necessitatibus.<p>
        </div>

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
        

    </div>

</body>
</html>