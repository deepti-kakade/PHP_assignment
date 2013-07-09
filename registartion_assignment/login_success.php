<?php
session_start();
if (!isset($_SESSION['email'])) {
    include "login_form.php";
}
else{
    print_secure_content();
}
function print_secure_content()
{
    print("<b><h1>hi $_SESSION[email]</h1>");
    print "<a href='change_password.php'>Change Password</a><br>";
    print "<a href='profile.php'>Change Profile</a><br>";
    print "<a href='logout.php'>Logout</a><br>";
}
?>
<html>
<body>
</body>
</html>