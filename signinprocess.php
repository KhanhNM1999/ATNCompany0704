<?php
	require_once'./database.php';
	$username = $_POST['userid'];
	$password = $_POST['pass'];

	// $sql = "SELECT COUNT(*) FROM user WHERE userid='".$username."' AND password='".$password."'";

	$sql = "select * from users where username = '$username' and password = '$password' ";
	$stmt = $pdo->prepare($sql);
	$query = mysqli_query($conn,$sql);
	$num_rows = mysqli_num_rows($query);
			if ($num_rows==0) {
				echo "tên đăng nhập hoặc mật khẩu không đúng !";
			}else{
				//tiến hành lưu tên đăng nhập vào session để tiện xử lý sau này
				$_SESSION['username'] = $username;
                // Thực thi hành động sau khi lưu thông tin vào session
                // ở đây mình tiến hành chuyển hướng trang web tới một trang gọi là index.php
                header('Location: index.php');
	// $sql = "SELECT * FROM users WHERE userid = 'hnl' AND password = '12d'";
	

/* /$stmt->setFetchMode(PDO::FETCH_ASSOC);
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
*/

?>