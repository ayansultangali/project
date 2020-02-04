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
<a href='parent.php?do=logout'>Выйти из сайта</a>

" ;?>
	</div>
  <div class="content">
    <div class="content_resize">
      <div class="login">
      <form method="post" action="new_parent.php">
	  <h1>Регистрация родителя</h1>
        <p><input type="text" name="IIN" required placeholder="ИИН родителя" pattern="[0-9]{12,}"></p>
		<p><input type="text" name="iin_s" required placeholder="ИИН ребенка"></p>
		<p><input type="text" name="surname" required placeholder="ФАМИЛИЯ"></p>
		<p><input type="text" name="name" required placeholder="ИМЯ"></p>
		<p><input type="text" name="father" required placeholder="ОТЧЕСТВО"></p>
		<p><input type="DATE" name="date" required ></p>
		<p><input type="text" name="phone" required placeholder="ТЕЛЕФОН"></p>
		<p><input type="text" name="mail" required placeholder="ПОЧТА"></p>
		<p><input type="text" name="work" required placeholder="МЕСТО РАБОТЫ"></p>
		<p><select name="education">
		<option disabled selected>Образование</option>
		<option value="Высшее">Высшее</option>
		<option value="Средне – техническое">Средне – техническое</option>
		<option value="Средне-специальное">Средне-специальное</option>
		<option value="Среднее ">Среднее </option>
		</select></p>
		<p><input type="text" name="adress" required placeholder="АДРЕС"></p>
		<p><input type="password" name="password" required placeholder="ПРИДУМАЙТЕ ПАРОЛЬ"></p>
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
