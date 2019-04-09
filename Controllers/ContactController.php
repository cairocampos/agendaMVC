<?php
namespace Controllers;

use \Core\Controller;
use \Models\Contacts;

class ContactController extends Controller
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

	public function edit($id) {
		$data = array();

		if (empty($id)) {
			header("Location: ".BASE_URL);
			exit;
		}
		$c = new Contacts();
		$data["info"] = $c->getContact($id);

		$this->loadView("edit", $data);
	}

	public function edit_submit(){
		$c = new Contacts();

		if (!empty($_POST["email"])) {
			$id = addslashes($_POST['id']);
			$name = addslashes($_POST["name"]);
			$email = addslashes($_POST["email"]);

			$c->edit($id, $name, $email);
			header("Location: ".BASE_URL);
			exit;
		}
	}

}