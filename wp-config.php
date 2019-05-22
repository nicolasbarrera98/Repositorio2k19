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
define( 'DB_NAME', 'wordpress' );

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
define( 'AUTH_KEY',         '#VfCiTbu+r@4=RgL&X#@OOc;@` q c6eFf8|?k98qhu zYMH!& e^GhG9,sVR:BU' );
define( 'SECURE_AUTH_KEY',  'pfwJR}*}HIx8V:yMG/eut12m{/y?Uth2<%W}XaE{~P,B$G4Y)RyFWytTex}r2IH/' );
define( 'LOGGED_IN_KEY',    'vy*C9H9A*F:c&AA5ItASbrA=+B*JYlw:j4>@%=6V4(k}.er33^%S6;}7Z^u)Xsie' );
define( 'NONCE_KEY',        'a[IT)nFZzvGiu[$I_{j jO+(Z $(j-Ety7s4o{u,ZWA{{E|.xF#<v+^IemS]Qa>e' );
define( 'AUTH_SALT',        '(]D?.E#0KA[%n)mqWes<}`,9p)G^#J%|L}Z v[>[}>CSK2lr;wTd|A_03@9W{dxC' );
define( 'SECURE_AUTH_SALT', 'U0tvpx/S{akLJ|1S3joH^]&&k/@JE1cqcGePDc^QIlF)GXq)BgiGS?dZDM*JLCD+' );
define( 'LOGGED_IN_SALT',   'r0Be{Tl>&d79wwteZNNT5;:;0TJM//b=!!>61d7g(iT1aV:9bn@4C`F*(Z&}s4Mr' );
define( 'NONCE_SALT',       '67CFLN-sgMo5mGAASnc/el4*4={L<2zoZ]^M>vn=&Y8l@3jyscD:M@O>_(MiM;q]' );

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
