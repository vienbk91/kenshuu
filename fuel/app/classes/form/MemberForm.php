<?php
namespace jp\boi\kenshuu\form;

require_once dir_name(__FILE__) . "./Form.php";

use Fuel\Core\Validation;
use jp\boi\kenshuu\form\Form;

class MemberForm implements Form {
	private $namefull;
	private $email;
	private $point;
	private $validator = null;
	
	/**
	 * Ham thuc thi tu dong lien ket
	 * 
	 */
	public function excuteAutoBind(array $inputAll) {
		$this->namefull = trim($inputAll['namefull']);
		$this->email = trim($inputAll['email']);
		$this->point = trim($inputAll['point']);
	}
	
	public function setValiator(Validation $validator) {
		$this->validator = $validator;
	}
	
	public function toView() {
		$member = array();
		if(empty($this->namefull)) {
			$member["namefull"] = "";
		} else {
			$member["namefull"] = $this->namefull;
		}
		
		if(empty($this->email)) {
			$member["email"] = "";
		} else {
			$member["email"] = $this->email;
		}
	}
	
	public function setNamefull($namefull) {
		$this->namefull = $namefull;
	}
	
	public function getNamefull() {
		return $this->namefull;
	}
	
	public function setEmail($email) {
		$this->email = $email;
	}
	
	public function getEmail() {
		return $this->email;
	}
	
	public function setValidator($validator) {
		$this->validator = $validator;
	}
	
	public function getValidator() {
		return $this->validator;
	}
}