<?php
namespace jp\boi\kenshuu\dao;

require_once dirname(__FILE__) . "/Dao.php";
require_once dirname(__FILE__) . "/../model/members.php";
require_once dirname(__FILE__) . "/../aspect/Aspect.php";
require_once dirname(__FILE__) . "/../aspect/InsertInterceptor.php";
require_once dirname(__FILE__) . "/../aspect/SelectInterceptor.php";

use Fuel\Core\Log;
use jp\boi\kenshuu\model\Model_Members;
use jp\boi\kenshuu\aspect\Aspect;
use jp\boi\kenshuu\aspect\InsertInterceptor;
use jp\boi\kenshuu\aspect\SelectInterceptor;

class MembersDao implements Dao {
	
	private $aspect;
	
	public function __construct() {
		$this->aspect = new Aspect($this);
	}
	
	public function runInsertByAspectBefore() {
		$this->aspect->executePointcut('insert', new InsertInterceptor());
	}
	
	public function runInsertByAspect($args) {
		return $this->aspect->run('insert', $args);
	}
	
	public function runSelectByAspectBefore(){
		$this->aspect->executePointcut('select', new SelectInterceptor());
	}
	
	public function runSelectByAspect($args) {
		return $this->aspect->run('select', $args);
	}
	
	public function insert($member) {
		try {
			
			if (!$member instanceof Model_Members) {
				return false;
			}
			
			$modelInstance = Model_Members::forge();
			
			$modelInstance->namefull = $member->namefull;
			$modelInstance->email = $member->email;
			$modelInstance->point = $member->point;
			
			$modelInstance->making = $member->making;
			$modelInstance->objectmaking = $member->objectmaking;
			$modelInstance->typemaking = $member->typemaking;
			
			$modelInstance->modifying = $member->typemodifying;
			$modelInstance->objectmodifying = $member->objectmodifying;
			$modelInstance->typemodifying = $member->typemodifying;
			
			$modelInstance->removing = $member->removing;
			$modelInstance->objectremoving = $member->objectremoving;
			$modelInstance->typeremoving = $member->typeremoving;
			
			$modelInstance->removed = $member->removed;
			
			if (!$modelInstance->save()) {
				Log::error("保存失敗");
			} else {
				Log::error("保存成功");
			}
			
		} catch (Exception $error) {
			Log::error("MembersDao.insert() : ", $error->getMessage());
			return false;
		}
	}
	
	public function select($searchKey) {
		try {
			
			$modelInstance = Model_Members::forge();

			$result = Model_Members::query()
			->where('namefull', 'like', '%' . $searchKey . '%')
			->or_where('email', 'like', '%' . $searchKey . '%')
			->or_where('point', 'like', '%' . $searchKey . '%')
			->get();
			
			return $result;
			
		} catch (Exception $error) {
			Log::error("MemberDao.select() : ", $error->getMessage());
			return false;
		}
	}
}