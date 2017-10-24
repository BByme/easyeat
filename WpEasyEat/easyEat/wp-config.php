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

/* Language */
define ('WPLANG', 'fr_FR');

/* Method connection upload plugin */
define('FS_METHOD', 'direct');

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'easyEat');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'madinina33');

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
define('AUTH_KEY',         '/yR+R~(ibwl4rYnk%fakT{pOTUlXPvZv}u&Zq AO)tF-Th::qKO}77C>Y]_3R. ]');
define('SECURE_AUTH_KEY',  'I+RyIsG^Z)qJ*+FZmEbd&-i6Zg>&d(FOqeJm]^NNo<6ER*.DQ+;ir~3*rJZ{okKS');
define('LOGGED_IN_KEY',    '0Hn<n[9+H[{YgD~WC2g:SVep(XYyl%h<EG0EzFKr{)q^Xn{Ams(5Sa3)tErsfGed');
define('NONCE_KEY',        '-2NL:s*jsg@A.K%iVt#O}YwzS[j$Uq,a<Zxw<+~8Fk4Ws$mIaOTGDCPY*W|0wf%}');
define('AUTH_SALT',        'P$3;R[K:p[0fpYdvXc6&:C<]b6=dOvPNO^5Pn#-Y(l*$b1sri7dqZ&3F/zCIhxt4');
define('SECURE_AUTH_SALT', 'h&fr.^3Jx`81pBeOO#_l^9 j^+da`%J}nLLU4;.)T9+f.MTsBLSaJ$K%PDfmDg;@');
define('LOGGED_IN_SALT',   ',zVlM`yT_Kbf~X[cR?9f+Ah/ss4LhRrhg-PBCJfcUo=-/#i7xnON rk#o$!:6~f/');
define('NONCE_SALT',       '(Lq^0z{x4]3Ot/an9scinE1grwwk{4Z%%-y7b<N.VxhSo^?WK}IY90p_7o03 h9J');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_base_';

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
