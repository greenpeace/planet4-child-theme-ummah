<?php

/**
 * Additional code for the child theme goes in here.
 */

add_action( 'wp_enqueue_scripts', 'enqueue_child_styles', 99);
add_filter( 'planet4_permissions_policy_header', 'update_planet4_permissions_policy_header', 10, 1 );

function enqueue_child_styles() {
	$css_creation = filectime(get_stylesheet_directory() . '/style.css');

	wp_enqueue_style( 'child-style', get_stylesheet_directory_uri() . '/style.css', [], $css_creation );
}

/**
 * Adjust the default Permissions-Policy header to allow geolocation from Greenpeace Maps.
 *
 * @param string $policy The Permissions-Policy header value.
 * @return string The modified Permissions-Policy header value.
 */
function update_planet4_permissions_policy_header( $policy ) {
	return str_replace(
		'geolocation=()',
		'geolocation=(self "https://maps.greenpeace.org")',
		$policy
	);
}
