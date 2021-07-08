<?php
session_start();

// initializing variables
$username = "";
$email    = "";
$errors = array();

// connect to the database
$db=mysql_connect("localhost","root");
mysql_select_db("project",$db);
// REGISTER USER
if (isset($_POST['reg_user'])) {
  // receive all input values from the form
  $username = $_POST['username'];
  $email = $_POST['email'];
  $password_1 = $_POST['password_1'];
  $password_2 =$_POST['password_2'];

  // form validation: ensure that the form is correctly filled ...
  // by adding (array_push()) corresponding error unto $errors array
  if (empty($username)) { array_push($errors, "Username is required"); }
  if (empty($email)) { array_push($errors, "Email is required"); }
  if (empty($password_1)) { array_push($errors, "Password is required"); }
  if ($password_1 != $password_2) {
	array_push($errors, "The two passwords do not match");
  }


  // first check the database to make sure
  // a user does not already exist with the same username and/or email
  $user_check_query = "SELECT * FROM users WHERE username='$username' OR email='$email' LIMIT 1";
  $result = mysql_query($db, $user_check_query);
  $user = mysql_fetch_assoc($result);

  if ($user) { // if user exists
    if ($user['username'] === $username) {
      array_push($errors, "Username already exists");
    }

    if ($user['email'] === $email) {
      array_push($errors, "email already exists");
    }
  }

  // Finally, register user if there are no errors in the form
  if (count($errors) == 0) {
  	// $password = $password_1//encrypt the password before saving in the database

  	$query = "INSERT INTO users (username, email, password, dt)  VALUES('$username', '$email', '$password_1', NOW())";
  	mysql_query($query, $db);
  	$_SESSION['username'] = $username;
  	$_SESSION['success'] = "You are now logged in";
        echo "<script>alert('Registration completed!'); location.href='index.php';</script>";
  //	header('location: login.php');
  }
}
// LOGIN USER
if (isset($_POST['login_user'])) {
  $username = mysql_real_escape_string($db, $_POST['username']);
  $password = mysql_real_escape_string($db, $_POST['password']);

  if (empty($username)) { array_push($errors, "Username is required"); }
  if (empty($password)) { array_push($errors, "Password is required"); }


//
// if (isset($_POST['login_user1'])) {
//   mysqli_query($db,"delete from users where name='$_POST[username]'");
// }



  if (!empty($_POST['username'])) {
    // code...


    if($username =='admin' && $password=='admin'){
      	header('location: admin_home.php');
    }



    // if (count($errors) == 0) {
      // $password = md5($password);
      $query = "SELECT * FROM users WHERE username='$username' AND password='$password'";
      $results = mysql_query($db, $query);
      if (mysql_num_rows($results) == 1) {
        $_SESSION['username'] = $username;
        $_SESSION['success'] = "You are now logged in";
          echo "<script>alert('Login completed!'); location.href='customer_home.php';</script>";
      //  header('location: index5.php');
      }else {
        array_push($errors, "Wrong username/password combination");
      }
    // }
  }

}

?>
