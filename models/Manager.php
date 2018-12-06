<?php
namespace Projet5\models;

class Manager 
{
	public $_db;

	public function __construct()
	{
		$this->_db = Database::dbconnect();
	}

	
}