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
<a href='students.php?do=logout'>Выйти из сайта</a>

" ;?>
	</div>
  <div class="content">
    <div class="content_resize">
      <div class="login">
      <form method="post" action="new_student.php">
	  <h1>Регистрация ученика</h1>
        <p><input type="text" name="IIN" required placeholder="ИИН" pattern="[0-9]{12,}"></p>
		<p><input type="text" name="surname" required placeholder="ФАМИЛИЯ"></p>
		<p><input type="text" name="name" required placeholder="ИМЯ"></p>
		<p><input type="text" name="father" required placeholder="ОТЧЕСТВО"></p>
		<p><select name="gender"><option value="мужской">Мужской</option><option value="женский">Женский</option></select></p>
		<p><input type="DATE" name="date" required ></p>
		<p><input type="text" name="adress" required placeholder="АДРЕС"></p>
		<p><input type="text" name="phone" required placeholder="ТЕЛЕФОН"></p>
		<p><input type="text" name="mail" required placeholder="ПОЧТА"></p>
		<p><select name="nationality">
		<option disabled selected>Национальность</option>
		<option value="Казах(казашка)">Казах(казашка)</option>
		<option value="Русский(Русская)">Русский(Русская)</option>
		<option value="Турк(Турчанка)">Турк(Турчанка)</option>
		<option value="Немец(Немка)">Немец(Немка)</option>
		<option value="Корейц(Кореянка)">Корейц(Кореянка)</option>
		</select></p>
		<p><select name="class" style='width:280px'>
			<option value="1A">1"A"</option>
			<option value="1B">1"B"</option>
			<option value="2A">2"A"</option>
			<option value="2B">2"B"</option>
			<option value="3A">3"A"</option>
			<option value="3B">3"B"</option>
			<option value="4A">4"A"</option>
			<option value="4B">4"B"</option>
			<option value="5A">5"A"</option>
			<option value="5B">5"B"</option>
			<option value="6A">6"A"</option>
			<option value="6B">6"B"</option>
			<option value="7A">7"A"</option>
			<option value="7B">7"B"</option>
			<option value="8A">8"A"</option>
			<option value="8B">8"B"</option>
			<option value="9A">9"A"</option>
			<option value="9B">9"B"</option>
			<option value="10A">10"A"</option>
			<option value="10B">10"B"</option>
			<option value="11A">11"A"</option>
			<option value="11B">11"B"</option>
		</select></p>
		<p><select name="sfamily">
		<option value="Полная">Полная</option>
		<option value="Неполная">Неполная</option>
		<option value="Многодетная">Многодетная</option>
		</select></p>
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
