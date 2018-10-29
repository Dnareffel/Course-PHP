<?php

//inclusion des fonctions prédéfines
include("bibliotheque2.inc.php");

//fichier html à traiter
$source_html = "../source.html";

//séparateurs tokenisation
$separateurs = " ',.?;";

//récupération du body
$texte_body = get_body($source_html);

//tokénisation du body
$tab_mots_body = explode_bis($separateurs, $texte_body);

//afficher des résultat du traitement
print_tab($tab_mots_body);

?>
