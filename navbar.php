
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Amarante&family=Great+Vibes&display=swap" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
     
<style>
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
.div{
  background:#b9b0ae;
}

</style> 
<nav class="navbar navbar-expand-lg div">
<?php if (isset($_SESSION['ticket'])){?>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="dashboard.php"><h1>Tech<span>D</span>eals<i>.com</i></h1></a>
        </li>
        <?php } 
        else { ?>
        <a class="nav-link active" aria-current="page" href="homepage.php"><h1>Tech<span>D</span>eals<i>.com</i></h1></a>
        <?php } ?>
  <div class="container-fluid">
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" 
    aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        
      <li class="nav-item">
          <a class="nav-link" href="myproducts.php">Products</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="aboutus.php">About Us</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="contact.php">Contact</a>
        </li>

        <?php
      if (isset($_SESSION['ticket'])){?>
        
        <li class="nav-item">
          <a class="nav-link" href="logout.php">Logout</a>
        </li>
      <?php } 
      else{ ?>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Join Us
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="login.php">Login</a></li>
            <li><a class="dropdown-item" href="register.php">Signup</a></li>
          </ul>
        </li><?php } ?>
      </ul>
      <form class="d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <a class="btn btn-outline-success" type="submit" href="uc.php">Search</a>
      </form>
    </div>
  </div>
</nav>