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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'bootstrap2wordpress' );

/** MySQL database username */
define( 'DB_USER', 'bootman' );

/** MySQL database password */
define( 'DB_PASSWORD', 'jU23KQlzUpFgQU8X' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

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
define('AUTH_KEY',         'KJ!T_umJw~y.%&EN:|tH/(|vz-9LmCBIq`j1-V&z^LMt,D&o-|@0dcsfa.2G#P :');
define('SECURE_AUTH_KEY',  '+/drc1J|MVE(!fr*:V5:}#<GA/&KX#i9BzXOt<+U-|F=~IAuS;0Jz,C,X*+|je$*');
define('LOGGED_IN_KEY',    'w3^2k`{=9$$?DY1y|X8cwQ3m,#/|Fzl[q)GOM2F)JJ=^$1i=NpVBj=^5iRg3x-TZ');
define('NONCE_KEY',        's<3J21!Qh|#SaMGW;a6v(VDIk|MXu3|Xf0w]Q2qB2mI;{)B`q;wwJS`:`=gr#gP#');
define('AUTH_SALT',        'p!ClD6R9wC-na3|]&mO!r%z;39A*;hkwAO65oPuPh6&wP(+YkjH89D|=]HY{3]E%');
define('SECURE_AUTH_SALT', '1tfZ6BFe1],;8}mOwPzU|;n&(wUma5<IAH~D$J|WiI<j[f}`:~|Tz<YH-;]W|c-.');
define('LOGGED_IN_SALT',   '2Q%x.on}`4)A+bi=!4!kNp??2?O6vga<iSa0<4kF|+YwH4fQ5+!lPApk+iO$JKv@');
define('NONCE_SALT',       'm|K.{=9)3s+$a@7JTNJOV-G(CQ.T.A.mU,Q1&Y+.lW-cX{-`]rO/i?U JrBu&FnY');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'dbbs_';

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

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
