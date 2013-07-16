<?php
include 'model/User.php';
class UserController
{
    public function createUser($name,$email)
    {
        echo "hi";
        echo $name;
        echo $email;
        $user =new User($name,$email);
        print_r($user);
    }
}
?>