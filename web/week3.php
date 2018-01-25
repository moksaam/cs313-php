<?php
// Variables for our form
$username = $email = $cs = $web = $cit = $ce = $comments = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
   $username = test_input($_POST["username"]);
   $email = test_input($_POST["email"]);
   $major = test_input($_POST["major"]);
   $comments = test_input($_POST["comments"]);
}

function test_input($data) {
   $data = trim($data);
   $data = stripslashes($data);
   $data = htmlspecialchars($data);
  
   return $data;
}

// Check if the form has been submitted
if (isset($_POST['submit']) {
   
   $username = $_REQUEST["username"];
   
   echo "<p>Username: </p>" $username;
   
   $email = $_REQUEST["email"];
   
   echo "<p>Email Address: mailto:</p>" $email;
   
   $major = $_REQUEST["major"];
   
   echo "<p>Major: </p>" .$major;
   
   $comments = $_REQUEST["comments"];
   
   echo "<p>Comments: </p>" $comments;
}

?>