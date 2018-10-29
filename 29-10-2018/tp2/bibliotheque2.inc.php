<?php

//chaine de mot
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





//afficher le tableau avec les indices et valeurs
function print_tab($tab){

    foreach ($tab as $indice => $mot) echo $indice, " : ", $mot, "<br />";
}


//extration du contenu de la balise body
function get_body($source_html){
    
    $chaine_html=implode(file($source_html)," ");
    
    $modele = '/<body[^>]*>(.*)<\/body>/is';
    
    preg_match($modele, $chaine_html, $body);
    
    return $chaine_texte = strip_tags($body[1]);
           
}