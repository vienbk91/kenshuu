<?php
namespace jp\boi\kenshuu\aspect;

/**
 * Interceptor Interface
 * @author chu
 *
 */
interface Interceptor {
	public function invoke($object, \ReflectionMethod $method, $args = null);
}