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
	exit ("������� ������ �-mail!");
}
if (empty($lastname) or empty($firstname) or empty($school) or empty($class) or empty($email)) {
	exit ("�� ����� �� ��� ����������, ���������� ��������� ��� ����!");
}
<?//���� ����� � ������ �������,�� ������������ ��, ����� ���� � ������� �� ��������, ���� �� ��� ���� ����� ������
$login = stripslashes($login);
$login = htmlspecialchars($login);

$password = stripslashes($password);
$password = htmlspecialchars($password);

//������� ������ �������
$login = trim($login);
$password = trim($password);
-?>

// ������������ � ����
include ("bd.php");// ���� bd.php ������ ���� � ��� �� �����, ��� � ��� ���������, ���� ��� �� ���, �� ������ �������� ���� 

// �������� �� ������������� ������������ � ����� �� �������
$result = mysql_query("SELECT id FROM users WHERE email='$email'",$db);
$myrow = mysql_fetch_array($result);
if (!empty($myrow['id'])) {
	exit ("��������, �� ������ email ��� ��������������� ������������.");
}
// ���� ������ ���, �� ��������� ������
$result2 = mysql_query ("INSERT INTO users (lastname,firstname,school,class,email) VALUES('$lastname','$firstname','$school','$class','$email')");
// ���������, ���� �� ������
if ($result2=='TRUE') {
	echo "�� ������� ����������������! ���� ��� � ����������� �� ���������!";
}

else {
	echo "������! �� �� ����������������.";
}
?>