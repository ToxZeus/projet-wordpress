<?php

// Chargement des assets
function montheme_enqueue() {
    wp_enqueue_style('montheme-style', get_stylesheet_uri());
    wp_enqueue_script('montheme-script', get_template_directory_uri() . '/assets/js/main.js', array('jquery'), null, true);
}
add_action('wp_enqueue_scripts', 'montheme_enqueue');

// Support features
add_theme_support('title-tag');
add_theme_support('post-thumbnails');
add_theme_support('html5', array('search-form', 'comment-form', 'gallery'));

// Custom hooks example
do_action('montheme_after_header'); // hook dans header.php

// Création automatique des pages principales à l'activation du thème
function themeprojet_create_default_pages() {
    $pages = [
        [
            'title' => 'Contact',
            'content' => '<h2>Contactez-nous</h2><form><label for="nom">Nom :</label><input type="text" id="nom" name="nom" required><label for="email">Email :</label><input type="email" id="email" name="email" required><label for="message">Message :</label><textarea id="message" name="message" required></textarea><button type="submit">Envoyer</button></form>'
        ],
        [
            'title' => 'À propos',
            'content' => '<h2>À propos</h2><p>Ce site a été réalisé dans le cadre du projet WordPress 3A. Il inclut une boutique WooCommerce, un thème et une extension personnalisés.</p>'
        ],
        [
            'title' => 'Mentions légales',
            'content' => '<h2>Mentions légales</h2><p>Ce site est édité par Groupe Hugo CHICHKINE.<br>Adresse : 123 rue du Projet, 75000 Paris<br>Email : contact@themeprojet.fr<br>Directeur de la publication : H. Chich<br>Hébergeur : Localhost</p>'
        ]
    ];
    foreach ($pages as $page) {
        if (!get_page_by_title($page['title'])) {
            wp_insert_post([
                'post_title'   => $page['title'],
                'post_content' => $page['content'],
                'post_status'  => 'publish',
                'post_type'    => 'page'
            ]);
        }
    }
}
add_action('after_switch_theme', 'themeprojet_create_default_pages');
