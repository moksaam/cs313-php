<?php
// Start the session
session_start();
?>
<<<<<<< HEAD
<!DOCTYPE HTML>
<html>
<head>
  <title>03 Prove Assignment: PHP Shopping Cart</title>
  <link rel="stylesheet" type="text/css" href="03prove.css">
</head>
<body>
<?php
// Setting our arrays for our data
  if (!isset($_SESSION['itemName'])) {
    // 'cucumber'
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

  // We want to verify that the action is set
  if (isset($_POST['action'])) {

  // $value is ignored we are looking at the fruit
  foreach ($_SESSION['itemName'] as $fruit => $value) {
    if (isset($_POST[$fruit]) && $_POST[$fruit] > 0) {
      // echo $fruit . " was pressed<br>";
      echo "{$fruit} was pressed<br>";
      $_SESSION['itemQty'][$fruit] += $_POST[$fruit];
    }
  }

  var_dump($_SESSION['itemQty']);
}
?>
=======
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

      $appleQty = $bananaQty = $orangeQty = $peachQty = '';
      if (isset($_POST['action'])) {         
         
         switch (isset($_POST)) {
            case isset($_POST['apple']):
            $appleQty = $_POST['apple'];
            break;
            
            case isset($_POST['banana']):
            $bananaQty = $_POST['banana'];
            break;
            
            case isset($_POST['orange']):
            $orangeQty = $_POST['orange'];
            break;
            
            case isset($_POST['peach']):
            $peachQty = $_POST['peach'];
            break;
            
            default:
               echo ("Nothing added to cart.");
         }
         
         $_SESSION['iQ'] = compact($appleQty, $bananaQty, $orangeQty, $peachQty);
         print_r ('<br />The ' . $_SESSION['iQ'] . ' submit button was pressed<br />');
}
?>  
>>>>>>> 7f8e9a9d84f1450a20e583b314b609c012e3f7ca
<h1>Items</h1>

<div id="items">
   <ul class="menu">
      <li><a href="cart.php">Cart</a></li>
   </ul>
</div>
<br><br><br><br>
<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post"><input type="hidden" name="action" value="submit"/>
   <div class="main-container">
<<<<<<< HEAD

      <div class="item-container">
         <img src="apple.jpg" alt="Apple">Price: $2.00<br>
         <span>A delicious red apple.</span><br>
         <label for="apple">Quantity:
         <input type="text" name="apple" size="2" maxlength="2" value="0"><br>
         <input id="addAppleToCart" class="addToCart" type="submit" name="submit" value="Add to Cart!"></div>

      <div class="item-container">
         <img src="banana.jpg" alt="Banana">Price: $3.00<br>
         <span>A beautiful bunch of bananas.</span><br>
         <label for="apple">Quantity:
         <input type="text" name="banana" size="2" maxlength="2" value="0"><br>
         <input id="addBananaToCart" class="addToCart" type="submit" name="submit" value="Add to Cart!"></div>

      <div class="item-container">
         <img src="orange.jpg" alt="Orange">Price $2.25<br>
         <span>A perfectly rounded orange.</span><br>
         <label for="apple">Quantity:
         <input type="text" name="orange" size="2" maxlength="2" value="0"><br>
         <input id="addOrangeToCart" class="addToCart" type="submit" name="submit" value="Add to Cart!"></div>

      <div class="item-container">
         <img src="peach.jpg" alt="Peach">Price: $2.50<br>
         <span>A most desirable peach.</span><br>
         <label for="apple">Quantity:
         <input type="text" name="peach" size="2" maxlength="2" value="0"><br>
         <input id="addPeachToCart" class="addToCart" type="submit" name="submit" value="Add to Cart!"></div>

   </div>
</form>
</body>
</html>
=======
   
      <div class="item-container">
         <img src="apple.jpg" alt="Apple">Price: $2.00<br>
         <span>A delicious red apple.</span><br>
         <label for="apple">Quantity: 
         <input type="text" name="apple" size="2" maxlength="2" value=""><br>
         <input id="addAppleToCart" class="addToCart" type="submit" name="submit" value="Add to Cart!"></div>
         
      <div class="item-container">
         <img src="banana.jpg" alt="Banana">Price: $3.00<br>
         <span>A beautiful bunch of bananas.</span><br>
         <label for="apple">Quantity: 
         <input type="text" name="banana" size="2" maxlength="2" value=""><br>
         <input id="addBananaToCart" class="addToCart" type="submit" name="submit" value="Add to Cart!"></div>
         
      <div class="item-container">
         <img src="orange.jpg" alt="Orange">Price $2.25<br>
         <span>A perfectly rounded orange.</span><br>
         <label for="apple">Quantity: 
         <input type="text" name="orange" size="2" maxlength="2" value=""><br>
         <input id="addOrangeToCart" class="addToCart" type="submit" name="submit" value="Add to Cart!"></div>
         
      <div class="item-container">
         <img src="peach.jpg" alt="Peach">Price: $2.50<br>
         <span>A most desirable peach.</span><br>
         <label for="apple">Quantity: 
         <input type="text" name="peach" size="2" maxlength="2" value=""><br>
         <input id="addPeachToCart" class="addToCart" type="submit" name="submit" value="Add to Cart!"></div>
       
   </div>
</form>
</body>
</html>
>>>>>>> 7f8e9a9d84f1450a20e583b314b609c012e3f7ca
