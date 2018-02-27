<?php 
session_start(); 
//phpinfo();

require_once ("dbconfig.php");

if($user->is_loggedIn()) {
    echo "logged in";
   $user->redirect('home.php');
 }

 if(isset($_POST['login_btn'])) {
    echo "login button is set";
    $uname = $_POST['uname_email_txt'];
    $umail = $_POST['uname_email_txt'];
    $upass = $_POST['password_txt'];
    
    if($user->login($uname, $umail, $upass)) {
       echo "redirect successful";
       $user->redirect('home.php');
    }
    else {         
       $_SESSION["error"] = "Incorrect information!";
    }
 }
?>
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
            <?php if(isset($_SESSION["error"])) {?>
            <div class="alert">
               <?php echo $_SESSION["error"]; ?>
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

</body>
</html>