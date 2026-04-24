<?php
function sacred_editorial_scripts() {
    // Tailwind is loaded via CDN in header.php for simplicity right now
    wp_enqueue_style( 'sacred-editorial-style', get_stylesheet_uri(), array(), '1.0' );
}
add_action( 'wp_enqueue_scripts', 'sacred_editorial_scripts' );
