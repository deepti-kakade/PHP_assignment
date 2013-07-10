<?php  session_start(); ?>
<html>
<head><title>Login</title></head>
<body>
<?php
$host_name = "localhost";
$username = "root";
$password = "";
$conn= mysql_connect($host_name,$username,$password)or die(mysql_error());
mysql_select_db("test",$conn);
$user_name=$_POST['email'];
$my_password=$_POST['password'];
$sql="select * from users where email='$user_name' and password='$my_password'";
$result=mysql_query($sql,$conn) or die(mysql_error());
$count=mysql_num_rows($result);
if($count >0){
    $fetch=array();
    $fetch = mysql_fetch_assoc($result);
    $user_role = $fetch['role'];
    $_SESSION['email'] = "$user_name";
    if($user_role == "user"){
        header("location:login_success.php");
    }
    else{
        header("location:admin_dashboard.php");
    }

}
else {
    echo "Wrong Username or Password";
}
?>
</body>
</html>