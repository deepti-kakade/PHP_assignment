<?php
error_reporting(E_ALL);
ini_set('display_errors', true);

class DbInstance{
    public $con,$host_name,$username,$password;
    private static $db_instance = null;

//---------------- create a database connection------------------------
    public function __construct(){
        $this->host_name = "localhost";
        $this->username = "root";
        $this->password = "";
        $this->con= mysql_connect($this->host_name,$this->username,$this->password)or die(mysql_error());
        mysql_select_db("mvc",$this->con);
    }
//----------------------- create a single instance of DbInstance class -------
    public static function singleton(){
        if(!self::$db_instance)
        {
            //$db_instance = __CLASS__;
            self::$db_instance = new self();

        }
        return self::$db_instance;
    }

// ----------------------  insert user data into database-----------------------
    public function insertUser($table_name,$data){
        $db = DbInstance::singleton();
        print_r($db);
        $sql = "insert into ".$table_name."(".implode(",", array_keys($data)).") values(".implode(",", array_values($data)).")";
        echo $sql."\n";
        $result = mysql_query($sql) or die(mysql_errno());
        print_r($result);
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