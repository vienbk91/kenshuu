<?php
namespace jp\boi\kenshuu\aspect;

interface Interceptor {
	public function invoke($object, \ReflectionMethod $method, $args = null);
}