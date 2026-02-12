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

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'test' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'MySQL-5.7' );

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
define( 'AUTH_KEY',         'JjSlzc8&@5dhUy}*7VnjQpS6+UMg9 LO!0&=?Bc?jN@HpP}K5Z&oDSZj1P;|m4!,' );
define( 'SECURE_AUTH_KEY',  'H.M,7e#54h`Eh8;l:KC.uPG)`X-vvh1{$oGKZ>Q=5UzGKTah|Hq!@1ysJV}51LWR' );
define( 'LOGGED_IN_KEY',    'B9fiOh]UGdoL)O4Uz% ?1~=r9E[Rh9kos^I-2%S%S<3pR9:i|Qt:dge3rFf){5-?' );
define( 'NONCE_KEY',        ';~! r CLG$~vJPE0oxuqfmJKv3Y}4MV64mim[lhIf}7G!;0 fDZx:0A3( s0|wde' );
define( 'AUTH_SALT',        '#LX4qhl<o@Z^.>A5|+%+{fyL(2|(7]+QC1y@*o/7C4s${;h[,@zz:bY4]C`CGQ8#' );
define( 'SECURE_AUTH_SALT', 'YD45Su;-%nyhrZWvXV:czgM)(|_!7E{|L%$S7uVH5^c313g}j3jZ##]$taAu>Ro+' );
define( 'LOGGED_IN_SALT',   'FQu`LuE_$38Rbq>=ZGw(x*9P4OiQH$oki1vWsZdN]0Tqji[jn;xOk*==y~)YNKq_' );
define( 'NONCE_SALT',       '_xE`<*;|-<m^re/;9P!lf)M=&ku,ge%Kcl%:X_|&6m5G{_#;%0.]Rp+^M$;~ILjx' );

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
