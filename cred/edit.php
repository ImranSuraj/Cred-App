<?php
  include "connection.php";
  $id="";
  $name="";
  $count="";
  $price="";
  $date="";

  $error="";
  $success="";

  if($_SERVER["REQUEST_METHOD"]=='GET'){
    if(!isset($_GET['id'])){
      
    }
    $id = $_GET['id'];
    $sql = "select * from services where id=$id";
    $result = $conn->query($sql);
    $row = $result->fetch_assoc();
    while(!$row){

    }
    $name=$row["name"];
    $count=$row["count"];
    $price=$row["price"];
    $date=$row["date"];

  }
  else{
    $id = $_POST["id"];
    $name=$_POST["name"];
    $count=$_POST["count"];
    $price=$_POST["price"];
    $date=$_POST["date"];


    $sql = "update services set name='$name', count='$count', price='$price' ,date='$date' where id='$id'";
    $result = $conn->query($sql);
    
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
<nav class="navbar navbar-expand-lg navbar-dark bg-dark" class="fw-bold">
      <div class="container-fluid">
        <a class="navbar-brand" href="index.php">Inventory Management System</a>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="index.php">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="create.php">Add New</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
 <div class="col-lg-6 m-auto">
 
 <form method="post">
 
 <br><br><div class="card p-3">

 <input type="hidden" name="id" value="<?php echo $id; ?>" class="form-control"> 
 <label> NAME: </label>
 <input type="text" name="name" value="<?php echo $name; ?>" class="form-control"> 

 <label>COUNT: </label>
 <input type="number" name="count" value="<?php echo $count; ?>" class="form-control"> 

 <label>PRICE: </label>
 <input type="number" name="price" value="<?php echo $price; ?>" class="form-control"> 

 <label>DATE: </label>
 <input type="date" name="date" value="<?php echo $date; ?>" class="form-control"> <br>

 <button class="btn btn-success" type="submit" name="submit"> Submit </button><br>
 <a class="btn btn-info" type="submit" name="cancel" href="index.php"> Cancel </a><br>

 </div>
 </form>
 </div>
</body>
</html>