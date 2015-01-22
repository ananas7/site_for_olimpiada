<?php
	include ("bd.php");
	$db=GetMyConnection();
	$query = mysql_query("SELECT * FROM users");
	while ($data = mysql_fetch_array($query)) {
		echo $data['lastname'].'    '. $data['firstname'].'    '.$data['school'].;
	}
	mysql_close($db);
?>