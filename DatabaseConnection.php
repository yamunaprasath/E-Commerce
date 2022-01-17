<?php
class DatabaseConnection
{
    public $serverName = 'localhost';
    public $userName = 'root';
    public $password = '123';
    public $dbName = 'ecommerce';
    public $conn;
    
    public function __construct()
    {
        $conn = new mysqli($this->serverName, $this->userName, $this->password, $this->dbName);
            $this->conn = $conn;
            
    
        if ($this->conn->connect_error) {
            die("Connection failed: " . $this->conn->connect_error);
        }
    }
}
