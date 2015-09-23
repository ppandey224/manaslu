<?php
/**
 * Created by IntelliJ IDEA.
 * User: sachin
 * Date: 9/3/15
 * Time: 7:58 AM
 */
include 'DbConnection.php';
class ReportService
{
    var $conn;

    public function __construct()
    {

        $connection = new DbConnection();
        $this->conn = $connection->getConn();

    }


    public function categoryList()
    {

        $categoryList = array();

        $queryResult = $this->conn->query("SELECT * FROM  category");

        while ($row = mysqli_fetch_assoc($queryResult)) {

            $categoryList[] = $row;

        }
        return $categoryList;

    }

    public function subCategoryList($categoryId)
    {

        $subCategoryList = array();

        $queryResult = $this->conn->query("SELECT * FROM  subcategory WHERE Cat_Id='" . $categoryId . "'");

        while ($row = mysqli_fetch_assoc($queryResult)) {

            $subCategoryList[] = $row;

        }
        return $subCategoryList;

    }

    public function brandList($subCategoryId)
    {
        $brandList = array();

        $queryResult = $this->conn->query("SELECT * FROM  brand WHERE Sub_Id='" . $subCategoryId . "'");

        while ($row = mysqli_fetch_assoc($queryResult)) {

            $brandList[] = $row;

        }
        return $brandList;

    }

    public function insert( Category $category,Subcategory $subcategory, Brand $brand,Item $item)
    {


//        $sql = "INSERT INTO item values (null, 'aalluu', 'asdfasd',true,true, '2015-10-10','asdfasf', 'asdfasd', 1, 1 ,1, 1)";
      $sql = "INSERT INTO item values (null, '".$item->getTitle()."','" .$item->getDetail()."',true,false, '".$item->getDate()."', '".$item->getLocation()."','asfasf',".$category->getId().",".$subcategory->getId().", 1 ,".$brand->getId().")";

        echo $sql;
      if ($this->conn->query($sql) === TRUE) {
            echo "Insert operation successful";
        } else {
            echo "Error inserting: ";
        }

    }
}
$reportService=new ReportService();