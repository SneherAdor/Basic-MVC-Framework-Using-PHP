<?php 

namespace App\Controllers\Admin;

class User extends \Core\Controller
{
	protected function before()
    {
        echo "(before) ";
        //return false;
    }
    
    protected function after()
    {
        echo " (after)";
    }

    public function indexAction()
    {
        echo 'Hello from the index action in the User controller!';
    }
}