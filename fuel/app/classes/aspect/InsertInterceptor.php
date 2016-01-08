<?php
namespace jp\boi\kenshuu\aspect;

require_once dirname(__FILE__) . "/Interceptor.php";

use jp\boi\kenshuu\model\Model_Member;

class InsertInterceptor implements Interceptor {
	/**
	 * Ham yeu cau thuc thi interceptor(phan chieu)
	 * @param object Doi tuong duoc phan chieu
	 * @param method Method cua doi tuong duoc phan chieu
	 * @param args Tham so truyen vao trong method
	 * 
	 */
	public function invoke($object, \ReflectionMethod $method, $args = null) {
		
		if ($args instanceof Model_Member) { // Kiem tra neu $args la 1 doi tuong cua Model_Member
			
			$member = $args;
			
			$member->setTypemaking(3);
			$member->setTypemodifying(3);
			
			$member->setObjectmaking("InsertInterceptor.invoke()");
			$member->setObjectmodifying("InsertInterceptor.invoke()");

			$member->setMaking("NOW()");
			$member->setModifying("NOW()");
			
			$member->setRemoved("false");
		}
		
		$returnValue = $method->invoke($object , $args);
		
		return $returnValue;
	}
}