<?php

class Posts extends Controller
{
    public function __construct()
    {
        if (!isLoggedIn()) {
            redirect('users/login');
        }
        if (!isAdmin()) {
            die('You do not have Administrator access.');
        }
        $this->postModel = $this->model('Post');
    }

    public function index()
    {

    }

    public function show($id)
    {
        if (!is_numeric($id)) {
            die('ID must be numeric');
        }
        return $this->postModel->getSinglePost($id);
    }

    public function create($arPost)
    {
        if ($this->postModel->addPost($arPost)) {
            return 'Added successfully.';
        } else {
            return 'Failed.';
        }
    }

    public function update($arPost)
    {
        if ($this->postModel->updatePost($arPost)) {
            return 'Edited successfully.';
        } else {
            return 'Failed.';
        }
    }

    public function delete($id)
    {
        if ($this->postModel->deletePost($id)) {
            redirect('posts/index','Deleted successfully');
        } else {
            redirect('posts/index','Failed');
        }
    }

    public function all()
    {
        return $this->postModel->getPosts();
    }
}
