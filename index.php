<?php
$insert=false;
if(isset($_POST['name'])){
$server="localhost";
$username= "root";
$pass="";
$connect = mysqli_connect($server,$username,$pass);
if(!$connect){
    die("connection to database failed due to ".mysqli_connect_error());
}
$name=$_POST['name'];
$number=$_POST['number'];
$identity=$_POST['identity'];
$age=$_POST['age'];
$email=$_POST['email'];
$sql="INSERT INTO `trip`.`trip` ( `Name`, `Mobile`, `Aadhar`, `age`, `Email`, `Date`)
 VALUES ( '$name', '$number', '$identity', '$age', '$email', current_timestamp())";
 if($connect->query($sql)==true){
    $insert==true;
 }
 $connect->close();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Travel Form</title>
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Shadows+Into+Light& display=swap" rel="stylesheet">
</head>
<body>
  <img class="bg" src="bg.avif" alt="Malldives">
  <div class="container">
    <h1>Welcome!!!!!</h1>
    <p>Submit this form to show your Willingness</p>
    <?php 
    if($insert==true){
    echo " <p>Form Submitted Succesfully</p>";
    }
    ?>
    
   
    <form action="index.php" method="post">
      <input type="text" name="name" id="name" placeholder="Enter your Name">
      <input type="text" name="number" id="number" placeholder="Enter your Mobile Number">
      <input type="text" name="identity" id="identity" placeholder="Enter your Adhaar Number">
      <input type="text" name="age" id="age" placeholder="Enter your age">
      <input type="text" name="email" id="email" placeholder="Enter your EmailId">
      <button class="btn">Submit</button>

    </form>
  </div>
  <script src="index.js"></script> 
</body>
</html>