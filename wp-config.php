<?php

define('FS_METHOD', 'direct');

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

// ** MySQL settings ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'db773437696' );

/** MySQL database username */
define( 'DB_USER', 'dbo773437696' );

/** MySQL database password */
define( 'DB_PASSWORD', 'Arastefu_120980' );

/** MySQL hostname */
define( 'DB_HOST', 'db773437696.hosting-data.io' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '>S;hp}hQr<LM9EgvcJ8+Iw)-Fum^|oa6=Fa.FQd14kJl7~wjx[?K>- mvhe=yQh>');
define('SECURE_AUTH_KEY',  '(a#%V9|LN3k8|^m|Tt<|t/<tigZx[/T6tf#*_B?D[|ijrf|/eAd?F<pTX49[[^RY');
define('LOGGED_IN_KEY',    's:>GI|`L(=5z.`R]:IBXHd{U?|A%XC1`Qg4c{1::=G{@gNe|7> #O-0KUM5Y%].T');
define('NONCE_KEY',        '_]X-*n,!#j@7r#Oh.%}Q4@+kJ4?9f6q8#AH,+nt~jbkrbGi^0u+$)({1_f6!hX17');
define('AUTH_SALT',        '{Rx/{O~O} [~>;45b[OxSO ,EL~|Q=|bVe1mFtcs#IpDt4SQu@n5V!b#~]nHU< n');
define('SECURE_AUTH_SALT', '!D$zp%XvG]S8I1 Im/?>:|1h{}RH+tyf^C_WJF_,!q,8b]@}2(>,ueG0JVAm+ ;F');
define('LOGGED_IN_SALT',   's$;8UXD<]:>qL1:)>M>GIrf9 +Ji[45SEf!AjU2+G-b6nXc@y(PbA;J;yf&TSjVc');
define('NONCE_SALT',       '(u|GI_]8%`vy?(V>G4 =F-2@^8Q2#g Lz=^^iWDd&+J<+i,)y*r8cJm:wVd0^#~M');


/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'MlcQm';




/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) )
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
