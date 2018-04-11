<?php

# Personnalisation des onglets de la fiche produit


function eli_onglets_fiche_produit($tabs){
    //retirer un onglet
    //Les trois onglets par defaut sont description, reviews, additional information
    unset($tabs['description']);
    return $tabs;
}

add_filter('woocommerce_product_tabs', 'eli_onglets_fiche_produit');