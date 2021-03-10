<?php

namespace App;

function theme_setup()
{
  add_theme_support('title-tag');
  add_theme_support('post-thumbnails');
}

function register_style()
{
  wp_register_style('bootstrap', "https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css");
  wp_enqueue_style('bootstrap');
}

function register_script()
{
  wp_register_script('bootstrap', "https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js", [], false, true);
  wp_enqueue_script('bootstrap');
}

add_action('after_setup_theme', 'App\theme_setup');
add_action('wp_enqueue_scripts', 'App\register_style');
add_action('wp_enqueue_scripts', 'App\register_script');