<!DOCTYPE html>
<html lang="en">

<head>
  <title>BefootAdmin</title>
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
  <title>BefootAdmin</title>
</head>
<body style="background-image: url('');background-color: white; background-repeat:no-repeat; background-size: cover;">

  <?php include 'header.php' ?>
      
<form action="validation.php" method="$_POST" size="100">
      <div class="text-center">
         <h3 class="black-text">
                <strong>Login</strong>
                        </h3>
                     
                      </div>
                      <!--Body-->
                      <div class="md-form form-group <?php echo (!empty($email)) ? 'is-invalid' : 'is-invalid'; ?>">
                        <i class="fas fa-user prefix black-text"></i>
                        <input type="text" placeholder="Adminname" name="adminame" value="" id="form3" class="form-control"  required="required ">
                        <label for="form3">Adminname</label>                    
                      </div>


                      <div class="md-form pb-3 form-group <?php echo (!empty($password)) ? 'is-invalid' : 'is-invalid'; ?>">
                      <i class="fas fa-key prefix black-text"></i>
                          <input type="password" placeholder="Password" name="password" id="Form-pass1" class="form-control"  required ="required">
                          <label for="Form-pass1">Password</label>
                        </div>
                      
                      <div class="text-center mt-3">
                        <input class="button"  type="submit" value="Login" class="btn btn-indigo btn-rounded"></input>
                     
                      </div>
                    </div>
                    </form>
                    </div>

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
