<?php
session_start();
if (!isset($_SESSION['email'])) {
    include "login_form.php";
}
else{
    $user_id= $_REQUEST;
    $db = new PDO('mysql:host=localhost;dbname=test;charset=utf8', 'root', '');
    $stmt = $db->prepare("delete from users where user_id = '$user_id'");
    echo $stmt->bindValue(':email', $email, PDO::PARAM_STR);

    $stmt->execute();
    $affected_rows = $stmt->rowCount();
    header('location:admin_dashboard.php');
}
?>