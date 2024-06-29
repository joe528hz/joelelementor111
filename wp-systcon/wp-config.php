<?php
error_reporting(0);
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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'joelelementor' );
/** Database username */
define( 'DB_USER', 'root' );
/** Database password */
define( 'DB_PASSWORD', '' );
/** Database hostname */
define( 'DB_HOST', 'localhost' );
// define( 'DB_HOST', JVL_DB_HOST );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );
define('DISABLE_WP_CRON', 'true');

define('WPLOGIN_KEYWORD', 'authenticationlogin');

/* Recatpcha Access Key */
/* Update it using a working google Site key */
define('RECAPTCHA_SITEKEY',  '______________SITEKEY_HERE______________');
/* Update it using a working google Private key */
define('RECAPTCHA_PRIVATEKEY', '______________PRIVATEKEY_HERE______________');

/**#@+
 * Authentication unique keys and salts.
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 * @since 2.6.0
 */
define('AUTH_KEY',         ';(N-8KG*LAaoBtI_y|hf-(Ez90^@j(N2[QrITOAq|@%qIA`k9siY4+m#4D-D>Bkp');
define('SECURE_AUTH_KEY',  'HH<9eeq{~=gi;Zhb_c#[NzY#Hv3;;FJj1_mF+`BGO*DGWf<C$`;M~A#u_+E1SK0a');
define('LOGGED_IN_KEY',    '{^R-VDrT-i;QoJ5n,,pz;@GSep `dM6D,(xO&t~b.D*}PNo|bpv? 7Z g^j^L#hg');
define('NONCE_KEY',        'pMKNN?]WN7ZtKNZ+#kW(==d8ssnf|X%$-H#=0%0_?e_O>B=X`(==Vb]$k-UQ~d~z');
define('AUTH_SALT',        'CSY|ar{<FPh:a)SD$#T3_W?#WG[H7aIY1%f4-4JWH0{,b-JVb>]Y+6)$H-<a6A5g');
define('SECURE_AUTH_SALT', '/h7e_ow}?<b%eDJI-]MnBLMhp9bdti|>(l&a:?AX!Y>a0$wYE&}a*<k7iP&lzCBv');
define('LOGGED_IN_SALT',   's)]!L?>(/d`~%$Br*j-&>%&s`iAb.@-4,&`k!pau4pUo}UurI,tx% ylZ%T1o=@-');
define('NONCE_SALT',       'V#^wZV<Pt~z|#9L%|qZ+zM5i]-6ZeF#9Zq&iZ{yZpkL/XCo:n~IPr!8EVNt#=,t0');

/**#@-*/
$table_prefix = 'joelelementor_';  // <<<<< WordPress database table prefix.
/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */

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
define('DISALLOW_FILE_EDIT', true);

/* Add any custom values between this line and the "stop editing" line. */

/* That's all, stop editing! Happy publishing. */

/** Sets up WordPress vars and included files. */
require_once SYSCONF_PATH . 'wp-settings.php';
