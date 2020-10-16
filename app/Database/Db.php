<?php

namespace App\Database;

abstract class Db {
    private $host;
    private $connection; 
    private $databaseName;  
    private $username;
    private $password; 
    protected $conn;

    function __construct() {
        $this->host = $_ENV['DB_HOST'];
        $this->connection = $_ENV['DB_CONNECTION'];
        $this->databaseName = $_ENV['DB_DATABASE'];
        $this->username = $_ENV['DB_USERNAME'];
        $this->password = $_ENV['DB_PASSWORD'];
        try {

            $conn = new \PDO("$this->connection:host=$this->host;dbname=$this->databaseName", $this->username, $this->password);
            // set the PDO error mode to exception
            $conn->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);
            $this->conn = $conn;
        } catch(\PDOException $e) {
            echo "Connection failed: " . $e->getMessage();
        }
    }
}
