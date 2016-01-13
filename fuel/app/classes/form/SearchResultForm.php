<?php
namespace jp\boi\kenshuu\form;

require_once dirname(__FILE__) . "./Form.php";

use Fuel\Core\Validation;
use jp\boi\kenshuu\form\Form;

class SearchResultForm implements Form {
	
	private $member;
	private $validation;
	
	public function excuteAutoBind(array $inputAll) {
		$this->member = $inputAll;
	}
	
	public function setValiator(Validation $validation) {
		$this->validation = $validation;
	}
	
	public function toView() {
		$member["member"] = $this->member;
		
		return $member;
	}
}