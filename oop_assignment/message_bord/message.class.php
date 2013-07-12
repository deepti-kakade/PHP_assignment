<?php
class Message{
    public $id, $author, $subject, $msg_date, $msg_body;

    public function __construct($author,$subject,$msg_date,$msg_body){
        $this->author = $author;
        $this->subject = $subject;
        $this->msg_date = $msg_date;
        $this->msg_body = $msg_body;
    }
}
?>