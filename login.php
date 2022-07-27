<?php 
session_start();
if(isset($_SESSION['ticket'])){
    header('location:dashboard.php');
}
?>
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Amarante&family=Great+Vibes&display=swap" rel="stylesheet">
<title>Login</title>

<style>
body {font-family: Arial, Helvetica, sans-serif;}

/* Full-width input fields */
input[type=text], input[type=password] {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  box-sizing: border-box;
}

input[type=submit]{
  background-color: #04AA6D;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
  border-radius: 25px;

}
input[type=submit]:hover{
  opacity: 0.8;
}
/* Set a style for all buttons */
button {
  background-color: #04AA6D;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
  border-radius: 50px;
}

button:hover {
  opacity: 0.8;
}

/* Extra styles for the cancel button */
.cancelbtn {
  width: auto;
  padding: 10px 18px;
  background-color: #f44336;
}

/* Center the image and position the close button */
.imgcontainer {
  text-align: center;
  margin: 24px 0 12px 0;
  position: relative;
}

img.avatar {
  width: 40%;
  border-radius: 50%;
}

.container {
  padding: 16px;
}

span.psw {
  float: right;
  padding-top: 16px;
}

/* The Modal (background) */
.modal {
  display: none; /* Hidden by default */
  position: fixed; /* Stay in place */
  z-index: 1; /* Sit on top */
  left: 0;
  top: 0;
  width: 100%; /* Full width */
  height: 100%; /* Full height */
  overflow: auto; /* Enable scroll if needed */
  background-color: rgb(0,0,0); /* Fallback color */
  background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
  padding-top: 60px;
}

/* Modal Content/Box */
.modal-content {
  background-color: #fefefe;
  margin: 5% auto 15% auto; /* 5% from the top, 15% from the bottom and centered */
  border: 1px solid #888;
  width: 80%; /* Could be more or less, depending on screen size */
}

/* The Close Button (x) */
.close {
  position: absolute;
  right: 25px;
  top: 0;
  color: #000;
  font-size: 35px;
  font-weight: bold;
}

.close:hover,
.close:focus {
  color: red;
  cursor: pointer;
}

/* Add Zoom Animation */
.animate {
  -webkit-animation: animatezoom 0.6s;
  animation: animatezoom 0.6s
}

@-webkit-keyframes animatezoom {
  from {-webkit-transform: scale(0)} 
  to {-webkit-transform: scale(1)}
}
  
@keyframes animatezoom {
  from {transform: scale(0)} 
  to {transform: scale(1)}
}

/* Change styles for span and cancel button on extra small screens */
@media screen and (max-width: 300px) {
  span.psw {
     display: block;
     float: none;
  }
  .cancelbtn {
     width: 100%;
  }
}
h1{
  padding-top: 5px;
    font-size: 40px;
    font-family: 'Amarante';
    color: rgb(76, 73, 82);
    float: left;

}
h1 span{
    font-family: 'Great Vibes';
    font-weight: 100;
}
h1 i{
    font-size: 25px;
    color: rgb(152, 152, 139);
}
.maindiv{
  margin-top: 120px;
  margin-left:550px;;
  border-radius:70px;
  width:400px;
  background: rgba(50, 50, 50, 0.2);
  position: absolute;
  z-index: 1;
}
video{
  margin-top: -15px;
  margin-left:-8px;
  position:absolute;
  z-index: 0; 
}
.input{
  border-radius:50px;
}
.white{
  color: white;
  text-align: center;
}
.white a{
  color: white;
}
.white a:hover{
  color: black;
}
.center{
  text-align: center;
}
.span{
  color: red;
  font-weight: bold;
  margin-top: 5px;
  margin-bottom: -10px;
}
.form{
margin-top: 60px; 
}
</style>
</head>
<body>
<div>
<video autoplay muted loop id="myvideo">
  <source class="embed-responsive-item" src="videos/vrr.mp4" type="video/mp4">
</video>
</div>
    <div class="container maindiv">
      <div class="row">
        <div class="card-body p-md-5 div">
        <a href="homepage.php"><h1>Tech<span>D</span>eals<i>.com</i></h1></div></a>
        
      <form action="action.php" method="post" class="form-group">
      </br> </br> </br> 
      
      <div class="form">
      <label class="white"><b>Username</b></label>
      <input type="text" class="form-control input" placeholder="Enter Username" name="uname" required>

      <label class="white"><b>Password</b></label>
      <input type="password" class="form-control input" placeholder="Enter Password" name="psw" required>
      <?php if(isset($_GET['msg'])){ ?>
        <div class='span'>
        <span id='invalid' class='white span'>Invalid Credentials!!! Please enter again.</span>
      </div>
        <?php } ?>       

      <label class="white"></br>
        <input type="checkbox"> Remember me
      </label>
      <input type="submit" name="login" value="Login" />
    <span class="psw white">Forgot <a href="uc.php">password?</a></span></br></br>
</form>
    </div>
    <div class="container center">
    <label class="white">Don't have an account? <a href="register.php">Create now</a></label></br>
      <a href="homepage.php"><button type="button" class="cancelbtn">Jump To Home</button></a>
      <button type="button" onclick="history.back();" class="cancelbtn">Back</button>
      </div>
    </div>
</div>
</div>

</body>
</html>
