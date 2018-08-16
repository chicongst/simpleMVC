<?php

class Users extends Controller
{
    public function __construct()
    {
        if ( !isLoggedIn()) {
            redirect('users/login');
        }
        if ( !isAdmin()) {
            die('You do not have Administrator access');
        }
        $this->userModel = $this->model('User');
    }

    public function index()
    {
        $data = '';
        $this->view('users/index', $data);
    }

    public function create($arUser)
    {
        if ( $this->userModel->addUser($arUser)) {
            return 'Added successfully';
        } else {
            return 'Failed';
        }
    }
}
