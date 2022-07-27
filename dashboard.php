<?php
session_start();
if(!isset($_SESSION['ticket'])){
    header('location:login.php');
}
$userid = $_SESSION['userid'];
include('database.php');
$query = "select * from register where id = '$userid'" ;
$result = $conn->query($query);
$datauser = $result->fetch_assoc();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
     integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>
    <style>
        body{
            background: url('images/dashboard1.jpg') no-repeat;
            background-size: cover;
        }
        .content{
            color: white;
            margin-left:560px;
            margin-top: 250px;
        }
        .button{
            padding-left: 560px;
        }
        </style>
    <?php
    include('navbar.php')
    ?>   
     <h3 class="content">Hello, <?php echo $datauser['first_name'] ?>! How are you today..</h3>
    <div class="container">
        <div class="row">
            <div class="col-md-3">
    </br><div class="button"><a href="addproduct.php" class="btn btn-success btn-lg ms-2"style="background-color:hsl(210, 100%, 50%) ">Add a product</a></br></br></div>
            </div>
        
        
        
        
        
        
        
        
        
</div>
</div>



</body>
</html>