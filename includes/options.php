<?php

if( function_exists('acf_add_options_page') ) {

    acf_add_options_page(array(
        'page_title' 	=> 'Theme Options',
        'menu_title'	=> 'Theme Options',
        'menu_slug' 	=> 'theme-options',
        'parent_slug'   =>  '',
        'capability'	=> 'edit_posts',
        'redirect'		=> false
    ));

    acf_add_options_sub_page(array(
        'page_title' 	=> 'Header',
        'menu_title'	=> 'Header',
        'menu_slug' 	=> 'theme-options-header',
        'capability'    =>  'edit_posts',
        'parent_slug'	=> 'theme-options',
    ));

    acf_add_options_sub_page(array(
        'page_title' 	=> 'Footer',
        'menu_title'	=> 'Footer',
        'menu_slug' 	=> 'theme-options-footer',
        'parent_slug'	=> 'theme-options',
    ));
}
