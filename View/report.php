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
	<link rel="stylesheet" href="../Resource/css/report.css">
</head>

<body>
<header id="navigation_ribbon">
	<a href="../view/index.php"><p><span style="color: red">Lost</span> & <span style="color: 00bff3">Found</span></p></a>
	<nav>
		<ul>
			<a href="report.php"><li id="firstLi">Report lost</li></a>
			<a href="report.php"><li>Report found</li></a>
			<li>Contacts</li>
			<li>Help</li>
		</ul>
	</nav>
</header>

<div id="report_ribbon"><p>Report</p></div>
<div id="form_box">
	<p>Item Information</p>
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
	
	<div id="subCategory">
	<select name="SubCategory" style="visibility: hidden;">
		<option>Default</option>
	</select>
	</div>

	<div id="brandList">
		<select name="BrandList" style="visibility: hidden;">
			<option>Default</option>
		</select>
	</div>
		<p><label for="ItemTitle">Item Title: </label><input type="text" id="ItemTitle" name="ItemTitle"></p>
		<p><label for="FoundLocation">Found Location: </label><input type="text" name="FoundLocation"></P>
		<p><label for="FoundDate">Found Date: </label><input type="date" name="FoundDate"></p>
		<p><label for="ItemDescription">Item Detail: </label><p><textarea name="ItemDescription" id="ItemDescription" rows="9" cols="50"></textarea></p></p>
		<input type="submit" value="submit" />
	</form>
</div>

<footer id = "page_footer">
	<p>About us | Advertise | Help | Links | locations | Creators | Developers</p>
</footer>
</body>
</html>
