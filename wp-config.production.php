<?php
// ** Réglages MySQL - Votre hébergeur doit vous fournir ces informations. ** //
$db = parse_url($_ENV["DATABASE"]);

/** Nom de la base de données de WordPress. */
define('DB_NAME', trim($db["path"], "/"));

/** Utilisateur de la base de données MySQL. */
define('DB_USER', $db["user"]);

/** Mot de passe de la base de données MySQL. */
define('DB_PASSWORD', $db["pass"]);

/** Adresse de l’hébergement MySQL. */
define('DB_HOST', $db["host"]);