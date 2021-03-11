<?php

function montheme_register_script()
{
  wp_register_script('bootstrap', "https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js", [], false, true);
  wp_enqueue_script('bootstrap');
  wp_register_script('montheme', get_template_directory_uri() . '/js/main.js');
  wp_enqueue_script('montheme');
}

add_action('wp_enqueue_scripts', 'montheme_register_script');