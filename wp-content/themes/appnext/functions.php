<?php
/**
 * Enqueue scripts and styles.
 */
function appnext_scripts() {
    

	wp_enqueue_style( 'ffm-style', get_stylesheet_uri() );

    wp_enqueue_script( 'jquery' );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'appnext_scripts' );

add_theme_support( 'post-formats', array( 'aside', 'gallery' ) );
add_theme_support( 'automatic-feed-links' );