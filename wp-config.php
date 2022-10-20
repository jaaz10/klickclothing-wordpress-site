<?php
define( 'WP_CACHE', true );
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'u794924610_IvBRK' );

/** Database username */
define( 'DB_USER', 'u794924610_JAAEB' );

/** Database password */
define( 'DB_PASSWORD', 'cCEK7VD5QG' );

/** Database hostname */
define( 'DB_HOST', 'mysql' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define( 'AUTH_KEY',          'QAoa*;Fv-bEeJWjmwUY)*xTv4Ux1*^2;Q(;dwl=C4U6ZUe{N/Kl3%.L@t6)e-N4H' );
define( 'SECURE_AUTH_KEY',   'zW~_iV<I;Q$q=ipfQyS5{Y+hS[Ohi*,=6<7j/nzGBmFau<&[L{&7+Q/Ag_p4t(zR' );
define( 'LOGGED_IN_KEY',     ']b^i*OWSLgW`guM:>2%yASp<aQvyvlw6G+Qt!4^>nXqnB-_~yL#A@Nx-8g--e]tQ' );
define( 'NONCE_KEY',         'ih>5q*%wqoX2J(2bY WBhn^9sJd(l=7U+0%{o4oL;Sg{%UZS}6n(tYf5tn03U5St' );
define( 'AUTH_SALT',         '?!={q+di^J)zZ!o3Hx#jQ}say&-v9-y EJr;-9`CUC)! /93?oxfa~Fm*&B L2O#' );
define( 'SECURE_AUTH_SALT',  '4ZU6Z5iC2>l*UL,c(wflVS_oO@KT4<Yv;1yoM;p_=jfOR&&`UHxXgd[q*lhFIq$!' );
define( 'LOGGED_IN_SALT',    'o=BRK.rWvh.<AZBTIx.bz}:skNdq#{.ddQDSA@c}7m imV8IGZS$o~j?U)?l+RT(' );
define( 'NONCE_SALT',        'sFz&EpSzm;saUc!%{,Jj+pbggM#pe-#|csbsH5/=x)t`hO;W:b%$TPf:A[9(M1o<' );
define( 'WP_CACHE_KEY_SALT', 'uvVu*3g{5!@uyGCGh,2UzZL+ *CH<XSM)V@/v|IMD4:LC6NUAmMk,>(BurIEz^[;' );


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
define( 'WP_DEBUG', false );


/* Add any custom values between this line and the "stop editing" line. */



define( 'WP_AUTO_UPDATE_CORE', 'minor' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
