<?php 
require_once 'database.php';  
if(isset($_POST["username"]) && isset($_POST["pass"]))
{
	$user = $_POST["username"];
	$pass = $_POST["pass"];
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