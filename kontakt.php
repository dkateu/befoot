<!DOCTYPE html>
<html lang="de">
<head>
  <title>Befoot Kontakt</title>
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
</head>

<body style="background-image: url('');background-color: black; background-repeat:no-repeat; background-size: cover;">
  <?php include 'header.php' ?>

<!-- Material form contact -->
<br>

<br>
<center>
<div class= "white-text">
<h1 >Nehmen Sie Kontakt mit uns</h1>
</div>
</center>
<br>
<br>

<div class="container" style="width: 75%;">
<div class="card">

    <h5 class="card-header info-color white-text text-center py-4">
        <strong>Contact us</strong>
    </h5>

    <!--Card content-->
    <div class="card-body px-lg-5 pt-0">

        <!-- Form -->
        <form class="text-center" style="color: #757575;" action="#!">
            <!-- Name -->
            <div class="md-form mt-3">
                <input type="text" id="materialContactFormName" class="form-control">
                <label for="materialContactFormName">
                  <i class="fas fa-user black-text"></i>Name</label>
            </div>
            <!-- E-mail -->
            <div class="md-form">
                <input type="email" id="materialContactFormEmail" class="form-control">
                <label for="materialContactFormEmail">   <i class="fas fa-envelope black-text"></i>E-mail</label>
              
               
            </div>

            <!-- Subject -->

            <span>Subject</span>
            <select class="mdb-select">
                <option value="" disabled>Choose option</option>
                <option value="1" selected>Feedback</option>
                <option value="2">Report a Bug</option>
                <option value="3">About a Ticket</option>
                <option value="4">FAQ</option>
            </select>

            <!--Message-->

            <div class="md-form">
                <textarea id="materialContactFormMessage" class="form-control md-textarea" rows="3"></textarea>
                <label for="materialContactFormMessage">Message</label>
            </div>
            <!-- Copy -->
            <div class="form-check">
                <input type="checkbox" class="form-check-input" id="materialContactFormCopy" required>
                <label class="form-check-label" for="materialContactFormCopy">Send me a copy of this message</label>
            </div>

            <!-- Send button -->
            <button class="btn btn-outline-info btn-rounded btn-block z-depth-0 my-4 waves-effect" type="submit">Send</button>
        </form>
        <!-- Form -->
    </div>
  </div>
</div>
<br>
<br>

<!-- Material form contact -->

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