<?php
namespace Controllers;

use \Core\Controller;

class NotfoundController
{
	public function índex() {
		$this->loadView("404", array());
	}
}