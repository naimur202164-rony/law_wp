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
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

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
define( 'AUTH_KEY',          '7v~?iQ(|>q=2]VtyygE{/@ueaPZWgaWvlTf[/_At{h3y2b3>>k@+{CXu$l(vU3+a' );
define( 'SECURE_AUTH_KEY',   'Hn,T_wk),~C:ZW|dYr8A:w@/hvL>8aHCa(j6F^Vp*pWnR~?dv=wYxnIoOLm2Jy4v' );
define( 'LOGGED_IN_KEY',     '}vSKk}8<`cr_&wc~LuBp_iEg9UrAg{}8Mw}<MiF_tpS^>P~MRYI${hd3(Z(X?{du' );
define( 'NONCE_KEY',         'sD-G0@5o[Q}1V@7EfT)[V>9k(2K*,K=vhZO9xP$^V=1m&(bCI]MR1QXAScj)!Jp9' );
define( 'AUTH_SALT',         '? bfA^I:?}NjilpjiTTen`&;ytS.`,dNaHUW5RSG9*|-4)c7-f?cNNbl>w?p-C81' );
define( 'SECURE_AUTH_SALT',  '|a{ipcx|+YyTIQ}spAd2B^[J*wib3!a[Ei59,TTc{yB<XDhuVJJucr=nz:Z !g@~' );
define( 'LOGGED_IN_SALT',    'Q^]PM`l+fgURMpIx_=`B*2vE,`?dv.L&T_VT`KayvG#U8!Xm@3XVgve,zGv(8az[' );
define( 'NONCE_SALT',        '|:G?6&gA;o<F}yZ_|s/tEMz_$zqZ428lGn(=c aw[FE;6YRx[^Zm_CKkvgI{7zFY' );
define( 'WP_CACHE_KEY_SALT', 'N!PB[^GfHe$rX%(chG/c3SpcvL8vI,_6zR7;zJn}UL0:*lR%%%__e!S,dYQVh(f+' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
