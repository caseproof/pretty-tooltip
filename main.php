<?php
/*
Plugin Name: Pretty Tooltip
Plugin URI: http://www.blairwilliams.com/
Description: Pretty Tooltips for WordPress. Built on top of the Tooltipster jQuery plugin.
Version: 1.0.0
Author: Blair Williams
Author URI: http://blairwilliams.com/
Text Domain: pretty-tooltip
Copyright: 2004-2016, Caseproof, LLC
*/

if(!defined('ABSPATH')) {die('You are not allowed to call this page directly.');}

define('PRETTYTOOLTIP_PLUGIN_SLUG','pretty-tooltip/main.php');
define('PRETTYTOOLTIP_PLUGIN_NAME','pretty-tooltip');
define('PRETTYTOOLTIP_EDITION',PRETTYTOOLTIP_PLUGIN_NAME);
define('PRETTYTOOLTIP_PATH',WP_PLUGIN_DIR.'/'.PRETTYTOOLTIP_PLUGIN_NAME);
define('PRETTYTOOLTIP_VIEWS_PATH',PRETTYTOOLTIP_PATH.'/views');
define('PRETTYTOOLTIP_CSS_PATH',PRETTYTOOLTIP_PATH.'/css');
define('PRETTYTOOLTIP_JS_PATH',PRETTYTOOLTIP_PATH.'/js');
$prettytooltip_url_protocol = (is_ssl())?'https':'http'; // Make all of our URLS protocol agnostic
define('PRETTYTOOLTIP_URL',preg_replace('/^https?:/', "{$prettytooltip_url_protocol}:", plugins_url('/'.PRETTYTOOLTIP_PLUGIN_NAME)));
define('PRETTYTOOLTIP_CSS_URL',PRETTYTOOLTIP_URL.'/css');
define('PRETTYTOOLTIP_JS_URL',PRETTYTOOLTIP_URL.'/js');

// Load Addon
require_once(PRETTYTOOLTIP_PATH . '/PrettyTooltip.php');
new PrettyTooltip();
