<?php
/*
Plugin Name: FCC OpenX Ads
Plugin URI: https://github.com/openfcci/fcc-openx-ads
Description: Adds OpenX header bidding scripts to the site's header area.
Author: Forum Communications Company
Version: 1.16.04.13
Author URI: http://forumcomm.com/
*/

// Exit if accessed directly
defined( 'ABSPATH' ) || exit;

/*--------------------------------------------------------------
# Plugin Functions
--------------------------------------------------------------*/

/**
* Add Open X Script
*
* @since 1.16.04.13
* @version 1.16.04.13
*/
add_action('wp_head','hook_openx_script', 2000);
function hook_openx_script() {
		$output =
		"\n<!-- OpenX Bidder -->\n" .
		'<script type="text/javascript" src="//forumcomm-d.openx.net/w/1.0/jstag?nc=7021-areavoices"></script>' .
		"\n";
	 echo $output;
}
