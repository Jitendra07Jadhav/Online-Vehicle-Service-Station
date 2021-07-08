<?php

session_start();

// initializing variables
$username = "";
$email    = "";
$error= 0;

$cn=mysql_connect("localhost","root");
mysql_select_db("project",$cn);


if (!empty($_POST['username'])) {
  // code...
$username = $_POST['username'];
$password = $_POST['password'];


  if($username =='admin' && $password=='admin'){
      header('location: admin_home.php');
      echo "<script>alert('Login completed!'); location.href='admin_home.php';</script>";
  }

    $query = "SELECT * FROM users WHERE username='$username' AND password='$password'";
    $results = mysql_query($query,$cn);
    if (mysql_num_rows($results) == 1) {
      $_SESSION['username'] = $username;
      $_SESSION['success'] = "You are now logged in";
        echo "<script>alert('Login completed!'); location.href='customer_home.php';</script>";
    }else {
      $error=1;
    }
  // }
}
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<title>Login Page</title>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
<style>
body {
  color: #fff;
  background: #3598dc;
}
.form-control {
  min-height: 41px;
  background: #f2f2f2;
  box-shadow: none !important;
  border: transparent;
}
.login-form {
  width: 350px;
  margin: 150px auto;
  text-align: center;
}
.login-form h2 {
  margin: 10px 0 25px;
}
.login-form form {
  color: #7a7a7a;
  border-radius: 3px;
  margin-bottom: 15px;
  background: #fff;
  box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
  padding: 30px;
}
.login-form .btn {        
  font-size: 16px;
  font-weight: bold;
  background: #3598dc;
  border: none;
  outline: none !important;
}
.login-form .btn:hover, .login-form .btn:focus {
  background: #2389cd;
}
.login-form a {
  color: #fff;
  text-decoration: underline;
}
.login-form a:hover {
  text-decoration: none;
}
</style>
</head>
<body>
<div class="login-form">
    <form method="post" action="index.php">
        <h2 class="text-center">Login</h2>   
        <div class="form-group has-error">
          <input type="text" class="form-control" name="username" placeholder="Username" required >
        </div>
        <div class="form-group">
            <input type="password" class="form-control" name="password" placeholder="Password" required>
        </div>        
        <div class="form-group">
          <button type="submit" class="btn btn-primary btn-lg btn-block" name="login_user">Sign in</button>
          <br><?php if ($error==1){ echo'<h6 class="text-center" style="color: red;">Wrong username/password combination!</h6>';} ?>
        </div>
      </form>
    <p class="text-center small">Don't have an account? <a href="register.php">Sign up here!</a></p>
</div>
</body>
</html>
