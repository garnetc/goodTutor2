<?php

// File generated from our OpenAPI spec

namespace Stripe\StripeTaxForWooCommerce\SDK\lib\Service\Apps;

/**
 * Service factory class for API resources in the Apps namespace.
 *
 * @property SecretService $secrets
 */
class AppsServiceFactory extends \Stripe\StripeTaxForWooCommerce\SDK\lib\Service\AbstractServiceFactory {

	/**
	 * @var array<string, string>
	 */
	private static $classMap = array(
		'secrets' => SecretService::class,
	);

	protected function getServiceClass( $name ) {
		return \array_key_exists( $name, self::$classMap ) ? self::$classMap[ $name ] : null;
	}
}