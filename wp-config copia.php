<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, and ABSPATH. You can find more information by visiting
 * {@link https://codex.wordpress.org/Editing_wp-config.php Editing wp-config.php}
 * Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'qcd286');

/** MySQL database username */
define('DB_USER', 'qcd286');

/** MySQL database password */
define('DB_PASSWORD', 'lotces30030');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

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
define('AUTH_KEY',         '-5YtSi:qEv4=CBj<p%j+/_S-c=Q?LYLB-C,itA<LmfnO/IML>OqJ|)&I4f&enEip');
define('SECURE_AUTH_KEY',  'V>_]#/v(U)gBHijy!M1pM`ZT5kYi*|@v{MM9TtOop<z;N,5_7dY]R]jae4ufqf|j');
define('LOGGED_IN_KEY',    '+O|?7D^LR[?doBxk-3Bb;&]!igbKP~fMqB*VuyrtX4np72A(Z)<jzmS__[~oGD[*');
define('NONCE_KEY',        'j]fATR0rLp:MODUu+{7Lm)+BTOHH!N;ZjGgl(&$^ MVfQqJ 6z|)9>%b:#HfTuiA');
define('AUTH_SALT',        'xWf,xQ@o>*SsRJ@vr1h{qNy2cI?#eF}SmE4_~I1r%QJIP4-E-Fz-XgW+#T/GmTHJ');
define('SECURE_AUTH_SALT', '|d~Eqgo3.7E6@hp@ rF6OBkG#EbpmBy7[r%p+5lER|G,sNpk,J`y|[#S]ZU$c`|*');
define('LOGGED_IN_SALT',   ';BSJese-iT,Ps<k&r5l)`i@>LBJ6k#Dxw?^&FF-F{:`uUJ`J-Cw|R!<chbrKQG{v');
define('NONCE_SALT',       'x/&R!vIlUa7.]TN5uMM$Ul`}RBGwf<_?|m<<tP)wM8qxeKim~FXK=d.stimS9:xw');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
