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
define('DB_NAME', 'webmobi5_WPJP6');

/** MySQL database username */
define('DB_USER', 'webmobi5_WPJP6');


/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY', '1a08c2faee5a28be20513d6117a76a0750f4ab62e0af63f95b1852efc8511037');
define('SECURE_AUTH_KEY', 'c6007fde768a844f810861ddcb7fd86a6b9856a011395f87799b67f775120e56');
define('LOGGED_IN_KEY', 'adc8abfa08e91b3330e5ec353a48ce415feae72ed2dd50c3ca9f8864c793c28f');
define('NONCE_KEY', '50aa005c0fd497f1489bc07ce9a61e22c9906f6dfde7b163bbb4d1429834a1df');
define('AUTH_SALT', '34a70c3d0d17e6d07f78851cc7b913fc9c9a128cb97a02e246dd2da93bbe51a3');
define('SECURE_AUTH_SALT', '72ca29afe2fc88ccf06f63dbdf266f1c79f7e2a002956a05af9157a5c0e98543');
define('LOGGED_IN_SALT', '4def9e08e80ef4efe293ebf1992ee8d75a34c5b527024e3c5356874d8037b803');
define('NONCE_SALT', '45f931d7df8ce7a445f5bc30385391bdafd8fac140a4fd09ce90f8dd07ad576c');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = '3JB_';
define('WP_CRON_LOCK_TIMEOUT', 120);
define('AUTOSAVE_INTERVAL', 300);
define('WP_POST_REVISIONS', 5);
define('EMPTY_TRASH_DAYS', 7);
define('WP_AUTO_UPDATE_CORE', true);

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

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
