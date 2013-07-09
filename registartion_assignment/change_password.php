<?php  session_start(); ?>
<html>
<head><title> Register </title></head>
<body>
<form action="update_password.php" method=post>
    <h1>Chane Password </h1>
    please input the new password to update password<br>
    <table border="2">
        <tr>
            <td>New Password :</td><td><input name="new_password" type="password" size"20"></input></td>
        </tr>
        <tr>
            <td>confirm Password :</td><td><input name="confirm_password" type="password" size"20"></input></td>
        </tr>
        <tr>
            <td>Old Password:</td><td><input name="old_password" type="text" size"20"></input></td>
        </tr>
     </table>
    <input type="submit" value="Update Password"> </input>
</form>
</body>
</html>

