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
define( 'DB_NAME', 'b11215' );

/** MySQL database username */
define( 'DB_USER', 'b11215' );

/** MySQL database password */
define( 'DB_PASSWORD', 'QRT3wbP' );

/** MySQL hostname */
define( 'DB_HOST', 'c236um.forpsi.com' );

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
define('AUTH_KEY',         'HQ`*%+j*?u=W{U7~tL7Pe8Z8g]2YioY9)r!e{| <dTwpTlUxUX>3k80DcnQbQ(hB');
define('SECURE_AUTH_KEY',  'I-mS.P40=@5 a+X$@L6.EcMSDekzD6`|.Nnf&=MzF7)iyO*y,x0>J5?+;W~t[Ovj');
define('LOGGED_IN_KEY',    'qYnQS0j(k`^:g%clm+L0t8:&:CeV>3h/93DUeGvvdKQv3a;GsGR.yS1Tl@AWg-#1');
define('NONCE_KEY',        'j:9u?]6VoVk30+iPdFlnl}1ic|C}`m{r~2l4a,B,|akf?`<9Hy=AH&u$p|=17Uz7');
define('AUTH_SALT',        '/vqb7+PV*6NP<%Do#)0N.sO<cTAFb4^SQ+|uRy9RSM1kngBt<8wiw;:?MRg%Np+x');
define('SECURE_AUTH_SALT', 'e]a+>M>bqLI,.GG=KqHR<&])A-`I0`w|_1&*]Z?)(N61;{,aX%X ]+H/YHAs4aq5');
define('LOGGED_IN_SALT',   ',0[w 9J.,RGHAW)*0$A|@ZB- (+GO-7Wdw* g*K*@=[@NeOn_>pAc4*%Z`3)aA3x');
define('NONCE_SALT',       ';0]!c-h[?gX&X<K3$Pki X1_#7J4=lXJ]Zz#1mR~fvOXA&`[&YtCX;lTI1-;#-6|');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'portfolio4wp_';

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
