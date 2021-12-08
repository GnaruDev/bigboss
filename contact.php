<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Contact | BigBoss Game Store</title>
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
        <a href="contact.html"><i class="fas fa-at"></i></a>
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
      <h1 class="center">Contact</h1>
      <hr class="title-hr">


        <div class="content contact">
          <form class="center" id="format" name="format" method="post" autocomplete="on">
            <br>
          <label for="name" >Name: </label>
          <br>
          <input class="input" type="text" id="name" class="form-control" name="name" autofocus required>
          <br>
          <label for="email">Email Address: </label>
          <br>
          <input class="input" type="email" id="email" class="form-control" name="email" required>
          <br>
          <label class="input" for="textarea">Comments/Questions:</label>
          <br>
      	<textarea class="textarea" name="textarea" id="textarea"class="form-control"></textarea >
          <br>
        <input type="reset" name="reset" class="button" id="reset" value="Reset">
      	<input type="submit" name="submit" class="button" id="submit" value="Submit">
        <br>
        <br>
       </form>
        </div>


  </body>
</html>
