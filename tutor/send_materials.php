<?php
error_reporting(0);
$connect = mysql_connect("localhost","root","") or die(mysql_error());
mysql_select_db("users");
mysql_query("set names utf8");
if (isset($_POST['submit'])){
$message = $_POST["message"];
$date = $_POST["date"];
$iin = $_POST["iin"];
$name_t = $_POST["name_t"];
$surname_t = $_POST["surname_t"];
$iin_p = $_POST["iin_p"];


$result = mysql_query ("INSERT INTO sms (message,date,iin,name,surname,iin_p)VALUES ('$message','$date','$iin','$name_t','$surname_t','$iin_p')");
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