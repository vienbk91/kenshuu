<?php
namespace jp\boi\kenshuu\validator;

use Fuel\Core\Validation;

class MemberValidator {
	
	private $validator;
	
	/**
	 * Khoi tao doi tuong validate cho lop MemberValidator
	 */
	public function validate() {
		// Tao 1 instance cua lop Validaton
		$validator = Validation::forge();
		// Thiet lap quy tac cho cac thuoc tinh can check
		$validator->add('namefull' , '氏名')->add_rule('required');
		$validator->add('email' , '会員メール')->add_rule('required');
		
		$this->validator = $validator;
		
		return $this->validator;
	}
	
	/**
	 * Thuc thi validator
	 */
	public function run() {
		return $this->validator->run();
	}
	
	/**
	 * Hien thi error
	 */
	public function showError() {
		return $this->validator->show_errors();
	}
	
}