<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, and ABSPATH. You can find more information by visiting
 * {@link http://codex.wordpress.org/Editing_wp-config.php Editing wp-config.php}
 * Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

/** Detect if SSL is used. This is required since we are
 * terminating SSL either on CloudFront or on ELB */
if (($_SERVER['HTTP_CLOUDFRONT_FORWARDED_PROTO'] == 'https') OR ($_SERVER['HTTP_X_FORWARDED_PROTO'] == 'https')) {
    $_SERVER['HTTPS'] = 'on';
}


define('WP_REDIS_HOST', 'wp-redis-knight.fca8vv.0001.use1.cache.amazonaws.com');

define('WP_HOME', 'https://dev.knight-enterprises.com');
define('WP_SITEURL', 'https://dev.knight-enterprises.com');

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'wpdb');

/** MySQL database username */
define('DB_USER', 'freidamachoi');

/** MySQL database password */
define('DB_PASSWORD', 'LumE$R$dKqz3eQaw8hLR');

/** MySQL hostname */
define('DB_HOST', 'wpdb.clqf9esii33r.us-east-1.rds.amazonaws.com');

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
define('AUTH_KEY', '+A__*;5jk,|U+Y_T_ve`9?f<(@bS>knZ*o;%3W@%#Z${* _Quo{wm(+DI=3yojr(');
define('SECURE_AUTH_KEY', '=<le=?A+*a&4ITXXYEp5LRNZL13|e@&|5cRP^%I^?L;L$UrtKlBQIqt|4uDR~{(P');
define('LOGGED_IN_KEY', 'ykC]&Wve(-As8H{8yh(Wmc(a:^Yg6E.kEuX*tVN:u1HPAZDa</hkvGK2o:bW->dw');
define('NONCE_KEY', 'BETeCtDhb|7Ii:.`3g{pPj+Buw-n4k0ew,-o6/Bc;PFRtS|x/ -Pklm83T3Q>k2;');
define('AUTH_SALT', '-+ /9h7;B^1&WB~JacP!Hsl.|.)*k6HbEMi0?d+_}d%:6fM,eXVUG<`+sEBNy|9?');
define('SECURE_AUTH_SALT', '`8EPvF21wZz]Epuaf:Yjl;JwGTyDab:^}bYB_Hi X(dYN[%b(0I(+|!bt2>!Fh>+');
define('LOGGED_IN_SALT', '?@1Hu0vR5M-K+}6|L}ONF[m9s3@To@mwO@u/9F|||x72pI+9?e$xcSZFXqUK`|Jk');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

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
if (!defined('ABSPATH'))
    define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
