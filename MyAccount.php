    <?php
    session_start();
    $conn = mysqli_connect('localhost', 'root', '', 'lekeufac') or die(mysqli_connect_error());

    $id = $_SESSION['id'];
        $sql = "SELECT * FROM ticket, spiel, bestellung WHERE bestellung.SpielID=spiel.SpielID 
        AND bestellung.BestellungID = ticket.BestellungID AND  bestellung.KundenID= $id ";
        $result = $conn->query($sql);
    ?>

<!DOCTYPE html>
<html lang="de">

<head>
  <title>My Befoot Account</title>
  <meta charset="UTF-8">
<link rel="shortcut icon" href="images/befoot.png" type="image/x-icon">

  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <!-- MDB icon -->
    <link rel="shortcut icon" href="images/befoot.png" type="image/x-icon">

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

<?php include 'header.php' ?>
    </header>


<body>

<br>
<br>
     

<div class="container card" style="width: 75%;">
   <div class="container-fluid">
   <br>
   <br>
            <table font face="verdana" bordercolor="#808000" border="3">
                <thead>
                    <tr>
                    <tr>
                        <th>BestellungID</th>
                        <th>Zuschauername</th>
                        <th>Zuschauervorname</th>
                        <th>E-Mail Adresse</th>
                        <th>Anschrift</th>
                        <th>Handynummer</th>
                        <th>Spielname</th>
                        <th>Datum</th>
                        <th>Zeit</th>
                        <th>Platznummer</th>
                        <th>Preis</th>
                        <th>Option</th>
                    </tr>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    while ($row = mysqli_fetch_array($result)) {
                    ?>
                        <tr>
                            <td><?= $row['BestellungID']; ?></td>
                            <td><?= $row['Zuschauername']; ?></td>
                            <td><?= $row['Zuschauervorname']; ?></td>
                            <td><?= $row['EMail']; ?></td>
                            <td><?= $row['Adress']; ?></td>
                            <td><?= $row['Handynummer']; ?></td>
                            <td><?= $row['Spielname']; ?></td>
                            <td><?= $row['Datum']; ?></td>
                            <td><?= $row['Zeit']; ?></td>
                            <td><?= $row['Platznummer']; ?></td>
                            <td><?= $row['Preis']; ?></td>
                            <td><a href="stornoseite.php">stornieren


         
                                <svg width="1.5em" height="1.5em" viewBox="0 0 16 16" class="bi bi-trash" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z" />
                                    <path fill-rule="evenodd" d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4L4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z" />
                                </svg></td>

                    <?php
                    }
                    ?>
                </tbody>
            </table>
            <div class="text-center py-4 mt-3">

             <button type="button" class="btn btn-teal btn-rounded btn-sm m-0" onclick="window.location.href = 'index.php';">zum Startseite</button>
            </div>
        </div>
    </div>

</div>
<br>
<br>

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