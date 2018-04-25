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
define('DB_NAME', 'fenix-2_cms02');

/** MySQL database username */
define('DB_USER', 'fenix-2_cms02');

/** MySQL database password */
define('DB_PASSWORD', 'm6qTQqg+');

/** MySQL hostname */
define('DB_HOST', 'fenix-2.mysql');

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
define('AUTH_KEY',         'IGQfom6wSPvlmNfAF33pPFRO%OQ@!@viZx3@((776C8j#2R(U%NN4kq*zRoc^FWu');
define('SECURE_AUTH_KEY',  'eIhnChqdLb6ZEqvgTQiaq!fgmqEUPzJj%Gta#%KmpqMut#c0av8fom86ZFOcOhVn');
define('LOGGED_IN_KEY',    'dntDp8PM(*r#1)9CDQXUX3hBU3rpnwVyS3n&D7#yZi7mMYDUE1q*1HZ*V5uO&aTz');
define('NONCE_KEY',        'BRg)%59bzXUN4%3)qRirmJUqYBTz*%4R8Pv8gh*R9L5Uy202!jGKSjNK51qHR3An');
define('AUTH_SALT',        'ZcKtsQwn6s@@(aCMX1w(Qx6QIh4(XRACH#I*dhRwvgSoFZ&C(Qj3)ASL#q@pu^7^');
define('SECURE_AUTH_SALT', '8)(GWjs4Xlt(*&dc4klwXdDJ2RUZH%XIiax2CsKf8j*D#(QO5ZzHF5B5)ip7HiH2');
define('LOGGED_IN_SALT',   'J)OTDKKgS@80wtDG^B!60SRj@svghGgrU7ZI6gC2q1%Xtiyd@IOWuDiO0e)kpnxm');
define('NONCE_SALT',       'bqKbK^L!QWPMCo5UHPL%hm6qK@14wlcgvf@rx196TAi1A7cAZJO1N1Fk8FzPW9ZY');
/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

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