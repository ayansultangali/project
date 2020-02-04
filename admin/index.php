<?php

	error_reporting (0);
session_start();

if($_GET['do'] == 'logout'){
	unset($_SESSION['admin']);
	session_destroy();
}

if(!$_SESSION['admin']){
	header("Location: ../main.php");
	exit;
}
require "blocks/header.php";
?>
<div class="logged">
	<?php		

echo " Здравствуйте {$_SESSION['name']} !<br /><br />
<a href='index.php?do=logout'>Выйти из сайта</a>

" ;?>
	</div>
  <div class="content">
    <div class="content_resize">
      <div class="login">
      <form method="post" action="new_admin.php">
	  <h1>Регистрация администратора</h1>
        <p><input type="text" name="IIN" required placeholder="ИИН" pattern="[0-9]{12,}"></p>
		<p><input type="password" name="password" required placeholder="ПРИДУМАЙТЕ ПАРОЛЬ"></p>
		<p><input type="text" name="surname" required placeholder="ФАМИЛИЯ"></p>
		<p><input type="text" name="name" required placeholder="ИМЯ"></p>
		<p><input type="submit" name="commit" value="Зарегистрировать"></p>
		</form>
    </div>
   
  <div class="fbg">
    <div class="fbg_resize">
      <div class="clr"></div>
    </div>
  </div>
<?php
require "blocks/footer.php";
?>
