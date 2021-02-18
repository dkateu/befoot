<?php

session_start();

$conn = mysqli_connect('localhost', 'root', '', 'lekeufac') or die(mysqli_connect_error());

if (isset($_POST['Login'])) {
  $email = $_POST['email'];
  $pass = $_POST['password'];
  $_SESSION['email'] = $email;
  $sql = "SELECT * FROM login";
  $result = $conn->query($sql);
  if ($result->num_rows > 0) {

    while ($row = $result->fetch_assoc()) {

      if ($row['email'] == $email && $row['passwort'] == md5($pass)) {

        header("location: alleSpiele.php");
      } else {
        echo 'Falsches Passwort oder Falscher E-Mail Adresse';
      }
    }
  } else {

    echo '0 results';
  }
}
?>

<!DOCTYPE html>
<html lang="de">
<title>Befoot</title>
<link rel="shortcut icon" href="images/befoot.png" type="image/x-icon">
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta http-equiv="x-ua-compatible" content="ie=edge">

<!-- MDB icon -->
<link rel="<icon" href="images/befoot.ico" type="icon">
<!-- Font Awesome -->
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css">
<!-- Google Fonts Roboto -->
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap">
<!-- Bootstrap core CSS -->
<link rel="stylesheet" href="css/bootstrap.min.css">
<!-- Material Design Bootstrap -->
<link rel="stylesheet" href="css/mdb.min.css">
<!-- Your custom styles (optional) -->

<?php include 'header.php' ?>

<header>
  <div style="background-image: url('');background-color:black background-repeat no-repeat; background-size: cover; background-position: center center;">
    <!-- Mask & flexbox options-->
    <div class=" d-flex justify-content-center align-items-center">
      <!-- Content -->
      <div class="container">

        <!--Grid row-->
        <div class="row pt-lg-5 mt-lg-5">
          <!--Grid column-->

          <div class="col-md-6 mb-5 mt-md-0 mt-5 white-text text-center text-md-left wow fadeInLeft" data-wow-delay="0.3s">
            <h1 class="display-4 font-weight-bold"> Herzlich Willkommen bei Befoot...</h1>


            <hr class="hr-light">
            <div class="container text-center white-text wow fadeInUp">

              <h2>Ihr bester Online-Ticketsverkäufer</h2>
              <br>
              <h2>Für alle Spiele der Wettbewerb haben Sie die Möglichkeit die Tickets für Ihr gewünschtes Spiel kaufen zu können </h2>
              <button type="button" class="btn btn-teal btn-rounded btn-sm m-0" onclick="window.location.href = 'alleSpiele.php';"> Alle Spiele</button>
            </div>
            <br>
            <br>
           
            <h2>
              Wegen Corona bitte Beachten Sie, dass am Tag der Spiele Ihr Mund und Naseschutz zu tragen,
              damit wir gemeisam gegen diese Krise kämpfen können...Ihr Verständnis ist uns wichtig.
            </h2>
            <h2>Die Aktualität über diese Krise finden Sie hier
              <br>
              <button type="button" class="btn btn-teal btn-rounded btn-sm m-0" onclick="window.location.href = 'https://www.tagesschau.de/thema/coronavirus/;'">Hier</button>
            </h2>
            
           
          </div>
          <div class="col-md-6 col-xl-5 mb-4">
            <img src="images/image1.png" alt="" height="900">
          </div>
        </div>
      </div>
    </div>
  </div>
  </div>

  </div>
  <!--FOOTER-->

  <?php include 'footer.php' ?>
  <!-- End your project here-->

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