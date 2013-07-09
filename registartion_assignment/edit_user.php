<html>
<head><title> Register </title></head>
<body>
<form action="update_user.php" method=post>
    <h1>Edit User</h1>
    <table border="2">
        <tr>
            <td>First Name :</td><td><input name="first_name" type="text" size"20"></input></td>
        </tr>
        <tr>
            <td>Last Name :</td><td><input name="last_name" type="text" size"20"></input></td>
        </tr>
        <tr>
            <td>Biography :</td><td><input name="biography" type="" size"20"></input></td>
        </tr>
        <tr>
            <td>Address1:</td><td><input name="address1" type="text" size"20"></input></td>
        </tr>
        <tr>
            <td>Address2 :</td><td><input name="address2" type="text" size"20"></input></td>
        </tr>
        <tr>
            <td>Landmark:</td><td><input name="landmark" type="text" size"20"></input></td>
        </tr>
        <tr>
            <td>city:</td><td><input name="city" type="text" size"20"></input></td>
        </tr>
        <tr>
            <td>State:</td><td><input name="state" type="text" size"20"></input></td>
        </tr>
        <tr>
            <td>Country:</td><td><input name="country" type="text" size"20"></input></td>
        </tr>
        <tr>
            <td>Pin :</td><td><input name="pin" type="text" size"20"></input></td>
        </tr>
    </table>
    <input type="hidden" name="user_id" value="<?php echo $_REQUEST['user_id']?>"> </input>
    <input type="submit" value="Update User Details"> </input>
</form>
</body>
</html>

