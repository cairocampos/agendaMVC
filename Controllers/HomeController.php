<?php
namespace Controllers;

use \Core\Controller;
use \Models\Contacts;

class HomeController extends Controller
{
	public function index() {
		$data = array();

		$c = new Contacts();
		$data['items'] = $c->getList(); 

		$this->loadTemplate("home", $data);
	}
}