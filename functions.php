<?php
    function addOnFiles() {
        wp_enqueue_style('style', get_template_directory_uri() . '/style.css');
    }
    
    add_action('wp_enqueue_scripts', 'addOnFiles');
    add_theme_support( 'post-thumbnails' );
    