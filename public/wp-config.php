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

// ** MySQL settings ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'tyEh/OZJRhLmcl/Gir+DI7mwUTtumH4pgEeGgjNlpY98wNMUVUbfQYwhToSdTzvY2P6+Phhh/d9UOacKVRH2Ww==');
define('SECURE_AUTH_KEY',  'NSOiu0T7TiTo3mUaya8AWj/OQ93dFtrAbwRQosiBIozcU8wXCyLHWKFEOdXsmSaYT0Oe1mP2uvNJQtHR+NJdXg==');
define('LOGGED_IN_KEY',    'ss3rsMxk4f1n2Z00oRACZvW/ASvAYSLyAwYkW0RAbb+5CwfvX/vd0AELTf8H2gRIWRjZ4yyfMHNHS2Og+6xhKA==');
define('NONCE_KEY',        'pTO+UH2Ns1CWpri/EFCDdOzyHTA013KrginlHPSZ060smK7P0GsYTmAFeamnTqThpFlH1h9zXu+EFMDN9y/pxg==');
define('AUTH_SALT',        'iG8XLMyiyeyPzJSbsc4OTh+uvR239qymK6tQ1x6FP3G2WxElxSbx74g3ZewGQvB40WzycagJo+Ncf0+QCqhuvA==');
define('SECURE_AUTH_SALT', '3qWfoN1iAmbV4W5NwvOnFAEx2IPakl2JbCJ/uF5js1sX4jkvqFq2CRU0zoMA6nY6zRD5ambcOJY+HR0wMr2l9Q==');
define('LOGGED_IN_SALT',   'W61se6JY46VUzjyoUClmxXXO7zr0JbgGkoHQMk6JYMiNKlzgMdz22gY/YD91T/BPvEkBNiTi7Kupbs7ulSxUnw==');
define('NONCE_SALT',       'dXJFFQNN8wdNxM0yIWRGOyWEm5Xg/h5J+028xGMAddHfotVB30M8H7uChNzPiUrUZ8jwEzb78suhifL2plOD3A==');

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';




/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) )
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
