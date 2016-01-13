<?php
namespace jp\boi\kenshuu\form;

require_once dirname(__FILE__) . "./Form.php";

use Fuel\Core\Validation;


class ContactForm implements Form {
	private $namefull;
	private $email;
	private $comment;
	private $validation = null;
	
	public function excuteAutoBind(array $inputAll) {
		$this->namefull = trim($inputAll['namefull']);
		$this->email = trim($inputAll['email']);
		$this->comment = trim($inputAll['comment']);
	}
	
	public function setValiator(Validation $validation) {
		$this->validation = $validation;
	}
	
	public function getValidator() {
		return $this->validation;
	}
	
	
	public function toView() {
		$contact = array();
		
		if (empty($this->namefull)) {
			$contact["namefull"] = "";
		} else {
			$contact["namefull"] = $this->namefull;
		}
		
		if (empty($this->email)) {
			$contact["email"] = "";
		} else {
			$contact["email"] = $this->email;
		}
		
		if (empty($this->comment)) {
			$contact["comment"] = "";
		} else {
			$contact["comment"] = $this->comment;
		}
		
		
		if (empty($this->validation)) {
			$contact["validation"] = null;
		} else {
			$contact["validation"] = $this->validation;
		}
		
		return $contact;
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
	
	public function setComment($comment) {
		$this->comment = $comment;
	}
	
	public function getComment() {
		return $this->comment;
	}
	
}