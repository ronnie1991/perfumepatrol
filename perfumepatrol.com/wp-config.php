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
define( 'DB_NAME', 'perfume_patrol' );

/** MySQL database username */
define( 'DB_USER', 'perfumedb' );

/** MySQL database password */
define( 'DB_PASSWORD', 'perfumedb_user#123' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

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
define( 'AUTH_KEY',         '3j48O:QM}tuJW f/ZjyUu 3ft0}vojy3gb <VzCh5Q/4YS+CEL.,V7U|gwBD>:.h' );
define( 'SECURE_AUTH_KEY',  'xLV;1A?T-$&=5cytuZ9rBH=B4uTfN6YETi6Qo}2T4,y5HQ#>zT{<!-wf ]Igz*OI' );
define( 'LOGGED_IN_KEY',    'l3CHO|/)hLi-z~v?&*q#l=8`,15?4fS_luG8R}u0[+pjsD}haXA3zaf=/Z^){+rG' );
define( 'NONCE_KEY',        'uS3xQyD[^ezj`j,- TgTe?(H/2Vj5S.L+W_U>V8+7W8-JC-K!|Dv92RB3zu^v_Ct' );
define( 'AUTH_SALT',        'c=]@iegS;PeRXu}eV|=n%EIS4+KHETTYG1o#*ljV<U!F|TUvIxVR/J 8]+`jcCA(' );
define( 'SECURE_AUTH_SALT', '}:*GvF;#6mNkC?Xsi}^TQn$Q*J9rI0XA,AusccWxHH-Z<`lVX4[?.*9VE-K<y:D(' );
define( 'LOGGED_IN_SALT',   'ZeP#3j&:MK3}3zgYJN* 0`Mm&8@?EzJNEy<A*:m&>+WTj1z)G:Z, Xzh](GCq6-:' );
define( 'NONCE_SALT',       '[!e{5rR)249ZL+EKME=sx]of3Ob|DtL;FFkr/2j8_&Hw~#O~D5#3GgT]9(aCXKZ+' );

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

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
