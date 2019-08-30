<?php 
require_once'./database.php'; 
if(isset($_POST["username"]) && isset($_POST["password"]))
{
	$user = $_POST["username"];
	$pass = $_POST["password"];
	$sql ="SELECT * FROM user WHERE username = '{$user}' AND password = '{$pass}'";
	$rows = pg_query($sql);
	if(pg_num_rows($rows)==1) { ?>
		<script>
            alert("Login successfully!!");
        </script>
    <?php
    } else { 
        ?>
            <script>
                alert("Wrong Username/Password");
                window.location.href = "/index.php";
            </script>
        <?php }
}
?>