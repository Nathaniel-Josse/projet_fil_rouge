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
                <li><a href="../index.php" title="accueil">ACCUEIL</a></li>
                <li><a href="realisations.php" title="realisations">RÉALISATIONS</a></li>
                <li><a href="contact.php" title="contact">CONTACT</a></li>
            </ul>
        </nav>
    </header>
    <h1 class="co">Contact</h1>
    <div class="formContainer">
        <form action="../include/traitementbdd.php" method="POST" id="formContact">
            <label for="email" class="form-label"> Votre email : </label><br>
            <input type="email" class="form-control" name="email" id="email" placeholder="Votre email"><br>
            <label for="objet" class="form-label"> Objet : </label><br>
            <input type="objet" class="form-control" name="objet" id="objet" placeholder="Objet du message"><br>
            <label for="message" class="form-label">Message : </label><br>
            <textarea id="message" class="form-control" name="message" rows="10" cols="50" placeholder="Écrivez votre message ici"></textarea><br>

            <div class="rgpd">
                <p>RGPD blabla</p>
            </div>
            
            <input type="submit" value="Envoyer le messsage">
        </form>
    </div>
    

    
</body>
</html>
<footer>
    <script src="asset/js/script.js"></script>
    <p>© Nathaniel Josse - 2023 - </p>
    <p><a href="mleg.php" title="mentions legales">Mentions légales</a></p>
</footer>