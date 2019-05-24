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
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         '&PwI@biS;.@X:{)o`?{J!%m=FJ!s9B<Ay;a~FlY~iy{@A?<;0`sT.hi5SoI)Yf~w' );
define( 'SECURE_AUTH_KEY',  'pkp~1v{SjO6&g5U3+QZ[U:`+kKhdCI9?j=XK~j*cks0E>B1vBDZN^|wtR>uAaod1' );
define( 'LOGGED_IN_KEY',    '`k+Bea=)cL yRikiTjv3y@[2;u+n2FBMC$7]dlD0{22Hk(Zo>X?Xg(EH.KUm() 1' );
define( 'NONCE_KEY',        '!2& -%v34Ul(GV##cuZ^lH,B3UQH!E,m_M!FIqudhn_>%S<MIM{,R)FqU$.`tdB&' );
define( 'AUTH_SALT',        'SaR=&mbIm{:^@J6$64S gIB^gnd/bw$](b+!pz-1 Hg~3,ESsBA {%m>6YO[-BVN' );
define( 'SECURE_AUTH_SALT', ':RSBPKbRv9EC9qr$3CSy|_D,<Xc<(lvQ$pw^P2rk+p>/4`0(S61.@9xI=A>)QB<t' );
define( 'LOGGED_IN_SALT',   '!.VG{,R?&nxe}J0*Vf^~|wRf3;E]hGAxH TJbAxo)M_#O|[+te8SM.8z&VA5vEJR' );
define( 'NONCE_SALT',       'S=>lF&!TfGLdm4/3y?V=<:-}VRY&q?EsU0mT^FyajP.D[X?HSfh@+l6!tmhoS<>7' );

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
