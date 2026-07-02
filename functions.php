<?php
function assessment_theme_setup() {
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    add_theme_support('custom-logo');
    register_nav_menus(['primary'=>'Primary Menu']);
}
add_action('after_setup_theme','assessment_theme_setup');

function assessment_enqueue_assets() {
    wp_enqueue_style('main-style', get_template_directory_uri().'/assets/css/main.css', [], '1.0');
    wp_enqueue_script('main-js', get_template_directory_uri().'/assets/js/main.js', [], '1.0', true);
}
add_action('wp_enqueue_scripts','assessment_enqueue_assets');

add_filter('acf/settings/save_json', function(){ return get_template_directory().'/acf-json'; });
add_filter('acf/settings/load_json', function($paths){ $paths[] = get_template_directory().'/acf-json'; return $paths; });

function assessment_allow_svg_upload($mimes) {
    $mimes['svg'] = 'image/svg+xml';
    return $mimes;
}
add_filter('upload_mimes', 'assessment_allow_svg_upload');