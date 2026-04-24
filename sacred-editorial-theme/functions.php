<?php
function sacred_editorial_setup() {
    // Add default posts and comments RSS feed links to head.
    add_theme_support( 'automatic-feed-links' );

    // Let WordPress manage the document title.
    add_theme_support( 'title-tag' );

    // Enable support for Post Thumbnails on posts and pages.
    add_theme_support( 'post-thumbnails' );
}
add_action( 'after_setup_theme', 'sacred_editorial_setup' );

function sacred_editorial_scripts() {
    // Tailwind is loaded via CDN in header.php for simplicity right now
    wp_enqueue_style( 'sacred-editorial-style', get_stylesheet_uri(), array(), '1.0' );
}
add_action( 'wp_enqueue_scripts', 'sacred_editorial_scripts' );
