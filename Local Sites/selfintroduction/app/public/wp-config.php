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
define('AUTH_KEY',         '4RV/DlKMKWjMv38EfZVAYV9EFPxevS/xWCf0WmNwCq9RQp2FnrgGh6E2tznlSfcuGuAd8lr2odtT0KyQYJWNkQ==');
define('SECURE_AUTH_KEY',  'n98jwGJoQmNetbpzFKC8oqCqx5UmLZsqaItFkdulIpi76YM2Pq4UtxTf3EwflYbTNtgTCl7naleVZGE4e17ycQ==');
define('LOGGED_IN_KEY',    '5eEo7Hc2JLkA9YHR0y+9IWENPGN6lmsIURmATw3Q31qEUisqbDY5SVCuum+Prd7+pQyURt048FQkHQtA5LaF4A==');
define('NONCE_KEY',        'QK7v97Vfa/2rcZ91EB5nU1vgrEDLr3SZlY58ON1yTCaY1Pe/ihp9xLF22b5K7afRoF27yXRhnOBeLS++2awteA==');
define('AUTH_SALT',        '33q4Jl/sgLC5HdFJx4nhSToKHoegD491xy3KZlyQOZev5JUAHLRh3UF36VMjh/YA6xyOL4zLzGpuePT9Glh0XA==');
define('SECURE_AUTH_SALT', 'rIO9D/MitS28vCY1D/mQG4R8sAx9tGfKChNqCtuJhs1NzKZFWoMva7cnffhOxLgvF8mRqgTRdxYg9lf6oYsFpQ==');
define('LOGGED_IN_SALT',   'gTG+ICG4hBEdxAsSsyJXoAS84jLeuNSNMVYUny/vFSEKpNLnWwwUCQdmTd4ldJju/TCCvpyRVcA2onmJHWjjEA==');
define('NONCE_SALT',       'FrABfFP6b5wz30tqoOCBPGBjkn90ZUs5u2AjgXqSId5o5NLZW/fDATpGcsq4VzTTtkYQ2CV9i90T2bd9VmjzUA==');

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
