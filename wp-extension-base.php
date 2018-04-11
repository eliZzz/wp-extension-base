<?php
/*
Plugin Name: Personnalisation woocommerce Eli
Plugin URI: https://wwww.gregoirenoyelle.com
Description: Pour mon client truc.
Version: 1.0
Author: Eli
Author URI: 
License: GPL2
License URI: 
Domain Path: /languages
Text Domain: wp-plugin-name
*/


//* If this file is called directly, abort.
if ( ! defined( 'ABSPATH' ) ) {
    die;
}


/**************************
* LIENS FICHIER PHP
**************************/

//* Appel autres fichiers PHP
// Fichier de functions pour WordPress
include_once(plugin_dir_path( __FILE__ ) . '/lib/func.wordpress.php');
// Fichier de functions pour Genesis
// include_once(plugin_dir_path( __FILE__ ) . '/lib/func.genesis.php');
// Fichier de functions pour intégrer des CSS et JS
include_once(plugin_dir_path( __FILE__ ) . '/lib/func.enqueue.php');

include_once(plugin_dir_path( __FILE__ ) . '/lib/func.woocom2.php');
