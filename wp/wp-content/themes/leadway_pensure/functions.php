<?php

include_once('admin_options.php');

// add options menu
add_action('admin_menu', 'add_theme_options_page');

function add_theme_options_page()
{
    add_options_page('Theme Options', 'Leadway Pensure Theme Options', 'manage_options', 'leadway_pensure_theme', 'theme_options_page');
}

// add the admin settings and such
add_action('admin_init', 'theme_admin_init');
function theme_admin_init(){
    register_setting( 'theme_options', 'theme_options', 'theme_options_validate' );
    add_settings_section('theme_main', 'Main Settings', 'theme_section_text', 'theme');
    add_settings_field('theme_setting_string', 'Phone number', 'theme_setting_string', 'theme', 'theme_main');
}

function theme_section_text() {
    echo '<p>Main settings for website.</p>';
}

function theme_setting_string() {
    $options = get_option('theme_options');
    echo "<input id='theme_setting_string' name='theme_options[phone_number]' size='40' type='text' value='{$options['phone_number']}' />";
}

function theme_options_validate($input) {
    $options = get_option('theme_options');
    $options['phone_number'] = trim($input['phone_number']);
    /*if (!preg_match('/^[a-z0-9]{32}$/i', $options['text_string'])) {
        $options['text_string'] = '';
    }*/
    return $options;
}


