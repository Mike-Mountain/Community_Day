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
define( 'DB_NAME', 'comdaytwo' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         'wK-Gok}<Hgn<na*>ZM)x>XSZp3<Mwh>+l)d%+Ll9}La5qhF-UJHHY8s2yrc18b p' );
define( 'SECURE_AUTH_KEY',  '50/yZrt_/spJGE.)8e-I.H[s]5)btgxewV} $0cJqUe#zal~3Ry5y|$|Q]KB|ydw' );
define( 'LOGGED_IN_KEY',    '8vDrr@DtyX@= =.-n7`UjR$-qPuID24Rm5qI),. n-y:AiWM[&b[Lg9nuHr#uI(V' );
define( 'NONCE_KEY',        'NYz@FvZ4}3cx[.pkF,+sus-+JYX@Mj:+jS5&X==+SKN9sVo87si7Rq&o+2N2/ut~' );
define( 'AUTH_SALT',        '@$HBl[4P._y_*wri)xk07#NsVR.+BHB4A@W=?C&lLV,L[ck<*eY7nbxiL1Qd77*]' );
define( 'SECURE_AUTH_SALT', '%2l^_)`!eu&>>E~l)f7A@6,R?Fo_Wy5sf*UPxQ!gTlT}=l%53D_#v`4)%#SPqR~A' );
define( 'LOGGED_IN_SALT',   '.5W;Mz^ymyrNz>gFDMtCho%djL @C_{A$KO{.Ct)<PD_<(1y[^7S~IEY3%8_nO!V' );
define( 'NONCE_SALT',       'MR]D>faqk@Ja0`qPYt,b:Rjd36^)Y.~PPEsD>B-undB&+0$Jdhg4PSSzRLV<f9U5' );

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
