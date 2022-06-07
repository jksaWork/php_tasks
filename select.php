<?php 

class SelectFromDatabase {
          static public function Select($id){
                    // get Connection 
                    try{
                    $con = Project\Connection::Con();
                    // query TO Insert In DataBase 
                    $sql = "SELECT * FROM blog WHERE id = $id";
                    $q = $con->prepare($sql);
                    $q->execute();
                    return $q->fetchAll();
                    }catch(PDOException $e){
                    echo $e->getMessage();
                    }
          }
}