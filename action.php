<?php
session_start();
include('database.php');
?>

<?php
if(isset($_POST['register']))
{
    $firstname = $_POST["fname"];
    $lastname = ($_POST['lname']);
    $email = $_POST["email"];
    $password = md5($_POST["pass"]);
    $username = $_POST["username"];
    $city = $_POST["city"];
    $state = $_POST["state"];
    $zip = $_POST["zip"];

    $query = "select * from register where username='$username'"; 
    $result = $conn->query($query);
    $prevdata = $result->fetch_assoc();
    if($username==$prevdata['username']){
        header("location:register.php?existingserror=userexists");
    }
    else{
        $insert = "insert into register(id, first_name, last_name, email, password, username, city, state, zip)
        values (NULL, '$firstname', '$lastname', '$email', '$password', '$username', '$city', '$state', '$zip')";
        $conn->query($insert);
        header("location:homepage.php");
    }
}


if(isset($_POST['login']))
{
    $username = $_POST['uname'];
    $password = md5($_POST['psw']);
    $query = "select * from register where username = '$username' and password = '$password'"; 
    $result = $conn->query($query);
    $userdata = $result->fetch_assoc(); //fetches data from the database;
    $count = $result->num_rows; 
    if( $count == 0 )
    { 
       header("location:login.php?msg=invalid");
     }
    else{
        $_SESSION['ticket'] = 'okay';
        $_SESSION['userid'] = $userdata['id'];
        header('location:dashboard.php');
    }
}

if(isset($_POST['addproduct']))
{
    $name = $_POST['addname'];
    $type = $_POST['addtype'];
    $price = $_POST['addprice'];
    $desc = $_POST['adddesc'];
    $brand = $_POST['addbrand'];
    $addpicture = $_FILES['addpicture'] ['name'];
    $ext = pathinfo($_FILES['addpicture']['name'], PATHINFO_EXTENSION);
    $random = rand(1,1000000000);
    $newpicname = $random."_myproduct_.".$ext;
    $userid = $_SESSION['userid'];
    
    
    if($ext=="jpg" || $ext=="jpeg" || $ext=="png" || $ext=="raw" || $ext=="eps")
    {
    move_uploaded_file($_FILES['addpicture'] ['tmp_name'], "products_images/$newpicname");

    $query = "insert into products(picture, name, type, description, brand_name, price, userid)
    values ( '$newpicname', '$name', '$type', '$desc','$brand', '$price', '$userid' )";

    $result = $conn->query($query);

    header("location:myproducts.php");
    }
    else{
        header("location:addproduct.php?msg=invalid");
    }

}

if(isset($_POST['upproduct']))
{
    $name = $_POST['upname'];
    $type = $_POST['uptype'];
    $price = $_POST['upprice'];
    $desc = $_POST['updesc'];
    $brand = $_POST['upbrand'];
    $id = $_POST['id'];
    $uppicture = $_FILES['uppicture'] ['name'];
    $ext = pathinfo($_FILES['uppicture']['name'], PATHINFO_EXTENSION);
    $random = rand(1,1000000000);
    $newpicname = $random."_myproduct_.".$ext;

    if($ext=="jpg" || $ext=="jpeg" || $ext=="png" || $ext=="raw" || $ext=="eps")
    {
    move_uploaded_file($_FILES['uppicture'] ['tmp_name'], "products_images/$newpicname");

    $query = " update products set name='$name', type='$type', price='$price', description='$desc', brand_name='$brand', picture='$newpicname' where id='$id' ";
    $conn->query($query);
    }
    else{
        echo "Invalid input";
    }
    header("location:myproducts.php");
}


if(isset($_GET['productid'])){

    $id=$_GET['productid'];
    $query = "delete from products where id='$id'";
    $conn->query($query);
    header("location:myproducts.php");
}

if(isset($_POST['feedback']))
{
    $comment =$_POST['comment'];
    $prid = $_POST['id'];
    $usr = $_POST['cmtname'];
$pp = "select * from register where id=$usr";
$run = $conn->query($pp);
$userinfo = $run->fetch_assoc();
$name = $userinfo['first_name'];

$insert = "insert into feedbacks(name, comment, productid)
values('$name', '$comment', '$prid')  ";
$result = $conn->query($insert);
header("location:myproducts.php");
}





?>
