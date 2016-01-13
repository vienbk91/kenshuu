<?php
namespace jp\boi\kenshuu\validator;

use Fuel\Core\Validation;
class ContactValidator {
	private $validator;
	
	public function validate() {
		$validation = Validation::forge();
		
		$validation->add('namefull', '氏名')->add_rule('required');
		$validation->add ('email', 'メール')->add_rule('required')->add_rule('required')->add_rule('valid_email');
		$validation->add('comment', '内容')->add_rule('required');
	
		$this->validator = $validation;
		
		return $this->validator;
	}
	
	public function run() {
		return $this->validator->run();
	}
	
	public function show_error() {
		return $this->validator->show_errors();
	}
}