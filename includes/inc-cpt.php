<?php 

function blog_custom_post(){
    $testimonial_label = array(
        'name'          => __('Testimonials', 'textdomain'),
        'singular_name' => __('Testimonial', 'textdomain'),
        'add_new'       => __('Add Testimonial', 'textdomain'),
        'edit_item'     => __('Edit Testimonial', 'textdomain'),
        'add_new item'  => __('Add New Testimonial', 'textdomain'),
        'all_items'     => __('Testimonials', 'textdomain'),
    );
    $testimonials_args = array(
        'labels' => $testimonial_label,
        'public' => true,
        'capability_type' => 'post',
        'show_ui' => true,
        'supports' => array('title', 'editor', 'thumbnail', 'custom-fields')
    );

    register_post_type('testimonials', $testimonials_args);

    $member_label = array(
        'name'          => __('Members', 'textdomain'),
        'singular_name' => __('Member', 'textdomain'),
        'add_new'       => __('Add Member', 'textdomain'),
        'edit_item'     => __('Edit Member', 'textdomain'),
        'add_new item'  => __('Add New Member', 'textdomain'),
        'all_items'     => __('Members', 'textdomain'),
    );
    $member_args = array(
        'labels' => $member_label,
        'public' => true,
        'capability_type' => 'post',
        'show_ui' => true,
        'supports' => array('title', 'editor', 'thumbnail', 'custom-fields')
    );

    register_post_type('members', $member_args);
}

add_action('init', 'blog_custom_post');