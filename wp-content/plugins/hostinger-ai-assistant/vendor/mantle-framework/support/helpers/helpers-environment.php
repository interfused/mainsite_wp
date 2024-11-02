<?php
/**
 * Environment helpers.
 *
 * @package Mantle
 */

namespace Mantle\Support\Helpers;

/**
 * Check if we are on a hosted environment
 *
 * @return bool
 */
function is_hosted_env(): bool {
	return app()->is_environment( 'production' );
}

/**
 * Check if the current environment is a local developer environment.
 *
 * @return bool
 */
function is_local_env(): bool {
	return ! is_hosted_env();
}
