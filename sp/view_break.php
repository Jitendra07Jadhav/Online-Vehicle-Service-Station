<?php
  $db=mysql_connect("localhost","root");
      mysql_select_db("project",$db);
      
  if (isset($_GET['view'])) {
    $id = $_GET['view'];
    
    $record = mysql_query("SELECT * FROM br WHERE bno=$id", $db);
    if (mysql_num_rows ( $record)== 1 ) {
      $n = mysql_fetch_array($record);

$bno= $n["bno"];
$bredate= $n["bdate"];
$bretime= $n["btime"];
$cusid= $n["cid"];
$vehicle= $n["vno"];
$location= $n["loc"];
$problem= $n["prob"];
$status= $n["st"];

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
            <h1><span class="primary-text">Breakdown</span>_Details</h1>
          </div>
          <div class="col-xs-12 col-sm-10 col-md-10 col-lg-10">
            <nav id="navbar">
              <ul>
                <li class="current"><a href="update_break.php">Update Breakdown Req.</a></li>
                <li><a href="breakdown.php"><strong><span style="color:black">Back</span></strong></a></li>
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
      <label for="cn">Breakdown No:</label>
      <input type="text" name="n" class="form-control" id="cn" value="<?php echo  "$bno" ?>" readonly>
     </div>
    </div>
    <div class="form-row row justify-content-center">
     <div class="form-group col-md-6">
      <label for="cn">Customer ID:</label>
      <input type="text" name="cid"class="form-control" id="cn" value="<?php echo "$cusid" ?>" readonly>
     </div>
    </div>
    <div class="form-row row justify-content-center">
     <div class="form-group col-md-6">
      <label for="cn">Breakdown Date</label>
      <input type="Date" name="date"class="form-control" id="cn" value="<?php echo "$bredate"?>" readonly>
    </div>
    </div>
    <div class="form-row row justify-content-center">
     <div class="form-group col-md-6">
      <label for="cn">Breakdown Time</label>
      <input type="Time" name="time"class="form-control" id="cn" value="<?php echo "$bretime"?>" readonly>
    </div>
    </div>
    <div class="form-row row justify-content-center">
     <div class="form-group col-md-6">
      <label for="cn">Vehicle No.</label>
      <input type="text" name="vno"class="form-control" id="cn" value="<?php echo "$vehicle"?>" readonly>
    </div>
   </div>
   <div class="form-row row justify-content-center">
    <div class="form-group col-md-6">
      <label for="cn">Location</label>
      <input type="text" name="loc"class="form-control" id="cn" value="<?php echo "$location"?>" readonly>
    </div>
  </div>
  <div class="form-row row justify-content-center">
    <div class="form-group col-md-6">
      <label for="cn">Problem</label>
      <input type="text" name="pb"class="form-control" id="cn" value="<?php echo "$problem"?>" readonly>
    </div>
  </div>
  <div class="form-row row justify-content-center">
    <div class="form-group col-md-6">
      <label for="cn">Status</label>
      <input type="text" name="st"class="form-control" id="cn" value="<?php echo "$status"?>" readonly>
    </div>
  </div>
  
    <div class="text-center">
     <button class="btn btn-primary hidden-print" onclick="myFunction()"><span class="glyphicon glyphicon-print" aria-hidden="true"></span> Print</button>
    </div>
</form>

<br>
</div>
<?php 
}}
?>
<footer id="main-footer">
      <div class="container">
        <div class="row center-xs center-sm center-md center-lg">
          <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
            <p>@Online_Vehicle_Service_Station</p>
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
