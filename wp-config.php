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
define( 'DB_NAME', 'WordPress' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         '1/|#YeQ2znx;z:IEJ L^eJ4vBc*CKAMqQ40Sh#Tk4/k}S.pmOjOz#hCO%n,UEfYs' );
define( 'SECURE_AUTH_KEY',  'Q:}mMPTAMOa6O[*W3I 2 n+?VPqi1t/9Fcme#y+gZJFd#{T|PU{jcwoZtKB~+(Dl' );
define( 'LOGGED_IN_KEY',    '&vOu#l=~As>%mmZM!|-lU,_Vkh_-~ b+jJ5L5_Iq(`:i0u/>PtwLfo&(*1C)) Tf' );
define( 'NONCE_KEY',        '<oAV6apFcYTOap4_W|6>DrR:0|a(2V[*{:ecb!mX[#;FT3rl?M$t3Um_(Ym1/uEE' );
define( 'AUTH_SALT',        'kgibFOn|y#}caIifKsn#` pQ+~%cjl(tAWODsN.|LgS@n)*O_`(UwDMfY}+:@48G' );
define( 'SECURE_AUTH_SALT', '-B%@vhvbx16enjY~K&hY!B*$Ix`@6;|K60JO*wGwYO4Of<=HnS?x!{@y/@M2dJ/&' );
define( 'LOGGED_IN_SALT',   'GZ_0QLjf(#e]DWb1FsEsFZ3;e3Fj[BdN$d@RkYoADA~.ZtK[b?_YI]<%`^p!pp 8' );
define( 'NONCE_SALT',       'tK}HT%Q=57s)=4x``Ey_@E@ oeU9CtSgTMYjf+cLa(/tDa^v.lIdjkd?&95Z$O#%' );

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
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );
define('FS_METHOD', 'direct');


/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );

