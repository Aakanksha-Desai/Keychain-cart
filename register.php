<?php include('connection.php'); ?>

<!DOCTYPE html>
<html>
<head>
 <title>REGISTER</title>
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

  
  <form action="register.php" method="POST">

<div class="container">
      <label for="uname"><b>Username</b></label>
      <input type="text" placeholder="Enter Username" name="uname" required value="<?php echo($username); ?>">

      <label for="email"><b>Email</b></label>
    <input type="text" placeholder="Enter Email" name="email" required value="<?php echo($email); ?>">

      <label for="psw"><b>Password</b></label>
      <input type="password" placeholder="Enter Password" name="psw" required>

      <label for="psw-repeat"><b>Repeat Password</b></label>
    <input type="password" placeholder="Repeat Password" name="psw-repeat" required>
        <hr>
      <button type="submit" class="registerbtn" name="reg_user">REGISTER</button>
      <label>
        <input type="checkbox" checked="checked" name="remember"> Remember me
      </label>
    </div>

    <div class="container" style="background-color:#f1f1f1">
      <button type="button" onclick="document.getElementById('id02').style.display='none'" class="cancelbtn">Cancel</button>
      <span class="psw">Forgot <a href="#">password?</a></span>
    </div>
  </form>

</header>
</div>
</body>
</head></html>
