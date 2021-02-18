<!DOCTYPE html>
<html lang="en">

<head>
  <title>Befoot</title>
  <link rel="shortcut icon" href="images/befoot.png" type="image/x-icon">
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <!-- MDB icon -->
 
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css">
  <!-- Google Fonts Roboto -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap">
  <!-- Bootstrap core CSS -->
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <!-- Material Design Bootstrap -->
  <link rel="stylesheet" href="css/mdb.min.css">
  <!-- Your custom styles (optional) -->

<style>
.col-xs-2{
  margin-left: 20px;
}
.col-xs-4{
  margin-left: 20px;
}
.col-xs-5{
  margin-left: 20px;
}
.col-xs-3{
   margin-left: 20px;
}

.col-xs-p{
   margin-left: 20px;
}
.col-xs{
  margin-left: 20px;
}
.col-xs-1{
   margin-left: 20px;
}

</style>
</head>

<body style="background-image: url('');background-color: black; background-repeat:no-repeat; background-size: cover;">

  <?php include 'header.php' ?>

    <div class="container text-center white-text wow fadeInUp">
      <br>
      <br>
      <h2>Für die Buchung Ihres Tickes tragen Sie bitte Ihre persönliche Daten ein </h2>
      <br>

      <br>
    </div>


  </header>
  <!--Main Navigation-->

  </main>
  <!--Main Layout-->

  <!-- Card -->
  <div class="card mx-xl-5">

    <!-- Card body -->
    <div class="card-body">

      <!-- Default form subscription -->
      <form action="buchvalid.php" method="POST">
      
        <!-- Default input name -->

        <label for="defaultFormCardNameEx" class="black-text font-weight-light">
         <i class="fas fa-user"></i>Nachname der Zuschauer</label></label>
        <input type="text" id="defaultFormCardNameEx" class="form-control" placeholder="Mustername" name="Fname" required="required">

        <br>

        <!-- Default input Vorname-->
        <label for="defaultFormCardVornameEx" class="black-text font-weight-light">
          <i class="fas fa-user"></i>Vorname der Zuschauer</label></label>
        <input type="text" id="defaultFormCardVornameEx" class="form-control" placeholder="Mustervorname" name="Vname" required >

        <br>

        <!-- Default input email -->

        <label for="defaultFormCardEmailEx" class="black-text font-weight-light"><i class="fas fa-envelope"></i>E-Mail Adresse der Zuschauer</label>
       
        <input type="email" id="defaultFormCardEmailEx" class="form-control" placeholder="mustermail@outlook.de" name="email" required >

        <br>
        <!--Anschrift-->
      <div class="form-group row">
          <div class="col-xs">
            <label for="ex1" class="black-text font-weight-light">Strasse </label>
            <input class="form-control" id="ex1" type="text" placeholder="Musterstrasse" name="strasse" required >
          </div>
    
    
          <div class="col-xs-2">
            <label for="ex2" class="black-text font-weight-light">Hausnummer</label>
            <input class="form-control"  type="number" placeholder="12Z" name="hausnr" required >  
          </div>
          <div class="col-xs-4">
            <label for="ex3" class="black-text font-weight-light">PLZ</label>
            <input class="form-control" id="ex3" type="number" placeholder="12345" name="plz" required >
          </div>
          <p> </p>
          <div class="col-xs-5">
            <label for="ex4" class="black-text font-weight-light"> Stadt </label>
           <input class="form-control" id="ex4" type="text" placeholder="Musterstadt" name="city" required>
          </div>
        </div>
        <br>
        <!--Handynummer-->
        <div class="form-group row">
          <div class="col-xs-1">
            <label for="ex1" class="black-text font-weight-light">Handynummer</label>
            <input class="form-control" id="ex1" type="text" placeholder="+49" name="vornr" >
          </div>
          <div class="col-xs-3">
            <label for="ex2" class="black-text font-weight-light"> Nummer </label>
            <input class="form-control" id="ex2" type="number" placeholder="176/78910" name="number" required>
          </div>
        </div>

        <br>
        <!-- Spielname-->
        <div>
       <select class="mdb-select md-form" searchable="Search here.." name="spiel" required>
        <label  class="grey-black font-weight-light">Spielname</label>
          <option value="" disabled selected>Spiel auswählen</option>
         <option value="6">Kamerun Vs Argentine</option> 
          <option value="7">Japan Vs Deutschland</option>
          <option value="8">Nigeria Vs Brasil</option>
          <option value="9">Spanien Vs Frankreich</option>
        </select>
        </div>
        <br>
        <!--Platznummer-->
        <div class="form-group row">
          <div class="col-xs-p">
              <label for="ex1" class="black-text font-weight-light">Platznummer</label>
           <input class="form-control" id="ex1" type="number" placeholder="Zahl eingeben" name="platznummer" required>
          </div>
        </div>

        <!--Zahlungsart-->
<div>
        <select class="mdb-select md-form" searchable="Search here.." name="zahlungsart" required>
        <label  class="grey-black font-weight-light">Zahlungsart</label>
          <option value="" disabled selected>Zahlungsart auswählen</option>
          <option value="Paypal"><i class="fa fa-paypal"></i> Paypal</option>
          <option value="Lastschrift">Lastschrift</option>
          <option value="Sofort">Sofort</option>
          <option value="Paydirect">Paydirect</option>
        </select>
</div>
        <!--/Zahlungsart-->
        <br>
        <!-- Default input Password -->
        <label for="defaultFormCardEmailEx" class="black-text font-weight-light" >
          <i class="fas fa-calendar"></i> Geburtsdatum</label>
        <input type="date" id="date" class="form-control" name="age" required="required" >

        <div class="text-center py-4 mt-3">
          <a href="buchung.php" class="blue-text ml-1"> Buchungen hinzufügen</a>

          <button class="btn btn-outline-purple" type="submit" name="submit">Send</button>
        </div>
      </form>
      <!-- Default form subscription -->

    </div>
    <!-- Card body -->

  </div>
  <!-- Card -->

  <!--SIgn In-->


  <!-- Footer -->

  <?php include'footer.php' ?>
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