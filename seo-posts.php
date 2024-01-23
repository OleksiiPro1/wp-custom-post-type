<?php

/*
* Plugin Name: SEO posts
*/

function create_post_1() {
    register_post_type('seo-posts', 
        [
            'labels' => [ 
                'name' => __('SEO posts', 'your-text-domain'),
                'singular_name' => __('SEO post', 'your-text-domain'),
                'add_new' => __('Add new SEO post', 'your-text-domain'),
                'add_new_item' => __('Add New SEO post', 'your-text-domain')
            ],
            
            'public' => true,
            'has_archive' => true,
            'rewrite' => ['slug' => 'blog'],
            'supports' => [
                'title',
                'editor', 
                'author', 
                'excerpt', 
                'custom-fields',
                'thumbnail',
                'comments',
                'revisions',
                'post-formats'
            ],
            'menu_icon' => 'dashicons-visibility',
            'menu_position' => 6
        ]
    );
}

add_action('init', 'create_post_1');
