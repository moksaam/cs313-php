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
   </body>

   <?php
      
      include_once ("dbconfig.php");

      if(!$user->is_loggedIn()) {
         
         $user->redirect('index.php');
      }
      
      $user_id = $_SESSION['user_session'];
      $statement = $db_con->prepare("SELECT * FROM user_login WHERE user_id=:id");
      $statement->execute(array(":user_id"=>$user_id));
      $userRow = $statement->fetch(PDO::FETCH_ASSOC);
   ?>
</html>