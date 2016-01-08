<?php
namespace jp\boi\kenshuu\model;

use Fuel\Core\Model;
class Model_Member extends Model {
	
	public $tableName = 'members';
	
	private $namefull;
	private $email;
	private $point;
	
	private $making;
	private $objectmaking;
	private $typemaking;
	
	private $modifying;
	private $objectmodifying;
	private $typemodifying;
	
	private $removing;
	private $objectremoving;
	private $typeremoving;
	
	private $removed;
	
	//++++++++++++++++++++++++++++++++++++++++++++++++++
	// 
	//++++++++++++++++++++++++++++++++++++++++++++++++++
	public function setNameFull($namefull) {
		$this->namefull = $namefull;
	}
	
	public function getNameFull() {
		return $this->namefull;
	}
	
	public function setEmail($email) {
		$this->email = $email;
	}
	
	public function getEmail() {
		return $this->email;
	}
	
	public function setPoint($point) {
		$this->point = $point;
	}
	
	public function getPoint() {
		return $this->point;
	}
	
	//++++++++++++++++++++++++++++++++++++++++++++++++++
	// making
	//++++++++++++++++++++++++++++++++++++++++++++++++++
	public function setMaking($making) {
		$this->making = $making;
	}
	
	public function getMaking() {
		return $this->making;
	}
	
	public function setObjectmaking($objectmaking) {
		$this->objectmaking = $objectmaking;
	}
	
	public function getObjectmaking() {
		return $this->objectmaking;
	}
	public function setTypemaking($typemaking) {
		$this->typemaking = $typemaking;
	}
	
	public function getTypemaking() {
		return $this->typemaking;
	}
	
	//++++++++++++++++++++++++++++++++++++++++++++++++++
	// modify
	//++++++++++++++++++++++++++++++++++++++++++++++++++
	public function setModifying($modifying) {
		$this->modifying = $modifying;
	}
	
	public function getModifying() {
		return $this->modifying;
	}
	
	public function setTypemodifying($typemodifying) {
		$this->typemodifying = $typemodifying;
	}
	
	public function getTypemodifying() {
		return $this->typemodifying;
	}
	
	public function setObjectmodifying($objectmodifying) {
		$this->objectmodifying = $objectmodifying;
	}
	
	public function getObjectmodifying() {
		return $this->objectmodifying;
	}
	
	//++++++++++++++++++++++++++++++++++++++++++++++++++
	// removing
	//++++++++++++++++++++++++++++++++++++++++++++++++++
	public function setRemoving($removing = NULL) {
		$this->removing = $removing;
	}
	
	public function getRemoving() {
		return $this->removing;
	}
	
	public function setTyperemoving($typeremoving = NULL) {
		$this->typeremoving = $typeremoving;
	}
	
	public function getTyperemoving() {
		return $this->typeremoving;
	}
	
	public function setObjectremoving($objectremoving = NULL) {
		$this->objectremoving = $objectremoving;
	}
	
	public function getObjectremoving() {
		return $this->objectremoving;
	}
	
	//++++++++++++++++++++++++++++++++++++++++++++++++++
	// removed flag
	//++++++++++++++++++++++++++++++++++++++++++++++++++
	public function setRemoved($removed) {
		$this->removed = $removed;
	}
	
	public function getRemoved() {
		return $this->removed;
	}
}