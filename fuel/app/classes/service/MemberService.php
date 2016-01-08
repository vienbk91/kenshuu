<?php

use jp\boi\kenshuu\dao\MemberDao;
use jp\boi\kenshuu\form\MemberForm;


class MemberService {
	public function register(MemberForm $memberForm) {
		$memberDao = new MemberDao();
	}
}