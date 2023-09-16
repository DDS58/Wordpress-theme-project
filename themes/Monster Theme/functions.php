<?php

//create a function, any name
function monster_files()
{
    wp_enqueue_style('monster_main_files', get_stylesheet_uri());
}

// attention: the first arguemetn has to be like this
// the second argument must be the name of the function you created
add_action('wp_enqueue_scripts', 'monster_files');

function enable_feat_img()
{
    add_theme_support('post-thumbnails');
}

add_action('after_setup_theme', 'enable_feat_img');

//CUSTOM POST TYPES
//you can choose any function name
function monster_post_types()
{
    register_post_type('service', array(
        'supports' => array('title', 'thumbnail'),
        'rewrite' => array('slug' => 'services'),
        'public' => true,
        'has_archive' => true,
        'menu_icon' => 'dashicons-smiley',
        'labels' => array(
            'name' => 'Services',
            'add_new_item' => 'Add New Service',
            'edit_item' => 'Edit Service',
            'all_items' => 'All Services',
            'singular_name' => 'Service'
        )
    ));
}

add_action('init', 'monster_post_types');

register_nav_menus(array(
    'primary-menu' => 'Header nav'
));
