// Include test
<?php  require_once $_SERVER['DOCUMENT_ROOT'] . '/config/config.php'; ?>
<?php

class Database{
    private $host = DB_HOST;
    private $user = DB_USER;
    private $pass = DB_PASS;
    private $db   = DB_NAME;
    public $mysqli;

    public function __construct()
    {
        $this->db_connect();
    }

    private function db_connect()
    {
        $this->mysqli = new mysqli($this->host, $this->user, $this->pass, $this->db);

        if ( $this->mysqli->connect_errno ) {
            printf("Connect failed: " . $this->mysqli->connect_error);
            exit();
        }

        return $this->mysqli;
    }

    public function db_query($sql)
    {
        $result = $this->mysqli->query($sql);

        return $result;
    }
}

$db = new Database();
$listUsers = $db->db_query("SELECT * FROM users");
var_dump(mysqli_fetch_assoc($listUsers));
