<?php
session_start();

if (!isset($_SESSION['username'])) {
  $_SESSION['msg'] = "You must log in first";
  header('location: newlogin.php');
}
if (isset($_GET['logout'])) {
  session_destroy();
  unset($_SESSION['username']);
  header("location: newlogin.php");
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://fonts.googleapis.com/css?family=Amatic+SC|Bebas+Neue|Cormorant+Garamond|Liu+Jian+Mao+Cao|Pacifico|Shadows+Into+Light&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="css/landingpage.css">
  <link rel="stylesheet" href="css/welcome.css">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Burgery Zone</title>
</head>

<body>
  <div>
    <div class="wrapper">

      <nav id="effect" class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="#"><span class="logo"> Burger Zone </span></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
              <a class="nav-link" href="#"><span class="anchors">About</span> <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item active">
              <a class="nav-link reserve" href="#"> <span class="anchors">Reserve</span> </a>
            </li>


          </ul>

          <ul class="nav navbar-nav navbar-right info">
            <li>
              <a class="signup" href="#"> <span id="ml-5" class="signup anchors">Signup</span></a>
            </li>
            <li>
              <a class="login" href="#"> <span class="go"> <span id="ml-5" class="login anchors">Login</span></a>

            </li>

          </ul>

        </div>
      </nav>

      <div class="content">
        <!-- notification message -->
        <?php if (isset($_SESSION['success'])) : ?>
          <div class="error success">
            <h3>
              <?php
              echo $_SESSION['success'];
              unset($_SESSION['success']);
              ?>
            </h3>
          </div>
        <?php endif ?>

        <!-- logged in user information -->
        <?php if (isset($_SESSION['username'])) : ?>
          <p class="welcome-msg">Welcome <strong><?php echo $_SESSION['username']; ?></strong></p>
        <?php endif ?>
        <div class="main-content">
          <div> High Key</div>
          <div> <span class="clip-text effect ">Flaming</span> Burgers</div>
        </div>
        <div class="secondary-content">
          Join us for your next meal.
        </div>
        <div class="menu">

          <button class="menu-button"><a class="menu">Our Menu</a></button>


        </div>
      </div>
    </div>
  </div>
  <script src="js/landingpage.js"></script>
  <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>

  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
</body>

</html>