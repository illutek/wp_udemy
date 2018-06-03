<?php
  function simple_theme_setup() {
    // Featured Image Support
    add_theme_support( 'post-thumbnails' );
  }

add_action( 'after_setup_theme', 'simple_theme_setup' );

/**
 * Filter the except length to 20 words.
 *
 * @param int $length Excerpt length.
 * @return int (Maybe) modified excerpt length.
 */
function set_excerpt_length( $length ) {
    return 30;
}
add_filter('excerpt_length', 'set_excerpt_length');