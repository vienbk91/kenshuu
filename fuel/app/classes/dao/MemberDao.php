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
use Fuel\Core\DB;

class MemberDao implements Dao {
	
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
			
			$insertData = array(
					'namefull' => $member->namefull ,
					'email' => $member->email ,
					'point' => $member->point ,
					'making' => $member->making ,
					'objectmaking' => $member->objectmaking ,
					'typemaking' => $member->typemaking ,
					'modifying' => $member->modifying , 
					'objectmodifying' => $member->objectmodifying ,
					'typemodifying' => $member->typemodifying , 
					'removing' => $member->removing ,
					'objectremoving' => $member->objectremoving ,
					'typeremoving' => $member->typeremoving ,
					'removed' => $member->removed ,
			);
			
			$modelInstance->set($insertData);
			
			if (!$modelInstance->save(false)) {
				Log::error("That bai");
			} else {
				Log::error("Thanh cong");
			}
			
		} catch (Exception $error) {
			Log::error("MemberDao.insert() : ", $error->getMessage());
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