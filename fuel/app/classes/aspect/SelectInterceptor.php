<?php
namespace jp\boi\kenshuu\aspect;

require_once dirname ( __FILE__ ) . "/Interceptor.php";

use jp\boi\kenshuu\aspect\Interceptor;

class SelectInterceptor implements Interceptor {
	public function invoke($object, \ReflectionMethod $method, $args = null) {
		$resultValue = $method->invoke ( $object, $args );
		
		return $resultValue;
	}
}