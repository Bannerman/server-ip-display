<?php
/*
Plugin Name: Server IP Display
Plugin URI: https://plexkits.com/server-ip-display
Description: Displays the server IP address in the WP admin bar.
Version: 1.0
Author: Rick BAnnerman
Author URI: https://socialgorillas.com
License: MIT
License URI: https://opensource.org/licenses/MIT
Text Domain: server-ip-display
*/

if ( ! defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly.
}

add_action('admin_bar_menu', 'add_server_ip_to_admin_bar', 100);

function add_server_ip_to_admin_bar($wp_admin_bar) {
    // Get server IP address
    $server_ip = $_SERVER['SERVER_ADDR'];

    // Add new node in admin bar
    $wp_admin_bar->add_node(array(
        'id'    => 'server_ip',
        'title' => 'Server IP: ' . $server_ip,
        'meta'  => array('class' => 'server-ip'),
    ));
}

?>
