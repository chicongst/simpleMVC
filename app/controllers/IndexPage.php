<?php

require_once $_SERVER['DOCUMENT_ROOT'] . '/app/models/Post.php';

class IndexPage extends Controller
{
    public function index()
    {
        $post = new Post;
        $data = $post->getPosts();
        
        $this->view('index', $data);
    }
}
