 <?php
 error_reporting(0);
 	if (isset($_POST['IIN'])) { $IIN = $_POST['IIN'];  }
	if (isset($_POST['class'])) { $class = $_POST['class'];  } 
	if (isset($_POST['iin_s'])) { $iin_s = $_POST['iin_s'];  }

	mysql_connect ("localhost","root","");
        mysql_select_db ("users");
		mysql_query("set names utf8"); 
		$res = mysql_query ("INSERT INTO doska_p (IIN,iin_s,class) VALUES ('$IIN','$iin_s','$class')");
	 if ($res=='TRUE')
	{
    echo "Ученик добавлен! <a href='index.php'>Нажмите для возврата </a>";
    }
	else {
    echo "Ошибка! Повторите попытку.";
    }

	?>