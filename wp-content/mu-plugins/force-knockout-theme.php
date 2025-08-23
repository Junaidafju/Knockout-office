<?php
/**
 * Plugin Name: Force KnockOut Theme
 * Description: Ensures the KnockOut theme directory ("knockout") is used for template and stylesheet, useful for stateless/ephemeral environments.
 * Version: 1.0.0
 */

if (!defined('ABSPATH')) {
	exit;
}

// Force template (parent theme) to knockout if it exists
add_filter('pre_option_template', function ($value) {
	$theme_dir = 'knockout';
	$theme = wp_get_theme($theme_dir);
	if ($theme && $theme->exists()) {
		return $theme_dir;
	}
	return $value;
});

// Force stylesheet (active theme) to knockout if it exists
add_filter('pre_option_stylesheet', function ($value) {
	$theme_dir = 'knockout';
	$theme = wp_get_theme($theme_dir);
	if ($theme && $theme->exists()) {
		return $theme_dir;
	}
	return $value;
});


