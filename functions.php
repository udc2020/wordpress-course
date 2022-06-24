<?php


function xtra_blue_files()
{
   // Styles 
   $version = wp_get_theme()->get('version');


   wp_enqueue_style('xtrablue_main', get_stylesheet_uri(), array('xtrablue_main_bootstrap'), $version);

   wp_enqueue_style('xtrablue_main_bootstrap', get_template_directory_uri() . '/bootstrap.min.css');

   wp_enqueue_style('xtrablue_main_fontAwsome', get_template_directory_uri() . '/fontawesome/css/all.min.css');


   wp_enqueue_style('xtrablue_main_fontGoogle', '//fonts.googleapis.com/css2?family=Source+Sans+Pro&display=swap');

   // Scripts

   wp_enqueue_script('xtrablue_main_jquiry',  get_template_directory_uri() . '/js/jquery.min.js',array(),false,true);
   wp_enqueue_script('xtrablue_main_index',  get_template_directory_uri() . '/js/index.js',array('xtrablue_main_jquiry'),false,true);
}


add_action('wp_enqueue_scripts', 'xtra_blue_files');



function them_setup(){
   add_theme_support('post-thumbnails');
   
}

add_action('after_setup_theme', 'them_setup');







