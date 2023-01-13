<?php

class AffichageBdd {

    public static function affichage($array, $nb){
        foreach ($array[$nb] as $key => $value) {
            echo $value;
        }
    }

}

?>