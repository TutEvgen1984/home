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
define( 'DB_NAME', 'dveri-store__wp' );

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
define( 'AUTH_KEY',         'ex#LYz#/t@m!m!`By7|;c?Oe`/DhseTl+}#X}4O-)1*]{r$F&?P{}$lGzf~OSI)C' );
define( 'SECURE_AUTH_KEY',  'V+T6r?wZ{$s9E]ObHfzQEht|Cz1M8zo?FwBo- A};ONnTqF)oGMJRN,EmLT1^wyX' );
define( 'LOGGED_IN_KEY',    'R5g5YtGqhKJFS1bF.r]ls]?LGzPJH7WUyFfhuGbhg2>2T/^!WU-~`3ZL~rqIGhJA' );
define( 'NONCE_KEY',        'c8L_}Gk4tH$7Hl^9g)BWCR:;n~[lOD:sQT{RR^FwFkE(thWpwsyj`Q)b-SbT~2qC' );
define( 'AUTH_SALT',        'MJn]prNK~>pdxv)h^hkr5:S3]X_KnZd|`k4{CoZ_M3,oM|4p+Zr}X5d*kwd3a#<n' );
define( 'SECURE_AUTH_SALT', 'nxey4newvX#wke|L+1s K9e)M KrIl&Lb11ecsrDeG7%CdLdens+=9M:*LzC7L{>' );
define( 'LOGGED_IN_SALT',   'a#cTEw,[(6WvaG`2vw{x#sa-oh_551HJ,{bYbj%t*z7~ym-6h]o}=$vWj#cdTg:a' );
define( 'NONCE_SALT',       '5.J*7E0(n(Oh]5:wg$6).8z,gK%PUZ!#[?E,8#zr:2mzq3KCoV` k,d5-PBJoL~5' );

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
