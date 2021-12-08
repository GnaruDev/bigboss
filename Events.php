<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Home | BigBoss Game Store</title>
    <link rel="stylesheet" href="assets/css/master.css">
    <link rel="stylesheet" href="assets/css/slider.css">
    <link rel="stylesheet" href="assets/css/cart.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Teko:wght@300;400;500&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/732cfffd08.js" crossorigin="anonymous"></script>
    <script type="text/javascript">
      window.onscroll = () => {
        const nav = document.querySelector('#navbar');
        if(this.scrollY <= 10) nav.className = ''; else nav.className = 'scroll';
      };
    </script>
    <?php include 'session.php'; ?>
  </head>
  <body>
    <nav id="main-nav">
        <a href="index.php"><img id="logo" src="assets/images/logo.svg" alt="Logo" height="60"></a>
      <div id="links">
        <a href="contact.php"><i class="fas fa-at"></i></a>
        <a href="https://goo.gl/maps/5Gnu6bCmPon9rvB86"><i class="fas fa-map-marker-alt"></i></a>
        <a href="checkout.php"><i class="fas fa-shopping-cart"></i></a>
      </div>
    </nav>

    <nav class="nav-container">
      <div id="content-nav">
        <a href="index.php">Home</a>
        <div class="dropdown">
          <a class="dropbtn">Games <i class="fa fa-caret-down" style="font-size: 16px;"></i></a>
          <div class="dropdown-content">
            <a href="playstation.php">Playstation</a>
            <a href="xbox.php">Xbox</a>
            <a href="nintendo.php">Nintendo</a>
          </div>
      </div>
      <a href="consoles.php">Consoles</a>
      <a href="events.php">Events</a>
    </nav>


    <p><br /><br /></p>
    <h1 class="center">Our First Cyber Monday Sale Event!</h1>
    <p class="center">Starting today we have a whopping <span style="color:#F2D637;">33% OFF</span> on all XBOX ONE games!</p>
    <hr class="title-hr">

    <div class="contentslider">
    <h2>Xbox One <span style="color: #ECD848;">[33% OFF]</span></h2>

    <div class=x-scroller>
      <form action="<?=$_SERVER['PHP_SELF']?>" method="post">
      <?php
      // print items from the catalog for selection
      foreach ($CATALOG as $k => $v)
      {
        if ($v['type'] === "videogames") {
          echo "<span class='article'>";
          echo "<img class='productImage' src='assets/images/" . $v['image'] . "' alt='Product Image'><br />";
          echo "<b class='productTitle'>" . $v['desc'] . "</b><br />";
          echo "<hr>";
          echo "<p class='discountPrice'> $60 </p>";
          echo "<p class='productPrice'>$" . $CATALOG[$k]['price'] . "</p>";
          echo "<p class='productQuantity'>Quantity: ";
          echo "<input size=1 type=text name=\"a_qty[" . $k . "]\">";
          echo "<input class='productSubmit' type='submit' name='add' value='Add'></p>";
          echo "</span>";
        }
      }
      ?>
      </form>
    </div>
    </div>
  </body>
</html>
