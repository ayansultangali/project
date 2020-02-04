 <?php
 if (isset($_POST['IIN'])) { $id = $_POST['IIN']; } 
	if (isset($_POST['surname'])) { $surname = $_POST['surname'];  } 
	if (isset($_POST['father'])) { $father = $_POST['father'];  } 
	if (isset($_POST['gender'])) { $gender = $_POST['gender'];  } 
	if (isset($_POST['date'])) { $date = $_POST['date'];  } 
	if (isset($_POST['name'])) { $name = $_POST['name'];  } 
	if (isset($_POST['phone'])) { $phone = $_POST['phone'];  } 
	if (isset($_POST['adress'])) { $adress = $_POST['adress'];  } 
	if (isset($_POST['mail'])) { $mail = $_POST['mail']; } 
	if (isset($_POST['experience'])) { $experience = $_POST['experience']; } 
	if (isset($_POST['education'])) { $education = $_POST['education']; } 
	if (isset($_POST['nationality'])) { $nationality = $_POST['nationality']; } 
	if (isset($_POST['class'])) { $class = $_POST['class'];  } 
	if (isset($_POST['password'])) { $password = $_POST['password'];  } 
	
	mysql_connect ("localhost","root","");
        mysql_select_db ("users");
		mysql_query("set names utf8"); 
		$res = mysql_query ("INSERT INTO tutor (iin,surname,name,father,gender,birthday,phone,adress,mail,experience,education,nationality,class,password) VALUES ('$id','$surname','$name','$father','$gender','$date','$phone','$adress','$mail','$experience','$education','$nationality','$class','$password')");
	 if ($res=='TRUE')
	{
    echo "Ваши данные успешно отправлены! <a href='index.php'>Нажмите для возврата </a>";
    }
	else {
    echo "Ошибка! Повторите попытку.";
    }
	?>