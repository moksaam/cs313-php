<!DOCTYPE HTML>
<html>
<head>
<title>Database Login Page</title>
<link rel="stylesheet" href="styles.css" type="text/css"/>
</head>

<body>
<h1>CS 313: John's Media Database</h1>
   <div class="div_container">
      <div class="form_container">
         <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
            <h2>Sign In</h2>
            <?php if(isset($error)) {?>
            <div class="alert">
               <?php echo $error; ?>
            </div>
            <?php } ?>
            
            <div class="form_group">
               <input type="text" class="form_ctrl" name="uname_email_txt" placeholder="Username or Email Address" required/>
            </div>
            
            <div class="form_group">
               <input type="text" class="form_ctrl" name="password_txt" placeholder="Password" required/>
            </div>
            
            <div class="form_group">
               <button type="submit" name="login_btn" class="cool_button">SIGN IN</button>
            </div>
            <br>
            <label>Need an account?<a href="signup.php">Sign Up</a></label>
         </form>
      </div>
   </div>
   <?php 
   require ("dbconfig.php");

   if($user->is_loggedIn() != "") {
      
      $user->redirect('home.php');
   }

   if(isset($_POST['login_btn'])) {
      
      $uname = $_POST['uname_email_txt'];
      $umail = $_POST['uname_email_txt'];
      $upass = $_POST['password_txt'];
      
      if($user->login($uname, $umail, $upass)) {
         
         $user->redirect('home.php');
      }
      else {
         
         $error[] = "Incorrect information!";
      }
   }
   ?>
</body>
</html>