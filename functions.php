<?php

/**
 * Add theme support: post-thumbnails
 */
add_theme_support( 'post-thumbnails' );

/**
 * Customize: excerpt $more characters
 */
function new_excerpt_more( $more ) {
	return '...';
}

add_filter('excerpt_more', 'new_excerpt_more');

?>