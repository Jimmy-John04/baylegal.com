<?php
//Begin Really Simple Security session cookie settings
@ini_set('session.cookie_httponly', true);
@ini_set('session.cookie_secure', true);
@ini_set('session.use_only_cookies', true);
//END Really Simple Security cookie settings
//Begin Really Simple Security key
define('RSSSL_KEY', '9du9V88K3i8jVzkSrgCEtS0zLsm4OPXrxWg5RFuGX4JJrTfmDJtLbfMiUetvyMpd');
//END Really Simple Security key
# Database Configuration
define( 'DB_NAME', 'wp_baylegal' );
define( 'DB_USER', 'baylegal' );
define( 'DB_PASSWORD', 'hLPyNMeJ90FiEzxQxDB5' );
define( 'DB_HOST', '127.0.0.1:3306' );
define( 'DB_HOST_SLAVE', '127.0.0.1:3306' );
define('DB_CHARSET', 'utf8');
define('DB_COLLATE', 'utf8_unicode_ci');
$table_prefix = 'wp_enu1avr72w_';
# Security Salts, Keys, Etc
define('AUTH_KEY',         '3i+U1ZqViCVRf~u^fLCAq4WX&W0_OrAZpQh8+GZY3xhjv9%d8R#l$0-?P0!YQU?x');
define('SECURE_AUTH_KEY',  '6kW)H6i$ZZUFmD(,o$,*ll&5r~vW6nQTa&%Qeg(cf(rfxjXGzdW.D3SYq6a+D$L~');
define('LOGGED_IN_KEY',    'R~Yz5D1r@&vK#AGrm)5ZLj-z9d9$4jc6_hYhcV@MsC&Mx5*W~Jl=n&3dez$nt+qW');
define('NONCE_KEY',        'w_k?MUMz1I@S2Dl=H&8$l*a3sBrbLADfH~Av#3r6)6qUt%&_+oMpBmUuQp^YS#JB');
define('AUTH_SALT',        'mCpx5??t)yS..Ea?k5T&b?uR#B#g3$hJb3xUYALF1PHt80g&$+pNl.o8ZGtialKS');
define('SECURE_AUTH_SALT', '0,S,bF6n.#%D?iL,@(LfHS!)C~pR=Ba6,+C-qKb@tM4Q(E^Evd)~E7~TIRblfiz$');
define('LOGGED_IN_SALT',   '&NrsYH)H%MALxodcon6XsOtCkDU8^YD4lPLoA.FJw.5NgDos$JdxpI=?T(NJ5xIv');
define('NONCE_SALT',       '3OjBdvH--,58v13*tpyskaxe6G6N(6Ux*hVJ)f-0Uv28G%AI4NlMt2Z$@*F33~#q');
# Localized Language Stuff
define( 'WP_CACHE', TRUE );
define( 'WP_AUTO_UPDATE_CORE', false );
define( 'PWP_NAME', 'baylegal' );
define( 'FS_METHOD', 'direct' );
define( 'FS_CHMOD_DIR', 0775 );
define( 'FS_CHMOD_FILE', 0664 );
define( 'WPE_APIKEY', '007fae43320c0a0e5085848ebdb8888e15af9c62' );
define( 'WPE_CLUSTER_ID', '403906' );
define( 'WPE_CLUSTER_TYPE', 'pod' );
define( 'WPE_ISP', true );
define( 'WPE_BPOD', false );
define( 'WPE_RO_FILESYSTEM', false );
define( 'WPE_LARGEFS_BUCKET', 'largefs.wpengine' );
define( 'WPE_SFTP_PORT', 2222 );
define( 'WPE_SFTP_ENDPOINT', '34.148.30.145' );
define( 'WPE_LBMASTER_IP', '' );
define( 'WPE_CDN_DISABLE_ALLOWED', true );
define( 'DISALLOW_FILE_MODS', FALSE );
define( 'DISALLOW_FILE_EDIT', FALSE );
define( 'DISABLE_WP_CRON', false );
define( 'WPE_FORCE_SSL_LOGIN', false );
define( 'FORCE_SSL_LOGIN', false );
/*SSLSTART*/ if ( isset($_SERVER['HTTP_X_WPE_SSL']) && $_SERVER['HTTP_X_WPE_SSL'] ) $_SERVER['HTTPS'] = 'on'; /*SSLEND*/
define( 'WPE_EXTERNAL_URL', false );
define( 'WP_POST_REVISIONS', FALSE );
define( 'WPE_WHITELABEL', 'wpengine' );
define( 'WP_TURN_OFF_ADMIN_BAR', false );
define( 'WPE_BETA_TESTER', false );
umask(0002);
$wpe_cdn_uris=array ( );
$wpe_no_cdn_uris=array ( );
$wpe_content_regexs=array ( );
$wpe_all_domains=array ( 0 => 'baylegal.com', 1 => 'baylegal.wpengine.com', 2 => 'baylegal.wpenginepowered.com', 3 => 'hub.baylegal.com', 4 => 'internal.baylegal.com', 5 => 'www.baylegal.com', );
$wpe_varnish_servers=array ( 0 => '127.0.0.1', );
$wpe_special_ips=array ( 0 => '35.196.238.224', 1 => 'pod-403906-utility.pod-403906.svc.cluster.local', );
$wpe_netdna_domains=array ( );
$wpe_netdna_domains_secure=array ( );
$wpe_netdna_push_domains=array ( );
$wpe_domain_mappings=array ( );
$memcached_servers=array ( );
define('WPLANG','');
# WP Engine ID
# WP Engine Settings
# That's It. Pencils down
if ( !defined('ABSPATH') )
	define('ABSPATH', __DIR__ . '/');
require_once(ABSPATH . 'wp-settings.php');
