<?php
if($_COOKIE["passDash"] == "54a850jsp"){
    require_once "../../include/connexionbdd.php";
    $id = $_GET["id"];

    if($id) {
        if(is_numeric($id)) {
            $bdd = $pdo->query("SELECT * FROM contact WHERE id = $id");
            if($bdd) {
                $contact = $bdd->fetch(PDO::FETCH_ASSOC);
                $supprContact = $pdo->exec("DELETE * FROM contact WHERE id=$id");
                if( $supprContact == 1 ) {
                    header("location:../dashboard.php");
                }
            }
        }
    }


} else {
    header("location:../../index.php");
}
