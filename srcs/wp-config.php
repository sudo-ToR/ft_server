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
define( 'DB_NAME', 'wordpress' );

/** MySQL database username */
define( 'DB_USER', 'wordpressuser' );

/** MySQL database password */
define( 'DB_PASSWORD', 'password' );

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
define( 'AUTH_KEY',         '!=9SY]@Lg1.w/}CfhdrePEkr^,,QK,.~q0PWfqRjt.zprT7y]1B#V5i5FqRp!|;I' );
define( 'SECURE_AUTH_KEY',  '=wW=,MM.DJ%3;hU2aHW!EGDP;d-:?g~]p_&x~UD)Im$+X8>Us;dW:UzL5oYKb$6J' );
define( 'LOGGED_IN_KEY',    '3nVx~,#h3dsH2C(DQ,CEj)$ Of(f4]p;APuV>KC2.d;,#qCqq|Lj o:yHwX*sC:Y' );
define( 'NONCE_KEY',        'te.aR98pK=u#p{abOFU W:>f,o3PS@M~E,v+6g5oJhqriEIaYR<9GwM80CTtAy#Q' );
define( 'AUTH_SALT',        'oBC8-SKDkig~z$s*Vs>u/]?{s02 ?orQ-KZkQP>^eVdF#k/(+6oQ-iV1h{_Cu&qY' );
define( 'SECURE_AUTH_SALT', '{XLefw[ap}FHkN{j?+r{6$J[J?$%qt,VjD>)epR!ULCyNzkAL~|E(q^kI7-trm|y' );
define( 'LOGGED_IN_SALT',   'g_KK8msmQQYxBvW7=<=fx(Y!Gs$l,oeb_?6)uMhXbQK8lj4wWemP|fZB/f48?[W@' );
define( 'NONCE_SALT',       '-Yqfw~(cRZh&tyH<`hX;q %dD,o0#a&R&bv)h6sT`a:6!4rLi|?E#vI>y][?Jf&`' );

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
