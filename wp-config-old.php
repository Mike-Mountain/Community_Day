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
define( 'DB_NAME', 'community_test' );

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
define( 'AUTH_KEY',         'Jf32Xnp8L58=VzV4_jAtY:[^y*aYbk:;r~K/Y)xE?y{.f,:g9!PKj?eC)epmMD5z' );
define( 'SECURE_AUTH_KEY',  '(Ahx/_xg6FZGt~D@7Pt3$(D61y%|7%5*4@f7#Jz&zTrFGvpA. )yM=+o%l|(]lQ%' );
define( 'LOGGED_IN_KEY',    'ACN7PeL/ #7Se9SE1$[5x3|&1gN5O=^RBN-BKrdaOK)<BNs5Oy/0}E+b|zZOcoRO' );
define( 'NONCE_KEY',        '[=LZ!I^Q4H?H$XeYwln3O#jDp|?9F#N3|SE?CrC Ck!CG0Dt A7S[WK7@dO.dn=?' );
define( 'AUTH_SALT',        'W0~e~a84ZmBwQ,psMOmoUcqH^Y8H@YQc%wD(A*U!{Z5jo46EjqP }XD>=3sB((;5' );
define( 'SECURE_AUTH_SALT', 'Jd;OETc.$Kap4Ha 1gE}+ta^vT%TH/{}9,h6m.UP(P4%H_)Y4]W0?3^`^2*5Q,n+' );
define( 'LOGGED_IN_SALT',   'an;ixV1r?J1u`~nux^&lDsOz0B$7C$j^jsoEmC[l;.lFqV6]$$RO_;h%})!eJtXW' );
define( 'NONCE_SALT',       'wS3oc<;T!JOOg3GExWYD(Wyn81K?K,rXTNP_bdjI7Y6qFuZyC-LT<7-H$$`Cwlyp' );

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
