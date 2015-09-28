<?php
/**
 * Created by IntelliJ IDEA.
 * User: sachin
 * Date: 9/3/15
 * Time: 10:52 AM
 */
include "../CommonPage/includeAll.php";

$category=$_POST["Category"];
$category=new Category($category,"");
$subcategory=$_POST["SubCategory"];
if($subcategory === "Default")
    $subcategory = "NULL";
$subcategory=new SubCategory($subcategory, "");
$brandId=$_POST["BrandList"];
if($brandId === "Default")
    $brandId = "NULL";
$brand=new Brand($brandId,"");
$location=$_POST["FoundLocation"];
$date=$_POST["FoundDate"];
$title=$_POST["ItemTitle"];
$detail=$_POST["ItemDescription"];
$item=new Item("", $title, $detail, $date, $location,"" ,"", "" );


$reportService->insert($category,$subcategory, $brand, $item);

?>