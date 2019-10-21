
<!DOCTYPE html>
<html>
<head>
 <title>PRODUCTS</title>
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



//REGISTER

<form action="register.php">
<button onclick="document.getElementById('id02').style.display='block'"style="width:15%;float:right";>Register</button>
</form>

//END REGISTER

  
//LOGIN

<form action="login.php">
<button onclick="document.getElementById('id01').style.display='block'"style="width:15%;float:right";>Login</button>
</form>

 <div>
  
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
   <nav>
   <ul>
  <li><button onclick="window.location.href = 'file:///C:/Users/varsh/Desktop/New%20folder%20(2)/wdl.html#';">HOME</button></li>
  <li><button onclick="window.location.href = 'product.html';">PRODUCTS</button></li>
  <li><button onclick="window.location.href = 'https://w3docs.com';">SERVICES</button></li>
        <li><button onclick="window.location.href = 'https://w3docs.com';">EVENTS</button></li>
  <li><button onclick="window.location.href = 'https://w3docs.com';">CONTACT US</button></li>
   </ul>
  </nav>

</div>
<div class="w3-content w3-display-container"class="container">
  <img class="mySlide" src="first.jpg" style="width:100%" height="500">
  <img class="mySlide" src="funko.jpg" style="width:100%" height="500">
  <img class="mySlide" src="marvel.jpg" style="width:100%" height="500">
  <img class="mySlide" src="thor.jpg" style="width:100%" height="500">
</div>
<script>
var myIndex = 0;
carousel();

function carousel() {
  var i;
  var x = document.getElementsByClassName("mySlide");
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";  
  }
  myIndex++;
  if (myIndex > x.length) {myIndex = 1}    
  x[myIndex-1].style.display = "block";  
  setTimeout(carousel, 5000); // Change image every 5 seconds
}
</script>
  
 
</body>
</html>
