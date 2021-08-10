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
define( 'DB_NAME', 'wordpress' );

/** MySQL database username */
define( 'DB_USER', 'mleiva' );

/** MySQL database password */
define( 'DB_PASSWORD', 'macaw2021' );

/** MySQL hostname */
define( 'DB_HOST', 'database' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

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
define( 'AUTH_KEY',         'Pw!m?oM^Xc=q[n4 A `<kYtiU@i!P*=*L%&hH `KI5IVJ}8@nEmC6Ffdm] Dpf:i' );
define( 'SECURE_AUTH_KEY',  'SzwfpaC!*2Q<@@x/pZX/pX^2[=OWu4Xy=1@om2T(_^g[a^O@u)x!Y:E>||V,~79y' );
define( 'LOGGED_IN_KEY',    'uJ$E&Dn:qERS!<?[U*U@j;)HC+.8ZKLui;mJex}sZ~t)mlUhmJVE)gYw8Bas>XK{' );
define( 'NONCE_KEY',        'VOl4!Y V({Myf~0XB|)}HIL/1ZKKR9ldsO7[~,$8P8XKI0K%Yg<mK$K0:m4?5fLE' );
define( 'AUTH_SALT',        'V<dYS.cJVw|5I9OV<9dy%o)wP{C{L~:ciOw]}9|e &%%V~`Nk#Y_|>mz&qP7w6fx' );
define( 'SECURE_AUTH_SALT', '[SqWcM0B$KV1W7&j!a?X`-F.n&!x8[ZN3 $+_ln9w%$H1RaLtq4c00ncW|PaIN%4' );
define( 'LOGGED_IN_SALT',   'to[jOG:]Z>}Lg5k~t<%}lOSAS$`#!2C?3xYE  h-Z9L@|!%k`9q!XC`M[AkPPcVC' );
define( 'NONCE_SALT',       'bG5%J$r!WVr&(Om|?mL!gNVO*@4TLaH}XPl*feLqnbacf,uNtq~k_a1=7UOM;HrP' );

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
