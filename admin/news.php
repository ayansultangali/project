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
<a href='news.php?do=logout'>Выйти из сайта</a>

" ;?>
	</div>
  <div class="content">
    <div class="content_resize">
      <div class="login">
      <form method="post" action="new_news.php">
	  <h1>Добавить новость</h1>
		<p><input type="text" name="IIN" readonly value="<?php echo $_SESSION['admin'] ;?>"></p>
		<p><input type="date" name="date" readonly value="<?=date("Y-m-d");?>"></p>
		<p><textarea name="message" cols="40" rows="8"></textarea></p>
		<p><input type="submit" name="commit" value="Опубликовать"></p>
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
