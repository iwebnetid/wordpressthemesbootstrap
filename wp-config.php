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
define('DB_NAME', 'themesmaking');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'ru9HdDx~H-en]tl52$fn^wciV[O3~Eb4V5yGZ%Iv3i1v@~,1bN?MAuy%>xg=RJRF');
define('SECURE_AUTH_KEY',  'fc~o@AQ6t}(we6pc)Yy$+kN)KxhH9!MC6q*OTG;?pErulH8npSd![;o!i]`!Ep2m');
define('LOGGED_IN_KEY',    'Jlh|r31g< Y7K,(9A?S=yOK&NB&#4HZ9TEJoW?AMC4K-:ilvS:{5&.%}VU^?qQ<5');
define('NONCE_KEY',        'rzR6we_X;R*YewV:|z];g25n_BIrBB_hOVJ5Ob#Bz-=#FNn(Dd4,O~I`93X.%M:!');
define('AUTH_SALT',        'yqRkm>LnFIBY:Ag:7yw3aKL~(]~bWN.2eTQ|v,4e+>{X=w(z-7?xu]<{M(Tx@&Xf');
define('SECURE_AUTH_SALT', 'l-gQCJ54Dhxrp/MLNCtU)?g{ +rL)zvey9*@$D}%n^_2H!n6[eO3^GvxM!*S R3n');
define('LOGGED_IN_SALT',   'm$/hFw#*_P<4t+I_VFJAhThA+pG>t- (!e@$*+x$mW$6pvgw!yIv2g=*ILlt;}bS');
define('NONCE_SALT',       'SFM:Q;4&EJYCMY6*7!$!!r5,sctOMR+6Hh/mB(}3TY<viQCOUI5-^6hK-h5Ab44e');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

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
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
