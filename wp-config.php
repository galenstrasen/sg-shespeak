<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, WordPress Language, and ABSPATH. You can find more information
 * by visiting {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'shespeak_wp874');

/** MySQL database username */
define('DB_USER', 'shespeak_wp874');

/** MySQL database password */
define('DB_PASSWORD', 'TSBq7[2P6!');

/** MySQL hostname */
define('DB_HOST', 'localhost');

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
define('AUTH_KEY',         'glyjke03oevudaxsfre0skiyylekfkrkyxxxljl0e0f05olllqoeaahj6xqzjmwr');
define('SECURE_AUTH_KEY',  'fnsvajccglke8j3ojkxicrhpj2zxhtywuouyebcylinvcusjtbeqacnfg5xdudad');
define('LOGGED_IN_KEY',    'l6xs4cdz402roubdadkaymo0yqjahfxaxuce7hghnbu4qrpxeksiks9bfaogdncw');
define('NONCE_KEY',        'xbkeeutwtfg0grrz6hberwfjsl1goauhbe2kyn2ifwueqmklgsy5rho46roxjgf4');
define('AUTH_SALT',        'kgfpwvgp6sqhkldhqkvtosd1yfvd4iz1lwpmqcozioi3mmxskgncgedkgm9uydtw');
define('SECURE_AUTH_SALT', '3cynxgsd6y5jjhs0mdugfsbyy5ja9qssajrwtw1nncxldh8bl2tjl2hbfen5rxgf');
define('LOGGED_IN_SALT',   'cwdzlw1qvfekka5cvcgeqb3la3peywqm1ub4afihdgjpihvuvh3ip3a6mf79ou4c');
define('NONCE_SALT',       'qzymrkytdmmzm3owviotvmmzy3njdjownhngzhn2jjzje5mzcxotvhzja1odbmyz');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');

# Disables all core updates. Added by SiteGround Autoupdate:
define( 'WP_AUTO_UPDATE_CORE', false );
