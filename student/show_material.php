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
          <h2>&nbsp;</h2>
          <h2>Сообщение от учителя</h2>
          <div class="clr"></div>
          <form action="#" method="post" id="sendemail">
          <ol>
              <li>
              <table border="0" align="left" cellspacing="1px" cellpadding="20px" >
 <td>

 
 <td>
 <tr>
  <?php

mysql_connect("localhost","root","") or die(mysql_error());
mysql_select_db("users");
mysql_query("set names utf8");

	$query = mysql_query("SELECT message, class, date, name_t, surname_t FROM materials where class= '{$_SESSION['class']}'");
	if($query === FALSE) { 
    die(mysql_error()); // TODO: better error handling
}
	
	while ($row = mysql_fetch_array($query)) {
		$message = $row['message'];
		$class = $row['class'];
		$date = $row['date'];
		$name_t = $row['name_t'];
		$surname_t = $row['surname_t'];
		echo "<tr>";
        echo "<td> &nbsp;$message</td>";
		echo "<td>от: &nbsp;$surname_t $name_t</td>";
		echo "<td>дата: $date</td>";
		
		
		echo "</tr>";
		
		 
	}
	

?>
 </td>
 </tr>
 </table>
              <br><br>
              <label for="select"></label>
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
				<li><a href="#">1  День пожилых людей></li>
				<li><a href="#">21-25  Осенние каникулы</a></li>
                <li><a href="#">3  День учителя</a></li>
                <li><a href="#">3  День учителя</a></li>
       			<li><a href="#">3  День учителя</a></li>
			</ul>
		</li>
		<li><a href="#" onClick="openMenu('sub_menu_3');return(false)">НОЯБРЬ</a>
			<ul id="sub_menu_3">
				<li><a href="#">06 Осенний бал ( 7, 8, 9 классы)</a></li>
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
