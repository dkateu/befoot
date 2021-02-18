<?php
session_start();
$conn = mysqli_connect('localhost', 'root', '', 'lekeufac') or die(mysqli_connect_error());
 $id = $_SESSION['id'];
        $sql = "SELECT * FROM ticket, spiel, bestellung WHERE bestellung.SpielID=spiel.SpielID 
        AND bestellung.BestellungID = ticket.BestellungID ";
        $result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="de">

<head>
    <title>Befoot Daschboard</title>
    <meta charset="UTF-8">
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

<body style="background-image: url('');background-color: white; background-repeat:no-repeat; background-size: cover;">

    <?php include 'header.php' ?>
    <br> <br><br> <br> <br>
   
    <div class="container">
        <div class="container-fluid">
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
                        <th>Optionen</th>
                        <th>Neue</th>
                       
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
                            <td>
                              
                                <a href="?action=delete&amp; BestellungID=<?= $row['BestellungID']; ?>">Löschen


         
                                <svg width="1.5em" height="1.5em" viewBox="0 0 16 16" class="bi bi-trash" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z" />
                                    <path fill-rule="evenodd" d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4L4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z" />
                                </svg>
                                </a>
                                <?php
                                    if(isset($_GET['action'])){
                                        if($_GET['action']=='delete'){
                                            $id=$_GET['BestellungID'];
                                            $sql1 = "DELETE FROM ticket WHERE BestellungID=$id"; 
                                            $sql2 = "DELETE FROM bestellung WHERE BestellungID=$id"; 
                                            $result1 = $conn->query($sql1); 
                                            $result2 = $conn->query($sql2);                           
                                        }
                                    }                   
                                ?>
                               
                            </td>
                            <td><a href="Ticketanlegen.php"> Anlegen
                             <svg width="1.5em" height="1.5em" viewBox="0 0 16 16" class="bi bi-pencil-square" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456l-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z" />
                                    <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z" />
                                </svg>
                              </td>
                        </tr>
                    <?php
                    }
                    ?>
                </tbody>
            </table>
        </div>
    </div>
    <br> <br> <br><br> 

    <!--FOOTER--><br>
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