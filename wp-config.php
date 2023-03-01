<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'gymfitness' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

if ( !defined('WP_CLI') ) {
    define( 'WP_SITEURL', $_SERVER['REQUEST_SCHEME'] . '://' . $_SERVER['HTTP_HOST'] );
    define( 'WP_HOME',    $_SERVER['REQUEST_SCHEME'] . '://' . $_SERVER['HTTP_HOST'] );
}



/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'Qa1H2BLkt3caIO8r2PwvNTyazremHSphtcXzqxJQ8L5rvzNKMeP9die3xNVBIBDa' );
define( 'SECURE_AUTH_KEY',  '0VEQaFeDdY0UxO5SBAJPewSd8S9KPDz3tMTiTlw8BALggiUPfYbCtbDfSHsqGVis' );
define( 'LOGGED_IN_KEY',    'c4zp8xXfwDXTd49iz6vbvauqkeNvkLnZbtdTdDMq6xiwGU1XcUljsaxDe02VarSI' );
define( 'NONCE_KEY',        'nvRgG14I4WlgXa0eldu2njs4c8AzDHRQx8ly7GNdzVT4MzCzUe7T5BcrAk5BoSZu' );
define( 'AUTH_SALT',        'OARGpESQ1uRpR330IBUPpr9wp7CgzgGucD7mafnY5bGadme98m4hZWm5TY5A85dh' );
define( 'SECURE_AUTH_SALT', '0aRTXlbmN5cKsfdbKLFvZX3r8Gje0dvYBHfB3ZmmylTynRdlwW4f0bsEsjddM8gc' );
define( 'LOGGED_IN_SALT',   'GKTxTVy9UATFGLNYtnKqtHutP6GFrnkOvFCWhnvu5Fen4WsgyCW4OBGlvf6zyuDS' );
define( 'NONCE_SALT',       'iOXn2ssxb5MndX6Dycurn5G63ToQ7a0OD7BPIzeYA59UZklynQMib8Y7htNio3ar' );

/**#@-*/

/**
 * WordPress database table prefix.
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
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
