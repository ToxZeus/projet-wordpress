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

// Custom hooks
do_action('montheme_after_header'); // hook dans header.php

// Hook personnalisé : filtre sur le titre des pages
add_filter('the_title', function($title, $id) {
    if (is_page($id)) {
        // Ajoute une étoile devant le titre de chaque page
        return '★ ' . $title;
    }
    return $title;
}, 10, 2);

// Création automatique des pages principales à l'activation du thème
function themeprojet_create_default_pages() {
    $pages = [
        [
            'title' => 'Contact',
            'content' => '<div style="display:flex;flex-direction:column;align-items:center;gap:1.5rem;max-width:600px;margin:0 auto;padding-top:48px;">
                <div style="font-size:3rem;line-height:1;color:#2e8fff;"><span aria-label="Contact" role="img">📬</span></div>
                <h1 style="color:#2e8fff;text-align:center;margin-bottom:0.5rem;font-size:2.2rem;font-family:﻿Roboto Mono﻿,Segoe UI,Arial,sans-serif;">Contact</h1>
                <p style="font-size:1.12rem;color:#e0e6ed;">Une question, une demande ?<br>Remplissez le formulaire ci-dessous et nous vous répondrons rapidement.</p>
                <form style="width:100%;background:#23272b;padding:2rem 1.2rem;border-radius:10px;box-shadow:0 2px 12px rgba(46,143,255,0.10);display:flex;flex-direction:column;gap:1.2rem;max-width:400px;">
                    <label for="nom" style="font-weight:600;color:#2e8fff;display:flex;align-items:center;gap:8px;font-size:1.08rem;"><span aria-label="Nom" role="img">👤</span> Nom</label>
                    <input type="text" id="nom" name="nom" required placeholder="Votre nom" minlength="2" style="padding-left:10px;width:100%;box-sizing:border-box;">
                    <label for="email" style="font-weight:600;color:#2e8fff;display:flex;align-items:center;gap:8px;font-size:1.08rem;"><span aria-label="Email" role="img">✉️</span> Email</label>
                    <input type="email" id="email" name="email" required placeholder="Votre email" pattern="[^@\s]+@[^@\s]+\.[^@\s]+" style="padding-left:10px;width:100%;box-sizing:border-box;">
                    <label for="message" style="font-weight:600;color:#2e8fff;display:flex;align-items:center;gap:8px;font-size:1.08rem;"><span aria-label="Message" role="img">📝</span> Message</label>
                    <textarea id="message" name="message" required rows="5" placeholder="Votre message..." minlength="10" style="padding-left:10px;width:100%;box-sizing:border-box;"></textarea>
                    <button type="submit" style="margin-top:1rem;background:linear-gradient(90deg,#2e8fff,#00ffb4);color:#181c20;border:none;border-radius:8px;padding:1rem 2.2rem;font-weight:bold;cursor:pointer;box-shadow:0 2px 12px rgba(46,143,255,0.10);font-size:1.15rem;letter-spacing:0.5px;">Envoyer ✈️</button>
                </form>
            </div>'
        ],
        [
            'title' => 'À propos',
            'content' => '<div style="display:flex;flex-direction:column;align-items:center;gap:1.5rem;max-width:600px;margin:0 auto;padding-top:48px;">
                <div style="font-size:3rem;line-height:1;color:#2e8fff;"><span aria-label="À propos" role="img">💡</span></div>
                <h1 style="color:#2e8fff;text-align:center;margin-bottom:0.5rem;font-size:2.2rem;font-family:Roboto Mono,Segoe UI,Arial,sans-serif;">À propos</h1>
                <p style="font-size:1.18rem;color:#e0e6ed;">Ce site a été réalisé dans le cadre du projet WordPress.<br>Il inclut une boutique WooCommerce, un thème et une extension personnalisés.</p>
                <div style="margin-top:2rem;text-align:center;"><a href="/" style="background:linear-gradient(90deg,#2e8fff,#00ffb4);color:#181c20;border:none;border-radius:8px;padding:1rem 2.2rem;font-size:1.2rem;font-weight:bold;text-decoration:none;box-shadow:0 2px 12px rgba(46,143,255,0.10);transition:background 0.2s,color 0.2s,transform 0.2s;">Retour à l&#39;accueil</a></div>
            </div>'
        ],
        [
            'title' => 'Mentions légales',
            'content' => '<div style="display:flex;flex-direction:column;align-items:center;gap:1.5rem;max-width:600px;margin:0 auto;padding-top:48px;">
                <div style="font-size:3rem;line-height:1;color:#2e8fff;"><span aria-label="Mentions légales" role="img">📄</span></div>
                <h1 style="color:#2e8fff;text-align:center;margin-bottom:0.5rem;font-size:2.2rem;font-family:Roboto Mono,Segoe UI,Arial,sans-serif;">Mentions légales</h1>
                <p style="font-size:1.12rem;color:#e0e6ed;">Ce site est édité par Hugo CHICHKINE.<br>Adresse : 123 rue du Projet, 75000 Paris<br>Email : contact@themeprojet.fr<br>Directeur de la publication : H. Chich<br>Hébergeur : Localhost</p>
                <div style="margin-top:2rem;text-align:center;"><a href="/" style="background:linear-gradient(90deg,#2e8fff,#00ffb4);color:#181c20;border:none;border-radius:8px;padding:1rem 2.2rem;font-size:1.2rem;font-weight:bold;text-decoration:none;box-shadow:0 2px 12px rgba(46,143,255,0.10);transition:background 0.2s,color 0.2s,transform 0.2s;">Retour à l&#39;accueil</a></div>
            </div>'
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
