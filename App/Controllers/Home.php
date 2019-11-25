<?php 

namespace App\Controllers;
use Core\View;

class Home extends \Core\Controller
{
	
    public function indexAction()
    {
    	View::render('Home/edit', [
    		'name' => 'Millat', 
    		'names' => ['Noyon', 'Rayhan', 'Firoze'] 
    	]);
    }
}