<?php

$source_html = "source.html";
echo get_body($source_html);

function get_body($source_html){

    $chaine_html=implode(file($source_html)," ");

    $modele = '/<body[^>]*>(.*)<\/body>/is';

    preg_match($modele, $chaine_html, $body);

    return $chaine_texte = strip_tags($body[1]);
       
}

?>