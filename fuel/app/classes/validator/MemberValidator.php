<?php
namespace jp\boi\kenshuu\validator;

use Fuel\Core\Validation;

class MemberValidator {
	private $validator;
	
	public function validate() {
		
		$validation = Validation::forge ();
		
		$validation->add ( 'namefull', '氏名' )->add_rule ( 'required' );
		$validation->add ( 'email', '会員メール' )->add_rule ( 'required' )->add_rule ( 'required' )->add_rule ( 'valid_email' );
		$validation->add ( 'point', 'ポイント' )->add_rule ( 'required' )->add_rule('valid_string', array('numeric'));
		
		$this->validator = $validation;
		
		return $this->validator;
	}
	
	public function run() {
		return $this->validator->run ();
	}
	
	public function showError() {
		return $this->validator->show_errors ();
	}
}