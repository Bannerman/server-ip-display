<?php
/*
Plugin Name: Server IP Display
Plugin URI: https://plexkits.com/server-ip-display
Description: Displays the server IP address in the WP admin bar.
Version: 1.1.8
Author: Rick Bannerman
Author URI: https://socialgorillas.com
License: GPLV2
License URI: https://opensource.org/license/lgpl-2-0
Text Domain: server-ip-display
*/

if ( ! defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly.
}

add_action('admin_bar_menu', 'add_server_ip_to_admin_bar', 100);

function add_server_ip_to_admin_bar($wp_admin_bar) {
    // Check if SERVER_ADDR is set
    if ( isset( $_SERVER['SERVER_ADDR'] ) ) {
        // Assign and sanitize the server IP address
        $server_ip_raw = sanitize_text_field( wp_unslash( $_SERVER['SERVER_ADDR'] ) );

        // Validate the IP address
        if ( filter_var( $server_ip_raw, FILTER_VALIDATE_IP ) ) {
            // Add new node in admin bar
            $wp_admin_bar->add_node(array(
                'id'    => 'server_ip',
                'title' => 'IP - ' . esc_html( $server_ip_raw ),
                'meta'  => array('class' => 'server-ip'),
            ));
        }
    }
}
?>