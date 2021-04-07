<?php
include 'conn.php';

if(isset($_POST['done'])){
    
    
    $Id =  $_POST['Id'];
    $name = $_POST['name'];
    $email = $_POST['email'];
    $mobile = $_POST['mobile'];
    $q = "INSERT INTO `lead`(`Id`, `Name`, `Email`, `Mobile`) VALUES ('$Id', '$name', '$email', '$mobile')";
    
    $query = mysqli_query($con,$q);

    header('location:Display.php');
}

?>




<!DOCTYPE html>
<html>
<head>
<title></title>
<meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<body>

 <div class="col-lg-4 m-auto"> 
 <form method="post">
 <br><br><div class="card">
         <div class="card-header bg-dark">
           <h1 class="text-white text-center">  Insert Lead </h1>
           </div><br>
           <label>ID: </label>
           <input type="id" name="Id"  class="form-control"><br>

           <label> Name: </label>
           <input type="text" name="name" class="form-control"><br>

           <lable> Email: </label>
           <input type="text" name="email"  class="form-control"><br>

           <label>Mobile: </label>
           <input type="mobile" name="mobile"  class="form-control"><br>

           <button class="btn btn-success" type="submit" name="done"> Submit </button><br>
           


 
 
 </div>
 </form>

 </div>
</body>
</html>