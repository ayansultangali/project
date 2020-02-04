 <?php
 error_reporting(0);
 if (isset($_POST['IIN'])) { $id = $_POST['IIN']; }
 if (isset($_POST['iin_s'])) { $iin_s = $_POST['iin_s']; }
	if (isset($_POST['surname'])) { $surname = $_POST['surname'];  } 
	if (isset($_POST['father'])) { $father = $_POST['father'];  } 
	if (isset($_POST['date'])) { $date = $_POST['date'];  } 
	if (isset($_POST['name'])) { $name = $_POST['name'];  } 
	if (isset($_POST['phone'])) { $phone = $_POST['phone'];  } 
	if (isset($_POST['mail'])) { $mail = $_POST['mail']; } 
	if (isset($_POST['work'])) { $work = $_POST['work']; } 
	if (isset($_POST['education'])) { $education = $_POST['education']; }
	if (isset($_POST['adress'])) { $adress = $_POST['adress']; } 
	if (isset($_POST['password'])) { $password = $_POST['password'];  } 
	
	mysql_connect ("localhost","root","");
        mysql_select_db ("users");
		mysql_query("set names utf8"); 
		$res = mysql_query ("INSERT INTO parent (iin_p,iin_s,surname,father,name,birthday,phone,mail,work,education,adress,password) VALUES ('$id','$iin_s','$surname','$father','$name','$date','$phone','$mail','$work','$education','$adress','$password')");
	 if ($res=='TRUE')
	{
    echo "Ваши данные успешно отправлены! <a href='index.php'>Нажмите для возврата </a>";
    }
	else {
    echo "Ошибка! Повторите попытку.";
    }
	?>