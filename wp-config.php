<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

 // Detectar entorno local (puedes personalizarlo por IP o nombre del host)
$local_ips = ['127.0.0.1', '::1'];
$is_local = in_array($_SERVER['REMOTE_ADDR'], $local_ips);

// Incluir el archivo de configuración correcto
if ($is_local && file_exists(__DIR__ . '/wp-config.local.php')) {
    require __DIR__ . '/wp-config.local.php';
} elseif (file_exists(__DIR__ . '/wp-config.production.php')) {
    require __DIR__ . '/wp-config.production.php';
} else {
    die('Archivo de configuración no encontrado');
}

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
define( 'AUTH_KEY',         '_A{@`m6^<]5]*4Tg#i-fBDxAoQoFN>iL`2B$W](Vnq{-kzLT^<XjH#&svU{,<Sd-' );
define( 'SECURE_AUTH_KEY',  'TuAYc3#A}Fl8jDTB:ASKOqUa/M R2IM,hM5qz{kC3<0fB[~+#+_?MFHfLM?PiZ7!' );
define( 'LOGGED_IN_KEY',    'E]2DPeMfdtR/DlP+^E]~ mTrSC9$M[)W[9ma?m:ll^mq[h(Q`=s0#yK7{:ex;Xt^' );
define( 'NONCE_KEY',        '[Fe#-&I.O1TvR#tIo:9a4j}D)vnw}XT@)BVy}dz:5WR{51&mLSJ%[#6INcoD,tC*' );
define( 'AUTH_SALT',        '!_2,>T47T0GHWt6=$H}GRM=ygqt-IQHR_-o7I&x.q^rG$cq[lG~]c[>HiaBhk1?y' );
define( 'SECURE_AUTH_SALT', 'q4 `.bG{X=*[me)tW7_]oNL2 lluq i?>,<(foJ=1+ {9]-soiES|4T R6l|2d@X' );
define( 'LOGGED_IN_SALT',   'ku0?]A:[qVc[GV;b-!e(,F%s[i#8c>TL*!y{i/O;)?mA(R`?+aaj%QPJk^V 0vf<' );
define( 'NONCE_SALT',       'hRQ7=b_g.?b&:9iK)>P(Lfo(S%xD(dH=%:mn0]14@gc?I1*@EO+G&V_(aRQ>7E.f' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
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
