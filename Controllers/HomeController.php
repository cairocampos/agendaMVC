<?php
namespace Controllers;

use \Core\Controller;
use \Models\Contacts;

class HomeController extends Controller
{
	public function index() {
		$data = array();

		//Inserindo cadastro.
		$c = new Contacts();

		$data['registers'] = $c->countRegisters();

		if (!empty($_POST['email'])) {
			$name = $_POST['name'];
			$email = $_POST['email'];	

			if ($c->addContact($name, $email)) {
				$data["success"] = "Inserido com sucesso";
		
			} else {
				$data["error"] = "Esse email já existe!";
			}			
		}		

		$this->loadTemplate("home", $data);
	}

	public function ajaxFilter(){
		$data = array();
		$c = new Contacts();

		$filtro = '';

		if (!empty($_GET['name'])) {
			$filtro = $_GET['name'];
		} 

		$ajax = $c->filtro($filtro);
		echo json_encode($ajax);
		
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
		$data = array();
		$c = new Contacts();

		if (!empty($_POST["email"])) {
			$id = addslashes($_POST['id']);
			$name = addslashes($_POST["name"]);
			$email = addslashes($_POST["email"]);

			if ($c->edit($id, $name, $email)) {
				header("Location: ".BASE_URL);
				exit;
			}		
			
		}
	}

}