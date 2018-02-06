<<<<<<< HEAD
<?php session_start(); ?>
=======
<? session_start(); ?>
>>>>>>> 7f8e9a9d84f1450a20e583b314b609c012e3f7ca
<!DOCTYPE html>
<html>
   <head>
      <title>Cart</title>
      <link rel="stylesheet" type="text/css" href="03prove.css">
   </head>
   <body>
      <h1>Cart</h1>
<<<<<<< HEAD

      <?php
      require("header.php");
      /*
=======
      <div id="items">
         <ul class="menu">
            <li><a href="prove03.php">Browse</a></li>
            <li><a href="checkout.html">Checkout</a></li>
         </ul>
      </div> 
      <?php
>>>>>>> 7f8e9a9d84f1450a20e583b314b609c012e3f7ca
      if (isset($_SESSION['iQ'])) {
         // Added stuff
         print_r($_SESSION['itemCost']);
         print_r($_SESSION['itemQty']);
         print_r($_SESSION['iQ']);
         $_SESSION['iQ'] = $qnty;
         echo ('<br />The ' . $qnty . ' submit button was pressed<br />');
}
<<<<<<< HEAD
*/
?>
=======
?> 
>>>>>>> 7f8e9a9d84f1450a20e583b314b609c012e3f7ca
      <br><br>
      <br><br>
      <table>
         <tr>
            <th>Product</th>
            <th>Quantity</th>
            <th>Amount</th>
            <th>Update Cart</th>
         </tr>
         <?php
         $total = 0;
<<<<<<< HEAD

         if (isset($_SESSION["error"])) {
           echo $_SESSION["error"] . '<br>';
           unset($_SESSION["error"]);
         }

         foreach ($_SESSION['itemQty'] as $itemID => $quantity) {
            if ($quantity != 0) {
               echo("<tr>");
               echo("<td>".$_SESSION['itemName'][$itemID]."</td>");
               echo("<td>".$quantity."</td>");
               echo("<td>".$quantity * $_SESSION['itemCost'][$itemID]."</td>");
               echo '<td><form action="updateCart.php" method="post">'.
                    '<input type="hidden" name="action" value="update"/>' .
                    '<input type="text" name="' . $itemID . '" value="' . $quantity . '">' .
                    '<button type="submit">Update</button>' .
                    '</form></td>';

=======
         
         foreach ($_SESSION['itemQty'] as $itemID => $value) {
            if ($value != 0) {            
               echo("<tr>");
               echo("<td>".$_SESSION['itemName'][$itemID]."</td>");
               echo("<td>".$_SESSION['itemQty'][$itemID]."</td>");
               echo("<td>".$_SESSION['itemCost'][$itemID]."</td>");
               
>>>>>>> 7f8e9a9d84f1450a20e583b314b609c012e3f7ca
               echo("</tr>");
            }
         }
         ?>
<<<<<<< HEAD

      </table>
   </body>
</html>
=======
           
      </table>
   </body>
</html>
>>>>>>> 7f8e9a9d84f1450a20e583b314b609c012e3f7ca
