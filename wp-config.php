<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
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
define( 'DB_NAME', 'royaltiles' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

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
define( 'AUTH_KEY',         '404/+q~dRs%<3GA:O$!cI;pll#ytOJ+pviRe&0YVi%IX!vJNN<xzXz)Z|NXS>*Qi' );
define( 'SECURE_AUTH_KEY',  '#f&.*Hstj>CyD^=Zf?WY&#Nnw:*Y04;0Zt`8.b3Vq[CP^5,~j(KN_|}(!3`E;3n[' );
define( 'LOGGED_IN_KEY',    '3{hHwwRo{zY;)mSgJ,%F<{wI*8Q(vi)Qwifbs;c+Id0yfG;}T2!+~D. jx.Yjrs/' );
define( 'NONCE_KEY',        'D8Yj;[bSjXR~&k}@zZ4/!)1=e;VIc86dy xV}XJv*EN`,!Y`y0n@;LAMug$MTLzd' );
define( 'AUTH_SALT',        'H/ipf)^KotY1l{4SV3NS:l*qKa%)`HYsTt8LKS,l}Le@%|8Gs>H]:z6~g_|^<BpG' );
define( 'SECURE_AUTH_SALT', 'C]R]4c#>/yDXFn7/].W$?#@+E[~]*+<-U@AtFn4{Q|%XkrnG*`Pmw9cqY1@HRJ1>' );
define( 'LOGGED_IN_SALT',   '*TJE:$z@+Dxa1&X^CO.BCCT`%_s`=[7#uAll:{ms/sX@%}/C+V^IULvi{,DNm hB' );
define( 'NONCE_SALT',       'alyMVb.ylA I=e9,)TyADNf+%)_Y:,=KYlV*;0$CdgRR(FlQ6iZ:p0Ri{!6`[jF{' );

/**#@-*/

/**
 * WordPress database table prefix.
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
define( 'WP_DEBUG', true );
define( 'SCRIPT_DEBUG', true );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
