<?php  require_once $_SERVER['DOCUMENT_ROOT'] . '/libraries/Controller.php'; ?>
<?php

///namespace App\Controllers;

class UsersController extends Controller
{

    public function index()
    {
        return 'index';
    }
}
// test load view
$u = new UsersController;
//$t = $u->index();
var_dump($u->view('users/index'));
