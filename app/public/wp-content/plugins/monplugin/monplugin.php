<?php
/*
Plugin Name: Historique de prix
Description: Enregistre et affiche l'historique des prix des produits WooCommerce
Version: 1.0
Author: Hugo CHICHKINE
*/

// Enregistre chaque changement de prix d'un produit WooCommerce
function monplugin_save_price_history($post_id, $post, $update) {
    if ($post->post_type !== 'product') return;
    $product = wc_get_product($post_id);
    if (!$product) return;
    $current_price = $product->get_price();
    $history = get_post_meta($post_id, '_price_history', true);
    if (!is_array($history)) $history = [];
    $last = end($history);
    if (!$last || $last['price'] != $current_price) {
        $history[] = [
            'price' => $current_price,
            'date' => current_time('mysql')
        ];
        update_post_meta($post_id, '_price_history', $history);
    }
}
add_action('save_post', 'monplugin_save_price_history', 20, 3);

// Affiche l'historique des prix sur la fiche produit
add_action('woocommerce_single_product_summary', function() {
    global $post;
    $history = get_post_meta($post->ID, '_price_history', true);
    if (is_array($history) && count($history) > 1) {
        echo '<div style="margin:1.5rem 0 0.5rem 0;font-size:1.08rem;color:#2e8fff;font-weight:600;">Historique des prix :</div>';
        echo '<ul style="list-style:none;padding:0;margin:0 0 1.5rem 0;">';
        foreach (array_reverse($history) as $item) {
            echo '<li style="color:#e0e6ed;font-size:1rem;margin-bottom:0.3rem;">';
            echo esc_html($item['date']) . ' : <strong>' . wc_price($item['price']) . '</strong>';
            echo '</li>';
        }
        echo '</ul>';
    }
}, 26);
