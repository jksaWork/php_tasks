<?php 

class InsertToDatabase {
          static public function Insert($title , $content){
                    // get Connection 
                    try{
                    $con = Project\Connection::Con();
                    // query TO Insert In DataBase 
                    $sql = "INSERT INTO blog (title,content) VALUES ('$title' , '$content')";
                    $con->exec($sql);
                    echo 'Insert Done Succsffuly..';
                    }catch(PDOException $e){
                    echo $e->getMessage();
                    }
          }
}