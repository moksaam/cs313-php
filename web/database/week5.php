<html>
<body>

<h1>Database</h1>

<?php

$dbUrl = getenv('DATABASE_URL');
$dbopts = parse_url($dbUrl);

$dbHost = $dbopts["host"];
$dbPort = $dbopts["port"];
$dbUser = $dbopts["user"];
$dbPassword = $dbopts["pass"];
$dbName = ltrim($dbopts["path"], '/');

try {
 $db = new PDO("pgsql:host=$dbHost;port=$dbPort;dbname=$dbName", $dbUser, $dbPassword);
}
catch (PDOException $ex) {
 print "<p>error: $ex->getMessage() </p>\n\n";
 die();
}

$movies = $db->query('SELECT * FROM phpdb.movies');
$results = $movies->fetchAll(PDO::FETCH_ASSOC);

foreach ($results as $row)
{
	echo "<p><strong>" . $row['title'] . " " . $row['director'] . ":" . $row['genre'] . "</strong> - " . $row['year_published'] . " " . $row['creation_date'] . "</p><br>";
}


?>