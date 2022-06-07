<?php

// Create Class To Connect To DataBase ---------------------------
class Coneection
{
          static public function con()
          {
                    $servername = "localhost";
                    $username = "root";
                    $password = "";
                    try {
                              $conn = new PDO("mysql:host=$servername;dbname=oop_projcet", $username, $password);
                              // set the PDO error mode to exception
                              $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                              return $conn;
                              echo "Connected successfully";
                    } catch (PDOException $e) {
                              echo "Connection failed: " . $e->getMessage();
                    }
          }
}
// Create Class Insert Into Database  -----------------------------------------
class InsertToDataBase{
                    public function Insert(){
                              $con = Coneection::con();
                              $sql = "INSERT INTO MyGuests (firstname, lastname, email) VALUES ('John', 'Doe', 'john@example.com')";
                              // use exec() because no results are returned
                              $con->exec($sql);
                    echo "New record created successfully";
                    }
}
$con = Coneection::con();
echo 'every Thing good';
