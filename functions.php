<?php

function torounit_block_theme_setup() {
	add_theme_support( 'wp-block-styles' );
	add_editor_style( 'editor-style.css' );
}
add_action( 'after_setup_theme', 'torounit_block_theme_setup' );

function torounit_block_theme_styles() {
	$theme_version = wp_get_theme()->get( 'Version' );
	$version_string = is_string( $theme_version ) ? $theme_version : false;

	wp_enqueue_style(
		'torounit-block-theme-style',
		get_template_directory_uri() . '/style.css',
		array(),
		$version_string
	);
}

add_action( 'wp_enqueue_scripts', 'torounit_block_theme_styles' );