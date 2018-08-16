<?php

class Post
{
    private $db;

    public function __construct()
    {
        $this->db = new Database();
    }

    public function addPost($arPost){

      $title   = $arPost['title'];
      $content = $arPost['content'];
      $user_id = $_SESSION['arUser']['id'];

      $query = "INSERT INTO posts (title,content,user_id) VALUES ('{$title}', '{$content}', '{$user_id}')";

      return $this->db->db_query($query);
    }

    public function getPosts()
    {
        return $this->db->db_query('SELECT * FROM posts');
    }

    public function getSinglePost($id)
    {
        return $this->db->db_query("SELECT * FROM posts WHERE id = $id LIMIT 1");
    }
}
