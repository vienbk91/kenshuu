<?php
namespace jp\boi\kenshuu\aspect;

require_once dirname ( __FILE__ ) . "/Interceptor.php";

use jp\boi\kenshuu\model\Model_Member;

class InsertInterceptor implements Interceptor {
	
	public function invoke($object, \ReflectionMethod $method, $args = null) {
		if ($args instanceof Model_Member) {
			
			$member = $args;
			
			$member->setTypemaking ( 3 );
			$member->setTypemodifying ( 3 );
			
			$member->setObjectmaking ( "InsertInterceptor.invoke()" );
			$member->setObjectmodifying ( "InsertInterceptor.invoke()" );
			
			$member->setMaking ( "NOW()" );
			$member->setModifying ( "NOW()" );
			
			$member->setRemoving ( "NULL" );
			$member->setObjectremoving ( "NULL" );
			$member->setTyperemoving ( "NULL" );
			
			$member->setRemoved ( "false" );
		}
		
		$returnValue = $method->invoke ( $object, $args );
		
		return $returnValue;
	}
}