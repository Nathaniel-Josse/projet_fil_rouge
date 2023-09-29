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
    <main class="formContainer" aria-labelledby="titleCo">
        <h1 id="titleCo" class="co">Contact</h1>
        <form action="../include/traitementbdd.php" method="POST" id="formContact">
            <label for="email" class="form-label"> Votre email : </label><br>
            <input type="email" class="form-control" name="email" id="email" placeholder="Votre email" required aria-label="Votre email" aria-required="true" maxlength="100" aria-describedby="emailHelp">
            <small id="emailHelp">100 caractères maximum</small><br>
            <label for="objet" class="form-label"> Objet : </label><br>
            <input type="objet" class="form-control" name="objet" id="objet" placeholder="Objet du message" required aria-label="L'objet du message" aria-required="true" maxlength="50" aria-describedby="objectHelp">
            <small id="objectHelp">50 caractères maximum</small><br>
            <label for="message" class="form-label">Message : </label><br>
            <textarea id="message" class="form-control" name="message" rows="10" cols="50" placeholder="Écrivez votre message ici" required aria-label="Votre message" aria-required="true"></textarea><br>

            <section class="rgpd">
                <p>Les données que vous envoyez sont conservées dans une base de données prévue à cet effet. Elles seront effacées dès que votre message sera lu et traité. Veuillez ne pas y mettre d'information personnelle autre que l'email.</p>
            </section>
            
            <button type="submit" name="send" title="Envoyer"><img src="../asset/img/send_button.png" alt="bouton sur lequel cliquer pour envoyer le message" /></button>
        </form>
    </main>
    

    
</body>
</html>
<footer>
    <script src="../asset/js/script.js"></script>
    <p>© Nathaniel Josse - 2023 - </p>
    <p><a href="mleg.php" title="mentions legales">Mentions légales</a></p>
</footer>