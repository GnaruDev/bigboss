<!DOCTYPE html>
<html>
  <head>
    <title>Consoles</title>
    <link rel="stylesheet" href="../styles/cartstyles.css">
		<link rel="stylesheet" href="../assets/css/master.css">
    <link href="https://fonts.googleapis.com/css2?family=Teko:wght@300;400;500&display=swap" rel="stylesheet">
        <script src="https://kit.fontawesome.com/732cfffd08.js" crossorigin="anonymous"></script>
    <script type="text/javascript">
      window.onscroll = () => {
        const nav = document.querySelector('#navbar');
        if(this.scrollY <= 10) nav.className = ''; else nav.className = 'scroll';
      };
    </script>

    <?php include 'session.php'; ?>

    <style>
				@import url('https://fonts.googleapis.com/css2?family=Open+Sans&family=Work+Sans:wght@300&display=swap');
			</style>
  </head>

  <body>
    <nav id="main-nav">
        <a href="index.html"><img id="logo" src="../assets/images/logo.svg" alt="Logo" height="60"></a>
      <div id="links">
        <a href="games.html"><i class="fas fa-at"></i></a>
        <a href="contact.html"><i class="fas fa-map-marker-alt"></i></a>
        <a href="checkout.php"><i class="fas fa-shopping-cart"></i></a>
      </div>
    </nav>

    <nav class="nav-container">
      <div id="content-nav">
        <a href="../index.html">Home</a>
        <div class="dropdown">
          <a class="dropbtn">Games <i class="fa fa-caret-down" style="font-size: 16px;"></i></a>
          <div class="dropdown-content">
            <a href="videogames.php">Playstation</a>
            <a href="videogames.php">Xbox</a>
            <a href="videogames.php">Nintendo</a>
          </div>
      </div>
      <a href="consoles.php">Consoles</a>
      <a href="#">Staff Picks</a>
      <a href="#">Events</a>
    </nav>

    <p><br /><br /></p>

      <div class="content">
     <form action="<?=$_SERVER['PHP_SELF']?>" method="post">
      <?php
      // print items from the catalog for selection
      foreach ($CATALOG as $k => $v)
      {
        if ($v['type'] === "consoles") {
      echo "<div class='product'>";
      echo "<b class='productTitle'>" . $v['desc'] . "</b><br />";
      echo "<img class='productImage' src='images/" . $v['image'] . "' alt='Product Image' height='200'><br />";
      echo "<p class='productPrice'>Price per unit: $" . $CATALOG[$k]['price'] . "</p>";
      echo "<p class='productQuantity'>Quantity: ";
      echo "<input size=4 type=text name=\"a_qty[" . $k . "]\">";
      echo "<input class='productSubmit' type='submit' name='add' value='Add'></p>";
      echo "</div>";
        }
      }
      ?>
    </div>
    </form>
  </div>
  </body>
</html>
