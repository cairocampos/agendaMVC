<?php
namespace Models;

use \Core\Model;

class Contacts extends Model
{
	public function getList() {

		$sql = "SELECT * FROM contacts";
		$sql = $this->db->query($sql);
	
		$array = array();

		if ($sql->rowCount() > 0) {
			$array = $sql->fetchAll();
		}

		return $array;
	}

	public function getContact($id) {
		$sql = "SELECT * FROM contacts WHERE id = :id";
		$sql = $this->db->prepare($sql);
		$sql->bindValue(":id", $id);
		$sql->execute();

		$array = array();

		if($sql->rowCount() > 0) {
			$array = $sql->fetch();
		}

		return $array;
	}

	public function addContact($name, $email) {

		if ($this->hasEmail($email) == false) {

			$sql = "INSERT INTO contacts SET name = :name, email = :email";
			$sql = $this->db->prepare($sql);
			$sql->bindValue(":name", $name);
			$sql->bindValue(":email", $email);
			$sql->execute();

			return true;

		} else {
			return false;
		}
	}

	public function hasEmail($email) {

		$sql = "SELECT * FROM contacts WHERE email = :email";
		$sql = $this->db->prepare($sql);
		$sql->bindValue(":email", $email);
		$sql->execute();

		if ($sql->rowCount() > 0){
			return true;
		} else {
			return false;
		}

	}

	public function edit($id, $name, $email) {

		$sql = "UPDATE contacts SET name = :name, email = :email WHERE id = :id";
		$sql = $this->db->prepare($sql);
		$sql->bindValue(":id", $id);
		$sql->bindValue(":name", $name);
		$sql->bindValue(":email", $email);
		$sql->execute();

	}
}