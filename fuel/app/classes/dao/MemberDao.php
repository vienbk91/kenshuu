<?php
namespace jp\boi\kenshuu\dao;

require_once dirname(__FILE__) . "/Dao.php";
require_once dirname(__FILE__) . "/../model/member.php";
require_once dirname(__FILE__) . "/../aspect/Aspect.php";
require_once dirname(__FILE__) . "/../aspect/InsertInterceptor.php";

use jp\boi\kenshuu\model\Model_Member;
use Fuel\Core\Log;
use Fuel\Core\DB;
use jp\boi\kenshuu\aspect\Aspect;
use jp\boi\kenshuu\aspect\InsertInterceptor;

class MemberDao implements Dao {
	
	private $aspect;
	
	public function __construct() {
		$this->aspect = new Aspect($this);
		$this->aspect->executePointcut('insert', new InsertInterceptor());
	}
	
	public function runByAspect($args) {
		// Tien hanh thuc thi ham insert trong doi tuong MemberDao thong qua Aspect
		return $this->aspect->run('insert' , $args);
	}
	
	public function insert($member) {
		try {
			if (!$member instanceof Model_Member){
				return false;
			}
			
			$sql = "INSERT INTO ". $member->tableName.
			"(namefull , email , point , making , objectmaking , typemaking , modifying , objectmodifying , typemodifying , removing , objectremoving , typeremoving , removed)".
			" VALUE (".
			"\"".$member->getNameFull(). "\"" ." , ".
			"\"".$member->getEmail(). "\"" ." , ".
			$member->getPoint()." , ".
			$member->getMaking() ." , ".
			"\"".$member->getObjectmaking() . "\"" ." , ".
			$member->getTypemaking() ." , ".
			$member->getModifying() ." , ".
			"\"".$member->getObjectmodifying() . "\"" ." , ".
			$member->getTypemodifying() ." , ".
			$member->getRemoving() ." , ".
			$member->getObjectremoving() ." , ".
			$member->getTyperemoving() ." , ".
			$member->getRemoved().
			" );";
			
			$result = DB::query($sql)->execute();
			
		} catch (Exception $error) {
			Log::error("MemberDao.insert() : " , $error->getMessage());
			return false;
		}
		
	}
	
	public function update() {
		
	}
	
	public function select() {
		
	}
	
	public function delete() {
		
	}
	
	public function selectGetAllMember() {
		try {
			
			$result = null;
			$sql = "SELECT * FROM members";
			$result = DB::query($sql)->execute();
			
			return $result;
				
		} catch (Exception $error) {
			Log::error("MemberDao.select() : " , $error->getMessage());
			return false;
		}
	}
	
}