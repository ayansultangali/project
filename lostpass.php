<?php
error_reporting(0);
if(isset($_POST['submit'])){
    $email = $_POST['email'];
		mysql_connect ("localhost","root","");
        mysql_select_db ("users");
		mysql_query("set names utf8");   
        $resultat = mysql_query("SELECT name,password FROM uchenik WHERE email = '$email'");
		$array = mysql_fetch_array($resultat);
        if (empty($array)){
            echo 'Ошибка! Такого пользователя не существует';
        }
        else{
        $title = 'Восстановления пароля пользователю для сайта Гани Муратбаев';
        $letter = ''.$array['name'].'!Вы запросили восстановление пароля для аккаунта на сайте Гани Муратбаев.
Ваш пароль: '.$array['password'].'
С уважением администрация сайта Гани Муратбаев';
// Отправляем письмо
        if (mail($email, $title, $letter, "Content-type:text/plain; Charset=windows-1251\r\n")) {
        echo 'Ваш пароль отправлен на вашу почту!<br> <a href="index.php">Главная страница</a>';
         }
		 else{
			 echo "Ошибка!";
		 }
                                    
   }
}
?>
<html>

<head>
	
<meta charset="UTF-8">
	
<title>Восстановления пароля</title>
	
<link rel="stylesheet" href="css/authorization.css" media="screen" type="text/css" />
	
</head>


<body>

   
   
<div id="login-form">
     
<h1>ВОССТАНОВЛЕНИЯ ПАРОЛЯ</h1>
     
<fieldset>
<form method="post">
<input type="text" name="email" placeholder="Введите ваш e-mail" required/>
<input type="submit" name="submit" value="Восстановить"/>
</form>
</fieldset>
</div>

</body>

</html>