<?php
/**
 * Plugin Name: Hellfish Media Custom AJAX
 * Description: Custom Request Handler for Dynamic Collective Results
 * Author: Hellfish Media
 * Version: 1.0
 * Author URI: https://hellfish.media
 */

if ( ! isset( $_GET['cnc'] ) ) {
    return;
}

// Define the WordPress "DOING_AJAX" constant.
if ( ! defined( 'DOING_AJAX' ) ) {
    define( 'DOING_AJAX', true );
}

wp_send_json(get_transient('city_results'));
