<?php
	require_once'./database.php';
	$username = $_POST['user'];
	$password = $_POST['pass'];

	$sql = "SELECT COUNT(*) FROM user WHERE userid='".$username"' AND password= '".$password."'";

//	$sql = "SELECTION * FROM user WHERE userid = 'teamwork1201' AND password='deochoaihet1';

	$stmt = $pdo->prepare($sql);

	$stmt->execute();
	$count = $stmt->fetchColum();

if($count > 0)
{
	echo 'Login Succesful';
}
else
{
	echo 'Fail con mẹ mày rồi'
}
