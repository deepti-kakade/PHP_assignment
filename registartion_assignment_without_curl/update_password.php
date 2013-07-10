<?php
session_start();
if (!isset($_SESSION['email'])) {
    include "login_form.php";
}
else{
    $host_name = "localhost";
    $username = "root";
    $password = "";
    $conn= mysql_connect($host_name,$username,$password)or die(mysql_error());
    mysql_select_db("test",$conn);
    $user_email = $_SESSION['email'];
    $old_password=$_POST['old_password'];
    $new_password=$_POST['new_password'];
    $confirm_password = $_POST["confirm_password"];
    if($new_password == $confirm_password){
        echo "hello";
        $sql="select * from users where email='$user_email'";
        $result=mysql_query($sql,$conn) or die(mysql_error());
        $count=mysql_num_rows($result);
        if($count==1){
            $sql1 = "update users set password='$new_password'";
            $result1=mysql_query($sql1,$conn) or die(mysql_error());
            //  $_SESSION['email'] = "$user_name";
            header("location:login_success.php");
        }
        else {
            echo "Password doesn't match!!";
        }
    }
}
?>
