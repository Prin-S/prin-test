<?php

/* Options page content (settings = enter; options = retrieve)*/
function prin_test_options_page() {
    global $prin_test_options; // Calls global variable

    ob_start(); ?>
    <div class="wrap">
        <h2><?php _e('Prin Test Plugin Options', 'prin_test_domain'); ?></h2>
        <form method="post" action="options.php">
            <?php settings_fields('prin_test_settings_group'); ?>

            <h4><?php _e('Enable', 'prin_test_domain'); ?></h4>
            <p>
                <input id="prin_test_settings[enable]" name="prin_test_settings[enable]" type="checkbox" value="1" <?php if ($prin_test_options['enable'] ?? false) {checked(1, $prin_test_options['enable']);} ?>/>
                <label class="description" for="prin_test_settings[enable]"><?php _e('Show follow me link', 'prin_test_domain'); ?></label>
            </p>
            
            <h4><?php _e('Twitter Information', 'prin_test_domain'); ?></h4>
            <p>
                <label class="description" for="prin_test_settings[twitter_url]"><?php _e('Enter your Twitter URL', 'prin_test_domain'); ?></label>
                <input id="prin_test_settings[twitter_url]" name="prin_test_settings[twitter_url]" type="text" value="<?php echo $prin_test_options['twitter_url']; ?>"/>
            </p>

            <h4><?php _e('Theme', 'prin_test_domain'); ?></h4>
            <p>
                <?php $styles = array('blue', 'red'); ?>
                <select id="prin_test_settings[theme]" name="prin_test_settings[theme]">
                    <?php foreach($styles as $style) { ?>
                        <?php if($prin_test_options['theme'] == $style) {
                            $selected = 'selected="selected"';
                        } else {
                            $selected = '';
                        } ?>
                        <option value="<?php echo $style; ?>" <?php echo $selected; ?>><?php echo $style; ?></option>
                    <?php } ?>
                </select>
            </p>

            <p class="submit">
                <input type="submit" class="button-primary" value="<?php _e('Save Options', 'prin_test_domain'); ?>"/>
            </p>
        </form>
    </div>
    <?php
    echo ob_get_clean();
}

/* Adds link to options page in dashboard */
function prin_test_add_options_link() {
    // text in title tag, text in menu sidebar, capability required, slug name, function to be called, icon, menu position
    add_menu_page('Prin Test Plugin Options', 'Prin Plugin', 'manage_options', 'prin-test-options', 'prin_test_options_page', 'dashicons-palmtree', 58);
    // add_menu_page() adds a top-level menu page
    // add_options_page() adds a submenu page to the Settings main menu
    add_submenu_page( 'prin-test-options', 'Settings', 'Settings', 'manage_options', 'prin-test-options-settings', 'prin_test_options_page');
}
add_action('admin_menu', 'prin_test_add_options_link');

/* Registers everything */
function prin_test_register_settings() {
    register_setting('prin_test_settings_group', 'prin_test_settings');
}
add_action('admin_init', 'prin_test_register_settings');

/* Admin notice */
function prin_test_notice() {
    echo '<div class="notice notice-info is-dismissible"><p>Hi</p></div>';
}
add_action('admin_notices', 'prin_test_notice');