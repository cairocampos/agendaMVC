<?php
namespace Core;

class Controller
{
	public function loadView($viewName, $viewData) {
		Extract($viewData);
		require "Views/".$viewName.".php";
	}
}