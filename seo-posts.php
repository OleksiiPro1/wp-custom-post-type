<?php

/*
* Plugin Name: Seo posts
*/

function create_post_1() {
    register_post_type('seo-posts', 
    
    [
       'labels' => [ 
           'name' => __('SEO posts'),
           'singular_name' => __('SEO-post'),
           'add_new' => __('Add new SEO post', 'add SEO post'),
           'add_new_item' => __('Add New SEO post')
        ],
        
        'public' => true,
        'has_archive' => false,
        'rewrite' => ['slug' => 'seo-posts'],
        'supports' => ['title', 'editor', 'author'],
        'menu_icon' => 'dashicons-visibility',
        'menu_position' => 6
    ],
    
    );
    
   register_post_type('seo-posts', 
    
    [
       'labels' => [ 
           'name' => __('SEO posts'),
           'singular_name' => __('SEO post'),
           'add_new' => __('Add new SEO post', 'add SEO post')
        ],
        
        'public' => true,
        'has_archive' => false,
        'rewrite' => ['slug' => 'seo-posts'],
        'supports' => ['title', 'editor', 'author'],
        'menu_icon' => 'data:image/svg+xml;base64, PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0idXRmLTgiPz4NCjwhLS0gVXBsb2FkZWQgdG86IFNWRyBSZXBvLCB3d3cuc3ZncmVwby5jb20sIEdlbmVyYXRvcjogU1ZHIFJlcG8gTWl4ZXIgVG9vbHMgLS0+DQo8c3ZnIHdpZHRoPSI4MDBweCIgaGVpZ2h0PSI4MDBweCIgdmlld0JveD0iMCAwIDEwMjQgMTAyNCIgY2xhc3M9Imljb24iICB2ZXJzaW9uPSIxLjEiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyI+PHBhdGggZD0iTTI0OS41IDcwMC42YzE0LjUgMTM1LjUgMTMyLjYgMjQxLjEgMjc2IDI0MS4xczI2MS41LTEwNS42IDI3Ni0yNDEuMWgtNTUyeiIgZmlsbD0iI0Y5QzBDMCIgLz48cGF0aCBkPSJNNTEyIDk1Ny4zYy03OS42IDAtMTU0LjUtMjguNy0yMTAuOC04MC44LTU2LjUtNTIuMi04Ny42LTEyMS43LTg3LjYtMTk1LjcgMC01OS43IDIwLjItMTE2LjUgNTguNC0xNjQuMyAzNi4yLTQ1LjMgODUuNC03OC44IDE0Mi42LTk3LjFWMjA2LjFoLTQ2LjFjLTExLjIgMC0yMC40LTkuMS0yMC40LTIwLjR2LTE3LjFjMC0xMS4yIDkuMS0yMC40IDIwLjQtMjAuNGgyODcuMmMxMS4yIDAgMjAuNCA5LjEgMjAuNCAyMC40djE3LjFjMCAxMS4yLTkuMSAyMC40LTIwLjQgMjAuNGgtNDYuMXYyMTMuNGM1Ny4xIDE4LjMgMTA2LjMgNTEuOCAxNDIuNiA5Ny4xIDM4LjIgNDcuOCA1OC40IDEwNC42IDU4LjQgMTY0LjMgMCA3NC0zMS4xIDE0My41LTg3LjYgMTk1LjctNTYuNSA1Mi0xMzEuNCA4MC43LTIxMSA4MC43ek0zNjguNCAxNjMuMmMtMyAwLTUuNCAyLjQtNS40IDUuNHYxNy4xYzAgMyAyLjQgNS40IDUuNCA1LjRoNjEuMXYyMzkuNWwtNS4zIDEuNmMtNTYuNSAxNy0xMDUuMSA0OS40LTE0MC41IDkzLjctMzYgNDUuMS01NS4xIDk4LjctNTUuMSAxNTQuOSAwIDY5LjcgMjkuNCAxMzUuMyA4Mi44IDE4NC43QzM2NSA5MTUgNDM2LjIgOTQyLjMgNTEyIDk0Mi4zczE0Ny4xLTI3LjMgMjAwLjYtNzYuOGM1My40LTQ5LjQgODIuOC0xMTUgODIuOC0xODQuNyAwLTU2LjItMTktMTA5LjgtNTUuMS0xNTQuOS0zNS40LTQ0LjQtODQtNzYuOC0xNDAuNS05My43bC01LjMtMS42VjE5MS4xaDYxLjFjMyAwIDUuNC0yLjQgNS40LTUuNHYtMTcuMWMwLTMtMi40LTUuNC01LjQtNS40SDM2OC40eiIgZmlsbD0iIzk5OTk5OSIgLz48cGF0aCBkPSJNMjIwLjcgNjc2LjhoNTgxLjl2OEgyMjAuN3pNNDEzIDE5MC44aDM5LjZ2OEg0MTN6TTQ5NS41IDE5MC44aDEwNi4xdjhINDk1LjV6IiBmaWxsPSIjOTk5OTk5IiAvPjxwYXRoIGQ9Ik00NTIuNyA2NDUuN2MtMTQgMC0yNS40LTExLjQtMjUuNC0yNS40czExLjQtMjUuNCAyNS40LTI1LjQgMjUuNCAxMS40IDI1LjQgMjUuNC0xMS40IDI1LjQtMjUuNCAyNS40eiBtMC00Mi45Yy05LjYgMC0xNy40IDcuOC0xNy40IDE3LjRzNy44IDE3LjQgMTcuNCAxNy40IDE3LjQtNy44IDE3LjQtMTcuNC03LjgtMTcuNC0xNy40LTE3LjR6TTU3MS42IDU1Ni44Yy0yNy42IDAtNTAuMS0yMi41LTUwLjEtNTAuMXMyMi41LTUwLjEgNTAuMS01MC4xIDUwLjEgMjIuNSA1MC4xIDUwLjEtMjIuNSA1MC4xLTUwLjEgNTAuMXogbTAtOTIuMmMtMjMuMiAwLTQyLjEgMTguOS00Mi4xIDQyLjFzMTguOSA0Mi4xIDQyLjEgNDIuMSA0Mi4xLTE4LjkgNDIuMS00Mi4xLTE4LjktNDIuMS00Mi4xLTQyLjF6TTQ5MS4yIDMxNi43Yy0xNyAwLTMwLjgtMTMuOC0zMC44LTMwLjhzMTMuOC0zMC44IDMwLjgtMzAuOCAzMC44IDEzLjggMzAuOCAzMC44LTEzLjggMzAuOC0zMC44IDMwLjh6IG0wLTUzLjZjLTEyLjYgMC0yMi44IDEwLjItMjIuOCAyMi44czEwLjIgMjIuOCAyMi44IDIyLjhjMTIuNiAwIDIyLjgtMTAuMiAyMi44LTIyLjhzLTEwLjItMjIuOC0yMi44LTIyLjh6TTU0My4yIDExMy4xYy0xMiAwLTIxLjctOS43LTIxLjctMjEuN3M5LjctMjEuNyAyMS43LTIxLjcgMjEuNyA5LjcgMjEuNyAyMS43LTkuNyAyMS43LTIxLjcgMjEuN3ogbTAtMzUuNGMtNy41IDAtMTMuNyA2LjEtMTMuNyAxMy43czYuMSAxMy43IDEzLjcgMTMuNyAxMy43LTYuMSAxMy43LTEzLjctNi4xLTEzLjctMTMuNy0xMy43eiIgZmlsbD0iI0NFMDIwMiIgLz48L3N2Zz4=',
        'menu_position' => 7
    ],
    
    ); 
    
    
    
}

add_action('init', 'create_post_1');



































