<?php
$lastname="";
$firstname="";
$school="";
$class="";
$email="";
if ($_POST['validator']!=''){
  exit('Ботам ходу нет!');
}
if (isset($_POST['LastName'])) { 
	$lastname = $_POST['LastName']; 
	if ($lastname == '') { unset($lastname);} 
}
if (isset($_POST['FirstName'])) { 
	$firstname = $_POST['FirstName']; 
	if ($firstname == '') { unset($firstname);} 
}
if (isset($_POST['School'])) { 
	$school = $_POST['School']; 
	if ($school == '') { unset($school);} 
}
if (isset($_POST['Class'])) { 
	$class = $_POST['Class']; 
	if ($class == '') { unset($class);} 
}
if (isset($_POST['Email'])) {	
	$email = $_POST['Email'];
	if ($email == '') { unset($email);} 
}

if(filter_var($email, FILTER_VALIDATE_IP)){
	exit ("Неверно введен e-mail!"."#".$email."#");
}
if (empty($lastname) or empty($firstname) or empty($school) or empty($class) or empty($email)) {
	exit ("Вы ввели не всю информацию, пожалуйста заполните все поля!");
}

include ("bd.php");
$db=GetMyConnection();
$result = mysql_query("SELECT id FROM users WHERE email='".mysql_real_escape_string($email)."'",$db);
$myrow = mysql_fetch_array($result);
if (!empty($myrow['id'])) {
	exit ("Извините, на данный email уже зарегистрирован пользователь.");
}
// если такого нет, то сохраняем данные
$result2 = mysql_query ("INSERT INTO users (lastname,firstname,school,class,email) VALUES('".mysql_real_escape_string($lastname)."','".mysql_real_escape_string($firstname)."','".mysql_real_escape_string($school)."','".mysql_real_escape_string($class)."','".mysql_real_escape_string($email)."')");
// Проверяем, есть ли ошибки
if ($result2=='TRUE') {
	header ('Location: ../index2.html');
    exit();
}else {
	echo "Ошибка! Вы не зарегистрированы.";
}
?>