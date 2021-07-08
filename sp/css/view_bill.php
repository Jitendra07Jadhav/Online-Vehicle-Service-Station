<?php
  include 'config1.php';
	if (isset($_GET['view'])) {
		$id = $_GET['view'];
    
		$record = mysqli_query($conn, "SELECT * FROM billingdetails WHERE Bid=$id");
		if (mysqli_num_rows ( $record)== 1 ) {
			$n = mysqli_fetch_array($record);
$cn=$n['Bcid'];
$bn=$n["Bid"];
$date=$n['Bdate'];
$phone=$n["cphone"];
$name=$n["cname"];
$address=$n["caddress"];
$Iid1=$n["Item1"];
$Iid2=$n["Item2"];
$Iid3=$n["Item3"];
$Iid4=$n["Item4"];
$Iw1=$n["Weight1"];
$Iw2=$n["Weight2"];
$Iw3=$n["Weight3"];
$Iw4=$n["Weight4"];
$IType1=$n["Type1"];
$IType2=$n["Type2"];
$IType3=$n["Type3"];
$IType4=$n["Type4"];
$Icat1=$n["Cat1"];
$Icat2=$n["Cat2"];
$Icat3=$n["Cat3"];
$Icat4=$n["Cat4"];
$MC1=$n["Makingcharge1"];
$MC2=$n["Makingcharge2"];
$MC3=$n["Makingcharge3"];
$MC4=$n["Makingcharge4"];
$price1=$n["Price1"];
$price2=$n["Price2"];
$price3=$n["Price3"];
$price4=$n["Price4"];
$amt1=$n["amount1"];
$amt2=$n["amount2"];
$amt3=$n["amount3"];
$amt4=$n["amount4"];
$total=$n["Total"];

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
                <li class="current"><a href="Viewbill.php">Bill Details</a></li>
                <li><a href="bill_list.php"><strong><span style="color:black">Back</span></strong></a></li>
              </ul>
            </nav>
          </div>
        </div>
      </div>
    </header>

<div style="background-color: Whitesmoke;"class="container-fluid"><br>
  <form>
    <div class="form-row">
     <div class="form-group col-md-3">
      <input type="text"class="form-control" value="<?php echo "Customer No: $cn"?>">
    </div>
    <div class="form-group col-md-3">
      <input type="text"class="form-control" value="<?php echo "Bill No: $bn"?>">
    </div>
    </div>
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="n">Customer's Name</label>
      <input type="text" class="form-control" id="n" value="<?php echo "$name"?>">
    </div>
    <div class="form-group col-md-6">
      <label for="m">Date</label>
      <input type="text"class="form-control" id="m" value="<?php echo "$date"?>">
    </div>
  </div>
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="l">Address</label>
      <input type="text" class="form-control" id="l" value="<?php echo "$address"?>">
    </div>
    <div class="form-group col-md-6">
      <label for="t">Mobile No.</label>
      <input type="text" class="form-control" id="t" value="<?php echo "$phone"?>">
    </div>
  </div>
  <table class="table table-hover table-bordered table-secondary table-sm">
    <thead>
    <tr>
      <th scope="col">Sr no</th>
      <th scope="col">Item id</th>
      <th scope="col">Item Weight</th>
      <th scope="col">Item Type</th>
      <th scope="col">Item Category</th>
      <th scope="col">Making Charges</th>
      <th scope="col">Item Price</th>
      <th scope="col">Amount</th>
    </tr>
   </thead>
   <tbody>      
   <tr>
      <th scope="row">1</th>
      <td><input type="text" value="<?php echo "$Iid1"?>"></td>
      <td><input type="text" value="<?php echo "$Iw1"?>"></td>
      <td><input type="text" value="<?php echo "$IType1"?>"></td>
      <td><input type="text" value="<?php echo "$Icat1"?>"></td>
      <td><input type="text" value="<?php echo "$MC1"?>"></td>
      <td><input type="text" value="<?php echo "$price1"?>"></td>
      <td><input type="text" value="<?php echo "$amt1"?>"></td>
   </tr>
   <tr>
      <th scope="row">2</th>
      <td><input type="text" value="<?php echo "$Iid2"?>"></td>
      <td><input type="text" value="<?php echo "$Iw2"?>"></td>
      <td><input type="text" value="<?php echo "$IType2"?>"></td>
      <td><input type="text" value="<?php echo "$Icat2"?>"></td>
      <td><input type="text" value="<?php echo "$MC2"?>"></td>
      <td><input type="text" value="<?php echo "$price2"?>"></td>
      <td><input type="text" value="<?php echo "$amt2"?>"></td>
   </tr>
   <tr>
      <th scope="row">3</th>
      <td><input type="text" value="<?php echo "$Iid3"?>"></td>
      <td><input type="text" value="<?php echo "$Iw3"?>"></td>
      <td><input type="text" value="<?php echo "$IType3"?>"></td>
      <td><input type="text" value="<?php echo "$Icat3"?>"></td>
      <td><input type="text" value="<?php echo "$MC3"?>"></td>
      <td><input type="text" value="<?php echo "$price3"?>"></td>
      <td><input type="text" value="<?php echo "$amt3"?>"></td>
   </tr>
   <tr>
      <th scope="row">4</th>
      <td><input type="text" value="<?php echo "$Iid4"?>"></td>
      <td><input type="text" value="<?php echo "$Iw4"?>"></td>
      <td><input type="text" value="<?php echo "$IType4"?>"></td>
      <td><input type="text" value="<?php echo "$Icat4"?>"></td>
      <td><input type="text" value="<?php echo "$MC4"?>"></td>
      <td><input type="text" value="<?php echo "$price4"?>"></td>
      <td><input type="text" value="<?php echo "$amt4"?>"></td>
   </tr>
   <tr>
      <td colspan="6"></td>
      <td class="font-weight-bold">Total Amount :-</td>
      <td><input type="text" value="<?php echo "$total"?>"></td>
    </tr>
  </tbody>
</table>
</form>
<div class="text-center">
 <!--<a href="bill_list.php"> <button class="btn btn-primary text-right">back</button></a>-->
 <button class="btn btn-primary hidden-print" onclick="myFunction()"><span class="glyphicon glyphicon-print" aria-hidden="true"></span> Print</button>
</div><br>
</div>
<?php 
}}
?>
<footer id="main-footer">
      <div class="container">
        <div class="row center-xs center-sm center-md center-lg">
          <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
            <p>JewelCart</p>
          </div>
        </div>
      </div>
</footer>
<script type="text/javascript">
  function myFunction() {
    window.print();
}</script>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>

</body>
</html>