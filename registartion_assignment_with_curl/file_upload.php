<?
session_start();
$temp = explode(".", $_FILES["file"]["name"]);
$extension = end($temp);
$allowed_ext = array("gif","jpg","jpeg","png");
if(in_array($extension,$allowed_ext))
{
    if($_FILES["file"]["error"] > 0)
    {
        echo "Error".$_FILES["file"]["error"];
    }
    else
    {
        $file_path = "upload/".$_FILES["file"]["name"];
        if (file_exists($file_path))
        {
            echo $_FILES["file"]["name"] . " already exists. ";
        }
        else
        {
            print $_FILES["file"]["name"];
            $file_name_with_full_path = $_FILES["file"]["tmp_name"];
            $file_name = $_FILES["file"]["name"];
            $post = array('file'=>'@'.$file_name_with_full_path.';filename='.$file_name,);
            $ch = curl_init();
            curl_setopt($ch,CURLOPT_HEADER,0);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
            curl_setopt($ch,CURLOPT_URL,'http://local.login.com/curl_upload.php');
            curl_setopt($ch,CURLOPT_POST,1);
            curl_setopt($ch, CURLOPT_POSTFIELDS,$post);
            curl_setopt($ch, CURLOPT_VERBOSE, 1);
            $result = curl_exec($ch);
            curl_close($ch);
        }
    }
}
else
{
    echo "Invalid File";
}

?>