 <?php

 if (isset($_POST['date'])) { $date = $_POST['date']; } 
	if (isset($_POST['message'])) { $message = $_POST['message'];  } 
	if (isset($_POST['IIN'])) { $IIN = $_POST['IIN'];  }
	
	mysql_connect ("localhost","root","");
        mysql_select_db ("users");
		mysql_query("set names utf8"); 
		$res = mysql_query ("INSERT INTO news (IIN,date,message) VALUES ('$IIN','$date','$message')");
	 if ($res=='TRUE')
	{
    echo "Новость опубликован! <a href='index.php'>Нажмите для возврата </a>";
    }
	else {
    echo "Ошибка! Повторите попытку.";
    }
	?>