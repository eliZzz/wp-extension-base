<?php

# Personnalisation des onglets de la fiche produit


function eli_onglets_fiche_produit($tabs){
    //retirer un onglet
    // unset($tabs['description']);
    //Les trois onglets par defaut sont description, reviews, additional information
    
    //renommer un onglet
    $tabs['description']['title'] = 'Zoom';


    //changer l'ordre
    $tabs['description']['priority'] = 2;
    $tabs['reviews']['priority'] = 1;

    return $tabs;
}

add_filter('woocommerce_product_tabs', 'eli_onglets_fiche_produit');


