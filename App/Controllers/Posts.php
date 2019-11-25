<?php 

namespace App\Controllers;

class Posts extends \Core\Controller
{
	public function edit()
	{
		echo "I am from home class and index method";
		echo "<pre>";
		echo htmlspecialchars(print_r($this->route_params, true));
		echo "</pre>";
	}
}