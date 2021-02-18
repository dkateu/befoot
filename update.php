<?php session_start(); ?>
 
<?php
if(!isset($_SESSION['valid'])) {
    header('Location: dashbord.php');

}
?>
 

<html>
<head>
    <title>Add Reservation</title>
</head>

<body>
    <a href="dashboard.php">Update Reservation</a> | <a href="dashboard.php">Daschboard</a> | <a href="logout.php">Logout</a>
    <br/><br/>
    
  <div class="container-fluid px-5">
    <div class="row">
      <div class="col-lg-4"></div>
       <div class="col-lg-4 form-container">
         <h4 class="text-center">Update Details</h4>
         <!-- form start here -->
          <form method="post" action="" enctype="multipart/form-data">
          <div class="form-group">
           <label>TicketID</label>
           <input class="form-control"  type="id" name="ticketif" placeholder="enter ticketid.." value="<?php echo $ticketid;?>">
          </div>
          
          <div class="form-group">
           <label>*Name:</label>
           <input class="form-control"  type="text" name="name" placeholder="enter name.." value="<?php echo $name;?>">
          </div>

          <div class="form-group">
           <label>*Preis:</label>
           <input class="form-control"  type="price" name="price" placeholder="enter price.."
           value="<?php echo $price;?>">
          </div>
	 <div class="form-group">
           <label>*Status:</label>
           <input class="form-control"  type="text" name="status" placeholder="enter status.."
           value="<?php echo $status;?>">
          </div>
	<div class="form-group">
           <label>*Land:</label>
           <input class="form-control"  type="text" name="status" placeholder="enter Land.."
           value="<?php echo $land;?>">
          </div>

           <!-- submit button -->
           <input type="submit" class="btn btn-info btn-block" name="submit" value="Click to Update">
         </form>
       </div>
       <div class="col-lg-4"></div>
    </div><!-- row closed -->
</div><!-- container closed --> 


<?php
//including the database connection file
include_once("connection.php");
 
if(isset($_POST['Submit'])) {    
    $TicketID = $_POST['ticketid'];
    $name= $_POST['name'];
    $price = $_POST['price'];
    $Status= $_POST['status'];
    $Land= $_POST['land'];
    $loginId = $_SESSION['id'];

// checking empty fields
    if(empty($ticketid) || empty($name) || empty($price)|| empty($status)|| empty($spielid)|| empty($land)) {                
        if(empty($ticketid)) {
            echo "<font color='red'>TicketID field is empty.</font><br/>";
        }
        
        if(empty($name)) {
            echo "<font color='red'>Name field is empty.</font><br/>";
        }
        
        if(empty($price)) {
            echo "<font color='red'>Price field is empty.</font><br/>";
        }
	  if(empty($status)) {
            echo "<font color='red'>Status field is empty.</font><br/>";
        }
	  if(empty($land)) {
            echo "<font color='red'>Land field is empty.</font><br/>";
        }

        
        //link to the previous page
        echo "<br/><a href='javascript:self.history.back();'>Go Back</a>";
    } else { 
        // if all the fields are filled (not empty) 
            
        //insert data to database    
        $result = mysqli_query($mysqli, "INSERT INTO products(TicketID, Name, price, Status, Land, login_id) VALUES('$tiketif','$name',
			'$price', 'SpielID','Land','$loginId')");
        
        //display success message
        echo "<font color='green'>Data added successfully.";
        echo "<br/><a href='view.php'>View Result</a>";
    }
}
?>
</body>
</html>