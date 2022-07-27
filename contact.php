<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Amarante&family=Great+Vibes&display=swap" rel="stylesheet">

<style>
body {
  font-family: Arial, Helvetica, sans-serif;
}

* {
  box-sizing: border-box;
}

/* Style inputs */
input[type=text], select, textarea {
  width: 100%;
  padding: 12px;
  border: 1px solid #ccc;
  margin-top: 6px;
  margin-bottom: 16px;
  resize: vertical;
}

input[type=submit] {
  background-color: #04AA6D;
  color: white;
  padding: 12px 20px;
  border: none;
  cursor: pointer;
}

input[type=submit]:hover {
  background-color: #45a049;
}

/* Style the container/contact section */
.container {
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 10px;
}

/* Create two columns that float next to eachother */
.column {
  float: left;
  width: 50%;
  margin-top: 6px;
  padding: 20px;
}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}

/* Responsive layout - when the screen is less than 600px wide, make the two columns stack on top of each other instead of next to each other */
@media screen and (max-width: 600px) {
  .column, input[type=submit] {
    width: 100%;
    margin-top: 0;
  }
}
a{
  text-decoration:none;
    font-size: 60px;
    font-family: 'Amarante';
    color: rgb(76, 73, 82);
}
h1{
    font-size: 60px;
    font-family: 'Amarante';
    color: rgb(76, 73, 82);

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
</head>
<body>

<div class="container">
  <div>
  <a href="homepage.php"><h1 class="techdeals">Tech<span>D</span>eals<i>.com</i></h1></a>

    <h2>Contact Us</h2>
    <p>Swing by for a cup of coffee, or leave us a message:</p>
  </div>
  <div class="row">
    <div class="column">
      <form action="/action_page.php">
        <label for="fname">First Name</label>
        <input type="text" id="fname" name="firstname" placeholder="Your name..">
        <label for="lname">Last Name</label>
        <input type="text" id="lname" name="lastname" placeholder="Your last name..">
        <label for="country">Cityy</label>
        <input type="text" id="ct" name="city" placeholder="Your City..">
        <label for="subject">Subject</label>
        <textarea id="subject" name="subject" placeholder="Write something.." style="height:170px"></textarea>
      </form>
        <a href="uc.php" ><input type="submit" value="Submit"></a>
      <input type="submit" onclick="history.back();" class="cancelbtn" value="Back"/>
    </div>
  </div>
</div>

</body>
</html>
