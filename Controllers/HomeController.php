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
		if (!empty($_POST['email'])) {
			$name = $_POST['name'];
			$email = $_POST['email'];	

			if ($c->addContact($name, $email)) {
			$data["success"] = "Inserido com sucesso";
		
			} else {
				$data["error"] = "Esse email já existe!";
			}			
		}		

		$c = new Contacts();
		$offset = 0;
		$limit = 5;
		$data['total'] = $c->countRegisters();
		$total = $data['total'];

		$data['pages'] = ceil($total / $limit);
		$newpage = 1;
		if(!empty($_GET['p'])) {
			$newpage = addslashes($_GET['p']);
		}
		$offset = ($newpage * $limit) - $limit;
		$data['marker'] = $newpage;
		$data['items'] = $c->getList($offset, $limit);

		$this->loadTemplate("home", $data);
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