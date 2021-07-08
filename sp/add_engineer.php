<html>
<head>
<link rel="stylesheet" href="css/flexboxgrid.css">
    <link rel="stylesheet" href="css/font-awesome.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <!-- Bootstrap DataTable CSS -->
  <link rel="stylesheet" href="https://cdn.datatables.net/1.10.21/css/dataTables.bootstrap4.min.css">
    
   <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
    <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
    
</head>
<body>
  <header id="main-header">
      <div class="container">
        <div class="row end-sm end-md end-lg center-xs middle-xs middle-sm middle-md middle-lg">
          <div class="col-xs-12 col-sm-2 col-md-2 col-lg-2">
            <h1><span class="primary-text">Engineer_</span>Information</h1>
          </div>
          <div class="col-xs-12 col-sm-10 col-md-10 col-lg-10">
            <nav id="navbar">
              <ul>
                <li class="current"><a href="engineer.php">Add Engineers</a></li>
                <li><a href="engineer.php"><strong><span style="color:black">Back</span></strong></a></li>
              </ul>
            </nav>
          </div>
        </div>
      </div>
    </header>

<div style="background-color: Whitesmoke;"class="container-fluid"><br>
  <form method="post">
    <div class="form-row row justify-content-center">
     <div class="form-group col-md-6">
      <label for="cn">Engineer Name:</label>
      <input type="text" name="engineername"class="form-control" id="cn" placeholder="Enter Engineer Name" required>
     </div>
    </div>
    <div class="form-row row justify-content-center">
     <div class="form-group col-md-6">
      <label for="cn">Address</label>
      <input type="text" name="address"class="form-control" id="cn" placeholder="Enter Your Adress" required>
    </div>
    </div>
    <div class="form-row row justify-content-center">
     <div class="form-group col-md-6">
      <label for="cn">Mobile No</label>
      <input type="text" name="mobileno"class="form-control" id="cn" placeholder=" Enter 10 digit Number" required>
    </div>
    </div>
    <div class="form-row row justify-content-center">
     <div class="form-group col-md-6">
      <label for="cn">Email-Id</label>
      <input type="email" name="emailid"class="form-control" id="cn" placeholder="Enter Your Email-id" required>
    </div>
   </div>
   <div class="form-row row justify-content-center">
    <div class="form-group col-md-6">
      <label for="cn">Specialist</label>
      <input type="text" name="specialist"class="form-control" id="cn" placeholder="Enter Specialist" required>
    </div>
  </div>
  <div class="form-row row justify-content-center">
    <div class="form-group col-md-6">
      <label for="cn">Experiance</label>
      <input type="text" name="experiance"class="form-control" id="cn" placeholder="Enter Your Experiance" required>
    </div>
  </div>
    
  
    <div class="text-center">
      <button type="submit" name="submit" class="btn btn-primary">Submit</button>
    </div>
</form>

<br>
</div>
<footer id="main-footer">
      <div class="container">
        <div class="row center-xs center-sm center-md center-lg">
          <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
            <p>@Online Vehicle Service Station</p>
          </div>
        </div>
      </div>
</footer>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
</body>
</html>
<?php
$db=mysql_connect("localhost","root");
mysql_select_db("project",$db);
if(isset($_POST["submit"]))
{
$engname=$_POST["engineername"];
$add=$_POST["address"];
$mbno=$_POST["mobileno"];
$emid=$_POST["emailid"];
$spe=$_POST["specialist"];
$exp=$_POST["experiance"];


$sql = "INSERT INTO engineer ( engineername, address, mobileno, emailid, specialist, experiance) VALUES ('$engname', '$add', '$mbno', '$emid', '$spe', '$exp')";
   $retval = mysql_query($sql, $db);

   if(! $retval) {
      die('Could not enter data');
     echo "<script>alert('Engineer Cannot Added!'); location.href='engineer.php';</script>";

   }
   else {
     echo "customer Insert";
     echo "<script>alert('Engineer Added!'); location.href='engineer.php';</script>";
   }

}

mysql_close($db);
?>