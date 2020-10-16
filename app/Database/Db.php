<?php

namespace App\Database;

abstract class Db {
    private $host;
    private $driver;
    private $databaseName;  
    private $username;
    private $password; 
    protected $connection;

    function __construct() {
        $this->host = $_ENV['DB_HOST'];
        $this->driver = $_ENV['DB_CONNECTION'];
        $this->databaseName = $_ENV['DB_DATABASE'];
        $this->username = $_ENV['DB_USERNAME'];
        $this->password = $_ENV['DB_PASSWORD'];
        try {

            $connection = new \PDO("$this->driver:host=$this->host;dbname=$this->databaseName", $this->username, $this->password);
            // set the PDO error mode to exception
			$connection->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);
			$connection->setAttribute(\PDO::ATTR_DEFAULT_FETCH_MODE, \PDO::FETCH_ASSOC);
            $this->connection = $connection;
        } catch(\PDOException $e) {
            echo "Connection failed: " . $e->getMessage();
        }
    }
}
