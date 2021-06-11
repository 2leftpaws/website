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
define('AUTH_KEY',         'hLuFPkPALu2oOOlVhp/RRXUXIFbr9gj/hG3rvtHGk8036GsizrH2kxPHrIBdvPmtRn5CbmC9Sd8ldQPb2X3ILA==');
define('SECURE_AUTH_KEY',  'UI0PBnj6EQrBGCQ4Rc+paCuogsgxyLxrnN1mHDbFuWLmGjuU9X/pD0yjQ/YhUFIHLEkuZSqMw/H5l2Hzt5a2PQ==');
define('LOGGED_IN_KEY',    'Wikgp5MDxax/YEPTKR0GucAW8RQgi9fB1H/YCLHvFw+V8Bhz6Zxc2Y62VlINQJND3ZyYSv+cPlD4tv59ovK3Ww==');
define('NONCE_KEY',        'YWy2oLLC6HB9td2vZRiLzHIAYr23pB/jtHtmv5lFSbfGfG9Td8Jlf0tT0BE6oMr9ct+0aD2glupzieOlMWa9Pw==');
define('AUTH_SALT',        'qILV9BNxa7DBUJP/EX+E6g4i7UjCq2hqTKw7YQtUrrnHEugHMS5klPvtxfbQDAbvXQTZkISLyPj5JRI/MS9FuA==');
define('SECURE_AUTH_SALT', 'Mo8wcn51zjiVAG3ulawAdvrZpKG02G5DU+SXPNyeettU7AcFi/jbZShShSg7uID1MlhLVrEdB8Udufvt+BVm7g==');
define('LOGGED_IN_SALT',   'MEJAF1Pvf2lXc0YZ2wole4Op7ZluB1HW7qQcUIPr/8b/Q2aMkQKWMBVu36os0ZuWkiykS8eim0UkUhhoB8hcsQ==');
define('NONCE_SALT',       '7kl9nYlY5BjEBOu/j0l5lfZNCCFX2l0ezvbkbDxpCNR+jPdYj3uinqlhejoknsEcnCEKhbKHZ1ZZK1IB0DPpkA==');

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
