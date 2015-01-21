<?php



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

if    (!preg_match("/[0-9a-z_]+@[0-9a-z_^\.]+\.[a-z]{2,3}/i", $email)) {
	exit ("Неверно введен е-mail!");
}
if (empty($lastname) or empty($firstname) or empty($school) or empty($class) or empty($email)) {
	exit ("Вы ввели не всю информацию, пожалуйста заполните все поля!");
}

// подключаемся к базе
include ("bd.php");// файл bd.php должен быть в той же папке, что и все остальные, если это не так, то просто измените путь 

// проверка на существование пользователя с таким же логином
$result = mysql_query("SELECT id FROM users WHERE email='$email'",$db);
$myrow = mysql_fetch_array($result);
if (!empty($myrow['id'])) {
	exit ("Извините, на данный email уже зарегистрирован пользователь.");
}
// если такого нет, то сохраняем данные
$result2 = mysql_query ("INSERT INTO users (lastname,firstname,school,class,email) VALUES('".mysql_real_escape_string($lastname)."','".mysql_real_escape_string($firstname)"','"mysql_real_escape_string($school)"','"mysql_real_escape_string($class)"','"mysql_real_escape_string($email)"')");
// Проверяем, есть ли ошибки
if ($result2=='TRUE') {
	echo "Вы успешно зарегистрированы! Ждем вас с нетерпением на олимпиаде!";
}

else {
	echo "Ошибка! Вы не зарегистрированы.";
}
?>