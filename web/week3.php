<?php 
$username = $_POST["username"];
$email = $_POST["email"];
$comments = $_POST["comments"];
echo "Username: "; 
echo $username;
echo "<br>Email: ";
echo "<a href='mailto:".$email."'>".$email."</a></br>";
echo "<br>Major: ";

if (isset($_POST['submit'])) {
   if (isset($_POST['major'])) {
         
      $selected_major = $_POST['major'];
      echo $selected_major;
   }
}

echo "<br><br>Comments: ";
echo $comments;

?>