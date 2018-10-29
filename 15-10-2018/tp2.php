<?php

$source_html = "source.html";
echo get_meta_keywords_description($source_html);

function get_meta_keywords_description($source_html){

    //les metast keywords + description
    $tab_metas = get_meta_tags($source_html);

    return $tab_metas["keywords"]. " " .$tab_metas["description"];
}

?>