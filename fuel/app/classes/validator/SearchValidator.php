<?php
namespace jp\boi\kenshuu\validator;

use Fuel\Core\Validation;

class SearchValidator {
	
	private $validator;
	
	public function validate() {
		$validation = Validation::forge();
		$validation->add('searchkey', '検索キーワード')->add_rule('required');
		$this->validator = $validation;
		
		return $this->validator;
	}
	
	public function run() {
		return $this->validator->run();
	}
	
	public function showError() {
		return $this->validator->show_errors();
	}
}