<?php
error_reporting(0);
$connect = mysql_connect("localhost","root","") or die(mysql_error());
mysql_select_db("users");
mysql_query("set names utf8");
if (isset($_POST['submit'])){
$class = $_POST["class"];
$file = $_POST["file"];
$message = $_POST["message"];
$date = $_POST["date"];
$iin_t = $_POST["iin_t"];
$name_t = $_POST["name_t"];
$surname_t = $_POST["surname_t"];

$result = mysql_query ("INSERT INTO materials (class,file,message,date,iin_t,name_t,surname_t) VALUES ('$class','$file','$message','$date','$iin_t','$name_t','$surname_t')");
if ($result == 'true')
{
echo "Cообщение отправлено. Для возврата <a href='materials.php'>нажмите</a>";    
}
else
{
echo "Cообщение не отправлено!";
}	
}
?>