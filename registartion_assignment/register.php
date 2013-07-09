<?php
//if($_GET["first_name"] && $_GET["last_name"] && $_GET["email"] && $_GET["password"] && $_GET["address1"] && $_GET["address2"] && $_GET["landmark"] && $_GET["city"] && $_GET["state"] && $_GET["country"] && $_GET["pin"]){
$server_name = "localhost";
$user_name = "root";
$password = "";
$conn = mysql_connect($server_name,$user_name,$password) or die(mysql_error());
mysql_select_db("test",$conn);
//print_r($_POST);die;
$role = "user";
$sql ="insert into users (first_name,last_name,email,password,biography,address1,address2,landmark,city,state,country,pin,role)values('$_POST[first_name]','$_POST[last_name]','$_POST[email]','$_POST[password]','$_POST[biography]','$_POST[address1]','$_POST[address2]','$_POST[landmark]','$_POST[city]','$_POST[state]','$_POST[country]','$_POST[pin]','$role')";
$result = mysql_query($sql, $conn) or die(mysql_error());
print "<h2> You have registered successfully</h2>";
print "<a href='login_form.php'> Login</a>";
//}
//else{
//    print "Invalid Information";
//}
?>
