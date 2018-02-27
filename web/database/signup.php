<?php 
session_start(); 
//phpinfo();
?>
<!DOCTYPE html>
<html>

   <head>
      <title> Sign-up for account</title>
      <link rel="stylesheet" href="styles.css" type="text/css"/>
   </head>

   <body>
   
      <div class="container">
      
         <div class="form_container">
         
            <form method="post">
            
            <h2>Sign-up for an account</h2> 
            <hr>
            
            <?php 
               if(isset($error)) {
                  foreach($error as $error) {
            ?>
                     <div class="alert">
                        <p class="warning"></p> &nbsp; <?php echo $error; ?>
                     </div>
                  <?php   
                  }                  
               }
               else if(isset($_GET['joined'])) {
                  ?>
                  <div class="info-alert">
                     <p class="log-in"></p> &nbsp; Successfully registered, <a href="index.php">login</a> here
                  </div>
            <?php
               }
            ?>
            
            <div class="form_group">
               <input type="text" class="" name="txt_uname" placeholder="Please enter a username" value="<?php if(isset($error)){echo $uname;}?>"/>               
            </div>
            
            <div class="form_group">
               <input type="text" class="" name="txt_umail" placeholder="Please enter a valid email" autocomplete="email" value="<?php if(isset($error)){echo $umail;}?>"/>               
            </div>
            
            <div class="form_group">
               <input type="text" class="" name="txt_upass" placeholder="Please enter a password"/>               
            </div>
            <hr>
            
            <div class="form_group">
               <button type="submit" name="signup_btn" class="cool_button">SIGN UP</button>
            </div>
            <br>
            
            <label>Have an account? <a href="signin.php">Sign In</a></label>
            
            </form>
            
         </div>
         
      </div>  
      
   </body>

   <?php
      echo '<pre>' . var_dump($_GET) . '</pre>';
      require_once ("dbconfig.php");

      
      if($user->is_loggedIn() != "") {
         
         $user->redirect('home.php');
      }
      
      if(isset($_POST['signup_btn'])) {
         
         $uname = trim($_POST['txt_uname']);
         $umail = trim($_POST['txt_umail']);
         $upass = trim($_POST['txt_upass']);
         
         if($uname == "") {
            $error[] = "Please provide a user name.";
         }
         else if ($umail == "") {
            $error[] = "Please provide an email.";
         }
         else if(!filter_var($umail, FILTER_VALIDATE_EMAIL)) {
            $error[] = "Please enter a valid email address.";
         }
         else if($upass == "") {
            $error[] = "Please provide a password.";
         }
         else if(strlen($upass) < 8) {
            $error[] = "Password must be at least 8 characters.";
         }
         else {
            try {
               $statement = $db_con->prepare("SELECT user_name, user_email FROM phpDB.user_login WHERE user_name=:uname AND user_email=:umail");
               
               $statement->execute(array(':uname'=>$uname, ':umail'=>$umail));
               
               $row = $statement->fetch(PDO::FETCH_ASSOC);
               var_dump($row);
               if($row['user_name'] == $uname) {
                  $error[] = "Username already in use.";
               }
               else if($row['user_email'] == $umail) {
                  $error[] = "This email has already been used.";
               }
               else {
                  if($user->register($uname, $umail, $upass)) {
                     $user->redirect('signup.php?joined');
                  }
               }
            }
            catch(PDOException $ex) {
               echo $ex->getMessage();
            }
         } var_dump($error);
      }
   ?>
</html>