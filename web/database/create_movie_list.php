<?php
session_start();

require_once ("dbconfig.php");
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
    <h1>Add Movies</h1>
    <br><br>
<form method="POST" name="create_movie_list" id="movie_list"
    action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" >
   
        <label for="title">Title: </label> 
        <input type="text" name="title" id="title" size="40" required><br><br>
        
        <label for="director">Director: </label>        
        <input type="text" name="director" id="director" size="50" required><br><br>
        
        <label for="genre">Genre: </label>        
        <input type="text" name="genre" id="genre" size="50" required><br><br>
        
        <label for="year_published">Year Released: </label>        
        <input name="year_published" id="year_published" size="50" required><br><br>
        
        <?php 
            //$result = pg_query($db_con, "SELECT id, name FROM topic");
                       
            if (isset($_POST)) {
               $sql = pg_query_params($db_con, "INSERT INTO phpDB.movies (title, director, genre, year_published) VALUES ($1, $2, $3, $4) returning id", array($_POST['title'], $_POST['director'], $_POST['genre'], $_POST['year_published']));
               
               $statement = $db_con->prepare("SELECT user_name, user_email FROM phpDB.user_login WHERE user_name=:uname AND user_email=:umail");

               //$last_id = pg_fetch_assoc($sql)['id'];
               
               //foreach ($_POST['topics'] as $topic_id) {
                 // $sql = pg_query_params($db_con, "INSERT INTO scripture_topic_link (topic_id, scripture_id) VALUES ($1, $2)", array($topic_id, $last_id));
               //}
            }            
        ?>
        
        <input type="submit" value="Add"><br><br>

        <p>All fields are required.</p><br>

        <hr>


</form>
    <table>
    <tr>
        <th>Title</th>
        <th>Director</th>
        <th>Genre</th>
        <th>Year Published</th>
    </tr>
        <?php       
            $movies = $db_con->query('SELECT * FROM phpDB.movies');
            $results = $movies->fetchAll(PDO::FETCH_ASSOC);
            foreach ($results as $row)
            {
                echo "<tr><td>" . $row['title'] . "</td><td>" . $row['director'] . "</td><td>" . $row['genre'] . "</td><td>" . $row['year_published'] . "</td></tr>";
            }
        ?>
    </table>
</body>
</html>