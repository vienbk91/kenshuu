<?php
require_once dirname(__FILE__) . "/../Dao/MemberDao.php";
require_once dirname(__FILE__) . "/../model/member.php";
require_once dirname(__FILE__) . "/../util/Aspect.php";
require_once dirname(__FILE__) . "/../validator/MemberValidator.php";

use Fuel\Core\Controller;
use Fuel\Core\View;
use jp\boi\kenshuu\dao\MemberDao;
use jp\boi\kenshuu\model\Model_Member;
use jp\boi\kenshuu\util\Aspect;
use Fuel\Core\Log;
use jp\boi\kenshuu\validator\MemberValidator;
use Fuel\Core\Response;
use jp\boi\kenshuu\form\MemberForm;

class Controller_Member extends Controller {
	
	public function action_index() {
		$memberForm = new MemberForm();
		return Aspect::getViewForge(View::forge('member/index' , $memberForm->toView()) , $memberForm);
		
	}
	
	public function action_register() {
		try {
			$memberValidator = new MemberValidator();
			$validate = $memberValidator->validate();
			
			if ($validate->run()) {
				echo "Khong co loi nao ca";
				$memberDao = new MemberDao();
				$member = new Model_Member();
				
				$member->setNameFull($_POST['namefull']);
				$member->setEmail($_POST['email']);
				$member->setPoint($_POST['point']);
				$member->setObjectmaking($_POST['namefull']);
				$member->setObjectmodifying($_POST['namefull']);
				
				$member->setRemoving("NULL");
				$member->setObjectremoving("NULL");
				$member->setTyperemoving("NULL");
				
				$memberDao->runByAspect($member);
				
				return Aspect::getViewForge(View::forge('member/register'));
			} else {
				Response::redirect('member/');
			}
		} catch (Exception $error) {
			Log::error("Controller.action_register() Error :" , $error->getMessage());
			return false;
		}
	}
	
	
	public function action_search() {
		// 検索機能を実施
	}
	
	
}