<?php 


function start_practice02_scripts() {
	wp_enqueue_style('bootstrap', 'https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css');
	wp_enqueue_style('style', get_template_directory_uri() . '/css/style.css');

	wp_enqueue_script('jquery', 'code.jquery.com/jquery-3.2.1.slim.min.js', array('json2'));
	wp_enqueue_script('popper', 'cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js', );
	wp_enqueue_script('bootstrap', 'https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js');
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