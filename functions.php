<?php

function blog_assets(){
    wp_enqueue_style('blog-style' , get_template_directory_uri() . "./style/style.css", microtime());
    wp_enqueue_style('blog-icons' , "https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css", 1.0);
    wp_enqueue_script('blog-scripts' , get_template_directory_uri() . "./script/script.js", microtime(), [], true );
}
// get_template_directory_uri -> "https://.............../"style/style.css 

add_action('wp_enqueue_scripts', 'blog_assets');
// wp_enqueue_script -> isabay na yung scripts at css


function blog_support(){
    add_theme_support("post-thumbnails");
    add_image_size('banner-sm', 220, 150, true);
}

add_action('after_setup_theme', 'blog_support');