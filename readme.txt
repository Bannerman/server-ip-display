=== Server IP Display ===
Contributors: rbannerm
Donate link: https://plexkits.com/server-ip-display
Tags: admin bar, server IP
Requires at least: 5.0
Tested up to: 6.6.2
Stable tag: 1.1.7
License: GPLV2
License URI: https://opensource.org/license/lgpl-2-0

A simple WordPress plugin to show the IP of the current server on the WP Admin bar. Useful when migrating servers.

== Description ==
A simple WordPress plugin to show the IP of the current server on the WP Admin bar. Useful when migrating servers.

== Installation ==
1. Upload the `server-ip-display` folder to the `/wp-content/plugins/` directory.
2. Activate the plugin through the 'Plugins' menu in WordPress.

== Changelog ==
= 1.0 =
* Initial release.

= 1.1.2 =
Prepped for WordPress Plugin store. 

= 1.1.3 =
License and version info updated.

= 1.1.4 =
License and version info updated.

= 1.1.5 =
Security improvements: Added validation, unslash, and sanitization to server IP address handling to comply with WordPress coding standards.

= 1.1.6 =
Enhanced security by adding additional sanitization using FILTER_SANITIZE_STRING to server IP address handling.

= 1.1.7 =
Resolved sanitization issues with $_SERVER['SERVER_ADDR'] by ensuring immediate assignment, unslash, and sanitization.

== Upgrade Notice ==
= 1.1.2 =
Minor code tweaks.

= 1.1.5 =
Security improvements and adherence to WordPress coding standards. Update recommended.

= 1.1.6 =
Enhanced security improvements for server IP handling.

= 1.1.7 =
Resolved sanitization issues with server IP handling for better compliance with WordPress standards.