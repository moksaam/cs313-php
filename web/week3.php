<?php
// Variables
$username = $email = $cs = $web = $cit = $ce = $comments = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
   $username = test_input($_POST["username"]);
   $email = test_input($_POST["email"]);
   $cs = test_input($_POST["cs"]);
   $web = test_input($_POST["web"]);
   $cit = test_input($_POST["cit"]);
   $ce = test_input($_POST["ce"]);
   $comments = test_input($_POST["comments"]);
}

function test_input($data) {
   $data = trim($data);
   $data = stripslashes($data);
   $data = htmlspecialchars($data);
  
   return $data;
}

?>