<?php
// url ----> local.framework.com/index.php?controller=User&action=createUser&name=deepti&email=deepti@weboniselab.com
error_reporting(E_ALL);
ini_set('display_errors', true);
$controller_name = $_GET['controller'];

if(file_exists('controller/'.$controller_name.'Controller.php'))
{
    include_once 'controller/'.$controller_name.'Controller.php';
    $action_name = $_GET['action'];
    $controller_name.='Controller';
    $controller = new $controller_name();
    $controller->$action_name($_GET['name'],$_GET['email']);
}
else
{
    die;
}
?>