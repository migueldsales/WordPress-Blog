<?php
function blog_support(){
    register_nav_menus(
        array(
            'header_menu' => __('Header Menu', 'text_domain'),
            'footer_menu' => __('Footer Menu', 'text_domain'),
        ),
    );
    add_theme_support("post-thumbnails");
    add_theme_support('menus');
    add_image_size('banner-sm', 220, 150, true);
}

add_action('after_setup_theme', 'blog_support');