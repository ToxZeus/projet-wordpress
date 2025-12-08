<?php
/*
Plugin Name: MonPluginProjet
Description: Plugin personnalisé pour projet WordPress 3A
Version: 1.0
Author: Groupe 3A
*/
// CPT Portfolio
function monplugin_register_cpt() {
    register_post_type('portfolio', [
        'label' => 'Portfolio',
        'public' => true,
        'supports' => ['title', 'editor', 'thumbnail'],
        'has_archive' => true,
    ]);
}
add_action('init', 'monplugin_register_cpt');
// Hook personnalisé : filtre sur le contenu
add_filter('the_content', function($content) {
    if (is_singular('portfolio')) {
        $content .= '<p><em>Projet réalisé par le groupe 3A.</em></p>';
    }
    return $content;
});
