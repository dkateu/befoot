<?php

if (isset($_GET["action"])){
  if($_GET["action"]=="logout"){
    session_destroy();
    header("location: index.php" );
  }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <title>Befoot</title>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="x-ua-compatible" content="ie=edge">

  <!-- MDB icon -->
  <link rel="icon" src="images/befoot.png" type="image/x-icon">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css">
  <!-- Google Fonts Roboto -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap">
  <!-- Bootstrap core CSS -->
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <!-- Material Design Bootstrap -->
  <link rel="stylesheet" href="css/mdb.min.css">
  <!-- Your custom styles (optional) -->
  <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">
</head>

<body style="background-image: url('');background-color: black; background-repeat:no-repeat; background-size: cover;">
  <header>
    <nav class="mb-1 navbar navbar-expand-lg navbar-dark info-color">
      <a class="navbar-brand" href="index.php"> <img src="images/befoot.png" alt="Befoot logo" height="70" width="170"> </a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent-4" aria-controls="navbarSupportedContent-4" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class=" collapse navbar-collapse" id="navbarSupportedContent-4">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item">
            <a class="nav-link" href="index.php">
              <i class="fas fa-home"></i> Home
              <span class="sr-only">(current)</span>
            </a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="kontakt.php">
              <i class="fas fa-phone"></i> Kontakt
              <span class="sr-only">(current)</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="help.php">
            <i class="fas fa-question"></i>
              Hilfe
              <span class="sr-only">(current)</span>
            </a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink-4" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              <i class="fas fa-user"></i> Profile </a>
            <div class="dropdown-menu dropdown-menu-right dropdown-info" aria-labelledby="navbarDropdownMenuLink-4">
              <a class="dropdown-item" href="MyAccount.php">My account</a>
              <a class="dropdown-item" href="registrierung.php">registrierung</a>
              <a class="dropdown-item" href="login.php">Einlogen</a>
               <a class="dropdown-item" href="?action=logout">Log out</a>
            </div>
          </li>
        </ul>
      </div>
      <div>
      <form class="form-inline my-2 my-lg-0 ml-auto">
        <input class="form-control" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-white btn-md my-2 my-sm-0 ml-3" type="submit">Search</button>
        </form>
      </div>
    </nav>
    <!--/.Navbar -->
    <header>
      <div style="background-image: url('');background-color:black background-repeat no-repeat; background-size: cover; background-position: center center;">


        <!-- jQuery -->
        <script type="text/javascript" src="js/jquery.min.js"></script>
        <!-- Bootstrap tooltips -->
        <script type="text/javascript" src="js/popper.min.js"></script>
        <!-- Bootstrap core JavaScript -->
        <script type="text/javascript" src="js/bootstrap.min.js"></script>
        <!-- MDB core JavaScript -->
        <script type="text/javascript" src="js/mdb.min.js"></script>
        <!-- Your custom scripts (optional) -->
        <script type="text/javascript"></script>

</body>

</html>