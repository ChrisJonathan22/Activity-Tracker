<?php 

class Database {
    // DB Params
    private $dbServername = 'localhost';
    private $dbUsername = 'root';
    private $dbPassword = '';
    private $dbName = 'activity_tracker';
    private $conn;

    // DB Connect
    public function connect() {
        $this->conn = null;

        $this->conn = mysqli_connect($this->dbServername, $this->dbUsername, $this->dbPassword, $this->dbName);

        if (!$this->conn) {
            die('Connection failed:' . mysqli_connect_error());
        } else {
            return $this->conn;
        }
    }

}



// $conn = mysqli_connect($dbServername, $dbUsername, $dbPassword, $dbName);






?>