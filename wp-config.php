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
define( 'DB_NAME', 'mumusnd' );

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
define( 'AUTH_KEY',         'R9V4pS2#kfLSmz0_hz>dW)]<etH1&L@^D5z[ytHS&.lmtK3w^z:XcB,#fyUC)2v)' );
define( 'SECURE_AUTH_KEY',  'Tl)}dTl>^,(s|$ApVYL3(}*%_:,#:ci5;h(T@:0Iv|~56ZB7U^Ks#pp#2TJuF?P{' );
define( 'LOGGED_IN_KEY',    'fIqg[eW6Gwd}BUxi@~fsYxc.3&nxKZR/XvwLV7GJ_1i/yw^UWA;$3k!Sk9dwZ0BC' );
define( 'NONCE_KEY',        '=p?o{y@?{{xy$lssqEo6*B4M:ePkI>[ENt,2X{J20$uQe^n{FKM4ln)8Eu(m8ftl' );
define( 'AUTH_SALT',        'D]<8Dq9cFmu2BX,gjdpPUmAt~Y8lV;FQ!EtG%o0*#AoS:`[&W`Hm-cAP/S)zN,<l' );
define( 'SECURE_AUTH_SALT', 'i*UHFH&t}ud%7~H>:TVII+I3kdh|W$*8.Mj,l/7-fAuGHREq?R*hpDTr:C<!m>75' );
define( 'LOGGED_IN_SALT',   '0I|v>e|B`faC2}&4N*m:/4vVo%0$z=abF#g)7[1!3W<b_t@r Aw5Rt0U56bNaYSl' );
define( 'NONCE_SALT',       '1ebTo6n|:F91U/p~R2Mtv*[_${~[F9$gl0DkJ$*Q0V{xuv(PmH0?ct[Q1~~y6?.R' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp1570_';

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
