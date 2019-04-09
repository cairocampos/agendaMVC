<?php
namespace Controllers;

use \Core\Controller;
use \Models\Contacts;

class ContactController extends controller
{
	public function index(){}

	public function insert(){
		$data = array();
	
		$this->loadView("insert", $data);
	}

	public function addcontact(){
		$data = array();

		if (!empty($_POST['email'])) {
			$name = $_POST['name'];
			$email = $_POST['email'];			
		}

		$c = new Contacts();
		$c->addContact($name, $email);
		
		header("Location: ".BASE_URL);
	}
}