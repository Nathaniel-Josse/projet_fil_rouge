<?php

class AffichageBdd {

    public static function affichage($array, $nb){
        foreach ($array[$nb] as $key => $value) {
            echo $value;
        }
    }
    public static function retour($array, $nb){
        foreach ($array[$nb] as $key => $value) {
            return $value;
        }
    }

}

?>