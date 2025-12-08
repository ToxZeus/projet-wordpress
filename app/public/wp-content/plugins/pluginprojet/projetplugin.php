<?php
/*
Plugin Name: MonPluginProjet
Description: CPT + Hook pour WooCommerce
Version: 1.0
Author: Groupe
*/

require_once plugin_dir_path(__FILE__) . 'includes/cpt.php';

// Hook pour modifier le titre produit WooCommerce (exemple)
add_filter('the_title', function($title){
    if (is_singular('product')) {
        return '[Produit] ' . $title;
    }
    return $title;
});
