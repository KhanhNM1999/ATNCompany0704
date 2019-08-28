<?php
	require_once'./database.php';
	$username = $_POST['user'];
	$password = $_POST['pass'];

$sql="SELECT * FROM $tbl_name WHERE userid='$username' and password='$password'";
$result=mysql_query($sql);
$count=mysql_num_rows($result);
// nếu tài khoản trùng khớp thì sẽ trả về giá trị 1 cho biến $count
if($count==1){
 
// Lúc này nó sẽ tự động gửi đến trang thông báo đăng nhập thành công
session_register("username");
session_register("password");
header("location:login_success.php");
}
else {
echo "Sai tên đăng nhập hoặc mật khẩu";
}
?>

?>