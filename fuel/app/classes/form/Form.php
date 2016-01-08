<?php
namespace jp\boi\kenshuu\form;

use Fuel\Core\Validation;

interface Form {
	public function excuteAutoBind(array $inputAll);
	public function toView();
	public function setValiator(Validation $validator);
}