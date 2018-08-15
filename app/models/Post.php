<?php

class Post
{
    public function getPosts()
    {
        $db = new Database;
        return $db->db_query('SELECT * FROM posts');
    }
}
