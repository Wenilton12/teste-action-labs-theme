<?php
function action_labs_setup() {
    add_theme_support('title-tag'); 
    add_theme_support('post-thumbnails'); 
    add_theme_support('editor-styles');
    add_editor_style('style.css');
    register_nav_menus(array('primary' => 'Header Menu')); 
}
add_action('after_setup_theme', 'action_labs_setup');

function action_labs_scripts() {
    wp_enqueue_style(
        'action-labs-roboto',
        'https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700;900&display=swap',
        array(),
        null
    );

    wp_enqueue_style(
        'main-styles',
        get_stylesheet_uri(),
        array('action-labs-roboto'),
        wp_get_theme()->get('Version')
    );
}
add_action('wp_enqueue_scripts', 'action_labs_scripts');

function action_labs_editor_assets() {
    wp_enqueue_style(
        'action-labs-roboto',
        'https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700;900&display=swap',
        array(),
        null
    );
}
add_action('enqueue_block_editor_assets', 'action_labs_editor_assets');
wp_enqueue_style('font-awesome', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css');