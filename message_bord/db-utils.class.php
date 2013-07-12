<?php
include("message.class.php");
class DBUtils{

    //--------------------------Establish Connection--------------------------
    public function dbConnect(){
        $host_name = "localhost";
        $username = "root";
        $password = "";
        $conn= mysql_connect($host_name,$username,$password)or die(mysql_error());
        return $conn;
    }

    //-----------------------------Create a new message-------------
    public function addMessages($conn,$msg){
        $conn = $conn;
        mysql_select_db("messages",$conn);
        $sql ="insert into messages (author,subject,msg_date,msg_body)values('$msg->author','$msg->subject','$msg->msg_date','$msg->msg_body')";
        $result = mysql_query($sql, $conn) or die(mysql_error());
        echo "Message Created Successfully\n";
    }

    //---------------------------Display all messages---------------------
    public function getAllMessages($conn){
        $conn = $conn;
        $fetch=Array();
        mysql_select_db("messages",$conn);
        $sql = "select * from messages";
        $result=mysql_query($sql,$conn) or die(mysql_error());
        $count=mysql_num_rows($result);
        if($count >0)
        {
            while($row = mysql_fetch_array($result))
            {
                array_push($fetch, $row);
            }
            foreach($fetch as $value){
                print "*****************************\n";
                print "Message Details\n";
                print "*****************************\n";
                print "\nMessage ID:";
                print $value['id']."\n";
                print "\nMessage Author:";
                print $value['author']."\n";
                print "\nMessage Subject:";
                print $value['subject']."\n";
                print "\nMessage Date:";
                print $value['msg_date']."\n";
                print "\nMessage Body:";
                print $value['msg_body']."\n";

            }

        }
    }

    //---------------------- Update a Message------------------------
    public function update($id,$conn){
        $conn = $conn;
        mysql_select_db("messages",$conn);
        $select_sql = "select * from messages where id='$id'";
        $result=mysql_query($select_sql,$conn) or die(mysql_error());
        $count=mysql_num_rows($result);
        if($count == 1)
        {
            print "\n Enter Author:";
            $author = fgets(STDIN);
            print "\n Enter Subject:";
            $subject = fgets(STDIN);
            print "\n Enter Date:";
            $date = fgets(STDIN);
            print "\n Enter Content:";
            $content = fgets(STDIN);
            $sql ="update messages set author='$author',subject='$subject', msg_date='$date',msg_body= '$content' where id='$id'";
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
        mysql_select_db("messages",$conn);

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

//---------------------------Menu Selection-----------------------
$db_utils = new DBUtils();
$con = $db_utils->dbConnect();
print "******************************\n";
echo " Please Enter input:\n";
print "******************************\n";
print "1.Create A Message\n";
print "2.Show all Messages\n";
print "3.Update Message\n";
print "4.Delete Message\n";
print "5.Exit\n";
$choice = fgets(STDIN);
switch($choice){
    case 1:
        print "\nEnter a Author";
        $author = fgets(STDIN);
        print "\nEnter a Subject";
        $subject = fgets(STDIN);
        print "\nEnter a Message Date";
        $msg_date = fgets(STDIN);
        print "\nMessage Content";
        $msg_body = fgets(STDIN);
        $msg = new Message($author, $subject, $msg_date, $msg_body);
        $db_utils->addMessages($con,$msg);
        break;

    case 2:
        $db_utils->getAllMessages($con);
        break;

    case 3:
        print "Update a message:\n";
        print "Enter a message id which u want to update";
        $id = fgets(STDIN);
        $db_utils->update($id,$con);
        break;

    case 4:
        print "Enter a Message id which u want to delete:\n";
        $msg_id = fgets(STDIN);
        $db_utils->deleteMessageById($msg_id,$con);
        break;
    default:
        exit;
        break;
}
?>