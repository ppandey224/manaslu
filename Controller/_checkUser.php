<?php
/**
 * Created by IntelliJ IDEA.
 * User: sachin
 * Date: 9/11/15
 * Time: 7:24 AM
 */
$conn =mysqli_connect('localhost','root','','LostAndFound');
$query="SELECT *from user where User_Name='".$_POST["userName"]."'";
$userExit=$conn->query($query);;
$response_array=[];

if(!$userExit){
    $response_array['status'] = 'Not Exits';
}else {
    $response_array['status'] = 'Exits';
}
echo json_encode($response_array);
?>