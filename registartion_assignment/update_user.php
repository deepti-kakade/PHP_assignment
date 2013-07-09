<?php
session_start();
if (!isset($_SESSION['email'])) {
    include "login_form.php";
}
else{
    $user_id= $_POST['user_id'];
    $db = new PDO('mysql:host=localhost;dbname=test;charset=utf8', 'root', '');
    $stmt = $db->prepare("update users set first_name ='$_POST[first_name]',last_name = '$_POST[last_name]',biography = '$_POST[biography]',address1 = '$_POST[address1]',address2 = '$_POST[address2]',landmark = '$_POST[landmark]',city = '$_POST[city]',state = '$_POST[state]',country = '$_POST[country]',pin = '$_POST[pin]' where user_id = '$user_id'");
    $stmt->execute();
    $affected_rows = $stmt->rowCount();
    header('location:admin_dashboard.php');
}
?>