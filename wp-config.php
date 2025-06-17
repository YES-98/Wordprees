<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'utomvv' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'localhost:3305' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'oX$-j*++j_},Nttm_8=,^$Ro.l%fM%+D2U#w|[d7xPuE$D +Wj=JGm$M@u3$(*_~' );
define( 'SECURE_AUTH_KEY',  ')zn{5!t?XV y@-nq%YLolxHg+.He[,UiB!wo@t=Ja6xvn2Ke%.-+4Z1sb,Ar:W_3' );
define( 'LOGGED_IN_KEY',    'I7N[8=Z}<pZ!Y.k-Q{Qn1>a8pO7FhCJQ|h5NjiahU]w6:DpcM#q4#[&t<mZIZDV:' );
define( 'NONCE_KEY',        'Wij$x]bK$Da$tB)J&!KuT05zhZyfn.Y7^,GGB%ctc83LWT>a@I?lWWFW~Z@4`g|k' );
define( 'AUTH_SALT',        '9`dwJ/|8.OiqTz^I?<Cjhg7Sv8k]VM@}pyNs?SD-~T!s%#a|8:B/[,6InSag_e9{' );
define( 'SECURE_AUTH_SALT', '&OgFX/Tmb/rbtY*EaGd:@;Bk+Gv5M9iAy0MGy ^.Qk|N[B/v^TMTg[6*/>q[=Diz' );
define( 'LOGGED_IN_SALT',   '[^wcr:a/[rlTJq8 yx6(PMR3S_vAKxT*tmstecgGR)Z1O:MPcW%T8 >-$tS6-O|B' );
define( 'NONCE_SALT',       '_tYE6g^6Sk~hU%,PG&0qoFyh]|x~NZT>%#BcH1r{Mjj>. sLo/d}h7=~5+Nz$0K,' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
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
 * visit the documentation.
 *
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
 */
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
