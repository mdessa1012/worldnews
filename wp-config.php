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
define( 'DB_NAME', 'worldnews_db' );

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
define( 'AUTH_KEY',         '#)B~=ab%+lF6@CXxAP_ofKO/%{S(MN,,QI;:Z.`Jg6U7a5T?bdhpC)=Su9[S6J.D' );
define( 'SECURE_AUTH_KEY',  '3X_Z5zr8}6S({3>R[E<.#T=a_QTZz4rqi0Az-z,7jKKY<Uyh8mSn:mWulEkm cc9' );
define( 'LOGGED_IN_KEY',    'pooQ]}@/w1`l{D#lu_Xz2Y|KY!6V)g|P$l [QGs6o0uH|dWdV^h(+#t`=W] zNMY' );
define( 'NONCE_KEY',        'w~I^bo6CTs<I^?jA?rKg`jm4wqR}PK.7Zf~zg[`:J5L`IXv_-f.^E@HlL]lv+g2g' );
define( 'AUTH_SALT',        '58^hJ7o^-5di)j>r<vfOwBgUin!H;xpX=`VD/v: Z5$V6LPdC[?kbR1~7Z71jt6G' );
define( 'SECURE_AUTH_SALT', 'QH*LZ?;B=_WBi*Jl~Xd=^bvN8Wf50CfPKqg6DTSO ,X~diM8lsf:~rNr8xB;V Gu' );
define( 'LOGGED_IN_SALT',   'hG^Q]fzyauTY]up(L-FM;0HDLuY [xp-7M*pRv:2-RDSRoZ7XR.Nsu]822X1$hY~' );
define( 'NONCE_SALT',       'T79Y/o9M}<aMiBbp)z58.bq,Nq#Vzs?qkv>@W>j]OoS[6LQDs;6.Oy7oj,><Qh:_' );

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
