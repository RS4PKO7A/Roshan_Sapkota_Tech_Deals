<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add product</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Amarante&family=Great+Vibes&display=swap" rel="stylesheet">

</head>
<body>
    
<style>
    
    .body{
        margin-top: 10px;
        margin-left: 400px;
        background: rgb(  21, 64, 83 , 0.5 );
        border-radius: 50px;
        height: 730px;
        z-index: 1;
        display: flex;
        position: relative;
    }
    label{
      color: white;
    }
    h1{
      color: white;
      font-family:"Amarante";
    }
  .title-style{
font-family: Georgia, 'Times New Roman', Times, serif;
font-weight: 700;
font-size: 20px;
color: hsl(52, 0%, 98%);
}
.title-quote{
font-family: Georgia, 'Times New Roman', Times, serif;
font-weight: 400;
color: hsl(52, 0%, 98%);
}
video{
  z-index: 0;
  position: absolute;
  margin-top: -50px;
  margin-left: -22px;
}

.span{
  color: red;
  font-weight: bold;
  margin-top: -25px;
  margin-bottom: 10px;
  font-size: 20px;
}
</style>
<video autoplay muted loop id="myvideo">
  <source src="videos/addproduct.mov" type="video/mp4">
</video>
          <div class="col-xl-6 body">
            <div class="card-body p-md-5 text-black">
              <h1 class="mb-4 text-uppercase">ADD PRODUCT</h1>
              <?php if(isset($_GET['msg'])){ ?>
        <div class='span'>
        <span id='invalid' class='white span'>Invalid input!!!.</span>
      </div>
        <?php } ?> 
              <form method="post" action="action.php" enctype="multipart/form-data">
              <div class="row">
              <div class="form-outline mb-4">
                <input type="file" class="form-control form-control-lg" name="addpicture" required/>
                <label class="form-label">Upload a picture</label>
              </div>
                <div class="col-md-6 mb-4">
                  <div class="form-outline">
                    <input type="text"class="form-control form-control-lg" name="addname" required />
                    <label class="form-label">Name</label>
                  </div>
                </div>
                <div class="col-md-6 mb-4">
                  <div class="form-outline">
                    <input type="text" class="form-control form-control-lg" name="addbrand" required />
                    <label class="form-label">Brand Name</label>
                  </div>
                </div>

              <div class="form-outline mb-4">
                <textarea class="form-control form-control-lg" name="adddesc" required></textarea>
                <label class="form-label">DESCRIPTION</label>
              </div>

              <div class="row">
                <div class="col-md-6 mb-4">    
                <select class="select" name="addtype" required>
                    <option hidden value="">Choose a type</option>
                    <option value="mobile">Mobile</option>
                    <option value="laptop">Laptop</option>
                    <option value="desktop">Desktop</option>
                    <option value="earphone">Earphones</option>
                </select>
                </div>
                </div>

              <div class="form-outline mb-4">
                <input type="text" class="form-control form-control-lg" placeholder="in US$" name="addprice" required />
                <label class="form-label">Price</label>
              </div>
              
              <div class="d-flex">
                <button type="submit" class="btn btn-success btn-lg ms-2"
                  style="background-color:hsl(210, 100%, 50%) " name="addproduct">Add Product</button>
                  <input type="submit" class="btn btn-success btn-lg ms-2"
                  style="background-color:hsl(210, 100%, 50%) " onclick="history.back();" name="back" value="Back"/>
              </div>
              <div class="d-flex justify-content-end">
                
                </div>
                </div>
              </form>
            </div>
          </div>
         
</body>
</html>
