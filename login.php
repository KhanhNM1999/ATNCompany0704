<!DOCTYPE html>
<html>
<head>
	<title>Get Data</title>
</head>
<body>
<?php
	require_once'./database.php';

	$username = $_POST['user'];
	$password = $_POST['pass'];

	$sql = "SELECT COUNT(*) FROM user WHERE userid='".$username."' AND password='".$password."'";


	// $sql = "SELECT * FROM users WHERE userid = 'hnl' AND password = '12d'";
	$stmt = $pdo->prepare($sql);
//$stmt->setFetchMode(PDO::FETCH_ASSOC);
	$stmt->execute();
	$count = $stmt->fetchColumn();
		// $rows = mysql_num_rows($result);
	if($count > 0)
	{

		echo "<h1> Login successful</h1>";
		?>
		Auto direct, please wait
		<a href="admin.php"> If not, please click here</a>
		<?php
		header("location: index.php");
	}
	else 
	{
		echo "<h1> Login fail</h1>";
		
	}


?>
</body>
</html>