<?php
/*
 * Plugin Name: Cookiebanner
 * Plugin URI: https://frank-web.dedyn.io
 * Description: Displays a banner at the bottom of the browser informing the visitor about the use of cookies. Also enables a reference to the privacy policy in the contact form and comments. <a href="./admin.php?p=static&action=write" title="privacypolicy" target="_blank">Create a static page</a> with the page-name <a href="static.php?page=dataprotection" title="privacypolicy" target="_blank">dataprotection</a>. <a href="./fp-plugins/cookiebanner/doc_cookiebanner.txt" title="Anleitung" target="_blank">[Instructions]</a>
 * Author: Fraenkiman
 * Version: 1.0.0
 * Author URI: http://frank-web.dedyn.io
 * Changelog:
 * v1.0.0		Added: Reference to the privacy policy in the contact form and when commenting, by Fraenkiman
 * Change-Date:	13.02.2023
 */ 

add_action('wp_head', 'plugin_cookiebanner_head', 0);
function plugin_cookiebanner_head() {
	$pdir = plugin_geturl('cookiebanner');
	echo '
	    <!-- start of Cookiebanner -->
		<link rel="stylesheet" type="text/css" href="' . $pdir . 'res/cookiebanner.css">
	    <!-- end of Cookiebanner -->';
}

add_action('wp_footer', 'plugin_cookiebanner_footer', 0);
function plugin_cookiebanner_footer() {
	$baseurl = BLOG_BASEURL;
	$pdir = plugin_geturl('cookiebanner');
	global $lang;
	lang_load('plugin:cookiebanner');
	echo '
		<!-- Beginn Cookie-Banner JS -->
		<script>
		   /**
			* Initializes the Cookiebanner plugin.
			*/
			if( document.cookie.indexOf(\'cookiebanner=1\') != -1 ){	// wenn Cookie vorhanden 
				jQuery(\'#cookie_banner\').hide();					// dann Banner ausblenden
			} else {
				jQuery(\'#cookie_banner\').prependTo(\'body\');			// an den Body anhängen und anzeigen
			}
			/* für OK Button - blendet Cookie aus */
			function cookie_ok() {
				document.cookie = \'cookiebanner=1;path=/\';
				jQuery(\'#cookie_banner\').slideUp();
			}
 
			/* Reset Button - löscht das Cookie und zeigt das Banner wieder an */
			$(\'#ResetCookie\').click(()=>{
				document.cookie = \'cookiebanner\' + \'=; Path=/; Expires=Thu, 01 Jan 1970 00:00:01 GMT;\';  // delete Cookie 
				jQuery(\'#cookie_banner\').show(); // zeigt Banner
			})
		</script>
		<!-- End of Cookie Banner JS -->

		<!-- Cookie-Banner HTML -->
		<div id="cookie_banner" >
			<div class="col-12 text-center">
				' . $lang ['plugin'] ['cookiebanner'] ['bannertext'] . '&nbsp;
				<a href="' . $baseurl . 'static.php?page=dataprotection" class="btn btn-secondary btn-sm" role="button" type="button">' . $lang ['plugin'] ['cookiebanner'] ['more'] . '</a>&nbsp;
				<button type="button" class="btn btn-primary btn-sm " onclick="cookie_ok()">' . $lang ['plugin'] ['cookiebanner'] ['ok'] . '</button>
			</div>
		</div>
		<!-- END Cookie-Banner HTML -->
';
}

function plugin_cookiebanner_privacypolicy() {
	$baseurl = BLOG_BASEURL;
	$lang = lang_load('plugin:cookiebanner');
	echo '<p><em>' . $lang ['plugin'] ['cookiebanner'] ['notice_text'] . '</em></p>';
}

add_action('comment_form', 'plugin_cookiebanner_privacypolicy', 0);
?>

