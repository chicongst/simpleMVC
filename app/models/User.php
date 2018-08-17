<?php

class User
{
    private $db;

    public function __construct()
    {
        $this->db = new Database();
    }

    public function getUsers()
    {
        return $this->db->db_query('SELECT * FROM users');
    }

    public function addUser($arUser)
    {
        $username = addslashes($arUser['username']);
        $password = md5($arUser['password']);
        $fullname = addslashes($arUser['fullname']);
        $role = $arUser['role'];

        $query = "INSERT INTO users (username, password, fullname, role) VALUES ('{$username}', '{$password}', '{$fullname}', '{$role}')";

        return $this->db->db_query($query);
    }
}
