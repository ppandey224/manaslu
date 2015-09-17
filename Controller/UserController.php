<?php
/**
 * Created by IntelliJ IDEA.
 * User: sachin
 * Date: 9/10/15
 * Time: 8:45 AM
 */
include '../CommonPage/includeAll.php';
session_start();
if(isset($_GET['singUp'])){
    $user=new User(null,$_POST["userName"],$_POST["password"],$_POST["citizenshipNumber"],$_POST["licenseNumber"]);
    $userService->signUp($user);

}
else if(isset($_GET['login'])){
    $user=new User(null,$_POST["userName"],$_POST["password"],null,null);
    
    if($userService->login($user)){

        header("Location:../View/report.php");
    }else{
        header("Location:Login.php");
    }

}
else{
    header("Location:../report.php");
}
?>
