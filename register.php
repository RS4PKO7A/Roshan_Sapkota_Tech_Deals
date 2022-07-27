
<!DOCTYPE html>
<head>
<link type="text/css" rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Amarante&family=Great+Vibes&display=swap" rel="stylesheet">
  <title>Sign Up</title>
</head>
<body>
<style>
    .alignment{
        margin-left: 30px
    }
    .signup{
      float: left;
      width: 1000px;
    }
    
h1{
  padding-top: 5px;
    font-size: 60px;
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
.div{
  background:#b9b0ae;
}
h2{
  font-family: "Great Vibes";
  font-size: 50px;
}
.signup{
  width: 1200px;
  border-radius: 50px;
  padding: 30px 0px 10px 400px;
  margin-left: 200px;
  background: rgb(  210, 237, 238 , 0.3 );
  position: absolute;
}
.video{
width: 1700px;
margin-left: -164px;
margin-bottom: -5px; 
}
.a a{
  color: white;
}
.a a:hover{
  color: black;
}
.span{
  color: red;
  float:right;
  margin-top: -10px;
  padding-right: 290px; 
}
</style>



<div class="signup">
  
  <a href="homepage.php"><h1>Tech<span>D</span>eals<i>.com</i></h1></a>
  <form class=' alignment form-group' action="action.php" method="post">
    <div class="form-row">
      
      <div class="col-md-4 mb-3">
      <h2>Sign Up</h2>
      
  
        <label>First name</label>
        <input class="form-control" name="fname" placeholder="First name" required>
      </div>
      <div class="col-md-4 mb-3">
        <label>Last name</label>
        <input class="form-control" name="lname" placeholder="Last name" required>
      </div>
      <div class="col-md-4 mb-3">
        <label>Email</label>
        <input type="email" class="form-control" name="email" placeholder="Email" required>
      </div>
      <div class="col-md-4 mb-3">
        <label>Password</label>
        <input type="password" class="form-control" name="pass" placeholder="Password" required>
      </div>
      <div class="col-md-3 mb-3">
        <label>Username</label>
        <div class="input-group">
          <div class="input-group-prepend">
            <span class="input-group-text">@</span>
          </div>  
          <input class="form-control" name="username" placeholder="Username" required>
        </div>
      </div>
    </div>
    <?php if(isset($_GET['existingserror'])){ ?>
        <div class='span'>
        <span id='userexists' class='white span'>Username Exists</span>
      </div>
        <?php } ?> 
    <div class="form-row">
      <div class="col-md-3 mb-3">
        <label>City</label>
        <input class="form-control" name="city" placeholder="City" required>
      </div>
      <div class="col-md-3 mb-3">
        <label>State</label>
        <input class="form-control" name="state" placeholder="State" required>
      </div>
      <div class="col-md-3 mb-3">
        <label>Zip</label>
        <input class="form-control" name="zip" placeholder="Zip" required>
      </div>
    </div>
    <div class="form-group">
      <div class="form-check">
        <input class="form-check-input" type="checkbox" value="" required>
        <label class="form-check-label a">
          <a href="termscon.php" target="_blank">Agree to terms and conditions</a>
        </label>
      </div>
    </div>
    <input type="submit" class="btn btn-primary" name="register" value="SignUp"/>
    
    <input type="submit" class="btn btn-primary" onclick="history.back();" name="back" value="Back"/>
  </br></br>
   <label> Already have an account?</br>  
   <a href="login.php">Login</a>
   </label>
      
  </br>
  </form>
  </div>
  <div >
  <video autoplay muted loop id="myvideo" class="video" >
  <source src="videos/smartphone.mp4" type="video/mp4">
  </video>
</div>
</body>
</html>
