<?php

function montheme_register_style()
{
  wp_register_style('bootstrap', "https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css");
  wp_enqueue_style('bootstrap');
  wp_register_style('montheme', get_template_directory_uri() . '/css/main.css', ['bootstrap'], '1.0');
  wp_enqueue_style('montheme');
}

add_action('wp_enqueue_scripts', 'montheme_register_style');