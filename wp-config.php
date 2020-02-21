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
define( 'DB_NAME', 'prueba-git-wp' );

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
define( 'AUTH_KEY',         'HsC=H|N]0./HQ}TnJz<r%(9a^uw4ug%2}w<>UXc0yPg&H/$p9{bMtY&>B<GSRz+~' );
define( 'SECURE_AUTH_KEY',  '#,Vh}hlJG9,s,tJ0IVV3t@Ctd;Ks/.H=NcTGQ%E&BE==l&mLSinC_Cbx2{`i&Q*4' );
define( 'LOGGED_IN_KEY',    'pskHf#OR{[nrVw.1yj/[;9uOl&#73^UoF^jxv>mGtzK7wW /X+YR<QM!_f|#60H)' );
define( 'NONCE_KEY',        'F+>%|pt?t(!Gq}icmwv+/bf:1jN<,rHiY0qs$[VS[?0PLTC+hy8oTh.^Day*A!4J' );
define( 'AUTH_SALT',        'J^GU#ggqx|;#L/<sQiG5/gtNxc2CYuZ,oQ06Y!5CueI<oCviAl/sD8K(1Oc=Qq*g' );
define( 'SECURE_AUTH_SALT', ' >xW5B8L)=9},X+9Ts&3pH/TGUV}RRryG:|f/n4XzOl,D}/(gx6;S!<PA69%Fo]?' );
define( 'LOGGED_IN_SALT',   'ijwO$c{dj^/yC*kgU#@`mSuIL>Hx;&icJ%A>j?lXc*w3zJA2P(=4W+.eX&0buL]j' );
define( 'NONCE_SALT',       '4K}*Fl+]QfOFb}6Q2~f_q|C9EXOc1[~0gyJ6e$xyQz.[n6}0U9i2lq_gJ 0HM)<_' );

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
