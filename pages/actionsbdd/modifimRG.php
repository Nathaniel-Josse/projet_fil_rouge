<?php
if($_COOKIE["passDash"] == "54a850jsp"){
    require_once "../../include/connexionbdd.php";
    $id = $_GET["id"];

} else {
    header("location:../../index.php");
}