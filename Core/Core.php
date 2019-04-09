<?php
namespace Core;

class Core
{
	public function run() {

		$url = "/";
		$params = array();
		if (isset($_GET["url"]) && !empty($_GET["url"])) {

			$url .= $_GET["url"];

		}

		if (!empty($url) && $url != "/") {

			$url = explode("",$url);
			array_shift($url);
			$currentController = $url[0]."Controller";
			array_shift($url);

			if (!empty($url)) {
				$currentAction = $url[0];
			} else {
				$currentAction = "index";
			}

			if (count($url) > 0) {
				$params = $url;
			}

		} else {
			$currentController = "HomeController";
			$currentAction = "index";
		}

		$currentController = ucfirst($currentController);
		$prefix = "\Controllers\\";

		if (!file_exists("Controllers/".$currentController.".php") || !method_exists($prefix.$currentController, $currentAction)) {
			$currentControler  = "NotfoundController";
			$currentAction = "index";
		}

		$newController = $prefix.$currentController;
		$c = new $newController();

		call_user_func_array(array($c, $currentAction), $params);

	}
}