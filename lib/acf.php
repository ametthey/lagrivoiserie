<?php

/*
 *
 * everything ACF related
 *
 *
 *
 */

function register_acf_block_types() {

    // register a testimonial block.
    acf_register_block_type(array(
        'name'              => 'accueil',
        'title'             => __('Accueil'),
        'description'       => __('page d\'accueil du restaurant La Grivoiserie'),
        'render_template'   => 'tempate-parts/page-home.php',
        'category'          => 'formatting',
        'icon'              => 'admin-comments',
        'keywords'          => array( 'testimonial', 'quote' ),
    ));
}

// Check if function exists and hook into setup.
if( function_exists('acf_register_block_type') ) {
    add_action('acf/init', 'register_acf_block_types');
}




?>
