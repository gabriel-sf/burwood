<?php
/** Enable W3 Total Cache */
define('WP_CACHE', true); // Added by W3 Total Cache

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
define('DB_NAME', 'burwood_dev');

/** MySQL database username */
define('DB_USER', 'burwood_dev');

/** MySQL database password */
define('DB_PASSWORD', '21n4IvKIBG');

/** MySQL hostname */
define('DB_HOST', 'prd-saltandfuessel.clztkvwc7xws.ap-southeast-2.rds.amazonaws.com');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

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
define('AUTH_KEY',         'm!opr!Bkfwtr)E5cWpalUuSfU6Jj8qA3SvayWX^KU0N)seI5E7FH2wygIUd#X#bp');
define('SECURE_AUTH_KEY',  'XtJs%9bxEsgmVgiAupqjhoisbaxPRP*XBxRqsdHBaV4J(6hnL(74ShgkjnNSVseh');
define('LOGGED_IN_KEY',    'YUkcbzGDQ%0khi2ZjyrgOJjuUDhDx4cpvKiBsOKFbymwSxITNh67bqtObJK3LD#)');
define('NONCE_KEY',        '%gUats&qxkMlX@Xdv^@eD&%hT*!T5YKxd7rs%8ibuD)wL&UCXm7ec&K6UcHa8d&n');
define('AUTH_SALT',        'DFjh&@uLK^UEkZy8Erk4sYvf)7Mzd8UbaB^GU@K#yP6*q58KCc#AxAilc2jkxF^J');
define('SECURE_AUTH_SALT', 'Z%Fq0OSNFV(K4QFQvRFF!)w50#dZbKqQ2js3i1A7wlZ3OjeuIvfIYLQwgj8nsSOk');
define('LOGGED_IN_SALT',   'XAm#YgiZ*CGuYQpKkiZ4dofpHzMC04nZOz4Mgt7E#T@uCE#1uX^TK53*NPgjHlis');
define('NONCE_SALT',       'NEJrFWG@6Hpg(M)x7MD@2pYDV39O*MON^afk1WuPmGV9aJv07o)KUcG^7H%JLDPc');
/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = '2_wp_';

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

define( 'WP_ALLOW_MULTISITE', true );

define ('FS_METHOD', 'direct');
?>
