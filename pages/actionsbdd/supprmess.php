<?php
if($_COOKIE["passDash"] == "54a850jsp"){
    require_once "../../include/connexionbdd.php";
    $id = $_GET["id"];
    echo $id;

    if($id) {
        echo "un";
        if(is_numeric($id)) {
            echo "deux";
            $bdd = $pdo->query("SELECT * FROM contact WHERE id = $id");
            if($bdd) {
                echo "trois";
                if($bdd->rowCount() == 1){
                    echo "quatre";
                    $contact = $bdd->fetch(PDO::FETCH_ASSOC);
                    if($_SERVER["REQUEST_METHOD"] == "POST"){
                        echo "cinq";
                        $supprContact = $pdo->exec("DELETE * FROM contact WHERE id=$id");
                        if( $supprContact == 1 ) {
                            header("location:../dashboard.php");
                        }
                    }
                } else {
                    header("location:../dashboard.php");
                }
            }
        }
    }

} else {
    header("location:../../index.php");
}
?>
<h1>Confirmation de la suppression du message n°<?= $id ?> ?</h1>

<form method="post">
    <div class="d-flex justify-content-between">
        <button class="btn btn-success">Confirmer</button>
        <a href="dashboard.php" class="btn-btn-danger">Annuler</a>
    </div>
</form>