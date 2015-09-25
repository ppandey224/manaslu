<?php
/**
 * Created by IntelliJ IDEA.
 * User: sachin
 * Date: 9/3/15
 * Time: 11:06 AM
 */
include '../CommonPage/includeAll.php';

$categoryList=$reportService->categoryList();


?>

<html>

<head>
</head>

<body>

<form method="post" action="../Controller/ReportController.php">
    <label for="Category"> Category: </label>
<select name="Category" id="categoryList" onchange="return subCategoryList();">
    <option value="category">Category</option>
    <?php
        for($i=0;$i<sizeof($categoryList);$i++){
            echo '<option value='.$categoryList[$i]["Id"].'>'.$categoryList[$i]["Name"].'</option>';
        }
    ?>
</select>

<br><br>
<div id="subCategory">

</div>

<br>
<div id="brandList">
</div>

    <br>
    Found Location: <input type="text" name="FoundLocation">
    <br><br>
    Found Date: <input type="date" name="FoundDate">
    <br><br>
    Item Title: <input type="text" name="ItemTitle">
    <br><br>
    Item Detail: <textarea name="ItemDescription" rows="5" cols="40"></textarea>
    <br><br>
    <input type="submit" value="submit" />

</form>

<br>
</body>
</html>
