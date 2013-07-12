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
<form method=post>
    <h1>Update Message.................</h1>
    Please fill Following Details<br>
    <table border="2">
        <tr>
            <td>Author of Message :</td><td><input name="author" type="text" size"20"></input></td>
        </tr>
        <tr>
            <td>Subject of Message :</td><td><input name="subject" type="text" size"20"></input></td>
        </tr>
        <tr>
            <td>Date of Message:</td><td><input name="msg_date" type="text" size"20"></input></td>
        </tr>
        <tr>
            <td>Content of Message:</td><td><input name="msg_body" type="text" size"20"></input></td>
        </tr>
    </table>
    <input name="submit" type="submit" value="Update Message"> </input>
</form>
</body>
</html>
<?php
}
else{
    $id = $_GET['id'];
    echo $_GET['id'];

    $db = new DBUtils();
    $conn = $db->dbConnect();
    $msg = new Message('$_POST[author]','$_[subject]','$_POST[msg_date]','$_POST[msg_body]');
    $db->update($id,$conn,$msg);
}
?>
