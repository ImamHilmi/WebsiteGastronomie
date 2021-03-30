<?php

// BEGIN iThemes Security - Do not modify or remove this line
// iThemes Security Config Details: 2
/* Themify Cache Start */
define('WP_CACHE',true);
/* Themify Cache End */

define( 'DISALLOW_FILE_EDIT', true ); // Disable File Editor - Security > Settings > WordPress Tweaks > File Editor
// END iThemes Security - Do not modify or remove this line

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
define( 'DB_NAME', 'gastronomie' );

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
define( 'AUTH_KEY',         '6xT}x3k|]Ms4i:(Y<p/t!z5.F_EkAHC+`8qP6Au+?DPy4YV|x5tCyr7UuD`(jQO^' );
define( 'SECURE_AUTH_KEY',  '%p;-m+`b$R LW&re(E U0EVXu~Wdk!F~]RiP: u`&$WG4>,zWLp12Rub,G5dN54;' );
define( 'LOGGED_IN_KEY',    'PP|qqTEF7Z# cn3tR$H]d>UqvFYlHY3S`P+>nI3N=bxN)%Nvv%[X6Po)$UD9vUZ~' );
define( 'NONCE_KEY',        'XM4I-~Dikd_JKH;2:>]sA<4]B7k,fS?jA$]PG`ZdVtK+iEw%RRa<;aVs*Qm|#hID' );
define( 'AUTH_SALT',        'K-!qF$R2P)KU>;Mgmd&QBh&C`=Nps`Lk(d&[(zYYT&O;5s^8^V7Rj!3QFra|Mqx!' );
define( 'SECURE_AUTH_SALT', 'UZ}XjpeakJeSIN8*+~D97)LKS8<Fjn|XBp*HDcnK5~QNMp!b^$tNO4F#D1gfkJh]' );
define( 'LOGGED_IN_SALT',   'Fkso{%uHn@<bOm00#XKRs:Ek`Z7CFMoPW`&9Gt?F%0*-c{I`gR^?wi4e1rBIpVyq' );
define( 'NONCE_SALT',       'bKGkcXl-5VnW/)FAW~6nEgNabB{9zfE;^m-Rg&7^)z`a/T.fJEP`>)`-bb1!~45&' );

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
