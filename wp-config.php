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
define( 'DB_NAME', 'hesshno01' );

/** MySQL database username */
define( 'DB_USER', 'hesshno01' );

/** MySQL database password */
define( 'DB_PASSWORD', '6henblikk-Modnad-foresette-byklede' );

/** MySQL hostname */
define( 'DB_HOST', 'hesshno01.mysql.domeneshop.no' );

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
define( 'AUTH_KEY',         'x8UT_6rsCvVygJNv4gVKI[(z0Bz>pB=n05`ctWn$$}$ZY*0273|Jaw3&IsPA,8f(' );
define( 'SECURE_AUTH_KEY',  'zqa,CRGu!4wNkL+-zN/JL:/~jUjcS$i+*}n&?uAsz4KP*z|g`q^6QYOxF6Sea/xD' );
define( 'LOGGED_IN_KEY',    '.wW:M5T!44aMLfC<tXFj^#EbeE sFX5<ps]dV{T%0&/o?UW#ty?L:z!d-uK9u(RX' );
define( 'NONCE_KEY',        's29{hclauYH|L,s)|d*BhDxj~cBV{gsGhIF@LnR3-Od[)WmsAMQ,}vyR8i;.EG,z' );
define( 'AUTH_SALT',        ')*3@VRE&e@_ [3MKZp#1Y83tjL4#sb(N&<aeqy0GM*>]qEgs<R+T[-JJM-O|;fw;' );
define( 'SECURE_AUTH_SALT', 'B@DX5nF%+;hdnx`#fX0|_X2W?d>Z-F3(Iq5s;qsi<khqpEqn~bIl5o~MC+@~MI8S' );
define( 'LOGGED_IN_SALT',   'n,D [i[V@b?Vte7o5C_[c5<gqPJLWTXQ|[J`L}:4xIR7x@H.DCh  k?QII;Vif:r' );
define( 'NONCE_SALT',       '`A(]T9uEbt``49;{Ts.2u9L%GZlC&~)]MtUv# n2#M%V2Z_QI0;SuTk#.pcbiIcd' );

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
