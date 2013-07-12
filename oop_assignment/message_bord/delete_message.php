<?php
    error_reporting(E_ALL - E_NOTICE);
    ini_set('display_errors','on');
    require("db-utils.class.php");
if(!isset($_POST['submit'])){
    ?>
<html>
<head><title>Message</title></head>
<body>
    <?php include("link.php");?>
<form action="" method=post>
    <h1>Delete Message.................</h1>
    Please enter a Message id which u want to delete<br>
    <table border="2">
        <tr>
            <td>Enter a Message ID:</td><td><input name="id" type="text" size"20"></input></td>
        </tr>
    </table>
    <input name="submit" type="submit" value="Delete"> </input>
</form>
</body>
</html>
<?php
}
else{
    $msg_id = $_POST['id'];
    $db = new DBUtils();
    $conn = $db->dbConnect();
    $db->deleteMessageById($msg_id,$conn);
     header('location:index.php');
}
?>
