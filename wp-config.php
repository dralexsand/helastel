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
define( 'DB_NAME', 'helastel.test' );

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
define( 'AUTH_KEY',         'f@?EAV9-CN/VRt[KsCZ1Lp0dRLKca FHQCkH?*<LvFa0]jImJ(Zpf;zhz0/i>`x[' );
define( 'SECURE_AUTH_KEY',  'xAwf;UZ)Zeh 96[+%!<?mi&m}6;.q V]Z(F!N{M1RW>jrdz;<30oT<BEE/-e,-8[' );
define( 'LOGGED_IN_KEY',    '&5y/FO&UGjhzGi(OQH_|r:a?)J6|k;k2cjR9i6 f,{epn7+Jvr%|t JQuF+`U~>m' );
define( 'NONCE_KEY',        '{n@.qT=lF!dby gftq`J_l? E26kvh3_yo7zJmTv7Qx3=n3q7!L>Y@z;aa-Ju|r;' );
define( 'AUTH_SALT',        '!A:2b%.GNprg?I!EeK>Va1};JXhv^.E$`:`FGTMzsQI){OX%{;/JoL5d6a XeoF*' );
define( 'SECURE_AUTH_SALT', ')/?ZeRB#7U}1A9Yi>#e/.h<0Z`yv,&HM@03lIAQz7_*oxS1( $,klro1-;2J=IT7' );
define( 'LOGGED_IN_SALT',   '(F](E!7F.f;pH1d1F`r*Z ADkXC*U)#)d6pO9jPWI-O:r>zA4%8S+rMCDvD_W%WP' );
define( 'NONCE_SALT',       '-`Mdk38K><i5-Ins t4I w/U`FgTE!Qe6#69fUkei;;OE[W#w ?U0`AV;<iL>Cv>' );

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
