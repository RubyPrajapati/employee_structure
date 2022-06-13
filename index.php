<?php
include 'connection.php';
if(isset($submit1)){
  $query="INSERT INTO user(duration,price,classes,discount oercentage,offer name,status) VALUES('$dur','$price','$class','$dis','$offer','$status')";
  $result=mysqli_query($con,$query);
  if($result){
    echo"data insert";
  }
  else{
    die(mysqli_errno($con));
  }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Basic Deatils of structure</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container-fluid">
        <h1 class="font-weight-bold text-dark ">Hi, Welcome!</h1>
        </div>
        <header>
            <div class="main-content">
                <nav class="navbar navbar-expand-lg navbar-light bg-light">
                    <h3 class="navbar-nav-expand">BASIC</h3>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                      <span class="navbar-toggler-icon"></span>
                    </button>
                    <br>
                    <div class="collapse navbar-collapse" id="navbarNav">
                      <ul class="navbar-nav">
                        <li class="nav-item">
                          <a class="nav-link text-danger" href="#">Details </a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link text-danger" href="#">Plans</a>
                        </li>
                        <li class="nav-item ">
                          <a class="nav-link text-danger" href="#">Classes</a>
                        </li>
                      </ul>
                      </nav>
                      </div>
                    </header>
                      <div class="section">
                      <label class="font-weight-bold" name="dur">Duration:</label><br>
                      <label class="font-weight-bold" name="price">Price:</label><br>
                      <label class="font-weight-bold" name="class">Classes:</label><br>
                      <label class="font-weight-bold" name="dis">Discount Percentage:</label><br>
                      <label class="font-weight-bold" name="offer">Offer Name:</label><br>
                      <label class="font-weight-bold" name="status">Status:</label><br>
                      </div>
                      <button type="submit1" class="btn1 btn-primary">Edit</button>
                      <button type="submit" class="btn btn-success">Delete</button>
                      
                      
                      
</body>
</html>