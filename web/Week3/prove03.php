<?php
// Start the session
session_start();
?>
<!DOCTYPE HTML>  
<html>
<head>
      <title>03 Prove Assignment: PHP Shopping Cart</title>
      <link rel="stylesheet" type="text/css" href="03prove.css">
</head>
<body>
<?php

   if (!isset($_SESSION['itemCost'])) {
      $itemName = array('apple' => 'Apple', 'banana' => 'Banana', 'orange' => 'Orange', 'peach' => 'Peach');
      $itemCost = array('apple' => 2.00, 'banana' => 3.00, 'orange' => 2.25, 'peach' => 2.50);
      $itemQty = array('apple' => 0, 'banana' => 0, 'orange' => 0, 'peach' => 0);
      $_SESSION['itemName'] = $itemName;
      $_SESSION['itemCost'] = $itemCost;
      $_SESSION['itemQty'] = $itemQty;
   }
   
   if (!isset($_SESSION['itemName'])) {
      $itemName = array('apple' => 'Apple', 'banana' => 'Banana', 'orange' => 'Orange', 'peach' => 'Peach');
      $_SESSION['itemName'] = $itemName;
   }
   
   if (!isset($_SESSION['itemCost'])) {
      $itemCost = array('apple' => 2.00, 'banana' => 3.00, 'orange' => 2.25, 'peach' => 2.50);
      $_SESSION['itemCost'] = $itemCost;
   }
   
   if (!isset($_SESSION['itemQty'])) {
      $itemQty = array('apple' => 0, 'banana' => 0, 'orange' => 0, 'peach' => 0);
      $_SESSION['itemQty'] = $itemQty;
   }
   
   $totalQty = 0;
   
   if ((isset($_POST['submit'])) && (isset($_SESSION['itemQty']))) {
      
      foreach($_SESSION['itemQty'] as $key => $value) {
         $_SESSION['itemQty']$value++;
      }      
   }
?>
 
<h1>Items</h1>

<div id="items">
   <ul class="menu">
      <li><a href="../Website/Assignments.html">Assignments</a></li>
      <li><a href="cart.php">Cart</a></li>
   </ul>
</div>
<br><br><br><br>

   <div class="main-container">
   
      <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
      <input type="hidden" name="itemA" value="apple"/>
      <div class="item-container">
         <img src="apple.jpg" alt="Apple">Price: $2.00<br>
         <span>A delicious red apple.</span><br><br>
         <input id="addAppleToCart" class="addToCart" type="submit" name="submit" value="Add to Cart!"></div>
      </form>
      
      <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
      <input type="hidden" name="itemB" value="banana">      
      <div class="item-container">
         <img src="banana.jpg" alt="Banana">Price: $3.00<br>
         <span>A beautiful bunch of bananas.</span><br><br>
         <input id="addBananaToCart" class="addToCart" type="submit" name="submit" value="Add to Cart!"></div>
      </form>
      
      <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
      <input type="hidden" name="itemO" value="orange">      
      <div class="item-container">
         <img src="orange.jpg" alt="Orange">Price $2.25<br>
         <span>A perfectly rounded orange.</span><br><br>
         <input id="addOrangeToCart" class="addToCart" type="submit" name="submit" value="Add to Cart!"></div>
      </form>
      
      <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
      <input type="hidden" name="itemP" value="peach"/>
      <div class="item-container">
         <img src="peach.jpg" alt="Peach">Price: $2.50<br>
         <span>A most desirable peach.</span><br><br>
         <input id="addPeachToCart" class="addToCart" type="submit" name="submit" value="Add to Cart!"></div>
      </form>
   </div>

</body>
</html>