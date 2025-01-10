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
define( 'AUTH_KEY',          'kz][OG>SP#Wy1@o=|-+.fKf6#`@{ZM| XnOEG[6F5.f{95pm5OZ</,!g2qfifkK^' );
define( 'SECURE_AUTH_KEY',   'TM9@%A+9^]FH2m5O[&>+k(i#@|wz}pv06fI5C}Fo^OSCjZ6Wo0w,!Lr3bNdr3foF' );
define( 'LOGGED_IN_KEY',     '%=G41=!E,!^F)W@8Q.Z*dyvs*3;ZY0EP+l2}7E$~AV|lk;oc}Sul9<I^D3_G^8Bg' );
define( 'NONCE_KEY',         'vx__82Qdx!vD~:*,+Dg8I@x0W@l!PYPk`P9y~&S[soQ)9H]~SUVZV1,jc/]hiYrR' );
define( 'AUTH_SALT',         'mZ*|Jq?ds;vI?FY==QxD/6=k0[g;?%)FlNU42&KR1A#UpcM CDGwLTB_|@j tC%U' );
define( 'SECURE_AUTH_SALT',  '8, v^vUB@]9N3UE`R;l)Q>sk(o4&qLhAyZPh9QY`j_-Y[/g~V5@_]?m+<fYZ-P(r' );
define( 'LOGGED_IN_SALT',    '`wIhHQefQZ<d[f-t..6q+T_QVh@f#T[:<%XEbWNA<|`?KN3P@eEs%IM|7kzO9u>r' );
define( 'NONCE_SALT',        '$TVNgb~}hStCAVy0Zeiz,O%E8<M0Wjb~`>NIl!~JK8s`PA+XT=Hro2FZ*[neJtUw' );
define( 'WP_CACHE_KEY_SALT', ',s=hon UlpX&:T?{:tN@fbSP]loY!;q{btjXiC,}<Qe_v*!DF]{)E1pe%bC7?!A)' );


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

//define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
