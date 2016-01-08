<?php
namespace jp\boi\kenshuu\form;

require_once dirname ( __FILE__ ) . "./Form.php";

use Fuel\Core\Validation;
use jp\boi\kenshuu\form\Form;

class SearchResultForm implements Form {
	
	private $member;
	private $validation;
	
	public function excuteAutoBind(array $inputAll) {
		if (! empty ( $inputAll )) {
			$k = 0;
			foreach ( $inputAll as $item ) {
				$this->member [$k] = $item;
				$k ++;
			}
		}
	}
	
	public function setValiator(Validation $validation) {
		$this->validation = $validation;
	}
	
	public function toView() {
		$member ["member"] = $this->member [1];
		return $member;
	}
}