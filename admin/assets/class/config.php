<?php

class Databse {
    private $dns = "mysql:host=localhost;dbname=kolmena";
    private $dbuser = "root";
    private $dbpass = "";
    public $conn;
    public function __construct() {
        try {
           $this->conn = new PDO($this->dns, $this->dbuser, $this->dbpass);
          $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
            echo 'Error : '. $e->getMessage();
        }
}
}

?>