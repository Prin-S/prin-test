<?php

/*
Plugin Name: Prin Test
Plugin URI: https://github.com/prin-test
Description: This is my first WordPress plugin
Author: Prin S
Author URI: https://github.com/Prin-S
Version: 1.0
*/

/*****
* Global variables
*****/

$prin_test_my_plugin_name = 'My first WordPress plugin';

// Retrieves plugin settings from the options table
$prin_test_options = get_option('prin_test_settings');

/*****
* Includes
*****/
define( 'prin_test_plugin_path', plugin_dir_path( __FILE__ ) ); // Defines plugin filesystem directory path as a constant

// Loads certain files on a certain part of the site
if(is_admin()) {
    include(prin_test_plugin_path . 'includes/admin-page.php'); // Plugin options page - HTML and save functions
} else {
    include(prin_test_plugin_path . 'includes/scripts.php'); // Controls all JS/CSS
}

// Loads files everywhere
include(prin_test_plugin_path . 'includes/data-processing.php'); // Controls data saving
include(prin_test_plugin_path . 'includes/display-functions.php'); // Displays content functions
include(prin_test_plugin_path . 'includes/custom-post-type.php'); // Registers custom post type
include(prin_test_plugin_path . 'includes/shortcode.php'); // Registers shortcode