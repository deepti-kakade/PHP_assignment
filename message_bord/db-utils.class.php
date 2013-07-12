<?php
include("message.class.php");
class DBUtils{

    //--------------------------Establish Connection--------------------------
    public function dbConnect(){
        $host_name = "localhost";
        $username = "root";
        $password = "";
        $conn= mysql_connect($host_name,$username,$password)or die(mysql_error());
        mysql_select_db("messages",$conn);
        return $conn;
    }
    //-----------------------------Create a new message-------------
    public function addMessages($conn,$msg){
        $conn = $conn;
        $sql ="insert into messages (author,subject,msg_date,msg_body)values('$msg->author','$msg->subject','$msg->msg_date','$msg->msg_body')";
        $result = mysql_query($sql, $conn) or die(mysql_error());
        echo "Message Created Successfully\n";
    }
    //---------------------------Display all messages---------------------
    public function getAllMessages($conn){
        $conn = $conn;
        $fetch=Array();
        $sql = "select * from messages";
        $result=mysql_query($sql,$conn) or die(mysql_error());
        $count=mysql_num_rows($result);
        if($count >0)
        {
            while($row = mysql_fetch_array($result))
            {
                array_push($fetch, $row);
            }

        }
        return $fetch;
    }
    //---------------------- Update a Message------------------------
    public function update($id,$conn,$msg){
        $conn = $conn;
        $select_sql = "select * from messages where id='$id'";
        $result=mysql_query($select_sql,$conn) or die(mysql_error());
        $count=mysql_num_rows($result);
        if($count == 1)
        {
            $sql ="update messages set author='$msg->author',subject='$msg->subject', msg_date='$$msg->msg_date',msg_body= '$msg->msg_body' where id='$id'";
            $result = mysql_query($sql, $conn) or die(mysql_error());
            echo "Message Updated Successfully\n";
        }
        else{
            print "\nRecord not present\n";
        }

    }
    //------------- Delete a Message-----------------------
    public function deleteMessageById($msg_id,$conn){
        $conn = $conn;
        $select_sql = "select * from messages where id='$msg_id'";
        $result=mysql_query($select_sql,$conn) or die(mysql_error());
        $count=mysql_num_rows($result);
        if($count == 1)
        {
            $sql = "delete from messages where id = '$msg_id'";
            $result = mysql_query($sql, $conn) or die(mysql_error());
            print "Msg deleted successfully\n";
        }
        else {
            print "\nMessage Deleted Successfully\n";
        }
    }

}
?>