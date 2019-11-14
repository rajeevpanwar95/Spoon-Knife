<?php
/**
 * Pressjitsu User Configuration
 */

if ( function_exists( 'pj_user_config' ) )
	return;

function pj_user_config() {
	static $config;

	if ( isset( $config ) )
		return $config;

	$config = array();

	// page cache configuration
	$config['page_cache'] = array(
		'redis_host' => 'one3one.fvxazm.0001.use1.cache.amazonaws.com',
		'redis_port' => 6379,
		'ignore_cookies' => array( '__gads', 'wordpress_test_cookie', '__qca', '_ga' ),
	);

	if ( gethostname() == 'staging.one3one.pjtsu.com' )
		$config['page_cache']['redis_host'] = '127.0.0.1';

	$config['optimoxy'] = array(
		'optimoxy_domain' => 'static.131method.com',
		'optimoxy_key' => 'r7ZCxFotiJnjDbQTwwnc1tgJ5FpKp2vl',
	);

	// disable CDN as per ticket #1335
	unset( $config['optimoxy'] );

	return $config;
}
