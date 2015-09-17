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


<select name="Category" id="categoryList" onchange="return subCategoryList();">
    <option value="category">Category</option>
    <?php
        for($i=0;$i<sizeof($categoryList);$i++){
            echo '<option value='.$categoryList[$i]["Category_Id"].'>'.$categoryList[$i]["Category_Name"].'</option>';
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
</body>
</html>
