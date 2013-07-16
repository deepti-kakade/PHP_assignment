<?php
error_reporting(E_ALL);
ini_set('display_errors', true);

class DbInstance{
    public $con,$host_name,$username,$password;
    private static $db_instance = null;
    public function __construct(){
        $host_name = "localhost";
        $username = "root";
        $password = "";
        $con= mysql_connect($host_name,$username,$password)or die(mysql_error());
        mysql_select_db("mvc",$con);
       // return $con;
    }

    public static function singleton(){
        if(!isset(self::$instance))
        {
            //$db_instance = __CLASS__;
            self::$db_instance = new self();
            return self::$db_instance;
        }
    }
    public function insertUser($table_name,$data){
        $db = DbInstance::singleton();
        $sql = "insert into ".$table_name."(".implode(",", array_keys($data)).") values(".implode(",", array_values($data)).")";
        $result = mysql_query($sql) or die(mysql_errno());
        if($result)
        {
            print "User inserted successfully";
        }
        else
        {
            print "Please fill right fields";
        }
    }
}
?>