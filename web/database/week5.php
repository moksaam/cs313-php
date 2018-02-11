<html>
<body>

<h1>Database</h1>

<div>
<table>
<th>Title</th>
<th>Director</th>
<th>Genre</th>
<th>Year Published</th>
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
	echo "<tr><td>" . $row['title'] . "</td><td>" . $row['director'] . "</td><td>" . $row['genre'] . "</td><td>" . $row['year_published'] . "</td></tr>";
}


?>
</table>
</div>
</body>
</html>