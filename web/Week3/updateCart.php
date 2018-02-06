<?php
session_start();

// We use this to update our cart quantities
if (isset($_POST['action']) && $_POST['action'] == 'update') {

  // $value is ignored
  foreach ($_SESSION['itemName'] as $fruit => $value) {
    if (isset($_POST[$fruit])) {
      $value = filter_var($_POST[$fruit], FILTER_VALIDATE_INT);

      if ($value && $value > 0) {
        //echo "{$fruit} was pressed<br>";
        $_SESSION['itemQty'][$fruit] = $_POST[$fruit];
      }
    }
  }
}

header('Location: cart.php');
?>
