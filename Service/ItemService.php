<?php
/**
 * Created by PhpStorm.
 * User: asimsangram
 * Date: 9/21/15
 * Time: 9:51 PM
 */
include '../Service/DbConnection.php';
include_once '../Model/Item.php';
class ItemService{

    var $conn;

    public function __construct(){

        $connection =new DbConnection();
        $this->conn=$connection->getConn();
    }

    public function getList($cat_id, $sub_id, $location){

        $itemList = array();

        $queryResult = $this->conn->query("SELECT * FROM Item WHERE Cat_Id = " + $cat_id + " and Sub_Id = "
            + $sub_id + " and Location = '" + $location + "' and Status = 0 and Type = 1");

        //TODO:Query to match title, description

        while($row=mysqli_fetch_assoc($queryResult)){

            $newItem = new Item($row["Id"], $row["Title"], $row["Detail"], $row["Date"], $row["Location"], null, null, null);

            $itemList[]= $newItem;
        }

        return $itemList;
    }
}

$itemService = new ItemService();