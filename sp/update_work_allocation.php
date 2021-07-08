<?php
  $db=mysql_connect("localhost","root");
      mysql_select_db("project",$db);
      
  if (isset($_GET['update'])) {
    $id = $_GET['update'];
    
    $record = mysql_query("SELECT * FROM workallocation WHERE allocationno=$id", $db);
    if (mysql_num_rows ( $record)== 1 ) {
      $n = mysql_fetch_array($record);

$allono= $n["allocationno"];
$bno= $n["breakdownno"];
$ass= $n["Assigned"];
$date= $n["dt"];
$solution= $n["solution"];
$status= $n["status"];

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
            <h1><span class="primary-text">Vehicle_Service_</span>Station</h1>
          </div>
          <div class="col-xs-12 col-sm-10 col-md-10 col-lg-10">
            <nav id="navbar">
              <ul>
                <li class="current"><a href="">Update Work Allocation Req.</a></li>
                <li><a href="Work_allocation.php"><strong><span style="color:black">Back</span></strong></a></li>
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
      <label for="cn">Work Allocation:</label>
      <input type="text" name="woall" class="form-control" id="cn" value="<?php echo  "$allono" ?>" readonly>
     </div>
    </div>
    <div class="form-row row justify-content-center">
     <div class="form-group col-md-6">
      <label for="cn">Breakdown No</label>
      <input type="text" name="bno"class="form-control" id="cn" value="<?php echo "$bno" ?>" >
     </div>
    </div>
    <div class="form-row row justify-content-center">
     <div class="form-group col-md-6">
      <label for="cn">Select Engineer</label>
      <input type="text" name="seng"class="form-control" id="cn" value="<?php echo "$ass"?>">
    </div>
    </div>
    <div class="form-row row justify-content-center">
     <div class="form-group col-md-6">
      <label for="cn">Select Time</label>
      <input type="datetime-local" name="tm"class="form-control" id="cn" value="<?php echo "$date"?>">
    </div>
    </div>
    <div class="form-row row justify-content-center">
     <div class="form-group col-md-6">
      <label for="cn">soluotion</label>
      <input type="text" name="sol"class="form-control" id="cn" value="<?php echo "$solution"?>">
    </div>
   </div>
   <div class="form-row row justify-content-center">
    <div class="form-group col-md-6">
      <label for="cn">Status</label>
      <select name="st" id="cn" class="form-control" required>
        <option value="<?php echo "$status"?>"></option>
        <option value="New">New</option>
        <option value="Assigned">Assigned</option>
        <option value="Completed">Completed</option>
      </select>
    </div>
  </div>
    <div class="text-center">
      <button type="update" name="update" class="btn btn-primary">Update</button>
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
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
</body>
</html>
<?php
$db=mysql_connect("localhost","root");
mysql_select_db("project", $db);
if(isset($_POST["update"]))
{
$allono=$_POST["woall"];
$bno=$_POST["bno"];
$ass=$_POST["seng"];
$date=$_POST["tm"];
$solution=$_POST["sol"];
$status=$_POST["st"];

$sql="update workallocation set breakdownno='$bno', Assigned='$ass', dt='$date', solution='$solution', status='$status' where allocationno='$allono'";
$retval = mysql_query($sql, $db);

$sql2="UPDATE br set st='$status' where bno='$bno'";
  $ret= mysql_query($sql2, $db);


   if(! $retval && ! $ret) {
      die('Could not enter data');
     echo "<script>alert('Work Allocation Request Cannot Update!');location.href='Work_allocation.php';</script>";

   }
   else {
     echo "customer Insert";
     echo "<script>alert('Work Allocation Request Updated!'); location.href='Work_allocation.php';</script>";
   }
}
mysql_close($db);
?>