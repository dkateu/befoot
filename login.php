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
          $_SESSION ['id']= $row ['loginID'];

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
<html lang="en">
<title>BefootLogin</title>
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
            <h1 class="display-4 font-weight-bold"> Hier können sie sich einfach Anmelden und Ihr Ticket einkaufen...</h1>
            <br>
            <br>

            <hr class="hr-light">
            <br>
            <div class="container text-center white-text wow fadeInUp">

              <h1 class="display-4 font-weight-bold">Noch kein Konto? <br>
                Dann weiter zu einer kostenlosen Registrierung</h1>
              <br>
              <button type="button" class="btn btn-teal btn-rounded btn-sm m-0" onclick="window.location.href = 'registrierung.php';"> Zur Registrierung</button>
            </div>

          </div>
          <br>
          <br>
          <br>
          <br>
          <br>
          <br> <br>

          <div class="col-md-6 col-xl-5 mb-4">
            <div class="card wow fadeInRight" data-wow-delay="0.3s">
              <div class="card-body z-depth-2">
                <!--Header-->
                <form action="" method="post">
                  <div class="text-center">
                    <h3 class="black-text">
                      <strong>Login</strong>
                    </h3>
                    <hr>
                  </div>
                  <!--Body-->
                  <div class="md-form form-group">
                  <i class="fas fa-envelope prefix black-text"></i>
                    <input type="email" name="email" value="" id="form3" class="form-control" required="required">
                    <label for="form3">Ihre E-Mail Adresse</label>

                  </div>
                  <div class="md-form pb-3 form-group">
                    <i class="fas fa-key prefix black-text"></i>
                    <input type="password" name="password" id="Form-pass1" class="form-control" required="required">
                    <label for="Form-pass1">Ihr Passwort</label>

                    <p class="font-small blue-text d-flex justify-content-end"> Vergessen<a href="#" class="blue-text ml-1">
                        Passwort?</a></p>
                  </div>

                  <div class="text-center mt-3">
                    <button class="btn btn-indigo btn-rounded" type="submit" name="Login">Login
                      <i class="fa fa-paper-plane-o ml-2"> </i></button>

                    <div class="modal-footer mx-5 pt-3 mb-1">
                      <p class="font-small black-text d-flex justify-content-end">Noch kein konto? <a href="registrierung.php" class="blue-text ml-1"> Registrieren </a></p>

                      <fieldset class="form-check">
                        <input class="form-check-input" type="checkbox" id="checkbox1">
                        <label class="form-check-label" for="checkbox1" class="black-text">Subscribe me to the
                          newsletter</label>
                      </fieldset>

                    </div>
                  </div>
                </form>
              </div>
            </div>
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