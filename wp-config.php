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
define( 'DB_NAME', 'local' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

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
define('AUTH_KEY',         'IC0OCuk+KMwezxPCBHnSTBTHi/o33ItJR5QCPg/EyQKWZfajpQrRMxMaW4NLd1cm/9wiXnoWbp+id0ZaI1CSyQ==');
define('SECURE_AUTH_KEY',  'tNMm+ozkPxC3hOm8D5RpKiZym15xi7VkzDPWCZx5klaMR4xsqJm5fflgrnfa8dt9g/h5/FSnSFJW8WiUTKfFGA==');
define('LOGGED_IN_KEY',    'Og+SGe22XZU8+BIMU06L+586MZKCGnv26hvjQW0hJsCgIkbUh1ReXcRPtyjtWn7XuUkNHU6lynr4lpPzk+Q4cg==');
define('NONCE_KEY',        'OJAvC51YO/85bhFCBcWhW/VZsvds9BP7mpJ8VYnWRMa8lrIIzIEF56C6gnwWEEH9bX8X97HGm2msC9bSpqYJ3w==');
define('AUTH_SALT',        'EoRkTDxBjX9jc12EiGnp0Ut1ibxvLj8TQBzk7feTUm8KCjZfBZamZWwgPNqidsrPwKIABnAqO2MeriSeyDn8Bw==');
define('SECURE_AUTH_SALT', 'Rq+H38nAkwB3JznWW8C8gyqi9BHyKEg+s47Rg6Q9YzHmq6WvotlNetBMEcouFUm2idItnri+isRfU8Nu1ICvww==');
define('LOGGED_IN_SALT',   '2d5FBGbDxeBicXljjh/ol8rLoikCzJcdgynrkwb6on5gA7y5ojWt6+YFHfFGoRE7CvZMdoeParwWhfai0Ag0Vg==');
define('NONCE_SALT',       'Tfkpp0TdFyqiLCob0D2yxo5VioC0VHecDRPIJBIEFNzCGpUONZBkMvXFcHxSxsiOfGU5BvjQmbWf4MpgdZwq7w==');

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';




/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
