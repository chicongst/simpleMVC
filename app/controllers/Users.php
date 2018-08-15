<?php  require_once $_SERVER['DOCUMENT_ROOT'] . '/libraries/Controller.php'; ?>
<?php

///namespace App\Controllers;

class Users extends Controller
{
    public function index()
    {
        $data = [
          'title' => 'PHP MVC Framework',
          'description' => 'Simple social network built using PHP/MVC.'
        ];
        $this->view('users/index', $data);
    }
}
