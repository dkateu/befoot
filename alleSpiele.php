<?php 
session_start();

?>

<!DOCTYPE html>
<html lang="de">

<head>
  <title>Befoot</title>
  <meta charset="UTF-8">
  <link rel="shortcut icon" href="images/befoot.png" type="image/x-icon">
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

</head>
<body style="background-image: url('');background-color: black;background-repeat:no-repeat; background-size: cover;">
 <?php include'header.php' ?>
    <!--/.Navbar-->
    <br>
    <br>
    <div>
      <div class="container text-center white-text wow fadeInUp">
        <h1>Der Wettbewerb geht schon am 24.01.2021 los!!!</h1>
        <br>
        <h2>Reserviere schon deinen Sitzplatz</h2>
        <br>
        <h3>Hier sind die beteiligten Mannschaften und die jeweilige Gruppen mit entsprechende Informationen</h3>
        <h3></h3>
        <br>
      </div>
    </div>
    <!--Main Navigation-->
    <div class="container">
      <div class="card">
        <table class="table">
          <thead class="white blue-text">
            <tr>
              <th scope="col">#</th>
              <th>Land</th>
              <th>Gruppe</th>
              <th>Anruf</th>
              <th>Ort</th>
              <th>Anzahl der Sitzpl�tze</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <th scope="row">1</th>
              <td><a href="kamerun.php" title="mehr Informationen">
                  Kamerun
                </a></td>
              <td>A</td>
              <td>Unbezaehmbaren Loewen</td>
              <td>Berlin Arena</td>
              <td>25000</td>
            </tr>
            <tr>
              <th scope="row">2</th>
              <td><a href="argentine.php" title="mehr Informationen">
                  Argentine
                </a></td>
              <td>A</td>
              <td>Die Albiceleste</td>
              <td>Berlin Arena</td>
              <td>28000</td>
            </tr>
            <tr>
              <th scope="row">3</th>
              <td><a href="japan.php" title="mehr Informationen">
                  Japan
                </a></td>
              <td>B</td>
              <td>sakka ninho diahyo</td>
              <td>Berlin Arena</td>
              <td>30000</td>
            </tr>
            <tr>
              <th scope="row">4</th>

              <td><a href="deutschland.php" title="mehr Informationen">
                  Deutschland
                </a></td>
              <td>B</td>
              <td>Die Mannschaft</td>
              <td>Berlin Arena</td>
              <td>25800</td>
            </tr>

            <tr>
              <th scope="row">5</th>
              <td><a href="nigeria.php" title="mehr Informationen">
                  Nigeria
                </a></td>
              <td>C</td>
              <td>Green Eagles</td>
              <td>Berlin Arena</td>
              <td>29000</td>
            </tr>
            <tr>
              <th scope="row">6</th>
              <td><a href="brasilien.php" title="mehr Informationen">
                  Brasil                </a></td>
              <td>C</td>
              <td>Pentacampeoes</td>
              <td>Berlin Arena</td>
              <td>15600</td>
            </tr>
            <tr>
              <th scope="row">7</th>
              <td><a href="frankreich.php" title="mehr Informationen">
                  Frankreich
                </a></td>
              <td>D</td>
              <td>Die Blauen</td>
              <td>Berlin Arena</td>
              <td>20000</td>
            </tr>
            <tr>
              <th scope="row">8</th>
              <td><a href="spanien.php" title="mehr Informationen">
                  Spanien
                </a></td>
              <td>D</td>
              <td>La Furia Roja</td>
              <td>Berlin Arena</td>
              <td>16000</td>
            </tr>

          </tbody>
        </table>
      </div>


      <br>
      <br>
      <div class="white-text">
        <h2 white-text>Der Spielplan für die erste Phase der Fußballmeisterschaft </h2>
        <h2>Die Spiele scheinen start zu sein, sind Sie alle schon aufgeregt  ???<br>
           Dann buchen Sie jetzt Ihr Tickets schon auf einen günstigen Preis </h2>
          <br>
          <br>

        <!-- Basic dropdown -->
        <div class="container">
          <div class="card">
            <table class="table"> 
              <thead class="white blue-text">

                <tr>
                  <th>#</th>
                  <th>Land</th>
                  <th>Vs</th>
                  <th>Land</th>
                  <th>Wann?</th>
                  <th>Reservierung</th>
                </tr>
              </thead>

              <tbody>
                <tr>
                  <th scope="row">1</th>

                  <td><a href="kameruninfo.hmtl.php" title="mehr Informationen">
                      Kamerun
                    </a></td>
                  <td>Vs</td>
                  <th><a href="argentine.php" title="mehr Informationen">
                      Argentine
                    </a></th>
                  <th>Am 24.01.2021</th>
                  <td>
                    <?php if(isset($_SESSION['id'])){?><button type="button" class="btn btn-teal btn-rounded btn-sm m-0" name="buchen"
                    onclick="window.location.href='buchung.php';">Ticket buchen</button><?php }else{ ?> <button type="button" class="btn btn-teal btn-rounded btn-sm m-0" name="buchen"
                    onclick="window.location.href='login.php';">Ticket buchen</button><?php }?>
                  </td>
                </tr>
                <tr>
                  <th scope="row">2</th>

                  <td><a href="japan.php" title="mehr Informationen">
                      Japan
                    </a></td>
                  <td>Vs</td>
                  <th><a href="deutschland.php" title="mehr Informationen">
                      Deutschland
                    </a></th>
                  <th>Am 24.01.2021</th>
                  <td>
                    <?php if(isset($_SESSION['id'])){?><button type="button" class="btn btn-teal btn-rounded btn-sm m-0" name="buchen"
                    onclick="window.location.href='buchung.php';">Ticket buchen</button><?php }else{ ?> <button type="button" class="btn btn-teal btn-rounded btn-sm m-0" name="buchen"
                    onclick="window.location.href='login.php';">Ticket buchen</button><?php }?>
                  </td>
                </tr>
                <tr>
                  <th scope="row">3</th>

                  <td><a href="nigeria.php" title="mehr Informationen">
                      Nigeria
                    </a></td>
                  <td>Vs</td>
                  <th><a href="brasilien.php" title="mehr Informationen">
                      Brasil
                    </a></th>
                  <th>Am 26.01.2021</th>
                  <td>
                    <?php if(isset($_SESSION['id'])){?><button type="button" class="btn btn-teal btn-rounded btn-sm m-0" name="buchen"
                    onclick="window.location.href='buchung.php';">Ticket buchen</button><?php }else{ ?> <button type="button" class="btn btn-teal btn-rounded btn-sm m-0" name="buchen"
                    onclick="window.location.href='login.php';">Ticket buchen</button><?php }?>
                  </td>
                </tr>
                <tr>
                  <th scope="row">4</th>
                  <td><a href="spanien.php" title="mehr Informationen">
                      Spanien
                    </a></td>
                  <td>Vs</td>
                  <th><a href="frankreich.php" title="mehr Informationen">
                      Frankreich
                    </a></th>
                  <th>Am 26.01.2021</th>
                  <td>
                    <?php if(isset($_SESSION['id'])){?><button type="button" class="btn btn-teal btn-rounded btn-sm m-0" name="buchen"
                    onclick="window.location.href='buchung.php';">Ticket buchen</button><?php }else{ ?> <button type="button" class="btn btn-teal btn-rounded btn-sm m-0" name="buchen"
                    onclick="window.location.href='login.php';">Ticket buchen</button><?php }?>
                  </td>
                </tr>

              </tbody>

            </table>
          </div>
        </div>
        <!-- Basic dropdown -->

      </div>
      <br>
      <br>
      <br>
      <br>
      </main>
    </div>
    </div>
    <br>
    <br>
    <!--Main Layout-->

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