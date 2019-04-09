<?php
namespace Core;

class Controller
{
	public function loadView($viewName, $viewData) {
		Extract($viewData);
		require "Views/".$viewName.".php";
	}

	public function loadTemplate($viewName, $viewData) {
		require "Views/template.php";
	}

	public function loadViewInTemplate($viewName, $viewData) {
		Extract($viewData);
		require "Views/".$viewName.".php";
	}
}