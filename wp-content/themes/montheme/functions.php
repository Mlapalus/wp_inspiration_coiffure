<?php

require_once get_template_directory() . '/inc/register/script.php';
require_once get_template_directory() . '/inc/register/style.php';

function montheme_theme_setup()
{
  add_theme_support('title-tag');

  add_theme_support('post-thumbnails');
  add_image_size( 'products', 800, 600, false );
  add_image_size( 'square', 256, 256, false );
}

add_action('after_setup_theme', 'montheme_theme_setup');