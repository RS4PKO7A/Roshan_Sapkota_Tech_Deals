<?php 
session_start();
if(isset($_SESSION['ticket'])){
    header('location:dashboard.php');
}
?>
<!DOCTYPE html>
<head>
 <title>Tech Deals</title>
</head>
<body>

<style>
  .color{
    background: gray;
  }
    .bck{
        height: 755px;
        background: url(images/home1.jpg);
        background-repeat: no-repeat;
        background-size: contain;
        margin-bottom: -5px;
    }*/
    .content{
        margin-left:980px;
        padding-top: 250px;
        font-size: 60px;
        font-family: "Amaratne";
    }
    .content span{
        font-family: "Great Vibes";
        font-size: 90px;
    }
    .images{
      padding-left: 170px;
      height: 800px;
      margin-top: -10px;
    }
    .border-radius{
      border-radius: 25px;
    }

    </style>
    <?php include('navbar.php'); ?>
    <div class="bck img_thumbail">
</div>
<section id="home" class="home pt-5 overflow-hidden color">
    <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#" data-bs-slide-to="0" class="active"
    aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#" data-bs-slide-to="1" aria-label="Slide 2"></button>
</div>
  <div class="carousel-inner bg-white">
    <div class="carousel-item active">
      <div class="home-banner home-banner-1">
        <div class="home-banner-text color images">
          <img class='border-radius' src="images/laptops.webp"/>
       </div>
      </div>
    </div>
      <div class="carousel-item bg-white">
        <div class="home-banner home-banner-2">
         <div class="home-banner-text color images">
           <img class='border-radius' src="images/earphones.webp"/>
          </div>
        </div>
      </div>
    </div>
    <!-- <div class="carousel-item bg-white">
        <div class="home-banner home-banner-2">
         <div class="home-banner-text">
           <img src="images/desktop.jpg"/>
          </div>
        </div>
      </div>
    </div>
    <div class="carousel-item bg-white">
        <div class="home-banner home-banner-2">
         <div class="home-banner-text">
           <img src="images/earphones.jpg"/>
          </div>
        </div>
      </div>
    </div> -->
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true">
            <span class="ti-angle-left slider-icon"></span>
          </span>
            <span class="visually-hidden">Previous</span>
   </button>
          <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
           <span class="carousel-control-next-icon" aria-hidden="true">
           <span class="ti-angle-right slider-icon"></span>

           </span>
            <span class="visually-hidden">Next</span>
           </button>
  </div>
</body>
</html>