<?php
namespace jp\boi\kenshuu\aspect;

require_once dirname(__FILE__) . "/Interceptor.php";

class Aspect {
	private $clazz;
	private $object;
	private $interceptors = array();

	/**
	 * Ham khoi tao doi tuong Aspect
	 */
	public function __construct($object) {
		if (is_null($object) || !isset($object) || !is_object($object)) {
			throw new Exception('Aspect.__construct() Error !!');
		}
		$this->object = $object;
		$this->clazz = new \ReflectionClass($object);
	}

	/**
	 * Thuc thi ngung tai point
	 * @param jointPoint Ten method da duoc dinh nghia san
	 * @param intercepter Doi tuong cua lop Interceptor(lop phan chieu)
	 */
	public function executePointcut($joinPoint, Interceptor $interceptor) {
		// Kiem tra $joinPoint co phai la 1 method da duoc dinh nghia
		// $this->clazz duoc dinh nghia o contructor chinh la lop goi den khi khoi tao Aspect
		if (!$this->clazz->hasMethod($joinPoint)) {
			throw new Exception('Aspect.pointcut() Error !!');
		}
		/* 
		 * Neu no la ham da duoc dinh nghia thi ta thuc thi interceptor tai thoi diem do
		 * Gan doi tuong interceptor vao lam 1 ptu cua mang 
		 * $interceptors('joinPoint' => $interceptor)
		*/
		$this->interceptors[$joinPoint] = $interceptor;
	}

	/**
	 * Thuc thi aspect
	 * @param joinPoint Method duoc goi den
	 * @param args Gia tri mang truyen vao method 'joinPoint'
	 */
	public function run($joinPoint, $args) {
		// Kiem tra $joinPoin co dung la 1 key cua mang $interceptors
		if (!array_key_exists($joinPoint, $this->interceptors)) {
			throw new Exception('Aspect.run() Error !!');
		}
		// Neu dung thi lay gia tri tuong ung voi key = 'joinPoint'
		$interceptor = $this->interceptors[$joinPoint];
		// Tien hanh thuc thi method 'joinPoint' cua doi tuong $object
		return $interceptor->invoke($this->object, $this->clazz->getMethod($joinPoint), $args);
	}
}