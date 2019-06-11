<?php # -*- coding: utf-8 -*-

/**
 * Plugin Name:  WP REST API Filter Items
 * Description:  Removing Content From WP API Response on your request.
 * Version:      1.0.0
 * Plugin URI:   https://github.com/bueltge/WP-REST-API-Filter-Items
 * Author:       Frank Bültge
 * Author URI:   http://bueltge.de/
 * Licence:      GPLv2+
 */

namespace RestApiFilterItems;

/**
 * @param $file
 */
$file_loader = function ( $file ) {

	require_once __DIR__ . '/inc/' . $file;
};
$file_loader( 'init-requisite.php' );
$file_loader( 'register-autoloading.php' );
$file_loader( 'init.php' );

add_action( 'wp_loaded', __NAMESPACE__ . '\init' );
