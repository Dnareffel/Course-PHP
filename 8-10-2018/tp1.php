<?php

$chaine = "Bonjour tout le monde. L'université de Paris 8 est ouverte toute l'année";

$tab_mots = explode(" ",$chaine);
   
foreach($tab_mots as $mot) echo $mot, "<br />";
    
 
?>