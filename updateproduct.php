<?php
session_start();
include('database.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update product</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">

</head>
<body>
<script>
        function update(){
            document.getElementById("file").click();
         }
</script>
<style>
    .body{
        margin-left: 50px;
        margin-top: 20px;
        border-radius: 25px 0px 0px 25px;
        height: 700px; 
        float: left;
        z-index: 1;
        background: rgb( 26, 114, 114, 0.5);
        display: flex;
        position: absolute;
    }
    .thumbnail{
        padding-top: 50px;
        width: 450px; 
        border-radius: 0px 25px 25px 0px;
        height: 700px; 
        float: left;
        z-index: 1;
        background: rgb( 26, 114, 114, 0.5);
        position: absolute;
        margin-left: 818px;
        margin-top: 20px;
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
  background-size: cover;
  height: 900px;
  width: 1536px;
  margin-top: -130px;
  z-index: 0;
  position: fixed;
}
</style>
    <?php 
    $id = $_GET['id'];
    $query = "select * from products where id='$id'";
    $result = $conn->query($query);
    $data = $result->fetch_assoc();
    ?>
    <video autoplay muted loop id="myvideo">
  <source src="videos/upproduct.mp4" type="video/mp4">
</video>
<div class="col-xl-6 body">
    <div class="card-body p-md-5 text-black">
        <h3 class="mb-4">Update your "<?php echo $data['name'] ?>"</h3>
        <form method="post" action="action.php" enctype="multipart/form-data">
            <div class="col-md-6 mb-4">
                  <div class="form-outline">
                    <input value="<?php echo $data['name'] ?>" class="form-control form-control-lg" name="upname" required />
                    <label class="form-label">Name</label>
                  </div>

                  <div class="col-md-6 mb-4">
                  <div class="form-outline">
                    <input value="<?php echo $data['brand_name'] ?>" class="form-control form-control-lg" name="upbrand" required />
                    <label class="form-label">Brand Name</label>
                  </div>
                </div>

                <div class="form-outline mb-4">
                <textarea class="form-control form-control-lg" name="updesc" required><?php echo $data['description'] ?></textarea>
                <label class="form-label">DESCRIPTION</label>
              </div>

                <div class="row">
                <div class="col-md-6 mb-4">    
                <select class="select" name="uptype">
                    <option value="mobile" <?php if($data['type']=='mobile'){echo "selected";} ?>>Mobile</option>
                    <option value="laptop" <?php if($data['type']=='laptop'){echo "selected";} ?>>Laptop</option>
                    <option value="desktop" <?php if($data['type']=='desktop'){echo "selected";} ?>>Desktop</option>
                    <option value="earphone" <?php if($data['type']=='earphone'){echo "selected";} ?>>Earphones</option>
                </select>
                </div>
                </div>

                <div class="form-outline mb-4">
                <input value="<?php echo $data['price'] ?>" class="form-control form-control-lg" name="upprice" required />
                <label class="form-label">Price</label>
              </div>
<input type="hidden" name="id" value="<?php echo $data['id'] ?>"/>   
<div class="d-flex">
                <button type="submit" class="btn btn-success btn-lg ms-2"
                  style="background-color:hsl(210, 100%, 50%) " name="upproduct">Update Product</button>
              </div>
              <div class="d-flex justify-content-end ">
                <input type="submit" class="btn btn-success btn-lg ms-2"
                  style="background-color:hsl(210, 100%, 50%) " onclick="history.back();" name="back" value="Back"/>
                </div>
                </div>
                <input hidden type = "file" id = "file" name="uppicture"/>
              </form>
</div>
</div>
    <div class="p-md-5 thumbnail">
        <label>Click on the image to change the thumbnail of the image</label></br></br>
         <img src="products_images/<?php echo $data['picture'] ?>" class="img-thumbnail picture" onclick = "update()"/>
</div>
<style>
                .picture{
                    height: 400px;
                    width:350px;
                    object-fit: contain;
                }
                </style>



</body>
</html>