<?php 
require_once'./database.php'; 
if(isset($POST["username"]) && isset($POST["password"]))
{
	$user = $POST["username"];
	$pass = $POST["password"];
	$sql ="SELECT * FROM user WHERE userid = '$user' AND pass= '$pass'";
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