<?php

namespace Project;

use PDO;
use PDOException;


class Connection {
          static public function Con(){
                    // vairable To Connect To Datbse 
                    $servername = "localhost";
                    $username = "root";
                    $password = "";
                    try {
                             
                              $conn = new PDO("mysql:host=$servername;dbname=oop_projcet", $username, $password);
                              // set the PDO error mode to exception
                              $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                              // echo "Connected successfully";
                              return $conn;
                    } catch (PDOException $e) {
                              echo "Connection failed: " . $e->getMessage();
                    }
          }
}