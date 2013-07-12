<?php
include("link.php");
error_reporting(E_ALL - E_NOTICE);
ini_set('display_errors','on');
require("db-utils.class.php");
    $db = new DBUtils();
    $conn = $db->dbConnect();
   $fetch = $db->getAllMessages($conn);
echo "<table border='1' cellpadding='10'>";
echo "<tr> <th>ID</th> <th>Author</th> <th>Subject</th> <th>Date</th> <th>Content</th></tr>";
foreach($fetch as $row){
    echo "<tr>";
    echo '<td>' . $row['id'] . '</td>';
    echo '<td>' . $row['author'] . '</td>';
    echo '<td>' . $row['subject'] . '</td>';
    echo '<td>' . $row['msg_date'] . '</td>';
    echo '<td>' . $row['msg_body'] . '</td>';
    echo "</tr>";
}
echo "</table>";
?>
