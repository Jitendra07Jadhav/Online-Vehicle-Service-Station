
<?php include('server.php') ?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<title>Registration Page</title>
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
  margin: 100px auto;
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
    <form method="post" action="register.php">
      <?php include('errors.php'); ?>
        <h2 class="text-center">Register</h2>   
        <div class="form-group has-error">
          <input type="text" class="form-control" name="username" placeholder="Username" required="required">
        </div>
        <div class="form-group">
            <input type="email" class="form-control" name="email" placeholder="E-mail" required="required">
        </div>
        <div class="form-group">
            <input type="password" class="form-control" name="password_1" placeholder="Password" required="required">
        </div> 
        <div class="form-group">
            <input type="password" class="form-control" name="password_2" placeholder="Confirm password" required="required">
        </div>        
        <div class="form-group">
            <button type="submit" class="btn btn-primary btn-lg btn-block" name="reg_user">Register</button>
        </div>
      </form>
    <p class="text-center small">Already a member? <a href="index.php">Sign in</a></p>
</div>
</body>
</html>