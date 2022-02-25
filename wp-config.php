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
define( 'DB_NAME', 'upworkDBa52x');

/** MySQL database username */
define( 'DB_USER', 'upworkDBa52x');

/** MySQL database password */
define( 'DB_PASSWORD', 'ZWQHCE603y');

/** MySQL hostname */
define( 'DB_HOST', '127.0.0.1');

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
define( 'AUTH_KEY', 'j3>jngUYQ>},z@rNRFJ704rvncgUY4>TLPD*.x+uimH6A2<]ibeTXP<{*y+qLPE6A');
define( 'SECURE_AUTH_KEY', '<.+quPEI62qjmbfX3<*.y$XMQE6Ay$ujnb7A3<^.bUXMQI^,yqujEI7B<{jnf');
define( 'LOGGED_IN_KEY', 'PLA26uyqeib26;.<+XbPTLAE+uymfiAE6{.!|-~wkoG8C15:lodVZOR:_|-swOGK');
define( 'NONCE_KEY', 'UNF37znrjYc4}0,@^YcUJNBF!vzrgkF48}0>gkYRUJN>@!vorJCF48}osgkcRV}|[');
define( 'AUTH_SALT', 'L25vjngUY0>}^,@UYNFJ7B@rvkcg8B4>}!cgUYRFJ!z@vkoF8C04}kocVYNR}!|zs');
define( 'SECURE_AUTH_SALT', 'N47}nrgYcRU0,>!vzRJNBF826];#+*aPTHAD+*xmqeAE26;.<eXbPTL.<+uxqILAE');
define( 'LOGGED_IN_SALT', '~wSWKDG59-ptlad5:1#~_aeSKODH_x+phlD59;1]ileSWL#]*x+ptPDH5;2ptmaeS');
define( 'NONCE_SALT', '70>}ncgYNR>!,z@vNRJ8B04vkocUY0>}|zVNRJ86;<].beXLPE*.y+uimE6A;2{im');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

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
define( 'WP_DEBUG', false );
define('FS_METHOD', 'direct');

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
