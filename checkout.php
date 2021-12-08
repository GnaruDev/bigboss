<!DOCTYPE html>
<html>
  <head>
    <title>Checkout</title>
    <link rel="stylesheet" href="assets/css/master.css">
    <link rel="stylesheet" href="assets/css/cart.css">
    <?php include 'session.php'; ?>
  </head>
  <body>
    <div class="content">
      <a class="cart-back" href="index.php">Return Home</a>
      <h2>Checkout</h2>
      <hr />
      <form action="<?=$_SERVER['PHP_SELF']?>" method="post">
        <?php
          $total = 0;
          // check the shopping cart
          // if it contains values
          // look up the SKUs in the $CATALOG array
          // get the cost and calculate subtotals and totals
          if (is_array($_SESSION['cart']))
          {
          foreach ($_SESSION['cart'] as $k => $v)
          {
          // only display items that have been selected
          // that is, quantities > 0
          if ($v > 0)
          {
          $subtotal = $v * $CATALOG[$k]['price'];
          $total += $subtotal;
          echo "<b class='checkoutTitle'>$v unit(s) of " . $CATALOG[$k]['desc']   .  "</b>";
          echo "<p class='checkoutQuantity'>New quantity: <input size=4  type=text  name=\"u_qty["  .  $k . "]\"></p>";
          echo "<p class='checkoutProductPrice'>Price per unit: $" . $CATALOG[$k]['price'] . " ";
          echo "Sub-total: $" . sprintf("%0.2f", $subtotal) . "</p>";
          echo "<hr />";
        }
          }
          }
        ?>
        <br />
        <b class="total">TOTAL</b>
        <b>$<?=sprintf("%0.2f", $total)?></b>
        <input type="submit" name="update" value="Update Cart">
        <input type="submit" name="clear" value="Clear Cart">
        <button type="button" onclick="location.href='https://www.youtube.com/watch?v=dQw4w9WgXcQ'>Click Me!</button>
      </form>

    </div>
  </body>
</html>
