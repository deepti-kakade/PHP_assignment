<?php
session_start();
if (!isset($_SESSION['email'])) {
    include "login_form.php";
}
else{
    print_secure_content();
    $db = new PDO('mysql:host=localhost;dbname=test;charset=utf8', 'root', '');
    $stmt = $db->prepare("select * from users WHERE role<>'admin'");
    $stmt->execute(array($id, $name));
    $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
    $row_count = $stmt->rowCount();
    foreach($rows as $user) {
        echo "<table><tr><td>$user[first_name]</td>";
        echo"<td><a href='edit_user.php?user_id=$user[user_id]' >Edit<a/></td>";
        echo"<td><a href='delete_user.php?user_id=$user[user_id]'>Delete<a/></td>";
        echo"<td><a href='file_upload_form.php'>File Upload<a/></td>";
        echo"</tr></table>";

    }
}
function print_secure_content()
{
    print("<b><h2>hi $_SESSION[email]</h2>");
    print "<a href='logout.php'>Logout</a><br>";

}
?>
