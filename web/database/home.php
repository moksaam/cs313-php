<?php 
session_start(); 
//phpinfo();

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
      <title>Home Page</title>
      <link rel="stylesheet" href="styles.css" type="text/css"/>
   </head>

   <body>
      <div class="header">
            <div class="left_side">
            
            </div>
            
            <div class="right_side">
                  <label><a href="logout.php?logout=true">Logout</a></label>
            </div>
            
            <div class="content">
                  <h2>Welcome, to the PHP driven database.</h2>
            </div>

            <div class="tables_list">
                  <h3>Available Tables</h3>
                  <ul>
                        <li></li>
                        <li></li>
                  </ul>
                  <br>
                  <a href="create_list.php"><h3>Create New List</h3></a>
            </div>
      </div>
</body>

</html>