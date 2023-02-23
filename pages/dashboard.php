<?php
if($_COOKIE["passDash"] == "54a850jsp"){
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
        <header>
            <img src="../asset/img/logotype_nathaniel_test.png" alt="logo" class="logo">
            <nav>
                <ul>
                    <li><a href="../index.php" title="accueil">ACCUEIL</a></li>
                    <li><a href="realisations.php" title="realisations">RÉALISATIONS</a></li>
                    <li><a href="contact.php" title="contact">CONTACT</a></li>
                </ul>
            </nav>
        </header>

        <h1 class="co"><?= "Bonjour " . $_SESSION['admin'];?></h1>

        <?php
        $pdo = new PDO("mysql:host=localhost;dbname=projet_fil_rouge", "root", "", [PDO::ATTR_ERRMODE => PDO::ERRMODE_SILENT]);
        $request = $pdo->prepare("SELECT * FROM contact");
        $request->execute();
        $resultContact = $request->fetchAll(PDO::FETCH_ASSOC);
        $request = $pdo->prepare("SELECT * FROM text_content");
        $request->execute();
        $resultText = $request->fetchAll(PDO::FETCH_ASSOC);
        $request = $pdo->prepare("SELECT * FROM images");
        $request->execute();
        $resultIm = $request->fetchAll(PDO::FETCH_ASSOC);
        require_once "../include/AffichageBdd.php"; ?>

        <table class="table table-bordered">
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
                    <?php AffichageBdd::affichageTableau($resultC); ?>
                    <td>
                        <a href="actionsbdd/supprmess.php?id=<?= /*à changer !!*/ $key ?>">
                            S
                        </a>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
            <tfoot>

            </tfoot>
        </table>

        <table class="table table-bordered">
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
                    <?php AffichageBdd::affichageTableau($resultT); ?>
                    <td>
                        <a href="actionsbdd/modiftext.php?id=<?= /*à changer !!*/ $key ?>">
                            M
                        </a>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
            <tfoot>

            </tfoot>
        </table>

        <table class="table table-bordered">
            <thead class="thead-dark">
                <tr>
                    <th>ID</th>
                    <th>Lien img</th>
                    <th>Lien Projet</th>
                    <th>Modifier</th>
                </tr>
            </thead>

            <tbody>
                <?php foreach($resultIm as $resultI): ?>
                <tr>
                    <?php AffichageBdd::affichageTableau($resultI); ?>
                    <td>
                        <a href="actionsbdd/modifIm.php?id=<?= /*à changer !!*/ $key ?>">
                            M
                        </a>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
            <tfoot>

            </tfoot>
        </table>


    </body>
    <footer>
        <script src="asset/js/script.js"></script>
        <p>© Nathaniel Josse - 2023 - </p>
        <p><a href="mleg.php" title="mentions legales">Mentions légales</a></p>
    </footer>
<?php
} else {
    header("location:../index.php");
}