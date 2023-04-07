<?php

class database{
    public $conn;

    public function __construct()
    {
        $host = "localhost";
        $dbuser ="root";
        $dbpassword = "";
        $dbname = "assignment-2";
     
        try {
            $this->conn = new PDO("mysql:host=$host;dbname=$dbname", $dbuser, $dbpassword);
          
            //echo "Connected successfully";
          } catch(PDOException $e) {
            echo "Connection failed: " . $e->getMessage();
          }

    } 


          public function exe($sql)
          {
            $statement = $this->conn->prepare($sql);
            $statement->execute();

          }
          public function fetch($sql)
          {
            $statement = $this->conn->prepare($sql);
            $statement->execute();
            return $statement->fetchAll();
          }
    
   

}



?>