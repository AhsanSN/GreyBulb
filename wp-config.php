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
define('DB_NAME', 'greybulb_wp802');

/** MySQL database username */
define('DB_USER', 'greybulb_wp802');

/** MySQL database password */
define('DB_PASSWORD', '3Sg6t[)55p');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'x6sucmazkntecw4s85gpk7iydb6lzcawakkzwafkgre9mlxfvca6azqjflxuwecq');
define('SECURE_AUTH_KEY',  '7vufdvrnea9xsnh8dj7wta37o1lk2nzwei7mmwwjjjqsqybljifx6efzivd8937f');
define('LOGGED_IN_KEY',    'juvk4qx3xlrlofupgqo2lchfzzqzpvzgnny78ljsgxcb6ad8yhqh6np5pardepkt');
define('NONCE_KEY',        'bl9vi2ksnacuk64wh4ro8g1ufqenshpcyy5otuwh6ymksfv5v53k9y452e8rtrcg');
define('AUTH_SALT',        '66ivi193lpbuxjzv3qfw26bl4r2izyhmw4ex9zw8ooqqvzw1ummx4rvgqtgi0exp');
define('SECURE_AUTH_SALT', 'tbsyfhkpj81vtoxaexrpdxjgryzl5vn9dsln9paqukdgyey7r2xmdv7qzlpauagp');
define('LOGGED_IN_SALT',   'z3gfqo5barnfo3pxvhd7dj12nwhynclkoeugvyecrsrs4ytzxocgi5q2togbjnex');
define('NONCE_SALT',       'fnvzdwii7tuzlydkamce1ffap7nxyegyrieley2y8xw3cfjlzrsimtodpoblgguy');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wpgv_';

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
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
