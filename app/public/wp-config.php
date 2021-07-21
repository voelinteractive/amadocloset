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
define('AUTH_KEY',         'eyeKeg0Gd6hpOFq4boFbqrmGmZujIBcqwgYnVoDz0YCEN810PeCNvG46AEX+OyAmk/w92peQdGtE9JLB6FaHkQ==');
define('SECURE_AUTH_KEY',  'NUBRFMlAalIypxn7zGeqViSR5pErWTwZZ0aZXxqGGBebHn+0n7OPYULmSuj0dV+0IWHoL35cWyf3LJOK/f4ZDQ==');
define('LOGGED_IN_KEY',    'znOv4qWlJqNSB7LHQn8qebgJPiQHPKVLNXLwnjVVFH1b5OcyDc3MkVT3nvq4DRdfBEcNYathrw9gO5J58W+dTA==');
define('NONCE_KEY',        'EYXb2AgDnq9Dqfn7x+7r6CXWIF7klelUmxNCbHdruvjVzpbG15fZD/CF1f7vhunAKvrEEH9cmHKOu/WYlSLQYw==');
define('AUTH_SALT',        'K/9g84Zpyrt8pRcBcJR99h1ZslWODyE0fSxCPsLnsUpw/kujYIdkkt3cy3a06pXpdjLHg2spHtyemVJwN5+YWQ==');
define('SECURE_AUTH_SALT', 'jlK9cBA2LANkmq5Ug3HEPaTQxM12o6g09T9Llak5ggyoqP56FyLYDYKFAkU9+BlOKACcM+7SXkZU4d5Wh/30Fw==');
define('LOGGED_IN_SALT',   'zv3JHB8cOqpfsIZtWPYCsBAG/uIiTVs46SwrIIIUCGHnZp0I/J6KapuLhmZo5yObSVWwFaR5YSW14O0TPkb2lw==');
define('NONCE_SALT',       'pgxnGXLBCVrJITLpgyY5Xk5gOmKanwg/JqV4ka7kPSCogPDLRc+xigLEfyvzm5ZjC7ohm1lZvTCkRKT6vi9uEA==');

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';




/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
