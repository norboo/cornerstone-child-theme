<?php

// Enqueue CSS and scripts

function load_cornerstone_child_scripts() {
	wp_enqueue_style(
		'cornerstone_child_css',
		get_stylesheet_directory_uri() . '/style.css',
		array('foundation_css'),
		false,
		'all'
	);
}

add_action('wp_enqueue_scripts', 'load_cornerstone_child_scripts',50);

//Remove Orbit
function remove_orbit () {

remove_action('init', 'Orbit');

}
add_action('after_setup_theme', 'remove_orbit');

// Add pages to query. Show Author archive when no posts
function custom_post_author_archive($query) {
    if ($query->is_author)
        $query->set( 'post_type', array('post', 'page','about') );
    remove_action( 'pre_get_posts', 'custom_post_author_archive' );
}
add_action('pre_get_posts', 'custom_post_author_archive');

?>