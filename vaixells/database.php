<?php
class database
{
    private $servername = "100.10.65.87";
    private $username = "admin";
    private $password = "admin";
    private $dbname = "ships";
    // Create connection
    private $conn = new mysqli($this->servername, $this->username, $this->password, $this->dbname);

    function testConn(){
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }
    }

    function closeConn(){
        $conn->close();
    }
}
