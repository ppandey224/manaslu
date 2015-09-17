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
</head>
<body onload="hideError()">
Login
<hr>
<form method="get" action="../Controller/UserController.php">
    <input type="text" name="userName" placeholder="Username">
    <input type="text" name="password" placeholder="Password">
    <input type="submit" name="login" value="Login"/>
</form>
<br><br>
SignUp
<hr>
<form method="get" action="../Controller/UserController.php" onsubmit=" return validateUser()">
    <input type="text" name="userName" placeholder="Username" id="userName" required onkeyup="hideError()">
    <span class="error">This Username is already exits.!!</span>
    <input type="text" name="password" placeholder="Password" id="password" required>
    <input type="text" name="citizenshipNumber" placeholder="Citizenship Number" id="citizenshipNumber" required>
    <input type="text" name="licenseNumber" placeholder="Citizenship Number" id="licenseNumber" required>
    <input type="submit" name="singUp" value="Signup"/>
</form>
</body>
</html>
