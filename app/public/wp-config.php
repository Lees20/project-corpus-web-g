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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define( 'AUTH_KEY',          '7Lg-}If$.<PnP<q{LTD/lPExM_o&=^eHf71R%vO@6mGr$zy-om xzH/,[j_bGA01' );
define( 'SECURE_AUTH_KEY',   '/kVI=yIw7]=RvJ64f(bn>Nh[g`d`A/)CQEh/Ca7BpD)_,CQyOl-H{X{H}iA,4D`(' );
define( 'LOGGED_IN_KEY',     '4d^UD0qaNsPG4-sMhU]^Gu01S;@tY@r_KM>o91R]ub B~,6g~eOqf7B(-JK[Ys.5' );
define( 'NONCE_KEY',         '8EPP|j5*~.U~!8C@v{0cGn?OFqoIl*A?h$3R@}OlzOdg6{f]zn6rB4x0w/[HnQ%g' );
define( 'AUTH_SALT',         'cB;mgSWYZcGG=90I~Bv.4ciXYc?1!fv;[Nu_$::tfvNt]4}!NFGk}VL<zl<#?%(^' );
define( 'SECURE_AUTH_SALT',  '[5mry.YG-2MH%WDQ3]Rb-T}-SD@ak]fv!6E`ra@MRzoe;NL;;gG~zp:3l5KqOvQo' );
define( 'LOGGED_IN_SALT',    '))~DnByFgM)#anwiL?Q9H/hgB8G%%:x(/}}PToJ<Pr[,OsEXj6Sg^.ZFNhDq)G)d' );
define( 'NONCE_SALT',        ',$i,6g_ArE%B2`I%qs?7.09@x?Gxwpdc#g5y{_^g%pzAdMZ>b]5MF2Rs}Ql>$#>v' );
define( 'WP_CACHE_KEY_SALT', 'glFLi!li/b29WJ^:nUnv]mqj5G<0[;rD)~qqB!/<yV7jG0x$U|]GchLrDU2dr*Eo' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
