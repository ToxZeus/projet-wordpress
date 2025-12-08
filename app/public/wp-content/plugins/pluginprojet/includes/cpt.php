<?php
add_action('init','mp_register_cpt_ateliers');
function mp_register_cpt_ateliers(){
    register_post_type('atelier', array(
        'labels' => array('name' => 'Ateliers','singular_name' => 'Atelier'),
        'public' => true,
        'has_archive' => true,
        'supports' => array('title','editor','thumbnail','custom-fields'),
        'show_in_rest' => true
    ));
}
