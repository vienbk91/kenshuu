<?php
namespace jp\boi\kenshuu\util;

require_once dirname(__FILE__) . "/../form/Form.php";
require_once dirname(__FILE__) . "/../form/MemberForm.php";

use Fuel\Core\View;
use jp\boi\kenshuu\form\Form;
use jp\boi\kenshuu\form\MemberForm;

class Aspect {
	/**
	 * Ham dung de lay 1 instance cua view , voi 2 doi so truyen vao
	 * @param viewInstance Instance cua view duoc goi den bang View::forge
	 * @param $form Doi tuong form truyen vao
	 */
	public static function getViewForge(View $viewInstance , Form $form = null) {
		if ($viewInstance instanceof View) { // Kiem tra new $viewforge la 1 instance cua View
			if ($form instanceof MemberForm) {
				return $viewInstance;
			} else {
				return false;
			}
		} else {
			return false;
		}
	}
}