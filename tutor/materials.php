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
echo " <div style='position:absolute; top:30px; right:50px'> Здравствуйте {$_SESSION['name']} !<br /><br />
<a href='index.php?do=logout' >Выйти из сайта</a></div>
" ;?>
</div>
  <div class="content">
    <div class="content_resize">
      <div class="mainbar">
        <div class="article"></div>
        <div class="article">
		
		
		   <div class="post_content">
		 
		  
		  <?php
		  if($_POST['submit']){
			   echo "<div class='ada' style='z-index:1000;height:430px; background-color:#18191b; position:absolute; top:650px; left:475px; width: 680px; color:#18191b;'";
			
$search1=$_POST['search'];
mysql_connect('localhost', 'root', '');
        mysql_select_db('users');
        mysql_query('SET NAMES utf8');
		 $sql = mysql_query("SELECT * FROM uchenik WHERE iin_s LIKE '$search1%' ");
		 while($row=mysql_fetch_array($sql)){
			 $id=$row['iin_s'];
			 $name1=$row['name'];
			 $surname1=$row['surname'];
			 $phone=$row['phone'];
			 			 echo "<table border='0' class='asdas' width='100%' align='left' cellpadding='3px' style='color:black; background-color:#fff; padding-left:5px;'>
			  <tr><th  style='background-color:#ccc; text-align:left;'>ИИН</th>
 <th width='18%' style='background-color:#ccc;  text-align:left;'>Фамилия</th>
 <th width='16%' style='background-color:#ccc;  text-align:left;'>Имя</th>
 <th width='48%' style='background-color:#ccc;  text-align:left;'>Телефон</th>";

			 echo "<tr>";
			 echo "<td>$id </td>";
			 echo "<td>$name1</td>";
			 echo "<td>$surname1</td>";
			 echo "<td>$phone</td>";
			 echo "</tr><br />";
			 	 echo "</table>";
		 }
	
			 echo "</div>";
		  }
	?>
          </div>
		     <h2>&nbsp;</h2>
          <h2>Сообщение родителю</h2>
         
          <form action="send_materials.php" method="post">
          <ol>
		    <li>
			<input type="text" name="iin" maxlength="12" size="30" value="<?php echo $_SESSION['admin'] ;?>" readonly /><br><br>
			<input type="text" name="name_t" maxlength="30" size="30" value="<?php echo $_SESSION['name'];?>" readonly /><br><br>
			<input type="text" name="surname_t" maxlength="30" size="30" value="<?php echo $_SESSION['surname'];?>"readonly /><br><br>
			<input type="text" name="iin_p" maxlength="12" size="30" placeholder="ИИН родителя" required /><br><br>
                <input type="date" name="date" value="<?=date("Y-m-d");?>" readonly /><br><br>			
			  </li>
              <li>
              <textarea name="message" cols="50" rows="8" id="message" placeholder="Введите сообщение" required></textarea>
              <br><br>
			   <input type="submit" name="submit" value="Отправить"></li>
			
              <li>
                <div class="clr"></div>
              </li>
            </ol>
          </form>
		
     
        </div>
      </div>
      <div class="sidebar">
       <div class="searchform">
		 <br><br>
		<form method="post" action="doska_p.php">
		<input type="submit" name="submit2" value="Наши достижения" style="
		    background-color: #55aacd;
   	border: 3px;
	border-radius: 6px;
    color: white;
        padding: 10px 30px;
		outline: none;
		cursor: pointer;
    text-align: center;
    text-decoration: none;
    display:block;
    font-size: 18px;
	position:relative;
        top:5;
        left:10
		;
		"/><br><br>
		</form>
          <form id="formsearch" name="formsearch" method="post" >
            <span>
            <input name="search" maxlength="12" placeholder="Введите ИИН ученика" type="text" required />
            </span>
            <input name="submit" type="submit" value="Поиск" />
          </form>
		
        </div>
        <div class="gadget">
<table id="calendar2">
  <thead>
    <tr><td>‹<td colspan="5"><td>›
    <tr><td>Пн<td>Вт<td>Ср<td>Чт<td>Пт<td>Сб<td>Вс
  <tbody>
</table>

<script>
function Calendar2(id, year, month) {
var Dlast = new Date(year,month+1,0).getDate(),
    D = new Date(year,month,Dlast),
    DNlast = new Date(D.getFullYear(),D.getMonth(),Dlast).getDay(),
    DNfirst = new Date(D.getFullYear(),D.getMonth(),1).getDay(),
    calendar = '<tr>',
    month=["Январь","Февраль","Март","Апрель","Май","Июнь","Июль","Август","Сентябрь","Октябрь","Ноябрь","Декабрь"];
if (DNfirst != 0) {
  for(var  i = 1; i < DNfirst; i++) calendar += '<td>';
}else{
  for(var  i = 0; i < 6; i++) calendar += '<td>';
}
for(var  i = 1; i <= Dlast; i++) {
  if (i == new Date().getDate() && D.getFullYear() == new Date().getFullYear() && D.getMonth() == new Date().getMonth()) {
    calendar += '<td class="today">' + i;
  }else{
    calendar += '<td>' + i;
  }
  if (new Date(D.getFullYear(),D.getMonth(),i).getDay() == 0) {
    calendar += '<tr>';
  }
}
for(var  i = DNlast; i < 7; i++) calendar += '<td>&nbsp;';
document.querySelector('#'+id+' tbody').innerHTML = calendar;
document.querySelector('#'+id+' thead td:nth-child(2)').innerHTML = month[D.getMonth()] +' '+ D.getFullYear();
document.querySelector('#'+id+' thead td:nth-child(2)').dataset.month = D.getMonth();
document.querySelector('#'+id+' thead td:nth-child(2)').dataset.year = D.getFullYear();
if (document.querySelectorAll('#'+id+' tbody tr').length < 6) { 
    document.querySelector('#'+id+' tbody').innerHTML += '<tr><td>&nbsp;<td>&nbsp;<td>&nbsp;<td>&nbsp;<td>&nbsp;<td>&nbsp;<td>&nbsp;';
}
}
Calendar2("calendar2", new Date().getFullYear(), new Date().getMonth());
document.querySelector('#calendar2 thead tr:nth-child(1) td:nth-child(1)').onclick = function() {
  Calendar2("calendar2", document.querySelector('#calendar2 thead td:nth-child(2)').dataset.year, parseFloat(document.querySelector('#calendar2 thead td:nth-child(2)').dataset.month)-1);
}
document.querySelector('#calendar2 thead tr:nth-child(1) td:nth-child(3)').onclick = function() {
  Calendar2("calendar2", document.querySelector('#calendar2 thead td:nth-child(2)').dataset.year, parseFloat(document.querySelector('#calendar2 thead td:nth-child(2)').dataset.month)+1);
}
</script>
        </div>
        <div class="gadget">
          <h2 class="star"><span>Календарь событий на 2015-2016</span></h2>
          <div class="clr"></div>
          <div id="menu_body">
	<ul>
		<li><a href="#" onClick="openMenu('sub_menu_1');return(false)">СЕНТЯБРЬ</a>
			<ul id="sub_menu_1">
				<li><a href="#">01  День знаний</a></li>
                <li><a href="#">12  День семьи</a></li>
                <li><a href="#">24  Курбан Айт</a></li>
			</ul>
		</li>
		<li><a href="#" onClick="openMenu('sub_menu_2');return(false)">ОКТЯБРЬ</a>
			<ul id="sub_menu_2">
				<li><a href="#">1  День пожилых людейa></li>
				<li><a href="#">21-25  Осенние каникулы</a></li>
                <li><a href="#">3  День учителя</a></li>
                <li><a href="#">3  День учителя</a></li>
       			<li><a href="#">3  День учителя</a></li>
			</ul>
		</li>
		<li><a href="#" onClick="openMenu('sub_menu_3');return(false)">НОЯБРЬ</a>
			<ul id="sub_menu_3">
				<li><a href="#">06 Осенний бал ( 7, 8, 9 классы</a></li>
				<li><a href="#">Подпункт №2</a></li>
				<li><a href="#">Подпункт №3</a></li>
			</ul>
		</li>
        <li><a href="#" onClick="openMenu('sub_menu_3');return(false)">ДЕКАБРЬ</a>
			<ul id="sub_menu_3">
				<li><a href="#">1-2  НовыйГод</a></li>
				<li><a href="#">1-9  Зимние каникулы</a></li>
				<li><a href="#">7  Рождество Христово</a></li>
			</ul>
		</li>
        <li><a href="#" onClick="openMenu('sub_menu_3');return(false)">ЯНВАРЬ</a>
			<ul id="sub_menu_3">
				<li><a href="#">Подпункт №1</a></li>
				<li><a href="#">Подпункт №2</a></li>
				<li><a href="#">Подпункт №3</a></li>
			</ul>
		</li>
        <li><a href="#" onClick="openMenu('sub_menu_3');return(false)">ФЕВРАЛЬ</a>
			<ul id="sub_menu_3">
				<li><a href="#">15  День афганцев</a></li>
				<li><a href="#">Подпункт №2</a></li>
				<li><a href="#">Подпункт №3</a></li>
			</ul>
		</li>
        <li><a href="#" onClick="openMenu('sub_menu_3');return(false)">МАРТ</a>
			<ul id="sub_menu_3">
				<li><a href="#">8  Международный женский день</a></li>
				<li><a href="#">19-24  Весенние каникулы</a></li>
				<li><a href="#">22  Наурыз</a></li>
			</ul>
		</li>
        <li><a href="#" onClick="openMenu('sub_menu_3');return(false)">АПРЕЛЬ</a>
			<ul id="sub_menu_3">
				<li><a href="#">7  День здоровья</a></li>
				<li><a href="#">Подпункт №2</a></li>
				<li><a href="#">Подпункт №3</a></li>
			</ul>
		</li>
        <li><a href="#" onClick="openMenu('sub_menu_3');return(false)">МАЙ</a>
			<ul id="sub_menu_3">
				<li><a href="#">1-2 День единства народов РК</a></li>
				<li><a href="#">7  День защитников Отечества</a></li>
				<li><a href="#">9  День Победы</a></li>
                <li><a href="#">25  Последний звонок</a></li>
			</ul>
		</li>
        <li><a href="#" onClick="openMenu('sub_menu_3');return(false)">ИЮНЬ</a>
			<ul id="sub_menu_3">
				<li><a href="#">29  Выпускной</a></li>
				<li><a href="#">Подпункт №2</a></li>
				<li><a href="#">Подпункт №3</a></li>
			</ul>
		</li>

		</li>
	</ul>
</div>

      </div>
      <div class="clr"></div>
    </div>
  </div>
  <div class="fbg">
    <div class="fbg_resize">
      <div class="clr"></div>
    </div>
  </div>
 <?php
 require "blocks/footer.php";
 ?>
