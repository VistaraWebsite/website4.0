<?php
# Database Configuration
define( 'DB_NAME', 'wp_vistarait' );
define( 'DB_USER', 'vistarait' );
define( 'DB_PASSWORD', 'LFkjwKz90fmCKY5GsRoJ' );
define( 'DB_HOST', '127.0.0.1' );
define( 'DB_HOST_SLAVE', '127.0.0.1' );
define('DB_CHARSET', 'utf8');
define('DB_COLLATE', 'utf8_unicode_ci');
$table_prefix = 'wp_';

# Security Salts, Keys, Etc
define('AUTH_KEY',         'yv[Zw:O*a<T/ApVNizrp D2-%K*jJj7ljzyo_v5/flH.) LnBY,#HNxO3&<ErSS ');
define('SECURE_AUTH_KEY',  '79[*(!LNihb&VQXjx+@Cb Jm_h#@FP[x,jD:Q()Z7oyK]KN-j,`2LB/RJE- P8Gj');
define('LOGGED_IN_KEY',    '=|Q`7+c:KRv(:r(W3<!j]L5{K(D8mzM{c_*@M+3r:}esKlFS&F*)txZ!.W9H2IR@');
define('NONCE_KEY',        '.gL /C|#</~@}ms<>yhLJ!Z*-q+bYg&-ypD]nctfEY<s-zgh.rHE-x)jTHzQnL+a');
define('AUTH_SALT',        ';I{5BRcG:A;{@hAnY0dV0yf>tf1]#+kx6$k{:XgM2flo@x!fy`3:%1PnWG`-6(6c');
define('SECURE_AUTH_SALT', 'gK68z6{3fqGuyAyv!&f%lKDv+wC[|H|M{^L7_H$EdrA?)ixu(W#r/S;3e:]S2}N|');
define('LOGGED_IN_SALT',   '3/Ny,^2I]&^&Rz[R5 |I+m3ELis]|wJr=X8/Dx>C^uA%4T<HQW=%Ch-C|jLK(zU2');
define('NONCE_SALT',       '3V|rh+j1Y1Orb5DK:fvH-E:8c<zi!4!`kavG)[@L/i~R=#rsI=1a1#[= /+bP*FT');


# Localized Language Stuff

define( 'WP_CACHE', TRUE );

define( 'WP_AUTO_UPDATE_CORE', false );

define( 'PWP_NAME', 'vistarait' );

define( 'FS_METHOD', 'direct' );

define( 'FS_CHMOD_DIR', 0775 );

define( 'FS_CHMOD_FILE', 0664 );

define( 'PWP_ROOT_DIR', '/nas/wp' );

define( 'WPE_APIKEY', 'aa9330dc7368495542fc78eb6a2282e0255cd35f' );

define( 'WPE_CLUSTER_ID', '100013' );

define( 'WPE_CLUSTER_TYPE', 'pod' );

define( 'WPE_ISP', true );

define( 'WPE_BPOD', false );

define( 'WPE_RO_FILESYSTEM', false );

define( 'WPE_LARGEFS_BUCKET', 'largefs.wpengine' );

define( 'WPE_SFTP_PORT', 2222 );

define( 'WPE_LBMASTER_IP', '' );

define( 'WPE_CDN_DISABLE_ALLOWED', false );

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

$wpe_all_domains=array ( 0 => 'vistarait.wpengine.com', 1 => 'www.vistarait.com', 2 => 'vistara.io', 3 => 'vistara.it', 4 => 'vistarait.com', );

$wpe_varnish_servers=array ( 0 => 'pod-100013', );

$wpe_special_ips=array ( 0 => '104.196.13.159', );

$wpe_ec_servers=array ( );

$wpe_largefs=array ( );

$wpe_netdna_domains=array ( );

$wpe_netdna_domains_secure=array ( );

$wpe_netdna_push_domains=array ( );

$wpe_domain_mappings=array ( );

$memcached_servers=array ( );
define('WPLANG', '');

# WP Engine ID


# WP Engine Settings






//define('WP_HOME', 'http://vistarait.wpengine.com');
//define('WP_SITEURL', 'http://vistarait.wpengine.com');
define('WP_DEBUG', false);

# That's It. Pencils down
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');
require_once(ABSPATH . 'wp-settings.php');

$_wpe_preamble_path = null; if(false){}
