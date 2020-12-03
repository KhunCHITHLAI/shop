<?php
include_once('include/dbconn.php');
class Category
{
    private $id;
    public function getcate(){
        $this->pdo = Database::connect();
    $this->pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
    // sql query
    $sql="select * from product";
    //prepare sql statement
    $stmt=$this->pdo->prepare($sql);
    $stmt->execute();
    $results = $stmt -> fetchAll(PDO::FETCH_ASSOC);
    return $results;
    }
}