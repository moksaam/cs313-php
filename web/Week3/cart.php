<?php session_start(); ?>
<!DOCTYPE html>
<html>
   <head>
      <title>Cart</title>
      <link rel="stylesheet" type="text/css" href="03prove.css">
   </head>
   <body>
      <h1>Cart</h1>

      <?php
      require("header.php");
      ?>

      <br><br>
      <br><br>
      <div>
      <table class="table">
         <tr>
            <th>Product</th>
            <th>Quantity</th>
            <th>Amount</th>
            <th>Update Cart</th>
         </tr>
         <?php
         $total = 0;

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

               echo("</tr>");
            }
         }
         ?>

      </table>
      </div>
   </body>
</html>
