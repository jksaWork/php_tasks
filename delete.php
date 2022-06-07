<?php 

class DeleteFromDatabase {
          static public function delete($id){
                    // get Connection 
                    try{
                    $con = Project\Connection::Con();
                    // query TO Insert In DataBase 
                    $sql = "DELETE  From blog WHERE id = $id";
                    $con->exec($sql);
                    echo 'Delete Done ..';
                    }catch(PDOException $e){
                    echo $e->getMessage();
                    }
          }
}