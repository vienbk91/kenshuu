<?php
namespace jp\boi\kenshuu\aspect;

require_once dirname(__FILE__) . "/Interceptor.php";

use jp\boi\kenshuu\model\Model_Members;

class InsertInterceptor implements Interceptor {
	
	public function invoke($object, \ReflectionMethod $method, $args = null) {
		if ($args instanceof Model_Members) {
			
			$member = $args;
			
			$member->typemaking = 3;
			$member->typemodifying = 3;
			
			$member->objectmaking = "InsertInterceptor.invoke()";
			$member->objectmodifying = "InsertInterceptor.invoke()";
			
			$datetime = gmdate('Y-m-d H:i:s', strtotime("now"));
			$member->making = $datetime;
			$member->modifying = $datetime;
			
			$member->removing = null;
			$member->typeremoving = null;
			$member->objectremoving = null;
			
			$member->removed = false;
			
		}
		
		$returnValue = $method->invoke($object, $args);
		
		return $returnValue;
	}
}