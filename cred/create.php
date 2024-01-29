<?php
    include "connection.php";
    if(isset($_POST['submit'])){
        $id=$_POST['id'];
        $name = $_POST['name'];
        $count = $_POST['count'];
        $price= $_POST['price'];
        $date=$_POST['date'];

        $q = " INSERT INTO `services` (`id` ,`name`, `count`, `price`,`date`) VALUES ('$id', '$name', '$count', '$price','$date' )";

        $query = mysqli_query($conn,$q);
    }
?>
<!DOCTYPE html>
<html>
<head>
 <title>Inventory Management System</title>

  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</head>
<body>
<nav class="navbar sticky-top navbar-expand-lg navbar-dark bg-dark ">
      <div class="container-fluid">
        <a class="navbar-brand" href="index.php">Inventory Management System</a>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav">
            <li class="nav-item mt-1">
              <a class="nav-link active" aria-current="page" style="font-size:20px;" href="index.php">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link mt-1" href="create.php"><span style="font-size:20px;color:white;">Add </span></a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
 <div class="col-lg-6 m-auto ">
 
 <form method="post">
 
 <br>
 <div class="card p-3" style="width:80%;">
 
 <div class="card-header bg-primary p-0 mb-1">
 </div>

 <label> ID: </label>
 <input type="number" name="id" class="form-control">

 <label> NAME: </label>
 <input type="text" name="name" class="form-control">

 <label>Count : </label>
 <input type="number" name="count" class="form-control"> 

 <label>PRICE: </label>
 <input type="number" name="price" class="form-control"> 

 <label>DATE: </label>
 <input type="date" name="date" class="form-control"> <br>

 <button class="btn btn-success" type="submit" name="submit"> Submit </button><br>
 <a class="btn btn-info" type="submit" name="cancel" href="index.php"> Cancel </a><br>

 </div>
 </form>
 </div>
</body>
</html>