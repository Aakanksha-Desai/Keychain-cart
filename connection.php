<?php
session_start();
$username = "";
$email = "";
$errors = array();

//connect to db
$db = mysqli_connect('localhost','root','','cart');

//register user
if(isset($_POST['reg_user'])) {
	$username  = mysqli_real_escape_string($db,$_POST['uname']);
	$email  = mysqli_real_escape_string($db,$_POST['email']);
	$pass1  = mysqli_real_escape_string($db,$_POST['psw']);
	$pass2 = mysqli_real_escape_string($db,$_POST['psw-repeat']);
// form validation: ensure that the form is correctly filled ...
  // by adding (array_push()) corresponding error unto $errors array
	if(empty($username)) {array_push($errors, "Username is required");}
	if(empty($email)) {array_push($errors, "Email is required");}
	if(empty($pass1)) {array_push($errors, "Password is required");}

	if($pass1 != $pass2){
		array_push($errors, "The passwords do not match!");
	}
//check whether users with same username/email exist
	$user_check_query = "SELECT * FROM register WHERE uname='$username' OR email='$email' LIMIT 1";
    $result = mysqli_query($db, $user_check_query);
    $user = mysqli_fetch_assoc($result);

    if($user){
    	if($user['uname'] == $username){
    		array_push($errors, "Username already exists");
    		$message = "User with this name already exists!";
  echo "<script type='text/javascript'>alert('$message');</script>";
    	}
    	if($user['email'] == $email){
    		array_push($errors, "Email already exists");
    		$message = "User with this email already exists!";
  echo "<script type='text/javascript'>alert('$message');</script>";
    	}
    }
//register user if there are no errors
    if(count($errors) == 0){
    	$password = md5($pass1);
    	$query = "INSERT INTO register (uname, email, psw)  VALUES('$username','$email','$password')";
    	mysqli_query($db,$query);
    	$_SESSION['uname']=$username;
    	$_SESSION['success']="You are now registered";
    	header('location:project.php');
    }

}

//login user

if(isset($_GET['login_user'])){
	$username = mysqli_real_escape_string($db, $_POST['uname']);
    $password = mysqli_real_escape_string($db, $_POST['psw']);


    if (empty($username)) {
  	array_push($errors, "Username is required");
  }
  if (empty($password)) {
  	array_push($errors, "Password is required");
  }
  if (count($errors) == 0) {
  	$password = md5($password);
  	$query = "SELECT * FROM register WHERE uname='$username' AND psw='$password'";
  	$results = mysqli_query($db, $query);
  	if (mysqli_num_rows($results) == 1) {
  	  $_SESSION['uname'] = $username;
  	  $_SESSION['success'] = "You are now logged in";
  	  header('location: project.php');
  	}else {
  		array_push($errors, "Wrong username/password combination");
  	}
  }



}



?>
