$str = “PHP parses a file by looking for <br/> one of the special tags that tells it to start interpreting the text as PHP code. The parser then executes all of the code it finds until it runs into a PHP closing <br/> tag.”;
$str1 = “PHP does not require (or support) explicit type definition in variable declaration; a variable's type is determined by the context in which the variable is used.”;

echo "1. Find occurance of PHP from string1 \r\n";
echo substr_count($str,'PHP');

echo "2. Find the position where PHP occures in the string 1";
$pos = strpos($str,'PHP');
echo $pos;

echo "3.Create array of words in string 1 & print them using a recursive function\r\n";
$arr = explode(‘ ’,$str);

function display($item)

{

   print "$item\r\n";

}
array_walk_recursive($arr,'display');

echo "4.Capitalise string 1 \r\n";
echo strtoupper($str);

echo "5.Combine string 1 & 2.\r\n";
echo $str.$str1;

echo "7. Print current date\r\n" ;
$date = new DateTime('now', new DateTimeZone('Asia/Kolkata'));
echo $date->format('d-m-Y');

echo "8. print 12th Jan 2012";

$date=date("dS-M-Y",mktime(0,0,0,1,12,2012));
echo $date;

echo "9. add 7 days in current date";
echo date('Y-m-d', strtotime("+7 days"));

echo "10. Cut the string 1 into 4 parts & print it";
$str_len = strlen($str);
$split_length =$str_len/4;
$split_str = str_split($str,$split_length);
print_r($split_str);

echo "11. Divide the string 1 by occurances of '.'. Combine the array in reverse word sequence";
$arr = explode('.',$str);
print_r(array_reverse($arr));
echo implode(".",$rev_arr);

echo "12. Remove the HTML characters from string.";
echo strip_tags($str);

echo "14. Find the length of string 1 & 2";
echo strlen($str);
echo strlen($str1);

echo "15. Create file & write string 1 to that file using PHP functions.\n\r";
$my_file = 'file.txt';
$handle = fopen($my_file, 'w') or die('Cannot open file:  '.$my_file);
$data = "PHP parses a file by looking for <br/> one of the special tags that tells it to start interpreting the text as PHP code. The parser then executes all of the code it finds until it runs into a PHP closing <br/> tag.";
fwrite($handle, $data);

echo "16. Print all Global varibles provided by PHP:\r\n";
print_r($GLOBALS);

echo "19. Compare two dates. (12-4-2010 & 12-5-2011). Calculate the days between these two dates.";
$datetime1 = new DateTime('2010-04-12');
$datetime2 = new DateTime('2011-05-12');
$interval = $datetime1->diff($datetime2);
echo $interval->format('%R%a days');

echo "20. Print date after 20 days from current date\r\n";
echo date('Y-m-d', strtotime("+20 days"));

echo "21. Print date in array format.\r\n";
$date = new DateTime('now', new DateTimeZone('Asia/Kolkata'));
print_r($date);

echo "22. create array of size 54 and split it into size of 4 indexes and print the new  and and count of new array\r\n";
echo “Create array with range\r\n”;
$arr = range(1,54);
$chunk_array = array_chunk($arr,4);
print_r($chunk_array);
echo “Count of new array is : “.count($chunk_array);







