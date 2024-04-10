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
 * * ABSPATH
 *
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'KampusKutz' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

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
define( 'AUTH_KEY',         'E84lF4?;&+?viuhh>7V}nE;nPJq~h3K@um}g%kV]CQ+`o4?{ C$O&#%[>`#f-LS*' );
define( 'SECURE_AUTH_KEY',  'PZreIerN19~W1}4@CU]|xa4}{j;mxcPy)sJnR6hh0 (kTWa[Ddhcu T&=m$oESo<' );
define( 'LOGGED_IN_KEY',    'RZNKZl)@so99kb&l=smk,%Edhc*Xam&YXqZ;JTAX#.RxC?[hxEIJMe6v(T3a~N,+' );
define( 'NONCE_KEY',        'd7iNhZjBHZf[7DJ&@@l4}R=&wlt>*:F%AL|}Cc(lc}PWO?^!9OOThbMWcUmaE24H' );
define( 'AUTH_SALT',        'kU9 !(-:^SNWi,Ss%;^Q@ZpL;p}vM{Xp*Nj5C87wl)&3T!~?*vzH&#m6/cY_/~LA' );
define( 'SECURE_AUTH_SALT', 'qjE0TiFtI(_?|b9ye` &:`E=R/nr?k!KpQE{^lD^tB|Doe=LQ#i;Dcp>CDp=5OXi' );
define( 'LOGGED_IN_SALT',   'Xk%oL:NU!eUBukGB)|K<Gh=p(`eNsil*N<7o5UOQV%}1(wBG<<(&*jQB$qdo93dK' );
define( 'NONCE_SALT',       ';/}e9X|2mYh4/0&&s*1KeFUZl#_y[|lXUm&em:AR0HLJECkooUSsb5T;S`@F#zMp' );

/**#@-*/

/**
 * WordPress database table prefix.
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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
