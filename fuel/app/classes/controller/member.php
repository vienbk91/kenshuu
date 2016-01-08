<?php
require_once dirname ( __FILE__ ) . "/../Dao/MemberDao.php";
require_once dirname ( __FILE__ ) . "/../model/member.php";
require_once dirname ( __FILE__ ) . "/../util/Aspect.php";
require_once dirname ( __FILE__ ) . "/../validator/MemberValidator.php";
require_once dirname ( __FILE__ ) . "/../validator/SearchValidator.php";
require_once dirname ( __FILE__ ) . "/../service/MemberService.php";
require_once dirname ( __FILE__ ) . "/../form/MemberForm.php";
require_once dirname ( __FILE__ ) . "/../form/SearchForm.php";
require_once dirname ( __FILE__ ) . "/../form/SearchResultForm.php";

use Fuel\Core\Controller;
use Fuel\Core\Input;
use Fuel\Core\View;
use jp\boi\kenshuu\dao\MemberDao;
use jp\boi\kenshuu\util\Aspect;
use jp\boi\kenshuu\validator\MemberValidator;
use jp\boi\kenshuu\form\MemberForm;
use jp\boi\kenshuu\service\MemberService;
use jp\boi\kenshuu\form\SearchForm;
use jp\boi\kenshuu\validator\SearchValidator;
use jp\boi\kenshuu\form\SearchResultForm;

class Controller_Member extends Controller {
	
	public function action_index() {
		
		$memberForm = new MemberForm ();
		return Aspect::getViewForge ( View::forge ( 'member/index', $memberForm->toView () ), $memberForm );
	}
	
	public function action_register() {
		
		$memberForm = new MemberForm ();
		$memberForm->excuteAutoBind ( Input::all () );
		
		$memberValidation = new MemberValidator ();
		$validation = $memberValidation->validate ();
		$memberForm->setValiator ( $validation );
		
		$memberService = new MemberService ();
		
		if ($validation->run ()) {
			
			$memberService->register ( $memberForm );
			return Aspect::getViewForge ( View::forge ( 'member/register', $memberForm->toView () ), $memberForm );
			
		} else {
			
			return Aspect::getViewForge ( View::forge ( 'member/index', $memberForm->toView () ), $memberForm );
			
		}
	}
	
	public function action_search() {
		
		return Aspect::getViewForge ( View::forge ( 'member/search' ), null );
		
	}
	
	public function action_searchresult() {
		
		$searchForm = new SearchForm ();
		$searchForm->excuteAutoBind ( Input::all () );
		
		$searchValidation = new SearchValidator ();
		$validation = $searchValidation->validate ();
		$searchForm->setValiator ( $validation );
		
		$memberService = new MemberService ();
		
		if ($validation->run ()) { 
			
			$result = $memberService->search ( $searchForm );
			
			$searchResultForm = new SearchResultForm ();
			$searchResultForm->excuteAutoBind ( ( array ) $result );
			return Aspect::getViewForge ( View::forge ( 'member/searchresult', $searchResultForm->toView () ), $searchResultForm );
			
		} else {
			
			return Aspect::getViewForge ( View::forge ( 'member/search', $searchForm->toView () ), $searchForm );
			
		}
	}
}