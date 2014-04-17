<?php
/**
 * @package Wordpress Instagram
 * @version 1.0.1
 */
/*
Plugin Name: Wordpress Instagram
Plugin URI: http://wordpress.org/plugins/wp-instagram/
Description: a fantastic way to display instagramm photos and videos on your website
Author: hash
Version: 1.0.1
Author URI: http://wordpress.org/plugins/wp-instagram/
License: GPLv2 or later
*/

/**
 * Constants
 */
global $wp_version;
define('WPINSTAGRAM_NAME', 'Wordpress Instagram');
define('WPINSTAGRAM_VER', '1.0.1');

define('WPINSTAGRAM_PATH', plugin_dir_path(__FILE__));
define('WPINSTAGRAM_URL', plugin_dir_url(__FILE__));
define('WPINSTAGRAM_WP_VERSION', intval(substr(str_replace('.', '', $wp_version), 0, 2)));
define('WPINSTAGRAM_REDIRECT_URL', admin_url().'options-general.php?page=wordpress-instagram');


/*
 * Backend Section
 */

function wpinstagram_backend()
{
    include(WPINSTAGRAM_PATH.'backend/core.php');
}

if ( function_exists('wpinstagram_backend') )
{
    add_action('init', 'wpinstagram_backend', 1);
}




/*
 * Frontend Section
 */

function wpinstagram_frontend()
{
    include(WPINSTAGRAM_PATH.'front/core.php');
}

if ( function_exists('wpinstagram_frontend') )
{
    add_action('wp_footer', 'wpinstagram_frontend');
}
