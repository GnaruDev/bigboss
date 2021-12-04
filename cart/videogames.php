<!DOCTYPE html>
<html>
<title>Video Games</title>
    <link rel="stylesheet" href="../styles/cartstyles.css">
    <link rel="stylesheet" href="../styles/sliderstyles.css">
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


    <p><br /><br /></p>
    <div class="contentslider">
    <h2>XBOX ONE</h2>
    
    <div class=x-scroller>
      <form action="<?=$_SERVER['PHP_SELF']?>" method="post">
      <?php
      // print items from the catalog for selection
      foreach ($CATALOG as $k => $v)
      {
        if ($v['type'] === "videogames") {
      echo "<span class='article'>";   
      echo "<b class='productTitle'>" . $v['desc'] . "</b><br />";
      echo "<img class='productImage' src='images/" . $v['image'] . "' alt='Product Image' height='200'><br />";
      echo "<p class='productPrice'>Price per unit: $" . $CATALOG[$k]['price'] . "</p>";
      echo "<p class='productQuantity'>Quantity: ";
      echo "<input size=4 type=text name=\"a_qty[" . $k . "]\">";
      echo "<input class='productSubmit' type='submit' name='add' value='Add'></p>";
      echo "</span>";
        }
      }
      ?>
    </div>
    </div>
    </form>

    <p><br /></p>
    <div class="contentslider">
    <h2>XBOX-360</h2>
    
    <div class=x-scroller>
      <form action="<?=$_SERVER['PHP_SELF']?>" method="post">
      <?php
      // print items from the catalog for selection
      foreach ($CATALOG as $k => $v)
      {
        if ($v['type'] === "XBOX360games") {
      echo "<span class='article'>";   
      echo "<b class='productTitle'>" . $v['desc'] . "</b><br />";
      echo "<img class='productImage' src='images/" . $v['image'] . "' alt='Product Image' height='200'><br />";
      echo "<p class='productPrice'>Price per unit: $" . $CATALOG[$k]['price'] . "</p>";
      echo "<p class='productQuantity'>Quantity: ";
      echo "<input size=4 type=text name=\"a_qty[" . $k . "]\">";
      echo "<input class='productSubmit' type='submit' name='add' value='Add'></p>";
      echo "</span>";
        }
      }
      ?>
    </div>
    </div>
    </form>



    <p><br /></p>
    <div class="contentslider">
    <h2>XBOX</h2>
    
    <div class=x-scroller>
      <form action="<?=$_SERVER['PHP_SELF']?>" method="post">
      <?php
      // print items from the catalog for selection
      foreach ($CATALOG as $k => $v)
      {
        if ($v['type'] === "XBOXgames") {
      echo "<span class='article'>";   
      echo "<b class='productTitle'>" . $v['desc'] . "</b><br />";
      echo "<img class='productImage' src='images/" . $v['image'] . "' alt='Product Image' height='200'><br />";
      echo "<p class='productPrice'>Price per unit: $" . $CATALOG[$k]['price'] . "</p>";
      echo "<p class='productQuantity'>Quantity: ";
      echo "<input size=4 type=text name=\"a_qty[" . $k . "]\">";
      echo "<input class='productSubmit' type='submit' name='add' value='Add'></p>";
      echo "</span>";
        }
      }
      ?>
    </div>
    </div>
    </form>





    <p><br /></p>
    <div class="contentslider">
    <h2>PlayStation 4</h2>
    
    <div class=x-scroller>
      <form action="<?=$_SERVER['PHP_SELF']?>" method="post">
      <?php
      // print items from the catalog for selection
      foreach ($CATALOG as $k => $v)
      {
        if ($v['type'] === "PS4games") {
      echo "<span class='article'>";   
      echo "<b class='productTitle'>" . $v['desc'] . "</b><br />";
      echo "<img class='productImage' src='images/" . $v['image'] . "' alt='Product Image' height='200'><br />";
      echo "<p class='productPrice'>Price per unit: $" . $CATALOG[$k]['price'] . "</p>";
      echo "<p class='productQuantity'>Quantity: ";
      echo "<input size=4 type=text name=\"a_qty[" . $k . "]\">";
      echo "<input class='productSubmit' type='submit' name='add' value='Add'></p>";
      echo "</span>";
        }
      }
      ?>
    </div>
    </div>
    </form>


    <p><br /></p>
    <div class="contentslider">
    <h2>PlayStation 3</h2>
    
    <div class=x-scroller>
      <form action="<?=$_SERVER['PHP_SELF']?>" method="post">
      <?php
      // print items from the catalog for selection
      foreach ($CATALOG as $k => $v)
      {
        if ($v['type'] === "PS3games") {
      echo "<span class='article'>";   
      echo "<b class='productTitle'>" . $v['desc'] . "</b><br />";
      echo "<img class='productImage' src='images/" . $v['image'] . "' alt='Product Image' height='200'><br />";
      echo "<p class='productPrice'>Price per unit: $" . $CATALOG[$k]['price'] . "</p>";
      echo "<p class='productQuantity'>Quantity: ";
      echo "<input size=4 type=text name=\"a_qty[" . $k . "]\">";
      echo "<input class='productSubmit' type='submit' name='add' value='Add'></p>";
      echo "</span>";
        }
      }
      ?>
    </div>
    </div>
    </form>




    <div class="contentslider">
    <h2>PlayStation 2</h2>
    
    <div class=x-scroller>
      <form action="<?=$_SERVER['PHP_SELF']?>" method="post">
      <?php
      // print items from the catalog for selection
      foreach ($CATALOG as $k => $v)
      {
        if ($v['type'] === "PS2games") {
      echo "<span class='article'>";   
      echo "<b class='productTitle'>" . $v['desc'] . "</b><br />";
      echo "<img class='productImage' src='images/" . $v['image'] . "' alt='Product Image' height='200'><br />";
      echo "<p class='productPrice'>Price per unit: $" . $CATALOG[$k]['price'] . "</p>";
      echo "<p class='productQuantity'>Quantity: ";
      echo "<input size=4 type=text name=\"a_qty[" . $k . "]\">";
      echo "<input class='productSubmit' type='submit' name='add' value='Add'></p>";
      echo "</span>";
        }
      }
      ?>
    </div>
    </div>
    </form>


    
    <div class="contentslider">
    <h2>PlayStation 1</h2>
    
    <div class=x-scroller>
      <form action="<?=$_SERVER['PHP_SELF']?>" method="post">
      <?php
      // print items from the catalog for selection
      foreach ($CATALOG as $k => $v)
      {
        if ($v['type'] === "PS1games") {
      echo "<span class='article'>";   
      echo "<b class='productTitle'>" . $v['desc'] . "</b><br />";
      echo "<img class='productImage' src='images/" . $v['image'] . "' alt='Product Image' height='200'><br />";
      echo "<p class='productPrice'>Price per unit: $" . $CATALOG[$k]['price'] . "</p>";
      echo "<p class='productQuantity'>Quantity: ";
      echo "<input size=4 type=text name=\"a_qty[" . $k . "]\">";
      echo "<input class='productSubmit' type='submit' name='add' value='Add'></p>";
      echo "</span>";
        }
      }
      ?>
    </div>
    </div>
    </form>





    <div class="contentslider">
    <h2>Nintendo Switch</h2>
    
    <div class=x-scroller>
      <form action="<?=$_SERVER['PHP_SELF']?>" method="post">
      <?php
      // print items from the catalog for selection
      foreach ($CATALOG as $k => $v)
      {
        if ($v['type'] === "NSgames") {
      echo "<span class='article'>";   
      echo "<b class='productTitle'>" . $v['desc'] . "</b><br />";
      echo "<img class='productImage' src='images/" . $v['image'] . "' alt='Product Image' height='200'><br />";
      echo "<p class='productPrice'>Price per unit: $" . $CATALOG[$k]['price'] . "</p>";
      echo "<p class='productQuantity'>Quantity: ";
      echo "<input size=4 type=text name=\"a_qty[" . $k . "]\">";
      echo "<input class='productSubmit' type='submit' name='add' value='Add'></p>";
      echo "</span>";
        }
      }
      ?>
    </div>
    </div>
    </form>



    

    <div class="contentslider">
    <h2>Nintendo 64</h2>
    
    <div class=x-scroller>
      <form action="<?=$_SERVER['PHP_SELF']?>" method="post">
      <?php
      // print items from the catalog for selection
      foreach ($CATALOG as $k => $v)
      {
        if ($v['type'] === "N64games") {
      echo "<span class='article'>";   
      echo "<b class='productTitle'>" . $v['desc'] . "</b><br />";
      echo "<img class='productImage' src='images/" . $v['image'] . "' alt='Product Image' height='200'><br />";
      echo "<p class='productPrice'>Price per unit: $" . $CATALOG[$k]['price'] . "</p>";
      echo "<p class='productQuantity'>Quantity: ";
      echo "<input size=4 type=text name=\"a_qty[" . $k . "]\">";
      echo "<input class='productSubmit' type='submit' name='add' value='Add'></p>";
      echo "</span>";
        }
      }
      ?>
    </div>
    </div>
    </form>


  </body>
</html>


