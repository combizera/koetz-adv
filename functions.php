<?php
function get_template_name() {
  if (is_single()) {
    return get_post_type();
  }
  $template_file = get_post_meta( get_THE_ID(), '_wp_page_template', true );
  if ($template_file == 'default' || !$template_file) {
    return 'default';
  }
  $templates = wp_get_theme()->get_page_templates();
  return strtolower( $templates[$template_file] );
}
add_action( 'wp_enqueue_scripts', 'my_theme_enqueue_styles' );
function my_theme_enqueue_styles() {
  if (get_template_name() !== "home new"){
    wp_enqueue_style( 'child-style',
        get_stylesheet_uri(),
        array( 'parenthandle' )
    );}
}


