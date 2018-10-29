<?php

//inclusion des fonctions prédéfines
include("bibliotheque5.inc.php");

//fichier html à traiter
$source_html = "../source.html";

//séparateurs tokenisation
$separateurs = " ',.?;";

//récupération keywords et descriptif
$key_desc = get_meta_keywords_description($source_html);

//récupération du titre
$title = get_title ($source_html);

//unification du texte à traiter
$texte_head = $key_desc. " " .$title;

//tokénisation du head
$tab_mots = explode_bis($separateurs, $texte_head);

//afficher des résultat du traitement
print_tab($tab_mots);

?>
