<?php
namespace jp\boi\kenshuu\aspect;

require_once dirname(__FILE__) . "/Interceptor.php";

class Aspect {
	
	private $clazz;
	private $object;
	private $interceptors = array();
	
	public function __construct($object) {
		if (is_null($object) || !isset($object) || !is_object($object)) {
			throw new Exception('Aspect.__construct() Error !!');
		}
		
		$this->object = $object;
		$this->clazz = new \ReflectionClass($object);
	}
	
	public function executePointcut($joinPoint, Interceptor $interceptor) {
		
		if (!$this->clazz->hasMethod($joinPoint)) {
			throw new Exception('Aspect.pointcut() Error !!');
		}
		
		$this->interceptors[$joinPoint] = $interceptor;
	}
	
	public function run($joinPoint, $args) {
		
		if (!array_key_exists($joinPoint, $this->interceptors)) {
			throw new Exception('Aspect.run() Error !!');
		}
		
		$interceptor = $this->interceptors[$joinPoint];
		
		return $interceptor->invoke($this->object, $this->clazz->getMethod($joinPoint), $args);
	}
}