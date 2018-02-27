<?php
session_start();

require_once ("dbconfig.php");


$movies = $db_con->query('SELECT * FROM phpdb.movies');
$results = $movies->fetchAll(PDO::FETCH_ASSOC);
foreach ($results as $row)
{
	echo "<tr><td>" . $row['title'] . "</td><td>" . $row['director'] . "</td><td>" . $row['genre'] . "</td><td>" . $row['year_published'] . "</td></tr>";
}

?>
<!DOCTYPE html>
<html>
<head>
</head>
<body>
    <div class="right_side">
        <label><a href="logout.php?logout=true">Logout</a></label>
    </div>
    <div class="left_side">
       <a href="home.php"><h2>Home</h2></a>    
    </div>
    <br><br>

    <h2>Select a type of list to create:</h2>
    <br>
    <hr>
    <span><a href="create_movie_list.php">Movie</a></span>
    <span><a href="create_book_list.php">Book</a></span>
    <span><a href="create_music_list.php">Music</a></span>   
    <br>
    <br>
</body>
</html>