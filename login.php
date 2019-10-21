<?php include('connection.php'); ?>
<!DOCTYPE html>
<html>
<head>
 <title>LOGIN</title>
<link rel="stylesheet" type="text/css" href="projcss.css">

<style>
body {

  background-image: url("");
        background-repeat:no-repeat;
       background-size:cover;
} 
</head>
<style>
.mySlide
</style>


<body>
<div>
<header>
   <img src="tc1.png" width="500" style="display:inline;float:left">

<form action="login.php" method="POST">

    <div class="container">
      <label for="uname"><b>Username</b></label>
      <input type="text" placeholder="Enter Username" name="uname" required>

      <label for="psw"><b>Password</b></label>
      <input type="password" placeholder="Enter Password" name="psw" required>
        
      <button type="submit" class ="registerbtn" name="login_user">Login</button>
      <label>
        <input type="checkbox" checked="checked" name="remember"> Remember me
      </label>
    </div>

    <div class="container" style="background-color:#f1f1f1">
      <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>
      <span class="psw">Forgot <a href="#">password?</a></span>
    </div>
  </form>
</header>
</div>
</body>
</head>
</html>
