<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the
 * installation. You don't have to use the web site, you can
 * copy this file to "wp-config.php" and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'portfolio' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

if ( !defined('WP_CLI') ) {
    define( 'WP_SITEURL', $_SERVER['REQUEST_SCHEME'] . '://' . $_SERVER['HTTP_HOST'] );
    define( 'WP_HOME',    $_SERVER['REQUEST_SCHEME'] . '://' . $_SERVER['HTTP_HOST'] );
}



/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'quNbO8scjkJkIfEqSk1WDdjhbKU2npWwqjQ9cSC57dQv4juB8nyAUWCKCErnDDcM' );
define( 'SECURE_AUTH_KEY',  'UeuKl5ZKmc3Eay1A0wwtX7atJ1vSen7CTO2X3jz4BbFKjCQpdcOVD1a6qaGWJibQ' );
define( 'LOGGED_IN_KEY',    '7GLBTw5dTuq2VF2wVEwkOe97BUhWxjAtfr0DWmBQ6zhipis2VxzvgrOTLlJBXIiC' );
define( 'NONCE_KEY',        'lMJBfiR6w7AAceuGBBCTY9hrO5DaKEoMq4GkCi1SzFWYluORvzC4HBQpBo2RyAcD' );
define( 'AUTH_SALT',        'duw1zZubeQB4TaElhGMS4ucTlYAY34zASmild1hk7V15BZH7QAE6n1EZl5HUSUPe' );
define( 'SECURE_AUTH_SALT', 'OIfMiRxnsF6aE8HnU7XwOZOEoEwzfDISAj5IghOGCXo37BHgKXPQQ0gpTSNQ2JYa' );
define( 'LOGGED_IN_SALT',   'AV2YqDEPZrVR3o0afXtosJXxr99DaqTvNa5cFavM09Tq8OX0gqUsNtZWThCxiTqS' );
define( 'NONCE_SALT',       'whvwxCYkNuJwhLL4QQJ7PQ4IjjFBmeoL4s6f4LasH71GdQADu0friCbe9Pxa1FPJ' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
