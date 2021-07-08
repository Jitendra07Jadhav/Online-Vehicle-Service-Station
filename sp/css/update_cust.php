<?php 
include 'config1.php';
	if (isset($_GET['update'])) {
		$id = $_GET['update'];
    
		$record = mysqli_query($conn, "SELECT * FROM customerdetails WHERE Cid=$id");
		if (mysqli_num_rows ( $record)== 1 ) {
			$n = mysqli_fetch_array($record);
$cn=$n["Cid"];
$phone=$n["Cphoneno"];
$name=$n["Cname"];
$add=$n["Caddress"];

?>
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
            <h1><span class="primary-text">Jewel</span>Store</h1>
          </div>
          <div class="col-xs-12 col-sm-10 col-md-10 col-lg-10">
            <nav id="navbar">
              <ul>
                <li class="current"><a href="update_cust.php">Update Customer</a></li>
                <li><a href="customer.php"><strong><span style="color:black">Back</span></strong></a></li>
              </ul>
            </nav>
          </div>
        </div>
      </div>
    </header>

<div style="background-color: Whitesmoke;"class="container-fluid"><br>
  <form method="post" a>
    <div class="form-row row justify-content-center">
     <div class="form-group col-md-3">
      <label for="cn">Enter Customer ID:</label>
      <input type="text" name="n"class="form-control" id="cn"value="<?php echo "$cn"?>" readonly>
    </div>
    </div>
    <div class="form-row row justify-content-center">
     <div class="form-group col-md-3">
      <label for="cn">Enter Customer Name:</label>
      <input type="text" name="cname"class="form-control" id="cn"value="<?php echo "$name"?>">
    </div>
    </div>
    <div class="form-row row justify-content-center">
     <div class="form-group col-md-3">
      <label for="cn">Enter Address:</label>
      <input type="text" name="cadd"class="form-control" id="cn"value="<?php echo "$add"?>">
    </div>
    </div>
    <div class="form-row row justify-content-center">
     <div class="form-group col-md-3">
      <label for="cn">Enter Contact Number:</label>
      <input type="text" name="cno"class="form-control" id="cn"value="<?php echo "$phone"?>">
    </div>
    </div>
    <div class="text-center">
      <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</form>
<br>
<br>
<br>
<br>
</div>
<?php 
}}
?>
<footer id="main-footer">
      <div class="container">
        <div class="row center-xs center-sm center-md center-lg">
          <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
            <p>@JewelStore</p>
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
include 'config1.php';    
  if(isset($_POST["cname"]) && isset($_POST["cadd"]) && isset($_POST["cno"])){
      $cn=$_POST["cname"];
      $ca=$_POST["cadd"];
      $cp=$_POST["cno"];
      $no=$_POST["n"];

      
$sq= "update customerdetails set Cphoneno='$cp', Cname='$cn', Caddress='$ca' where Cid='$no'";
   $result = mysqli_query( $conn, $sq);
   if (!$result) {
     echo "<script>alert('Customer Not Updated!'); location.href='customer.php';</script>";
   }
echo "<script>alert('Customer updated!'); location.href='customer.php';</script>";
mysqli_close($conn);
   }?>