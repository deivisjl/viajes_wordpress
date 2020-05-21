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
define( 'DB_NAME', 'restaurante' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         'u@NT{Z8A?^[/@6zd!:^NXS;9Mh!dSEX`J[BT=(gJRFc;%(|?y$KrV_V.( qZ)Q0 ' );
define( 'SECURE_AUTH_KEY',  'Wz #ypy~~R%R1h8yYTdMb%??PdOp}*EqyFt0!#IoT(D%WN{bagS/=aZQ$J&a30|n' );
define( 'LOGGED_IN_KEY',    'wuvj4_EvV*qML[dhP^UDG!lrvto O}GdUa@?hmxq;q_[tQZn%61?RBi_{EiQ||Pz' );
define( 'NONCE_KEY',        'm%Yp|yLEEogIb[Dk_VaNgWba2k|.jN3*%MbtZM1|d!(3H/+y4i/QE=[(zc0Z<Zh@' );
define( 'AUTH_SALT',        'Y/idJYAj0(J{~?rT_10+[/(npG{Q*P40}nt|k5!zzHESV><e0.8&paK R,}w$kxU' );
define( 'SECURE_AUTH_SALT', 'eks @mYELQ%NKX2OYAY|xC16QJ*opY&F|;voJU@(PW5+nk.Y!b[e!>T<wG^[*Do|' );
define( 'LOGGED_IN_SALT',   'us)XjZMb[9EJ`2Z<q?nz9mzVT4yX>?|uWQ}}Gzv&-K5fyq{RIEOBO7u1}!+W? ;#' );
define( 'NONCE_SALT',       'zv<#{VuuR0@arrk,rGtY)EtMkw[%|q]a]$1^zqi^>1?oxC*jUFHe_vRjI`9Wc0%P' );

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
