<?php 
$username = htmlspecialchars($_POST["username"]);
$email = htmlspecialchars($_POST["email"]);
$comments = htmlspecialchars($_POST["comments"]);
echo "Username: "; 
echo $username;
echo "<br>Email: ";
echo "<a href='mailto:".$email."'>".$email."</a></br>";
echo "<br>Major: ";

if (isset($_POST['submit'])) {
   if (isset($_POST['major'])) {
         
      $selected_major = htmlspecialchars($_POST['major']);
      echo $selected_major;
   }

}

echo "<br>Countries: ";



if (isset($_POST['country'])) {
   $countries = $_POST['country'];
   
   foreach($countries as $selected) {
      echo $selected . " ";
   }         
}

echo "<br><br>Comments: ";
echo $comments;

?>