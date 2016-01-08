<?php
namespace jp\boi\kenshuu\util;

require_once dirname(__FILE__) . "/../form/Form.php";
require_once dirname (__FILE__) . "/../form/MemberForm.php";

use Fuel\Core\View;
use jp\boi\kenshuu\form\Form;
use jp\boi\kenshuu\form\MemberForm;

class Aspect {

	public static function getViewForge(View $viewInstance, Form $form = null) {
		
		if ($viewInstance instanceof View) {
			return $viewInstance;
		} else {
			return false;
		}
		
	}
}