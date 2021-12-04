<?php
  error_reporting(E_ALL ^ E_NOTICE);

  // start session
  session_start();
  // initialize session shopping cart
  if (!isset($_SESSION['cart']))
  {
  $_SESSION['cart'] = array();
  }
  // initialize session shopping cart
  if (!isset($_SESSION['cart']))
  {
  $_SESSION['cart'] = array();
  }
  // look for catalog file
  $catalogFile = "catalog.dat";
  // file is available, extract data from it
  // place into $CATALOG array, with SKU as key
  if (file_exists($catalogFile))
  {
  $data = file($catalogFile);
  foreach ($data as $line)
  {
  $lineArray = explode(':', $line);
  $sku = trim($lineArray[0]);
  $CATALOG[$sku]['desc'] = trim($lineArray[1]);
  $CATALOG[$sku]['price'] = trim($lineArray[2]);
  $CATALOG[$sku]['image'] = trim($lineArray[3]);
  $CATALOG[$sku]['type'] = trim($lineArray[4]);
  }
  }
  // file is not available
  // stop immediately with an error
  else
  {
  die("Could not find catalog file");
  }

  if ($_POST['add'])
  {
  foreach ($_POST['a_qty'] as $k => $v)
  {
  // if the value is 0 or negative
  // don't bother changing the cart
  if ($v > 0)
  {
  $_SESSION['cart'][$k] = $_SESSION['cart'][$k] + $v;
  }
  }
  }
  // if this is an update operation
  // replace quantities in shopping cart with values entered
  else if ($_POST['update'])
  {
  foreach ($_POST['u_qty'] as $k => $v)
  {
  // if the value is empty, 0 or negative
  // don't bother changing the cart
  if ($v != "" && $v >= 0)
  {
  $_SESSION['cart'][$k] = $v;
  }
  }
  }
  // if this is a clear operation
  // reset the session and the cart
  // destroy all session data
  else if ($_POST['clear'])
  {
  $_SESSION = array();
  session_destroy();
  }
?>
