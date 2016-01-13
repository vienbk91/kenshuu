<?php
namespace jp\boi\kenshuu\model;

use Orm\Model;
class Model_Contact extends Model {
	protected static $_table_name = 'contacts';
	protected static $_primary_key = array('seq');
	
	public $namefull;
	public $email;
	public $comment;
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