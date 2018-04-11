<?php
//* Fonction pour WordPress

//Enlever la barre Admin en front
// show_admin_bar( false );
//get the title renvoie  return apply_filters( 'the_title', $title, $id );
 

function filtre_sur_titre($titre){
    $prefixe = get_field ('prefixe');
    $couleurPrefixe = get_field ('couleur_prefixe');
    if (! is_singular( 'product' )){  //si ce n'est pas la fiche produit
        return  $titre;
    } 


    return sprintf('<span style="color:%s;">%s </span> %s', $couleurPrefixe, $prefixe, $titre);
}

add_filter( 'the_title', 'filtre_sur_titre');