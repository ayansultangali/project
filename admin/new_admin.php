 <?php
 if (isset($_POST['IIN'])) { $id = $_POST['IIN']; } 
	if (isset($_POST['password'])) { $password = $_POST['password'];  } 
	if (isset($_POST['surname'])) { $surname = $_POST['surname'];  } 
	if (isset($_POST['name'])) { $name = $_POST['name'];  } 
	
	mysql_connect ("localhost","root","");
        mysql_select_db ("users");
		mysql_query("set names utf8"); 
		$res = mysql_query ("INSERT INTO admin (IIN,password,surname,name) VALUES ('$id','$password','$surname','$name')");
	 if ($res=='TRUE')
	{
    echo "Ваши данные успешно отправлены! <a href='index.php'>Нажмите для возврата </a>";
    }
	else {
    echo "Ошибка! Повторите попытку.";
    }
	?>