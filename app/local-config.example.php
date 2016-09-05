<?php
/*
This is a sample local-config.php file
In it, you *must* include the four main database defines
You may include other settings here that you only want enabled on your local development checkouts
*/
define( 'DB_NAME', '%%DB_NAME%%' );
define( 'DB_USER', '%%DB_USER%%' );
define( 'DB_PASSWORD', '%%DB_PASSWORD%%' );
define( 'DB_HOST', '%%DB_HOST%%' ); // Probably 'localhost'

// ===========
// Hide errors
// ===========
ini_set( 'display_errors', true );
define( 'WP_DEBUG_DISPLAY', true );

// ==============================================================
// Salts, for security
// Grab these from: https://api.wordpress.org/secret-key/1.1/salt
// ==============================================================
define( 'AUTH_KEY',         'put your unique phrase here' );
define( 'SECURE_AUTH_KEY',  'put your unique phrase here' );
define( 'LOGGED_IN_KEY',    'put your unique phrase here' );
define( 'NONCE_KEY',        'put your unique phrase here' );
define( 'AUTH_SALT',        'put your unique phrase here' );
define( 'SECURE_AUTH_SALT', 'put your unique phrase here' );
define( 'LOGGED_IN_SALT',   'put your unique phrase here' );
define( 'NONCE_SALT',       'put your unique phrase here' );
