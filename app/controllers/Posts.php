<?php

class Posts extends Controller
{
    public function __construct()
    {
        $this->postModel = $this->model('Post');
    }

    public function index()
    {

    }

    public function create($arPost)
    {
        if ( $this->postModel->addPost($arPost) ){
            return 'Add successfuly';
        } else {
            return 'Failed';
        }
    }

    public function show($id)
    {
        if ( !is_numeric($id) )
        {
            die( 'ID must be numeric ' );
        }
        return $this->postModel->getSinglePost($id);
    }

    public function all()
    {
        return $this->postModel->getPosts();
    }
}
