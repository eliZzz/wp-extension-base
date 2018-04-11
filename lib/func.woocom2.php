<?php

# Personnalisation des onglets de la fiche produit


function eli_onglets_fiche_produit($tabs){
    //on vérifie si le champ existe
    $contenuCompo=get_field('wooCom2_composition_textile');
    //retirer un onglet
    // unset($tabs['description']);
    //Les trois onglets par defaut sont description, reviews, additional information
    
    //renommer un onglet
    $tabs['description']['title'] = 'Zoom';


    //changer l'ordre
    $tabs['description']['priority'] = 2;
    $tabs['reviews']['priority'] = 1;

    if ($contenuCompo){
        $tabs['composition_textile'] = array(
            'title' => 'Composition Textile',
            'priority' => 3,
            'callback' => 'eli_onglet_sur_mesure'
        );
    }
   

    return $tabs;
}

function eli_onglet_sur_mesure(){
     $contenuCompo=get_field('wooCom2_composition_textile');
    // aff_v($contenuCompo);
    $html = '<h2>Composition</h2>' ;
    $html .= '<p>' . $contenuCompo . '</p>';   //ou $html .= sprintf('<p> %s </p>, $contenuCompo); 
    echo $html;
}

add_filter('woocommerce_product_tabs', 'eli_onglets_fiche_produit');


