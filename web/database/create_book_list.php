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
    <h1>Add Books</h1>
    <br><br>
<form method="POST" name="create_book_list" id="book_list"
      action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" >   
      <label for="title">Title: </label> 
        <input type="text" name="title" id="title" size="40" required><br><br>
        
        <label for="author">Author: </label> 
        <input type="text" name="author" id="author" size="40" required><br><br>
        
        <label for="genre">Genre: </label>        
        <input type="text" name="genre" id="v" size="50" required><br><br>
        
        <label for="year_published">Year Published: </label>        
        <input name="year_published" id="year_published" size="50" required><br><br>
        
        <?php 
            $result = pg_query($db_con, "SELECT id, name FROM topic");
                       
            if (isset($_POST)) {
               $sql = pg_query_params($db_con, "INSERT INTO scripture (title, author, genre, year_published) VALUES ($1, $2, $3, $4) returning id", array($_POST['title'], $_POST['director'], $_POST['genre'], $_POST['year_published']));
               
               $last_id = pg_fetch_assoc($sql)['id'];
               
               foreach ($_POST['topics'] as $topic_id) {
                  $sql = pg_query_params($db_con, "INSERT INTO scripture_topic_link (topic_id, scripture_id) VALUES ($1, $2)", array($topic_id, $last_id));
               }
            }            
        ?>
        
        <input type="submit" value="Add"><br><br>

        <p>All fields are required.</p><br>
</form>

</body>
</html>