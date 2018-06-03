<?php
  function simple_theme_setup() {
    // Featured Image Support
    add_theme_support( 'post-thumbnails' );

    // Menu
    register_nav_menus(array(
        /**
         * 'primary' => 'Primary Menu'
         * __('') = translation function
         * vergelijkbaar in twig filter |t
         */
        'primary' => __('Primary Menu')

    ));
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

/**
 * 
 */

 function simple_init_widgets($id) {
     register_sidebar([
       'name' => 'Siderbar',
       'id'   => 'sidebar',
       'before_widget' => '<div class="side-widget">',
       'after_widget'  => '</div>',
       'before_title'  => '<h3>',
       'after_title'   => '</h3>'
     ]);
 }

 add_action( 'widgets_init', 'simple_init_widgets' );