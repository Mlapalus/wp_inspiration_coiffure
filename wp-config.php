<?php
// Try environment variable 'WP_ENV'
if (getenv('WP_ENV') !== false) {
  // Filter non-alphabetical characters for security
  define('WP_ENV', preg_replace('/[^a-z]/', '', getenv('WP_ENV')));
}

// Define site host
if (isset($_SERVER['X_FORWARDED_HOST']) && !empty($_SERVER['X_FORWARDED_HOST'])) {
  $hostname = $_SERVER['X_FORWARDED_HOST'];
} else {
  $hostname = $_SERVER['HTTP_HOST'];
}

// Try server hostname
if (!defined('WP_ENV')) {
  // Set environment based on hostname
  include 'wp-config.env.php';
}

// Are we in SSL mode?
if (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] != 'off') {
  $protocol = 'https://';
} else {
  $protocol = 'http://';
}

// Load default config
include 'wp-config.default.php';

// Load config file for current environment
include 'wp-config.' . WP_ENV . '.php';

// Define WordPress Site URLs if not already set in config files
if (!defined('WP_SITEURL')) {
  define('WP_SITEURL', $protocol . rtrim($hostname, '/'));
}
if (!defined('WP_HOME')) {
  define('WP_HOME', $protocol . rtrim($hostname, '/'));
}
// Clean up
unset($hostname, $protocol);


/* C’est tout, ne touchez pas à ce qui suit ! Bonne publication. */

/** Chemin absolu vers le dossier de WordPress. */
if (!defined('ABSPATH'))
  define('ABSPATH', dirname(__FILE__) . '/');

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once(ABSPATH . 'wp-settings.php');