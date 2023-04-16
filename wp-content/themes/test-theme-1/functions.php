<?php


function add_css()
{
  $version = wp_get_theme()->get('Version');
  wp_enqueue_style('test-theme-1', get_stylesheet_uri(), array(), $version);
}

add_action('wp_enqueue_scripts', 'add_css');
