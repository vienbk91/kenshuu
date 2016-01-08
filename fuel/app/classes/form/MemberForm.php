<?php
namespace jp\boi\kenshuu\form;

require_once dirname(__FILE__) . "./Form.php";

use Fuel\Core\Validation;
use jp\boi\kenshuu\form\Form;

class MemberForm implements Form {
	
	private $namefull;
	private $email;
	private $point;
	private $validation = null;
	
	public function excuteAutoBind(array $inputAll) {
		
		$this->namefull = trim($inputAll['namefull']);
		$this->email = trim($inputAll['email']);
		$this->point = trim($inputAll['point']);
	}
	
	public function setValiator(Validation $validation) {
		$this->validation = $validation;
	}
	
	public function getValidator(){
		return $this->validation;
	}
	
	public function toView(){
		
		$member = array();
		if (empty($this->namefull)) {
			$member["namefull"] = "";
		} else {
			$member["namefull"] = $this->namefull;
		}
		
		if (empty($this->email)) {
			$member["email"] = "";
		} else {
			$member["email"] = $this->email;
		}
		
		if (empty($this->point)) {
			$member["point"] = 0;
		} else {
			$member["point"] = $this->point;
		}
		
		if (empty($this->validation)) {
			$member["validation"] = null;
		} else {
			$member["validation"] = $this->validation;
		}
		
		return $member;
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
	
	public function setPoint($point) {
		$this->point = $point;
	}
	
	public function getPoint() {
		return $this->point;
	}
}