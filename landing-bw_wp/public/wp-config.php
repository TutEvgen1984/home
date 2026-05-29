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
define( 'DB_NAME', 'landing-bw_wp' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'MySQL-8.4:3306' );

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
define( 'AUTH_KEY',         '5xDX>ctw/Ycx5$~3Okpxvlpf%e:DPYo .MGsMt_9Gzsl+=E0W`U$Rr)MDqT{^KZj' );
define( 'SECURE_AUTH_KEY',  'GB@0lvN*v&3pj&9~8Fk]wfR=k){mr`S!Tua0t6~1&p~,HicKJQ_~/!bKV>5mApG+' );
define( 'LOGGED_IN_KEY',    '9QQ`PR; _3-k~nr9)&(~#,d8$]7YPmO1vX5+$JEk]!+TSsE~*CxClS$*z= $x0::' );
define( 'NONCE_KEY',        '5-M_*1F%FBC<!vDI~x(yowFwDM5D`>EPXT:cSdw@9*kI4U:ouf)FkVS^r-xMP>}D' );
define( 'AUTH_SALT',        'to5HX:4QVu%htnxWh.jB`Lb)rra!wR-0>xi!,E^0xW6yjy35aY_iuDY+JpqR :xO' );
define( 'SECURE_AUTH_SALT', 'bB$Fi~/$>f?h,lt7:1B;36RWAA+}%>Yn`.!OW3/O?Ta#;{u<gbFeZMS# @OfE5wc' );
define( 'LOGGED_IN_SALT',   'Y<Bh:!]*s*KGa%G[:?% 77(<E2T%N9-i#5D{BnEuF2Imp}KO7PEe0sTk:EFK93}c' );
define( 'NONCE_SALT',       '5r(oLfF^-=/4x&=K1l9VsZxNDQs5C$mz748Zo2YPzjA=N-Rc;=o xO;Di<r?mAfz' );

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
