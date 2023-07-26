<?php

/* Display functions for outputting information */

/* Adds content at the end of posts */
function prin_test_add_content($content) {
    global $prin_test_options; // Calls global variable

    if ($prin_test_options['enable'] ?? false) {
        if(is_single() && $prin_test_options['enable'] == true) {
            $extra_content = '<p class="twitter-message ' . $prin_test_options['theme'] . ' ">Follow me on <a href="'. $prin_test_options['twitter_url'] .'">Twitter</a><p/>';
            $content .= $extra_content;
        }
    }
    return $content;
}
add_filter('the_content', 'prin_test_add_content');