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

	public function delete($id) {		
		$c = new Contacts();
		$c->delete($id);
		header("Location: ".BASE_URL);
		exit;	
	}

	
	
}