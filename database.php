<?php
$host = "ec2-23-21-109-177.compute-1.amazonaws.com";
$user = "fbktsyydywjtob";
$password = "4adeebb5a77d51d05e1fa4fe4b11080611f3f6a047ffcb34ae294b3a0c1c5130";
$dbname = "d34p9kvr0bn1kf";
$port = "5432";
try{
  //Set DSN data source name
    $dsn = "pgsql:host=" . $host . ";port=" . $port .";dbname=" . $dbname . ";user=" . $user . ";password=" . $password . ";";
  //create a pdo instance
  $pdo = new PDO($dsn, $user, $password);
  $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE,PDO::FETCH_OBJ);
  $pdo->setAttribute(PDO::ATTR_EMULATE_PREPARES,false);
  $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}
catch (PDOException $e) {
echo 'Connection failed: ' . $e->getMessage();
}
?>