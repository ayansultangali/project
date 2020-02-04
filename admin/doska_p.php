<?php
error_reporting(0);

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
<a href='doska_p.php?do=logout'>Выйти из сайта</a>

" ;?>
	</div>
  <div class="content">
    <div class="content_resize">
      <div class="login">
      <form method="post" action="new_doska_p.php">
	  <h1>Доска почета</h1>
	  	<p><input type="text" name="IIN" readonly value="<?php echo $_SESSION['admin'] ;?>"></p>
		<p><input type="text" name="iin_s" placeholder="Введите ИИН" required pattern="[0-9]{12,}"></p>
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
		<p><input type="submit" name="commit" value="Добавить"></p>
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
