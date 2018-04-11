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

    $tabs['composition_textile'] = array(
        'title' => 'Composition Textile',
        'priority' => 3,
        'callback' => 'eli_onglet_sur_mesure'
    );

    return $tabs;
}

function eli_onglet_sur_mesure(){
    $html = '<h2>Titre de mon onglet</h2>' ;
    $html .= '<p>Le contentu de mon onglet</p>';
    echo $html;
}

add_filter('woocommerce_product_tabs', 'eli_onglets_fiche_produit');


