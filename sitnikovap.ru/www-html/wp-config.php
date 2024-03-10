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
 * * ABSPATH
 *
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'u2443795_wp3' );

/** Database username */
define( 'DB_USER', 'u2443795_wp3' );

/** Database password */
define( 'DB_PASSWORD', 'p.Sim.2806' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

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
define( 'AUTH_KEY',         'z0mojikn1o5ftojbcg8ruxrjpaxro27urcellgluyp7destcff3b298gf1nsc2fq' );
define( 'SECURE_AUTH_KEY',  'gt3nn6dvefvwopcm8dajngl5vjsk9fmhrjy95ft9g0jjtsza6lwha66buvkny1hc' );
define( 'LOGGED_IN_KEY',    'kl2l29iandndog9rn2hybwiy399scv2cl6vp6ntjkb3azcrsjac1prbx6hd3bh1w' );
define( 'NONCE_KEY',        'ibzglhtt4ouol69hwc3ujiqqmhqkvswuiigwy5wefqdtitawda6tbm6aa1u4gguy' );
define( 'AUTH_SALT',        '2ezlrgpbudrabadng0pudyuiti599z689tyufxl8skozaixwl5badkxoa57tozcj' );
define( 'SECURE_AUTH_SALT', 'c3f8pkxgw0spsjt66dzioxarthqwqxqb0f33fxbkuuvcmxt2jmaz2itv3mp54mcz' );
define( 'LOGGED_IN_SALT',   'yalgaaeg3bxmmbcelmhjohrbkhnyklmt9rdeghjjjg7hdzuylecab1wdp8o3h0fu' );
define( 'NONCE_SALT',       '0uzzlzbln3f70muej01tb8qwgq1pfdvbckfvgqosarfrmlt90brdhxdxcnsy9g2j' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wpjf_';

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
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
