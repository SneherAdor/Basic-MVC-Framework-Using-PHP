<?php 

namespace App\Controllers;

class Home extends \Core\Controller
{
	public function index()
	{
		echo "I am from home class and index method";
		echo "<pre>";
		echo htmlspecialchars(print_r($this->route_params, true));
		echo "</pre>";
	}
}