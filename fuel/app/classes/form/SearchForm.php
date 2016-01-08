<?php
namespace jp\boi\kenshuu\form;

use Fuel\Core\Validation;

require_once dirname(__FILE__) . "./Form.php";

class SearchForm implements Form {
	
	private $searchKey;
	private $validation;
	
	public function excuteAutoBind(array $inputAll) {
		$this->searchKey = trim($inputAll["searchkey"]);
	}
	
	public function setValiator(Validation $validation) {
		$this->validation = $validation;
	}
	
	public function getValidation(){
		return $this->validation;
	}
	
	public function toView(){
		
		$search = array ();
		
		if (empty($this->searchKey)) {
			$search['searchkey'] = "";
		} else {
			$search['searchkey'] = $this->searchKey;
		}
		
		if (empty($this->validation)) {
			$search["validation"] = null;
		} else {
			$search["validation"] = $this->validation;
		}
		
		return $search;
	}
	
	public function setSearchkey($searchkey) {
		$this->searchKey = $searchkey;
	}
	
	public function getSearchkey() {
		return $this->searchKey;
	}
}