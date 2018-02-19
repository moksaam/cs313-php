<?php

$dbUrl = getenv('DATABASE_URL');
$dbopts = parse_url($dbUrl);

$dbHost = $dbopts["host"];
$dbPort = $dbopts["port"];
$dbUser = $dbopts["user"];
$dbPassword = $dbopts["pass"];
$dbName = ltrim($dbopts["path"], '/');

$error = array();

try {
   $db_con = new PDO("pgsql:host=$dbHost;port=$dbPort;dbname=$dbName", $dbUser, $dbPassword);
   $db_con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}


catch (PDOException $ex) {
   print "<p>ERROR:" . $ex->getMessage() . "</p><br>";
   die();
}

include_once 'user_class.php';
$user = new USER($db_con);

?>