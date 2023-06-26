<?php

function blog_assets(){
    wp_enqueue_style('blog-style' , get_template_directory_uri() . "./style/style.css", microtime());
    wp_enqueue_style('blog-icons' , "https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css", 1.0);   
    wp_enqueue_style('blog-slider-style' ,"https://cdnjs.cloudflare.com/ajax/libs/tiny-slider/2.9.4/tiny-slider.css", 1.0);
    
    wp_enqueue_script('blog-slider-js' ,"https://cdnjs.cloudflare.com/ajax/libs/tiny-slider/2.9.4/min/tiny-slider.js", 1.0, [], true);
    wp_enqueue_script('blog-script', get_template_directory_uri() . "/script/script.js", microtime(), [], true );
}
// get_template_directory_uri -> "https://.............../"style/style.css 

add_action('wp_enqueue_scripts', 'blog_assets');
// wp_enqueue_script -> isabay na yung scripts at css