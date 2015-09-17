<?php
/**
 * Created by IntelliJ IDEA.
 * User: sachin
 * Date: 9/10/15
 * Time: 9:40 AM
 */

namespace userService;

class UserService
{
    var $conn;

    public function __construct(){

        $connection =new \DbConnection();
        $this->conn=$connection->getConn();

    }
    public function signUp(\User $user){

        $query="INSERT INTO user VALUES (NULL ,'".$user->getUsername()."','".$user->getPassword()."',
        '".$user->getCitizenshipNo()."','".$user->getLicenseNo()."')";
        $this->conn->query($query);

    }

    public function checkUserName($userName){
        $query="SELECT *from user where User_Name='".$userName."'";
        $userExit=$this->conn->query($query);
        if(!$userExit){
            return true;
        }
        return false;
    }

    public function login(\User $user){
        $query="SELECT *from user where User_Name='".$user->getUsername()."' and User_Password='".$user->getPassword()."'";
        $userExit=$this->conn->query($query);
        if($userExit){
            return true;
        }
        return false;

    }

}
$userService=new UserService();