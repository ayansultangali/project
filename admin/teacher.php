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
<a href='teacher.php?do=logout'>Выйти из сайта</a>

" ;?>
	</div>
  <div class="content">
    <div class="content_resize">
      <div class="login">
      <form method="post" action="new_teacher.php">
	  <h1>Регистрация учителя</h1>
        <p><input type="text" name="IIN" required placeholder="ИИН" pattern="[0-9]{12,}"></p>
		<p><input type="text" name="surname" required placeholder="ФАМИЛИЯ"></p>
		<p><input type="text" name="name" required placeholder="ИМЯ"></p>
		<p><input type="text" name="father" required placeholder="ОТЧЕСТВО"></p>
		<p><select name="gender">
		<option value="мужской">Мужской</option>
		<option value="женский">Женский</option>
		</select></p>
		<p><input type="DATE" name="date" required ></p>
		<p><input type="text" name="adress" required placeholder="АДРЕС"></p>
		<p><input type="text" name="phone" required placeholder="ТЕЛЕФОН"></p>
		<p><input type="text" name="mail" required placeholder="ПОЧТА"></p>
		<p><select name="experience">
		<option disabled selected >Стаж работы</option>
		<option value="1 год">1 год</option>
		<option value="2 год">2 год</option>
		<option value="3 год">3 год</option>
		<option value="4 год">4 год</option>
		<option value="5 лет">5 лет</option>
		<option value="6 лет">6 лет</option>
		<option value="7 лет">7 лет</option>
		<option value="8 лет">8 лет</option>
		<option value="9 лет">9 лет</option>
		<option value="10 лет">10 лет</option>
		<option value="11 лет">11 лет</option>
		<option value="12 лет">12 лет</option>
		<option value="13 лет">13 лет</option>
		<option value="14 лет">14 лет</option>
		<option value="15 лет">15 лет</option>
		<option value="16 лет">16 лет</option>
		<option value="17 лет">17 лет</option>
		<option value="18 лет">18 лет</option>
		<option value="19 лет">19 лет</option>
		<option value="20 лет">20 лет</option>
		<option value="21 лет">21 лет</option>
		<option value="22 лет">22 лет</option>
		<option value="23 лет">23 лет</option>
		<option value="24 лет">24 лет</option>
		<option value="25 лет">25 лет</option>
		<option value="26 лет">26 лет</option>
		<option value="27 лет">27 лет</option>
		<option value="28 лет">28 лет</option>
		<option value="29 лет">29 лет</option>
		<option value="30 лет">30 лет</option>
		<option value="31 лет">31 лет</option>
		<option value="32 лет">32 лет</option>
		<option value="33 лет">33 лет</option>
		<option value="34 лет">34 лет</option>
		<option value="35 лет">35 лет</option>
		<option value="36 лет">36 лет</option>
		<option value="37 лет">37 лет</option>
		<option value="38 лет">38 лет</option>
		<option value="39 лет">39 лет</option>
		<option value="40 лет">40 лет</option>
		</select></p>
		<p><select name="education">
		<option disabled selected>Образование</option>
		<option value="Высшее">Высшее</option>
		<option value="Средне – техническое">Средне – техническое</option>
		<option value="Средне-специальное">Средне-специальное</option>
		<option value="Среднее ">Среднее </option>
		</select></p>
		<p><select name="nationality">
		<option disabled selected>Национальность</option>
		<option value="Казах(казашка)">Казах(казашка)</option>
		<option value="Русский(Русская)">Русский(Русская)</option>
		<option value="Турк(Турчанка)">Турк(Турчанка)</option>
		<option value="Немец(Немка)">Немец(Немка)</option>
		<option value="Корейц(Кореянка)">Корейц(Кореянка)</option>
		</select></p><br>
		<select name="class" multiple style='width:280px'>
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
		</select>
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
