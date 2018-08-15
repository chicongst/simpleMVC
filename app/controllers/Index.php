<?php

require_once $_SERVER['DOCUMENT_ROOT'] . '/app/models/Post.php';

class Index extends Controller
{
  public function index()
  {
      $data = Post::getPosts();
      $this->view('index', $data);
  }
}
