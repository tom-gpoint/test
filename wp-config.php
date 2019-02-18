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

// ** MySQL settings ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'greenpoi_wp1' );

/** MySQL database username */
define( 'DB_USER', 'greenpoi_wp1' );

/** MySQL database password */
define( 'DB_PASSWORD', '9wWrvnIBpL9z' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '&PYXX&lHO:)&BU qL7 QY(j0r}yw_lkObB=al4J10I7*5qdBw  MuX.=0lCDwl%_' );
define( 'SECURE_AUTH_KEY',  'bZc Ok0-KUf<>d8y*adKYzgHd,ws##pK9akeGgS.8eC%B+I/XOd7H2Geu3ef:v#K' );
define( 'LOGGED_IN_KEY',    '>C1UR/N3}e3~emw_$`=Bjl[86WRkwo~o@:VSvJw/pnSs_:;72^y_2_=N.TABd.b3' );
define( 'NONCE_KEY',        '~mY>/,bJQ[h++|k0*2tq%x&w-<8lyM=s<1xcL#NR@tnosUfkTf3K/JCV1#@tZBHK' );
define( 'AUTH_SALT',        '@*iY+f}d%OkFB+(^I9 e7Q~uU~fw=&zqJ=G)l:hPU4r$Hy$|:3BCsAlT=@/Q`<)9' );
define( 'SECURE_AUTH_SALT', 'n.iOE!x=)) VR5k||NKe{6o}sSE7@@<Dhi32rd.qHS(bzco]FV5]}* p*PHsi/j:' );
define( 'LOGGED_IN_SALT',   'q!J2ALZ1^z4O`(v<q%4q?BIa<E|Rp~kEHv]WvpcN6`gM5e:V:),CBG$b_3S:w6<Q' );
define( 'NONCE_SALT',       'B$#9(?5qqP_?o/i[=9$4R,(ZlfnX1i_mTxgUtGAp<P^!iU`z;[Byf9Vu,Zdl9)wu' );

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';




/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) )
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
