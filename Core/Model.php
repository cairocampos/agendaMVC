<?php
namespace Core;

class Model
{
	public function __construct() {
		global $db;
		$this->db = $db;
	}
}