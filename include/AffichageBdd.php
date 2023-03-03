<?php

class AffichageBdd {

    public static function affichage($array, $nb){
        foreach ($array[$nb] as $key => $value) {
            echo $value;
        }
    }
    public static function affichageTableauContact($array){
        foreach ($array as $key => $value) {
            echo "<td>" . $value . "</td>";
            if ($key == "id_contact"){
                $idStock = $value; // On récupère l'id pour la dernière colonne
            }
            if ($key == "date"){ //Si on est sur la dernière colonne
                echo "<td><a href='actionsbdd/supprmess.php?id=" . $idStock . "'>S</a></td>"; //On ajoute la dernière colonne
            }
        }
    }
    public static function affichageTableauTexte($array){
        foreach ($array as $key => $value) {
            echo "<td>" . $value . "</td>";
            if ($key == "id_text"){
                $idStock = $value; // On récupère l'id pour la dernière colonne
            }
            if ($key == "content"){ //Si on est sur la dernière colonne
                echo "<td><a href='actionsbdd/modiftext.php?id=" . $idStock . "'>M</a></td>"; //On ajoute la dernière colonne
            }
        }
    }
    public static function affichageTableauReaHome($array){
        foreach ($array as $key => $value) {
            echo "<td>" . $value . "</td>";
            if ($key == "id_image"){
                $idStock = $value; // On récupère l'id pour la dernière colonne
            }
            if ($key == "project_link"){ //Si on est sur la dernière colonne
                echo "<td><a href='actionsbdd/modifIm.php?id=" . $idStock . "'>M</a></td>"; //On ajoute la dernière colonne
            }
        }
    }
    public static function affichageTableauReaCode($array){
        foreach ($array as $key => $value) {
            echo "<td>" . $value . "</td>";
            if ($key == "id_rea_code"){
                $idStock = $value; // On récupère l'id pour la dernière colonne
            }
            if ($key == "project_link_rea_code"){ //Si on est sur la dernière colonne
                echo "<td><a href='actionsbdd/modifImRC.php?id=" . $idStock . "'>M</a></td>"; //On ajoute la dernière colonne
            }
        }
    }
    public static function affichageTableauReaGraph($array){
        foreach ($array as $key => $value) {
            echo "<td>" . $value . "</td>";
            if ($key == "id_rea_graph"){
                $idStock = $value; // On récupère l'id pour la dernière colonne
            }
            if ($key == "link_rea_graph"){ //Si on est sur la dernière colonne
                echo "<td><a href='actionsbdd/modifImRG.php?id=" . $idStock . "'>M</a></td>"; //On ajoute la dernière colonne
            }
        }
    }
    public static function retour($array, $nb){
        foreach ($array[$nb] as $key => $value) {
            return $value;
        }
    }

}