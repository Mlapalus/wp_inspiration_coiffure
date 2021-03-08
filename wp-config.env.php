<?php
switch ($hostname) {
  case 'localhost:8000':
    define('WP_ENV', 'development');
    break;
  case 'inspiration-coiffure.herokuapp.com':
    define('WP_ENV', 'production');
    break;
  default:
    die("Erreur de configuration de l'environement");
    define('WP_ENV', 'production');
}