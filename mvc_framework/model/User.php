<?php
class User extends DbInstance{
    public $name,$email;

    public function __construct($name,$email){
        $table_name = "users";
        $this->name = $name;
        $this->email->$email;
        $array = array('name' => $this->$name,'email'=> $this->email);
        insertUserData($table_name,$array);
    }
}
?>