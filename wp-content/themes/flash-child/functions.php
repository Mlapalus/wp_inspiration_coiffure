<?php
function wp_flashChild_enqueue_style()
{
  wp_enqueue_style(
    'parent-style',
    get_template_directory_uri() . '/style.css'
  );
}
add_action('wp_enqueue_scripts', 'wp_flashChild_enqueue_style');

function montheme_register_script()
{
  wp_register_script('bootstrap', "https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js", [], false, true);
  wp_enqueue_script('bootstrap');
  wp_register_script('montheme', get_template_directory_uri() . '/js/main.js');
  wp_enqueue_script('montheme');
}

function montheme_register_style()
{
  wp_register_style('bootstrap', "https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css");
  wp_enqueue_style('bootstrap');
  wp_register_style('montheme', get_template_directory_uri() . '/css/main.css', ['bootstrap'], '1.0');
  wp_enqueue_style('montheme');
}

add_action('wp_enqueue_scripts', 'montheme_register_style');
add_action('wp_enqueue_scripts', 'montheme_register_script');

function montheme_theme_setup()
{
  add_theme_support('title-tag');

  add_theme_support('post-thumbnails');
  add_image_size('products', 800, 600, false);
  add_image_size('square', 256, 256, false);
}

add_action('after_setup_theme', 'montheme_theme_setup');