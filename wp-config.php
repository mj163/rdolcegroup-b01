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
define('AUTH_KEY',         'VCndTWEP9T+nHUr8OeEYRi/Udb69fbp8DcYc3Aa8eVYNl8HOyEAy78gO9/5rRBB9ztEU0YMlRWhmeMUGYuSmAw==');
define('SECURE_AUTH_KEY',  'd3a0QuMd9jWC9ew68f0QyOnbZ+bJOm8IJag6wHATVi4ZiDOyskGhoyNsb7c3i3BzbeCyYPAyVCYj2p46hT7P/w==');
define('LOGGED_IN_KEY',    '8XHUIdAUzE/mrBHffDS8zPvY3K0omkRfKxpwLQrRT/cXdDtWfhewlPsNGZlxIC542LClSR/o+wi/gbcszxwLIw==');
define('NONCE_KEY',        'S9GJ76a3BepKwTM22/T9seOdEEVOzOcoMr8sMla5Wgb617T8ALqcQ5eAzSNhuKgz72ekVNhZ9f1/Q5Dpzol2Gw==');
define('AUTH_SALT',        'qn68ZXY3mV6cZrGaWzUjWEBORRIhcQo89LOBXGoGhD26WYh9nGI4IYM+tomLFNj4WdliLYrSILP/nmGwmKOx+Q==');
define('SECURE_AUTH_SALT', '16BkTc39v6y6p9xkV9VodKpE95p7dsCE+fSjOmvnXNjLdN81bdqympTTktUNb6Ac4Aya4dSZjyEf4nIZP+gVIw==');
define('LOGGED_IN_SALT',   'XRHmWUe/nJ2dq2QzltvjGq2QG6ORqMO3xTe2iLg4vunlHVfhLUyQOwmUELmhWFztE9wrqmmZRi+MFd2FVqE7ew==');
define('NONCE_SALT',       'rBrrRmjLHFvWYQxJv3TFDR65yYG6jjvfubuD7a6CS4Fy+Edz1LIwxjl3t9KAM1aDSTvoZOAw6pQBLbS/DSmdJg==');

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';





/* Inserted by Local by Flywheel. See: http://codex.wordpress.org/Administration_Over_SSL#Using_a_Reverse_Proxy */
if (isset($_SERVER['HTTP_X_FORWARDED_PROTO']) && $_SERVER['HTTP_X_FORWARDED_PROTO'] === 'https') {
	$_SERVER['HTTPS'] = 'on';
}

/* Inserted by Local by Flywheel. Fixes $is_nginx global for rewrites. */
if (strpos($_SERVER['SERVER_SOFTWARE'], 'Flywheel/') !== false) {
	$_SERVER['SERVER_SOFTWARE'] = 'nginx/1.10.1';
}
/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) )
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
