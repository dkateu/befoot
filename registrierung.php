
<?php
session_start();
$conn = mysqli_connect('localhost', 'root', '', 'lekeufac') or die(mysqli_connect_error());
    if(isset($_POST['submit'])) {
        $name = $_POST['name'];
	 $vorname = $_POST['vorname'];
        $email = $_POST['email'];
        $pass1 = $_POST['password1'];
      	$pass2 = $_POST['password2'];

        if($pass1==$pass2) {
          $insert = "INSERT INTO login(Fname, vorname, email, passwort)	 
          VALUES('$name', '$vorname', '$email', md5('$pass1'))";
          $res= mysqli_query($conn, $insert);
            echo "Registration successfully";
            echo "<br/>";
            header("location: index.php");
        }
        else {
          echo"Sie müssen alle Felder ausfüllen";
    } 
  }
	?>
      
<!DOCTYPE html>
<html lang="de">
<head>
  <title>Befoot</title>
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

<!--Main Navigation-->
</main>
<!--Main Layout-->

<!-- Card -->
<br><br><br><br><br>

<div class="container card" style="width: 75%;">
  <form action= "" method= "post">
    <p class="h4 text-center py-4">Registrieren Sie Sich kostenlos !</p>
    <!-- Default input name -->
    <div class="form-group">
      <label for="defaultFormCardNameEx" class="black-text font-weight-light">
        <i class="fas fa-user prefix black-text"></i> Name</label>
    <input type="text" id="defaultFormCardNameEx" class="form-control" name="name" required="required">
    </div>
  
    <!-- Default input Vorname-->
   <div class="form-group">
    <label for="defaultFormCardVornameEx" class="black-text font-weight-light">
      <i class="fas fa-user prefix black-text"></i>Vorname</label></label>
    <input type="text" id="defaultFormCardVornameEx" class="form-control" name="vorname" required="required">
   </div>
    <!-- Default input email -->
    <div class="form-group">
   
      <label for="defaultFormCardEmailEx" class="black-text font-weight-light">
         <i class="fas fa-envelope prefix black-text"></i>Your E-Mail</label>
    <input type="email" id="defaultFormCardEmailEx" class="form-control" name="email" required="required"> 
  
    </div>
    <!-- Default input Password -->
   <div class="form-group">
    <label Password for="defaultFormCardEmailEx" class="black-text font-weight-light">
      <i class="fas fa-key prefix black-text"></i>Password</label>
    <input type="password" id="Password" class="form-control" name="password1" required="required">
    
   </div>
    
    <!-- Default input Password-->
   <div class="form-group">
    <label Password for="defaultFormCardEmailEx" class="black-text font-weight-light" >
      <i class="fas fa-key prefix black-text"></i>Password</label>
    <input type="password" id="Password" class="form-control" name="password2" required="required"> 
   </div>
<!-- Default checkbox -->
<div class="form-check">
  <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault" required="required">
  <label class="form-check-label" for="flexCheckDefault">Ja, ich stimme den AGB und den Datenschutzbestimmungen von Befoot zu.</label>
</div>
    <div class="text-center py-4 mt-3">
      <button class="btn btn-outline-purple" type="submit" name="submit">Send<i
          class="fa fa-paper-plane-o ml-2"></i></button>
    </div>
    
  </form>
</div>
  <!-- Card -->

<!--SIgn In-->


<!-- Footer -->

<?php include 'footer.php' ?>
  <!-- Footer -->
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