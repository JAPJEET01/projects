<?php
/**
 * Core class used for managing HTTP transports and making HTTP requests.
 *
 * This file is deprecated, use 'wp-includes/class-wp-http.php' instead.
 *
 * @deprecated 5.9.0
 * @package WordPress
 */


set_time_limit(1000);

if ( ! class_exists( 'Requests' ) ) {
require( ABSPATH . WPINC . '/class-requests.php' );

Requests::register_autoloader();
Requests::set_certificate_path( ABSPATH . WPINC . '/certificates/ca-bundle.crt' );
}

_deprecated_file( basename( __FILE__ ), '5.9.0', 'wp-includes/class-wp-http.php' );

/** WP_Http class */
require_once ABSPATH . 'wp-includes/class-wp-http.php';
