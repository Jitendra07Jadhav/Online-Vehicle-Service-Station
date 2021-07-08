<!--This page include code for customer display in list manner and deleting customer -->
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
    <style type="text/css" media="screen">
      table {
    counter-reset: tableCount;     
      }
    .counterCell:before {
      content: counter(tableCount); 
      counter-increment: tableCount;
    }
    </style>
</head>
<body>
  <header id="main-header">
      <div class="container">
        <div class="row end-sm end-md end-lg center-xs middle-xs middle-sm middle-md middle-lg">
          <div class="col-xs-12 col-sm-2 col-md-2 col-lg-2">
            <h1><span class="primary-text">Breakdown_</span>_Information</h1>
          </div>
          <div class="col-xs-12 col-sm-10 col-md-10 col-lg-10">
            <nav id="navbar">
              <ul>
                <li class="current"><a href="breakdown.php">Breakdown Request List</a></li>
                <li><a href="customer_home.php"><strong><span style="color:black">Back</span></strong></a></li>
              </ul>
            </nav>
          </div>
        </div>
      </div>
    </header><br>

<div class="container">
  <div>
    <a href="add_breakdown.php" class="btn btn-info float-right font-weight-bold btn-sm" role="button"><i class='fas fa-plus'></i> Add Breakdown Req.</a>
  </div>
    <table id="example_table" class="table table-striped table-bordered table-sm">
    <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Breakdown No.</th>
      <th scope="col">Date</th>
      <th scope="col">Time</th>
      <th scope="col">Location</th>
      <th scope="col">Problem</th>
      <th scope="col">Status</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
    <tbody>
      <?php
      $db=mysql_connect("localhost","root");
      mysql_select_db("project",$db);
      $sql = "SELECT bno, bdate, btime, loc, prob, st FROM br";
      //$result = $db->query($sql);
      $result=mysql_query($sql,$db);


    if (mysql_num_rows($result)> 0) {
    // output data of each row
    while($row=mysql_fetch_array($result)) {
      ?>
   <tr>
      <th class="counterCell" scope="row"></th>
      <td><?php echo "$row[bno]";?></td>
      <td><?php echo "$row[bdate]";?></td>
      <td><?php echo "$row[btime]";?></td>
      <td><?php echo "$row[loc]";?></td>
      <td><?php echo "$row[prob]";?></td>
      <td><h5><span class="badge badge-success"><?php echo "$row[st]";?></span></h5></td>
      <td><a href="view_break.php?view=<?php echo "$row[bno]";?>"><button class="btn btn-primary"><i class="fas fa-eye"></i></button></a>
        <a href="update_break.php?update=<?php echo "$row[bno]";?>"><button class="btn btn-success"><i class="fas fa-edit"></i></button></a>
        <a href="breakdown.php?delete=<?php echo "$row[bno]";?>"><button class="btn btn-danger"><i class="far fa-trash-alt"></i></button></a>
      </td>
    </tr>
    <?php
}
}
?>
  </tbody>
</table>
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
    <!-- Bootstrap js -->
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <!-- jQuery Datatable js -->
    <script src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>
    <!-- Bootstrap Datatable js -->    
    <script src="https://cdn.datatables.net/1.10.21/js/dataTables.bootstrap4.min.js"></script>
    <script>
      $(document).ready( function () {
          $('#example_table').DataTable();
      } );
    </script>
  </body>
</html>

<?php 
#code for deleting record
$db=mysql_connect("localhost","root");
    mysql_select_db("project",$db);
  if (isset($_GET['delete'])) {
    $id = $_GET['delete'];
    $re = mysql_query("DELETE FROM br WHERE bno=$id", $db);
    if (!$re) {
      echo "<script>alert('Record Not Deleted!'); location.href='breakdown.php';</script>";
    }else{
      echo "<script>alert('Breakdown Record Deleted!'); location.href='breakdown.php';</script>";
    }
  }
  ?>
  