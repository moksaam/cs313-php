<? session_start(); ?>
<!DOCTYPE html>
<html>
   <head>
      <title>Cart</title>
      <link rel="stylesheet" type="text/css" href="03prove.css">
   </head>
   <body>
      <h1>Cart</h1>
      <div id="items">
         <ul class="menu">
            <li><a href="prove03.php">Browse</a></li>
            <li><a href="checkout.html">Checkout</a></li>
         </ul>
      </div> 
      <?php
      if (isset($_SESSION['iQ'])) {
         // Added stuff
         print_r($_SESSION['itemCost']);
         $_SESSION['iQ'] = $qnty;
         echo ('<br />The ' . $qnty . ' submit button was pressed<br />');
}
?> 
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
         echo $_SESSION["iQ"];
         foreach ($_SESSION['itemQty'] as $itemID => $value) {
            if ($value != 0) {            
               echo("<tr>");
               echo("<td>".$_SESSION['itemName'][$itemID]."</td>");
               echo("<td>".$_SESSION['itemQty'][$itemID]."</td>");
               echo("<td>".$_SESSION['itemCost'][$itemID]."</td>");
               
               echo("</tr>");
            }
         }
         ?>
           
      </table>
   </body>
</html>