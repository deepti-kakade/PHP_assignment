<?php
error_reporting(E_ALL);
ini_set('display_errors', true);
require 'model/User.php';
class UserController
{
    public function createUser($name,$email)
    {
        $user =new User($name,$email);
        print_r($user);
    }
}
?>