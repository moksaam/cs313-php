<?php

class USER {
   private $db;
   
   function __construct($db_con) {
      $this->db = $db_con;
   }
   
   public function register($uname, $umail, $upass) {
      
      try {
         $new_password = password_hash($upass, PASSWORD_DEFAULT);
         
         $statement = $this->db->prepare("INSERT INTO phpDB.user_login(user_name, user_email, user_password) VALUES(:uname, :umail, :upass)");
         
         $statement->bindparam(":uname", $uname);
         $statement->bindparam(":umail", $umail);
         $statement->bindparam(":upass", $new_password);
         $statement->execute();
         
         return $statement;
      }
      catch(PDOException $ex) {
         print "<p>ERROR:" . $ex->getMessage() . "</p><br>";
         die();
      }
   }
   
   public function login($uname, $umail, $upass) {
      
      try {
         $statement = $this->db->prepare("SELECT * FROM phpDB.user_login WHERE user_name=:uname  OR user_email=:umail LIMIT 1");
         $statement->execute(array(':uname'=>$uname, ':umail'=>$umail));
         $userRow=$statement->fetch(PDO::FETCH_ASSOC);
         
         if($statement->rowCount() > 0) {
            
            if(password_verify($upass, $userRow['user_password'])) {
               echo "true";
               $_SESSION['user_session'] = $userRow['user_id'];
               return true;
            }
            else {          
                echo "false";
               return false;
            }
         }
      }
      catch(PDOException $ex) {
         print "<p>ERROR:" . $ex->getMessage() . "</p><br>";
         return false;
      }
   }
   
   public function is_loggedIn() {
      
      if(isset($_SESSION['user_session'])) {
         return true;
      }
      else {
          return false;
      }
   }
   
   public function redirect($url) {
      
      header("Location: $url");
   }
   
   public function logout() {
      
      session_destroy();
      unset($_SESSION['user_session']);
      return true;
   }
}

?>