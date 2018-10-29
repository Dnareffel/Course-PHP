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


//extraction des keywords et description des metas html
function get_meta_keywords_description($source_html){
    
    //les metast keywords + description
    $tab_metas = get_meta_tags($source_html);

    return $tab_metas["keywords"]. " " .$tab_metas["description"];
}

//extration du contenu de la balise title
function get_title ($source_html){

    $chaine_html=implode(file($source_html) , " ");
    $modele = "/<title>(.*)<\/title>/si";

    preg_match($modele, $chaine_html, $titre);

    return $titre[1];
}