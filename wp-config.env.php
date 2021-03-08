<?php
switch ($hostname) {
  case 'localhost':
    define('WP_ENV', 'development');
    break;
  case 'inspiration-coiffure.herokuapp.com':
    define('WP_ENV', 'production');
    break;
  default:
    die("Erreur de configuration de l'environement");
    define('WP_ENV', 'production');
}