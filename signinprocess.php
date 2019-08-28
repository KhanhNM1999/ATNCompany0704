<?php
	require_once'./database.php';
	$username = $_POST['userid'];
	$password = $_POST['pass'];

	$sql = "SELECT COUNT(*) FROM user WHERE userid='".$username."' AND password='".$password."'";


	// $sql = "SELECT * FROM users WHERE userid = 'hnl' AND password = '12d'";
	$stmt = $pdo->prepare($sql);

//$stmt->setFetchMode(PDO::FETCH_ASSOC);
	$stmt->execute();
	
	$count = $stmt->fetchColumn();

if($count > 0)
{
	echo "Login Succesful";
}
else
{
	echo "Fail con mẹ mày rồi";
}
?>
