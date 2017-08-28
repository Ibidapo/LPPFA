<?php

include_once('admin_options.php');

// enable post thumbs
add_theme_support( 'post-thumbnails' );

// remove auto <br>, <p>
remove_filter('the_content', 'wpautop');

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
    add_settings_field('theme_setting_custom_css', 'Custom CSS', 'theme_setting_custom_css_input', 'theme', 'theme_main');
    add_settings_field('theme_setting_custom_js', 'Custom JS', 'theme_setting_custom_js_input', 'theme', 'theme_main');
    add_settings_field('theme_setting_custom_footer_area', 'Custom Footer Area', 'theme_setting_custom_footer_area_input', 'theme', 'theme_main');

    register_setting( 'theme_social_options', 'theme_social_options', 'theme_social_options_validate' );
    add_settings_section('theme_social', 'Socials Settings', function() { echo '<p> Social network settings for website.</p>'; }, 'theme_socials');
    add_settings_field('theme_socials_twitter', 'Twitter profile URL', 'theme_socials_twitter_input', 'theme_socials', 'theme_social');
    add_settings_field('theme_socials_facebook', 'Facebook profile URL', 'theme_socials_facebook_input', 'theme_socials', 'theme_social');
    add_settings_field('theme_socials_instagram', 'Instagram profile URL', 'theme_socials_instagram_input', 'theme_socials', 'theme_social');
}

function theme_section_text() {
    echo '<p>Main settings for website.</p>';
}

function theme_setting_string() {
    $options = get_option('theme_options');
    echo "<input id='theme_setting_string' name='theme_options[phone_number]' size='40' type='text' value='{$options['phone_number']}' />";
}

function theme_setting_custom_css_input() {
    $options = get_option('theme_options');
    $value = &$options['custom_css'];
    echo "<textarea rows='6' cols='100' id='theme_setting_custom_css' name='theme_options[custom_css]'/>{$value}</textarea>";
}

function theme_setting_custom_js_input() {
    $options = get_option('theme_options');
    $value = &$options['custom_js'];
    echo "<textarea rows='6' cols='100' id='theme_setting_custom_js' name='theme_options[custom_js]'/>{$value}</textarea>";
}

function theme_setting_custom_footer_area_input() {
    $options = get_option('theme_options');
    $value = &$options['custom_footer_area'];
    echo "<textarea rows='6' cols='100' id='theme_setting_custom_footer_area' name='theme_options[custom_footer_area]'/>{$value}</textarea>";
}

function theme_socials_twitter_input() {
    $options = get_option('theme_social_options');
    $value = &$options['twitter'];
    echo "<input id='theme_socials_twitter_input' name='theme_social_options[twitter]' size='40' type='text' value='{$value}' />";
}

function theme_socials_facebook_input() {
    $options = get_option('theme_social_options');
    $value = &$options['facebook'];
    echo "<input id='theme_socials_facebook_input' name='theme_social_options[facebook]' size='40' type='text' value='{$value}' />";
}

function theme_socials_instagram_input() {
    $options = get_option('theme_social_options');
    $value = &$options['instagram'];
    echo "<input id='theme_socials_instagram_input' name='theme_social_options[instagram]' size='40' type='text' value='{$value}' />";
}

function theme_options_validate($input) {
    $options = get_option('theme_options');
    $options['phone_number'] = trim(sanitize_text_field($input['phone_number']));
    $options['custom_css'] = sanitize_textarea_field($input['custom_css']);
    $options['custom_js'] = sanitize_textarea_field($input['custom_js']);
    $options['custom_footer_area'] = $input['custom_footer_area'];
    /*if (!preg_match('/^[a-z0-9]{32}$/i', $options['text_string'])) {
        $options['text_string'] = '';
    }*/
    return $options;
}

function theme_social_options_validate($input) {
    $options = get_option('theme_social_options');
    $options = $input + $options;
    return $options;
}


// ==========================
// Register our sidebars and widgetized areas.
// ==========================
function leadway_widgets_init() {
    for($i=1; $i <= 4; $i++) {
        register_sidebar( array(
            'name'          => "Footer Column $i",
            'id'            => "footer_column_$i",
            'before_widget' => '<div>',
            'after_widget'  => '</div>',
            'before_title'  => '<h6>',
            'after_title'   => '</h6>',
        ) );
    }
}
add_action( 'widgets_init', 'leadway_widgets_init' );


// ==========================
// Register Navigation Menus
// ==========================
function register_main_menu() {
    register_nav_menu( 'primary-header-menu', __( 'Primary Header Menu' ) );
}
add_action( 'init', 'register_main_menu' );




// ==========================
// helper functions
// ==========================
function ddd()
{
    echo "<pre>";
    foreach (func_get_args() as $arg){
        print_r($arg);
        echo "<br>";
    }
    exit;
}

function summary($str, $limit=100, $strip = true) {
    $str = ($strip == true)?strip_tags($str):$str;
    if (strlen ($str) > $limit) {
        $str = substr ($str, 0, $limit - 3);
        return (substr ($str, 0, strrpos ($str, ' ')).'...');
    }
    return trim($str);
}

function asset($path = false) {
    return get_bloginfo('template_directory') . ($path ? "/$path": "");
}

function slugify($str, $delimiter = '-'){
    $slug = strtolower(trim(preg_replace('/[\s-]+/', $delimiter, preg_replace('/[^A-Za-z0-9-]+/', $delimiter, preg_replace('/[&]/', 'and', preg_replace('/[\']/', '', iconv('UTF-8', 'ASCII//TRANSLIT', $str))))), $delimiter));
    return $slug;
}

function array_get($data, $key, $default = null) {
    if (!is_array($data)) {
        return $default;
    }
    return isset($data[$key]) ? $data[$key]: $default;
}


