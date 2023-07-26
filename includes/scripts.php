<?php

/*****
 * Script control
 *****/

/* Loads CSS and JS */
function prin_test_load_scripts() {
	if(is_single()) {
		/*wp_enqueue_style('prin-test-styles', plugin_dir_url(__FILE__) . 'css/plugin-styles.css');*/
		wp_enqueue_style('prin-test-styles', plugins_url('css/plugin-styles.css', __FILE__));
		wp_enqueue_script('prin-test-scripts', plugins_url('js/plugin-scripts.js', __FILE__), array( 'jquery' ));
	}
}
add_action('wp_enqueue_scripts', 'prin_test_load_scripts');