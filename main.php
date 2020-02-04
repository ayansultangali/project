<?php
error_reporting(0);
	if($_POST['submit']){
		if (isset($_POST['IIN'])) { $id = $_POST['IIN']; } 
		if (isset($_POST['password'])) { $password=$_POST['password']; }
		if (isset($_POST['position'])) { $position=$_POST['position']; }
		mysql_connect ("localhost","root","");
		mysql_select_db ("users");
		mysql_query("SET NAMES UTF8");
	$position1='1';
	$position2='2';
	$position3='3';
	$position4='4';
	if ($position==$position1){
		$result = mysql_query("SELECT * FROM teacher WHERE iin_t='$id'");
		$myrow = mysql_fetch_array($result);
		if (empty($myrow['password']))
    {
    //если пользователя с введенным логином не существует
	echo "Извините, вы не зарегистрированы на сайте.";
    exit ;
    }
	else {
    //если существует, то сверяем пароли
    if ($myrow['password']==$password) {
		session_start();
		$_SESSION['name']=$myrow['name'];
		$_SESSION['surname']=$myrow['surname'];
		$_SESSION['admin']=$myrow['iin_t'];
	header("Location: teacher/index.php");
	exit;
	}
	}
	}
	elseif ($position==$position2){
		$result = mysql_query("SELECT * FROM parent WHERE iin_p='$id'");
		$myrow = mysql_fetch_array($result);
		if (empty($myrow['password']))
    {
    //если пользователя с введенным логином не существует
	echo "Извините, вы не зарегистрированы на сайте.";
    exit ;
    }
	else {
    //если существует, то сверяем пароли
    if ($myrow['password']==$password) {
		session_start();
		$_SESSION['name']=$myrow['name'];
		$_SESSION['surname']=$myrow['surname'];
		$_SESSION['admin']=$myrow['iin_p'];
	header("Location: parent/index.php");
	exit;
	}
	}
	}
	elseif ($position==$position3){
		$result = mysql_query("SELECT * FROM tutor WHERE iin='$id'");
		$myrow = mysql_fetch_array($result);
		if (empty($myrow['password']))
    {
    //если пользователя с введенным логином не существует
	echo "Извините, вы не зарегистрированы на сайте.";
    exit ;
    }
	else {
    //если существует, то сверяем пароли
    if ($myrow['password']==$password) {
		session_start();
		$_SESSION['name']=$myrow['name'];
		$_SESSION['surname']=$myrow['surname'];
		$_SESSION['admin']=$myrow['iin'];
	header("Location: tutor/index.php");
	exit;
	}
	}
	}
	elseif ($position==$position4){
		$result = mysql_query("SELECT * FROM admin WHERE IIN='$id'");
		$myrow = mysql_fetch_array($result);
		if (empty($myrow['password']))
    {
    //если пользователя с введенным логином не существует
	echo "Извините, вы не зарегистрированы на сайте.";
    exit ;
    }
	else {
    //если существует, то сверяем пароли
    if ($myrow['password']==$password) {
		session_start();
		$_SESSION['name']=$myrow['name'];
		$_SESSION['surname']=$myrow['surname'];
		$_SESSION['admin']=$myrow['IIN'];
	header("Location: admin/index.php");
	exit;
	}
	}
	}	
	else {
			$result1 = mysql_query("SELECT * FROM uchenik WHERE iin_s='$id'");
		$myrow1 = mysql_fetch_array($result1);
		if (empty($myrow1['password']))
    {
    //если пользователя с введенным логином не существует
	echo "Извините, вы не зарегистрированы на сайте.";
    exit ;
    }
	else {
    //если существует, то сверяем пароли
    if ($myrow1['password']==$password) {
		session_start();
		$_SESSION['name']=$myrow1['name'];
		$_SESSION['admin']=$myrow1['iin_s'];
		$_SESSION['class']=$myrow1['class'];
	header("Location: student/index.php");
	exit;
	}
	}
	}
	}
?>
<!DOCTYPE html>

<html>

<head>
	
<meta charset="UTF-8">
	
<title>Авторизация</title>
	
<link rel="stylesheet" href="css/authorization.css" media="screen" type="text/css" />
	
</head>


<body>

   
   
<div id="login-form">
     
<h1>АВТОРИЗАЦИЯ</h1>
     
<fieldset>
          
<form method="POST">
  
<input type="text" name="IIN" maxlength="12" placeholder="ИИН" required pattern="[0-9]{12,}"/></br>
<input type="password" name="password"  maxlength="15" placeholder="Password" required /></br>
<select name="position">
<option value="0">Ученик</option>
<option value="1">Учитель</option>
<option value="2">Родитель</option>
<option value="3">Куратор</option>
<option value="4">Администратор</option>
</select>
<input type="submit" name="submit" value="Вход"/>
</form>
<p align="center" >
<a href="lostpass.php"><font color="orange">Забыли пароль?</font></a><br><br>
<a href="index.php"><font color="orange">Главная страница</font></a></p>
</fieldset>

</div>

</body>

</html>