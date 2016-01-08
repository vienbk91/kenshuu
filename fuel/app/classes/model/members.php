<?php
namespace jp\boi\kenshuu\model;

use Fuel\Core\Model_Crud;

class Model_Members extends Model_Crud {
	
	protected static $_table_name = 'members';
	protected static $_primary_key = 'seq';
	
	public $namefull;
	public $email;
	public $point;
	public $making;
	public $objectmaking;
	public $typemaking;
	public $modifying;
	public $objectmodifying;
	public $typemodifying;
	public $removing;
	public $objectremoving;
	public $typeremoving;
	public $removed;
}