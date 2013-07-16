<?php
require 'model/User.php';
class UserController
{
    public function createUser($name,$email)
    {
        $user =new User($name,$email);
    }
}
?>