<?php
/**
 * @package WordPress
 * @subpackage Yarwood
 */
 
/* POST THUMBNAILS */
 
if ( function_exists( 'add_theme_support' ) ) { 
  add_theme_support( 'post-thumbnails' ); 
}

/* EXERPT */

function new_excerpt_length($length) {
	return 18;
}
add_filter('excerpt_length', 'new_excerpt_length');

function new_excerpt_more($more) {
	return '...';
}

add_filter('excerpt_more', 'new_excerpt_more');
 
?>