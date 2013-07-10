<?
session_start();
//print_r($_FILES);
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
          $move = move_uploaded_file($_FILES["file"]["tmp_name"],
                $file_path);
            if($move){
              echo "stored in:".$file_path;
            }
            else{
            echo "Invalid file so can not move";
            }

        }
    }
}
else
{
    echo "Invalid File";
}

?>
