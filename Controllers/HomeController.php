<?php
namespace Controllers;

use \Core\Controller;

class HomeController extends Controller
{
	public function index() {
		$data = array();

		$this->loadView("home", $data);
	}
}