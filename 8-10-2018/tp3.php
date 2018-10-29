<?php

/* A tester en plusieurs lignes

$texte = fopen("source.txt","r");
$chaine = fread($texte,filesize("source.txt"));

*/

$chaine = implode (file("source.txt")," ");

$separateurs = " ',.?;";

$tab_mots = explode_bis($separateurs, $chaine);

print_tab($tab_mots);

function explode_bis($separateurs, $chaine){

    $tab = array();
   
    //$tab_mots = explode(" ",$texte);
    
    $tok = strtok($chaine,$separateurs);
    
    //if( strlen($tok) > 2) $tab[] = $tok;
    //foreach($tab_mots as $mot) echo $mot, "<br />";
    
    while($tok !== false){

        //echo $tok, "<br />";
        if( strlen($tok) > 2) $tab[] = $tok;
        $tok = strtok($separateurs);
        
     
    }

    return $tab;

}


function print_tab($tab){

    foreach ($tab as $indice => $mot) echo $indice, " : ", $mot, "<br />";
}

?>