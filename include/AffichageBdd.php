<?php

class AffichageBdd {

    public static function affichage($array, $nb){
        foreach ($array[$nb] as $key => $value) {
            echo $value;
        }
    }
    public static function affichageTableau($array){
        foreach ($array as $value) {
            echo "<td>" . $value . "</td>";
        }
    }
    public static function retour($array, $nb){
        foreach ($array[$nb] as $key => $value) {
            return $value;
        }
    }

}

?>