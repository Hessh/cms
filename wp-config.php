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
define( 'DB_NAME', 'skole' );

/** MySQL database username */
define( 'DB_USER', 'user' );

/** MySQL database password */
define( 'DB_PASSWORD', 'user' );

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
define( 'AUTH_KEY',         'fki.ZCdN9v(n/-aqFcB]FH^x(*!~6@p}AH}+ y5dN>>H_k`p##!y=b*^14$9vwrB' );
define( 'SECURE_AUTH_KEY',  '9AxU<]&PyGnRpQjJ`1CmSQwAyQ3<[@ wPvIc*6bEJIOlM=?I7=(JQ/`&R4cqnx19' );
define( 'LOGGED_IN_KEY',    'KD)p_oz*}=Sc/2fIj-2^T&^)G2G5QO;_MZ+i37&shPY2rhNUXA-d<{` q F/x18M' );
define( 'NONCE_KEY',        '?l5}mrDHr*TykJI{YJE&*WP)YH&6a=zk;(lz}9%bP_.VTNbo^G/1MS3Tx=#KOF$k' );
define( 'AUTH_SALT',        'XLXwb?WMoA%9A}8/a,lw5V`L78H3<X;2ZQu1+xYpk!&w5Lko8! _{W9vH4;8{}Nk' );
define( 'SECURE_AUTH_SALT', 'Zmx}5VG)AY]Vl]apIOI8tD&+D~vq&jbf9q-RH|hy75PjRCBi`(et/FlEf+!F@b8%' );
define( 'LOGGED_IN_SALT',   'rY_gO$&9J{*E7h,{Ot<jGfn86:<LMdC=~Q2W;,(PVU[@Xe$q.<>*Ya_C9oSwBxn<' );
define( 'NONCE_SALT',       'Z6$RVw7BC(plW)8;f2G_n%-5Q6|e~@DC6iy|tZe[mZ)@]:)J{4Ke4n}=?<ZFrxec' );

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
