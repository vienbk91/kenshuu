<?php
namespace jp\boi\kenshuu\service;

use jp\boi\kenshuu\dao\MembersDao;
use jp\boi\kenshuu\form\MemberForm;
use jp\boi\kenshuu\model\Model_Members;
use jp\boi\kenshuu\form\SearchForm;

class MemberService {
	
	public function register(MemberForm $memberForm) {
		
		$member = new Model_Members();
		
		$member->namefull = $memberForm->getNamefull();
		$member->email = $memberForm->getEmail();
		$member->point = $memberForm->getPoint();

		$memberDao = new MembersDao();
		$memberDao->runInsertByAspectBefore();
		return $memberDao->runInsertByAspect($member);
	}
	
	public function search(SearchForm $searchForm) {
		
		$searchKey = $searchForm->getSearchkey();
		
		$memberDao = new MembersDao();
		$memberDao->runSelectByAspectBefore();
		return $memberDao->runSelectByAspect($searchKey);
	}
}