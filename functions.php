<?php
add_action('wp_enqueue_scripts', 'djerelo_life_scripts');

function djerelo_life_scripts() {
    wp_enqueue_style( 'djerelo_life-style', get_stylesheet_uri() );

    wp_enqueue_script( 'djerelo_life-scripts', get_template_directory_uri() . '/assets/js/app.min.js', array(), null, true);
};


?>

