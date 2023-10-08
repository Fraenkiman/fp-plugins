<?php
/*
 * Plugin Name: Google Webfonts
 * Version: 1.0.1
 * Plugin URI: https://frank-web.dedyn.io
 * Description: Provides the Google Web Fonts <a href="https://fonts.google.com/specimen/Open+Sans" title="opens a preview of Google Fonts" target="_blank">Open Sans</a>, <a href="https://fonts.google.com/specimen/Noto+Sans" title="opens a preview of Google Fonts" target="_blank">Noto Sans</a>, <a href="https://fonts.google.com/specimen/Noto+Sans+Mono" title="opens a preview of Google Fonts" target="_blank">Noto Sans Mono</a>, <a href="https://fonts.google.com/specimen/Ubuntu+Mono" title="opens a preview of Google Fonts" target="_blank">Ubuntu Mono</a> and <a href="https://fonts.google.com/specimen/Playfair-Display" title="opens a preview of Google Fonts" target="_blank">Playfair Display</a> on your web server. <a href="./fp-plugins/webfonts/doc_webfonts.txt" title="Instructions" target="_blank">[Instructions]</a>
 * Author: Fraenkiman
 * Author URI: https://frank-web.dedyn.io
 */
 
// CSS rules to specify families
// -----------------------------
// font-family: 'Ubuntu Mono', monospace;
// font-family: 'Noto Sans Mono', monospace;
// font-family: 'Open Sans', sans-serif;
// font-family: 'Noto Sans', sans-serif;
// font-family: 'Playfair Display', serif;

// Turn off all error reporting
error_reporting(0);

add_action('wp_head', 'plugin_webfonts_head');

function plugin_webfonts_head() {

	$pdir = plugin_geturl('webfonts');
	echo '
	<!-- start Google Webfonts -->
	<link rel="stylesheet" type="text/css" href="' . $pdir . 'res/open-sans.css.php">
	<link rel="stylesheet" type="text/css" href="' . $pdir . 'res/noto-sans.css.php">
	<link rel="stylesheet" type="text/css" href="' . $pdir . 'res/noto-sans-mono.css.php">
	<link rel="stylesheet" type="text/css" href="' . $pdir . 'res/playfair-display.css.php">
	<link rel="stylesheet" type="text/css" href="' . $pdir . 'res/ubuntu-mono.css.php">
	<!-- end of Google Webfonts -->
	';
}

?>

