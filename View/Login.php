<?php
/**
 * Created by IntelliJ IDEA.
 * User: sachin
 * Date: 9/10/15
 * Time: 8:54 AM
 */
include '../CommonPage/includeAll.php'
?>
<html>
<head>
	<link rel="stylesheet" href="../Resource/css/login.css">
</head>
<body onload="hideError()">
<header id="navigation_ribbon">
	<a href="lostnfound.com"><p><span style="color: red">Lost</span> & <span style="color: 00bff3">Found</span></p></a>
	<nav>
		<ul>
			<a href="reportlost.php"><li>Report lost</li></a>
			<li>Report found</li>
			<li>Contacts</li>
			<li>Help</li>
		</ul>
	</nav>
</header>
<div id="Login_signup_box">
	<p>Login</p>
	<form method="get" action="../Controller/UserController.php">
		<input type="text" name="userName" placeholder="Username">
		<input type="text" name="password" placeholder="Password">
		<input type="submit" name="login" value="Login"/>
	</form>
	<p>SignUp</p>
	<form method="get" action="../Controller/UserController.php" onsubmit=" return validateUser()">
		<input type="text" name="userName" placeholder="Username" id="userName" required onkeyup="hideError()">
		<span class="error">This Username is already exits.!!</span>
		<input type="text" name="password" placeholder="Password" id="password" required>
		<input type="text" name="citizenshipNumber" placeholder="Citizenship Number" id="citizenshipNumber" required>
		<input type="text" name="licenseNumber" placeholder="License Number" id="licenseNumber" required>
		<input id="signUp" type="submit" name="singUp" value="Signup"/>
	</form>
</div>
<footer id = "page_footer">
	<p>About us | Advertise | Help | Links | locations | Creators | Developers</p>
</footer>
</body>
</html>
