<?php

session_start();

require_once $_SERVER['DOCUMENT_ROOT'] . '/libraries/Database.php';

class Auth
{
    public function login($request)
    {
        $username = addslashes ( $request['username'] );
        $password = trim( $request['password'] );

        if ( $username != '' && $password != '' )
        {
            $db = new Database;
            $password = md5($password);
            $checkLogin = $db->db_query("SELECT * FROM users WHERE username = '{$username}' && password = '{$password}' LIMIT 1");
            if ( $checkLogin->num_rows > 0 )
            {
                $arUser = mysqli_fetch_assoc( $checkLogin );
                return $this->createSession($arUser);
            }
            return 'Incorrect username or password.';
        }

        die('Username or password can\'t be blank ');
    }

    public function createSession(array $arUser)
    {
       $_SESSION['arUser'] = $arUser;
       header("location: /");
    }
}
