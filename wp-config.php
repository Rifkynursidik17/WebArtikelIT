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
define( 'DB_NAME', 'db_ArtikelIT' );

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
define( 'AUTH_KEY',         'No={c58l;8*eJtDOR;!`i@{r-AE?U0Z.gI|?OM]K:qobr(Rry{#yXMX$m2&Z{&;)' );
define( 'SECURE_AUTH_KEY',  ']Cq*Kjs0|K44Qq0[oFr]|2b%41=P0`*FHSM0mN`K:U ~ZgJA[Klr=u#cGM-ZsO,f' );
define( 'LOGGED_IN_KEY',    '{mNDRbReVg4yi)`5?lM@->#uI.[C4ZU;AK^oGmZ|2p-s=s/yZ40R_VZ6q%eiR0Te' );
define( 'NONCE_KEY',        '#PaG`B2~fMJz)%]uxiURU:mV!@.M]d~JAm@QK1thR:+fXa[?6ww3d`^ p{[LXI!_' );
define( 'AUTH_SALT',        '{/aX(n?>-J}jae+0D(.]*1c9=*++w@W#y]r6.lZ>P>jU59My#pvaal%AqOHM}mac' );
define( 'SECURE_AUTH_SALT', 'Jv,O<<}vQ]arNMG:O_KZ65oB:}ok`fRCf5]Rm-rA~hMu6fPk)aR#8`5Gh!KBkVy ' );
define( 'LOGGED_IN_SALT',   'aRgy?J8$x]A| zosxlXzjc3`Mu7GD,4;#ZAhokB5QGP~*[}b>iQoWFr=t1g%h5(;' );
define( 'NONCE_SALT',       '?&MHP6<BaYzbz@X*}XDBCZixmh%/BE;W{f+CSkE.LP<J?xv55y*^!1SuHi89*hcI' );

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
