<?php
session_start();
if (!isset($_SESSION['email'])) {
    include "login_form.php";
}
else{
//if($_GET["first_name"] && $_GET["last_name"] && $_GET["email"] && $_GET["password"] && $_GET["address1"] && $_GET["address2"] && $_GET["landmark"] && $_GET["city"] && $_GET["state"] && $_GET["country"] && $_GET["pin"]){
$server_name = "localhost";
$user_name = "root";
$password = "";
$email = $_SESSION['email'];
$conn = mysql_connect($server_name,$user_name,$password) or die(mysql_error());
mysql_select_db("test",$conn);
$sql ="update users set first_name ='$_POST[first_name]',last_name = '$_POST[last_name]',biography = '$_POST[biography]',address1 = '$_POST[address1]',address2 = '$_POST[address2]',landmark = '$_POST[landmark]',city = '$_POST[city]',state = '$_POST[state]',country = '$_POST[country]',pin = '$_POST[pin]' where email = '$email'";
$result = mysql_query($sql, $conn) or die(mysql_error());
    print "Profile updated successfully";
    header("location:login_success.php");
}
?>