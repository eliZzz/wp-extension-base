<?php

# Personnalisation des onglets de la fiche produit


function eli_onglets_fiche_produit($tabs){
    //retirer un onglet
    // unset($tabs['description']);
    //Les trois onglets par defaut sont description, reviews, additional information
    
    $tabs['description']['title'] = 'Zoom';


    return $tabs;
}

add_filter('woocommerce_product_tabs', 'eli_onglets_fiche_produit');