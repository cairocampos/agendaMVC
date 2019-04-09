<?php
require "environment.php";

if (ENVIRONMENT == "development") {
	define("BASE_URL", "http://localhost/crudmvc/");
	$config["dbname"] = "crudmvc";
	$config["host"] = "127.0.0.1";
	$config["dbuser"] = "root";
	$config["dbpass"] = "";

} else {
	define("BASE_URL", "");
	$config["dbname"] = "";
	$config["host"] = "";
	$config["dbuser"] = "";
	$config["dbpass"] = "";
}

global $db;

try {
	$db = new PDO("mysql:dbname=".$config["dbname"].";host=127.0.0.1", $config["dbuser"], $config["dbpass"]);
} catch (PDOException $e) {
	echo "Falha ao conectar no banco: ".$e->getMessage();
}