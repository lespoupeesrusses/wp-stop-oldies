<?php
/*
Plugin Name: Stop Oldies
Plugin URI: http://wordpress.semiodesign.com/stop-oldies/
Description: This plugin detects if a visitor is using some old version of Internet Explorer and suggests to upgrade to a recent browser. the versions to block can be configured
Author: Semio Design
Author URI: http://www.semiodesign.com
Version: 1.0
*/

// Localization
load_plugin_textdomain('stop_oldies', null, basename(dirname(__FILE__)) . '/languages/');

function so_navigator_detection()
{
    $so_options = get_option('so_options', array());
    if (preg_match('/MSIE ([0-9].[0-9]{1,2})/', $_SERVER['HTTP_USER_AGENT'], $version)) {
        if ($version[1] < '6') {
            return true;
        }
        
        if (array_key_exists('ie6', $so_options) && $version[1] == '6') {
            return true;
        }
        
        if (array_key_exists('ie7', $so_options) && $version[1] == '7') {
            return true;
        }
        
        if (array_key_exists('ie8', $so_options) && $version[1] == '8') {
            return true;
        }
    }
    return false;
}

function so_redirect_if_needed()
{
    if (so_navigator_detection()) {
        include('oldies.php');
        exit;	
    }
}
add_action('template_redirect', 'so_redirect_if_needed');


function so_add_admin_menu()
{
    add_options_page(__('Stop Oldies Options', 'stop_oldies'), __('Stop Oldies', 'stop_oldies'), 'manage_options', 'stop-oldies-options', 'so_options_page');
}
add_action('admin_menu', 'so_add_admin_menu');
        

function so_options_page()
{
    include_once(dirname(__FILE__) . '/admin-options.php');
}


function so_options_init()
{
    register_setting('so_options', 'so_options');
}
add_action('admin_init','so_options_init');

// init the options when plugin is installed
function so_install_plugin()
{
    $options = array('ie6' => '1');
    update_option("so_options", $options);
}
register_activation_hook(__FILE__, 'so_install_plugin');

?>