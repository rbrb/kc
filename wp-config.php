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
define('DB_NAME', 'kc');

/** MySQL database username */
define('DB_USER', 'kc');

/** MySQL database password */
define('DB_PASSWORD', '');

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
define('AUTH_KEY',         '~~Et{O) o#:Nq2naHWGgl n?ED13`OhNrmpDX.n*CIzext|m+Gwv.jle bGiXh8T');
define('SECURE_AUTH_KEY',  'uL^J2.L]LrUv8bM|]:L9Lx?},1R_$UbrvK=e41nw2F!~E6#CT3]p+z|{xC:@)WpB');
define('LOGGED_IN_KEY',    'I94!aTO)Ffwp tjCVOE)q$=@,3xNp=FwGb4TRx!5hMLF-ZD4FI><a*sitiX(;:75');
define('NONCE_KEY',        'uLiZRBcuYs#lYm11 _@b2UVuP!byIwbCe)oX3!=:6UV?3_Y+RuW[(MqXu{H#Sy#a');
define('AUTH_SALT',        'WQPy1]SBd[.(4<y<BIec$cfzg:b}8W=`r[#/OjnsZ|{_b[icK#^(0qHpLZos`I^a');
define('SECURE_AUTH_SALT', '$Gc~(0Fu%%t1^8NI.oiqiEI>,LIwE&G1%3&C6ZiT%voZUeY3iO 8Br_yPjN6koh{');
define('LOGGED_IN_SALT',   'JqYO*r%3xbGyZ~+R%6$S_A`8Q=kG_g>_5N/cyI-XXB/zJh UHAGb98IE<q%F rw ');
define('NONCE_SALT',       'c(jW%);(P>B0)aybg}F6PfNY4,*cy5m;?L1pI4xz2#8w~?<dm:s(*J/d7b2p0,zV');

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
