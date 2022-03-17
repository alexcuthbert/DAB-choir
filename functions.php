<?php 


function start_practice02_scripts() {
	//wp_enqueue_style('bootstrap', 'https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css');
	wp_enqueue_style('style', get_template_directory_uri() . '/css/style.css');
	//wp_enqueue_script('bootstrap', 'https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js');
}
add_action( 'wp_enqueue_scripts', 'start_practice02_scripts' );

add_theme_support( 'title-tag' );
add_theme_support( 'menus');

add_filter( 'manage_posts_columns', 'revealid_add_id_column', 5 );
add_action( 'manage_posts_custom_column', 'revealid_id_column_content', 5, 2 );
add_filter( 'manage_pages_columns', 'revealid_add_id_column', 5 );
add_action( 'manage_pages_custom_column', 'revealid_id_column_content', 5, 2 );


function revealid_add_id_column( $columns ) {
   $columns['revealid_id'] = 'ID';
   return $columns;
}

function revealid_id_column_content( $column, $id ) {
  if( 'revealid_id' == $column ) {
    echo $id;
  }
}

function wp_list_pages_filter($output) {
  $output = str_replace('page_item', 'page_item nav-item nav-link', $output);
  return $output;
}
add_filter('wp_list_pages', 'wp_list_pages_filter');

function twentytwenty_menus() {

  $locations = array(
    'primary'  => __( 'Primary Menu', 'twentytwenty' ),
    'footer'   => __( 'Footer Menu', 'twentytwenty' ),
  );

  register_nav_menus( $locations );
}

add_action( 'init', 'twentytwenty_menus' );