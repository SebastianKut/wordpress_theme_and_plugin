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
define( 'DB_NAME', 'udemy' );

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
define( 'AUTH_KEY',         'YLS?!@%A18Hk+:Q@<2${6}5[|=A|N#Y?|U)rvq`^7&:~D*]dJE_9UX.o<>]M| Q4' );
define( 'SECURE_AUTH_KEY',  '{O.AX/,35?j#pZYmZ^veeKxE7w++&&*K~ANuzth0E~AGx-A|M?FOiS%ue~UFN]A^' );
define( 'LOGGED_IN_KEY',    ';i>9ol)$ Nzt wHG0YxcspsF^do[P{.j?:s0I=oh[/6yf TmDX>NRokh~.;rb-Fw' );
define( 'NONCE_KEY',        '[`FDpW}+Vt)cL:{_1tPX1C-JBb|5 &-vOuH4g]j}lPNr z?=%/led3Pj}GPfL>5(' );
define( 'AUTH_SALT',        '8}%9-t=?unq}7)PIuE@|TjqPTD:6)(l-2`8mqM8{QnF^=,K5`1Mc1W<>D$aKkU@K' );
define( 'SECURE_AUTH_SALT', 'I^.UN./qljR;<m!RoWpP6G4?;Ul1@d9~y~;qz+xAlEP^{R3c_40oEUMmDYKx/RSx' );
define( 'LOGGED_IN_SALT',   '.9-2G6M[w!p`LDx[)0x:.}|OO?La<7!`_GDD@jU5EzIV(6V/_RwF9M}]mzY@[sIM' );
define( 'NONCE_SALT',       'yJy$NgV^aAg8@{~)s@$EWooL/U;]h}T.m$`I4gR(.{oc,))<d<phPVA1AyBk ~dm' );

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
define( 'WP_DEBUG', true );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
