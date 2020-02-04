<!DOCTYPE html>

<html>

<head>
	
<meta charset="UTF-8">
	
<title>Авторизация</title>
	
<link rel="stylesheet" href="css/authorization.css" media="screen" type="text/css" />
	
</head>


<body>

 
<div class="vladmaxi-top">
       
<div class="clr"></div>
   
<div id="login-form">
     
<h1>АВТОРИЗАЦИЯ</h1>
     
<fieldset>
          
<form action = "reg/login.php" method="POST">
  
<input type="text" name="IIN" maxlength="12" placeholder="ИИН" required /></br>
<select name="class" style='width:300px'>
<option value="7A">7A</option>
<option value="7B">7B</option>
<option value="8A">8A</option>
<option value="8B">8B</option>
</select>
<input type="password" name="password"  maxlength="30" placeholder="Password" required /></br>
<input type="submit" name="enter" value="Вход"/>
</form>
</fieldset>

</div>

</body>

</html>