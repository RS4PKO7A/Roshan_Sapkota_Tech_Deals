<?php
session_start();
include('database.php') ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Products</title>
</head>
<body>
    <?php include('navbar.php');
    ?>
    
    <div class="container">
        <div class="row">
            <?php 
      
            

            $qq = "select * from products";
            $result = $conn->query($qq);
            while($data = $result->fetch_assoc()){
                ?>
            <div class="col-md-4">
            <style>
                .picture{
                    height: 400px;
                    width:350px;
                    object-fit: contain;
                    border-radius: 25px;
                }
                img{
                    max-width: 100%;
                    max-height: 100%;
                    display: block;
                }
                </style>
            <?php 
            if(isset($_SESSION['ticket'])&& $_SESSION['userid']==$data['userid']){ ?>

            <p><div class="picture"><a href="updateproduct.php?id=<?php echo $data['id']; ?>"><img src="products_images/<?php echo $data['picture'] ?>" class="img-thumbnail" /></p></a>
            </div><?php }
            else { ?>
            <p><div class="picture"><img src="products_images/<?php echo $data['picture'] ?>" class="img-thumbnail" /></p></div><?php } ?><b>
            <h3><?php echo $data['name'] ?></h3></b>
            <?php
            $userid = $data['userid'];
            $dd = "select * from register where id = $userid ";
            $us = $conn -> query($dd);
            $usrd = $us->fetch_assoc();

            ?>
            <p class="left"><i>-listed by:  <u><?php echo $usrd['first_name']; echo $usrd['last_name']?></u></i><p>
            <b><p>Brand: <?php echo $data['brand_name'] ?></p>
            <p>Type : <?php echo $data['type'] ?> </p>
            <p>Description : <?php echo $data['description'] ?></p>
            <p>Price : $<?php echo $data['price'] ?></p>
            </b>
            
            <?php 
 $proid =  $data['id'];
$pp = "select * from feedbacks where productid='$proid'";
$ans = $conn -> query($pp);

            if(isset($_SESSION['ticket']) && $_SESSION['userid']==$data['userid']){ ?>
            <b><a href="action.php?productid=<?php echo $data ['id']?>" name="delete">Delete</a></b></br>
            <?php ?><b>Feedbacks:</br></b><?php while($prdata = $ans->fetch_assoc()){
              ?>
            <b> By: <i><?php echo $prdata['name']; ?></b> - <?php echo $prdata['comment']; ?></i></br>
            
            <?php 
        } ?> 
        <?php } 
            elseif(isset($_SESSION['ticket']) && $_SESSION['userid']!=$data['userid']){?>
            <?php ?><b>Feedbacks:</br></b><?php while($prdata = $ans->fetch_assoc()){
              ?>
            <b> By: <i><?php echo $prdata['name']; ?></b> - <?php echo $prdata['comment']; ?></i></br><?php } ?>
                <form method="post" action="action.php">
        <label><b>Give your feedback to this item!</b></label></br>
        <input value="<?php echo $_SESSION['userid'] ?>" name="cmtname" hidden/>
        <input placeholder="Your feedback" name="comment"/>
        <input hidden name="id" value="<?php echo $data['id']?>"/>
        <input type="submit" value="Post" name="feedback"/>
        </br></br>
        </form>
           <?php }
            else{ ?><b> Feedbacks:</b></br><?php while($prdata = $ans->fetch_assoc()) {; ?>
                <b>By:<i> <?php echo $prdata['name']; ?></b> - <?php echo $prdata['comment']; 
            
             
             
             ?></i></br><?php } } ?>
           </br> </div>
            <?php } ?>
            <style>
                input{
                    border-radius: 10px;
                }
                .left{
                    float:right;
                }
                </style>

            
        </div>
    </div>

</body>
</html>