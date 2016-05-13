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
define('DB_NAME', 'ctwc');

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
define('AUTH_KEY',         'ma`^RGT$hP<.`@$Zji|McSF,bsYQ@U=uwzn7gd~zabq9OzoHeOId{sKX?Q=f4jrN');
define('SECURE_AUTH_KEY',  'WB4AcUx_FqB.eSWE=7,SU07 ?%[y+Px&T$yk,9pO%q]d>3R 57vyo%MH?NDC#jnT');
define('LOGGED_IN_KEY',    '@k#(IP<u@G VXtMOTV0v?+)P_rkS6A5C_{sy<f=z.C_J34JAIac/.DA:ck_P;wCn');
define('NONCE_KEY',        'HQKyDtd|N0sxMu]dV/0lpzx~c;#$&-Vhb:6{D[8{4X)-BuIL36oQXa8Vh/QV>D55');
define('AUTH_SALT',        '-!t&0d?R*(gH? 4Ig V}I3Ad^[B03/cEY{hfuESOaBmA}Aod;m~rQjQM,l;cF1t_');
define('SECURE_AUTH_SALT', 's;&,W!i-oT%JU(`:=k!M>GpE[cKWL@+!+vZ*w[m-20bSrWYV~A_}%QjwBlS|=9W)');
define('LOGGED_IN_SALT',   '>,2X!hS=Q.ok:!JJj+l$:kj.^0Q,7A9(gAYQa*S/(Y7<onY%%};K[qS+jCj6!|sn');
define('NONCE_SALT',       'HGZo #jJ5a5pdAMBlsc(b2>X5b`&&g  ;G3YP:y)u_Zw]CA@cxk58wmf6l<d^]CG');

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
