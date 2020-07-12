<?php
session_start();
if (! empty($_SESSION['logged_in']))
{

?>

<!DOCTYPE html>
<html>

<head>
  <link rel="stylesheet" type="text/css" href="bootstrap.min.css">
  <title>Administrator</title>
  <style>
  </style>
</head>

<body>
<form action="Donors.php" method="post">
<div class="container">
<br>
<pre align=center><font size="5" color="blue"> <b>DONORS RECORDS</b></font></pre>
    <div class="row">
            <div class="col-xs-5"></div>
            <div class="col-xs-5">
              <img border="" src="images/logo4.png" width="150" height="110"></div> 
<br>
<br>                  
            <div class="col-xs-2">
              <div class="button">
                <a href="logout.php">
                <button type="button" class="btn btn-primary" name="logout">LOGOUT</button>
                </a>
              </div>
            </div>
    </div>
<hr>
    <div class="row">
            <div class="col-xs-1"></div>
            <div class="col-xs-3">
              <div class="button">
                <a href="">
                  <button type="button" class="btn btn-primary" name='search' >SEAERCH BY NAME</button>
                </a>
              </div>
            </div>

            <div class="col-xs-3">
              <div class="button">
                <a href="">
                  <button type="button" class="btn btn-success" name='search' >SEAERCH BY DATE</button>
                </a>
              </div>
            </div>

            <div class="col-xs-3">
              <div class="button">
                <a href="">
                  <button type="button" class="btn btn-warning" name='search' >SEARCH BY GROUP</button>
               </a>
              </div>
            </div>

            <div class="col-xs-2">

<?php  
 $connect = mysqli_connect("localhost", "root", "","visitorsdb");
    
    // mysql search query
 $sql = "SELECT ID, Fname, Lname, Phone, Address, Office, Visited_Date FROM  information ";

 $result = $connect->query($sql);
    if ($result->num_rows > 0) {

 if ($result=mysqli_query($connect,$sql))
  {
  // Return the number of rows in result set
  $rowcount=mysqli_num_rows($result);
  printf("<b>Total donors =%d.\n</b>",$rowcount);
 
 // Free result set
  ///  https://www.stmaryskc.com/
  mysqli_free_result($result);
  }
}
?>
</div>          
</div>
<hr>
<div class='row'>
<div class= 'col-xs-1'><b>ID</b></div>
<div class= 'col-xs-2'><b>Name</b></div>
<div class= 'col-xs-2'><b>Phone</b></div>
<div class= 'col-xs-2'><b>Address</b></div>
<div class= 'col-xs-2'><b>Blood Group</b></div> 
<div class= 'col-xs-3'><b>Visited_Date & Time</b></div>

</div>
<hr>

<?php 
    // connect to mysql
 $connect = mysqli_connect("localhost", "root", "","visitorsdb");
    
    // mysql search query
 $sql = "SELECT ID, Fname, Lname, Phone, Address, Office, Visited_Date FROM  information ";

 $result = $connect->query($sql);
    if ($result->num_rows > 0) {

 while($row = mysqli_fetch_array($result)){
{
 echo  "<br>    
<div class='row'>
<div class= 'col-xs-1'>". $row["ID"]."</div>
<div class= 'col-xs-2'>".$row["Fname"]." ".$row["Lname"]."</div>
<div class= 'col-xs-2'>".$row['Phone']."</div>
<div class= 'col-xs-2'>".$row['Address']."</div>
<div class= 'col-xs-2'>".$row['Office']."</div>
<div class= 'col-xs-3'>".$row['Visited_Date']."</div>

</div>";
}    
} 
}
?>
<hr>
</div>
</form>
</body>
</html>

<?php
}
else
{
  
 header('Location:Admin.php');
}