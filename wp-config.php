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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
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
define('AUTH_KEY',         '+Z32dI23rYfBlALs4rCUv/KGZfS7R098faI24hHIU70pdvEHLu3AAeK0sEpLsg5zg4rDOfdVtHzsiEycDbGxGA==');
define('SECURE_AUTH_KEY',  'eB9WTuaAEDC3JHGITPYkCyNs9v6vmsJGutTEKSQeax1e7V2p/OYpub1hG46EDuIKtRY6TEYnmaNAUHru1BYnqA==');
define('LOGGED_IN_KEY',    'G+qS5Um6vvIxv5HEUuy1NWTxnH5t5XndbKlyZOkZ8S7NdIylh9PJFz/MFoZ+aJjEHDb8/YAFefRhaKxVDqyTeA==');
define('NONCE_KEY',        'HbFxlcy9+OmSMA9FdELlrjg6Hc/t31Byu3mebTFiJwL0AAkymTZcqjj3PXy53QOtSf2Mgka6mGHeVARnu8DplA==');
define('AUTH_SALT',        'LhKrweFRRmKLhBbTMUDDAaHFmEHlWbMiFIAnHVS+nUNgBwZCHAVLhkLrFjJRHycy2hwax28TNDVhKsqfz3wnjw==');
define('SECURE_AUTH_SALT', '1eVQDjnLNmb6dUmgh3X2p+Me9wFoHJKd0DVLQOnOUqn6Ip37Zdlq04F8yxmZGhXgVOR6Fk2pq4R9Ef5kJIcJQA==');
define('LOGGED_IN_SALT',   'KTXmCyWeAYTT9CIewMg357nsneR+VofpAAZIWkD7ZeZ4nv0v8VWWmEm4oAuekiWSDHIwoooxUL3VFQtwzLYirg==');
define('NONCE_SALT',       'ozy54widtLA8pB8eqguAm7E1/nXVaozt733Ve7pIy4TLPcEehXwmFTP9jIP2N231qA4VOrOTi61W7ZzzjpsRTg==');

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';




/* That's all, stop editing! Happy publishing. */

define( 'WP_MEMORY_LIMIT', '256M');

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
