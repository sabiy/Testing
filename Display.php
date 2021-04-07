
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
<div class="container">
<div class="col-lg-12">
<br><br>
<h1 class="text-warning text-center">Display Lead Generation</h1>
<br>
<table class="table table-striped table-hover table-bordered">

<tr class="bg-dark text-white text-center">

<th>Id</th>
<th>Name</th>
<th>Email</th>
<th>Mobile</th>
<th>Insert</th>
<th>Delete</th>
<th>Update</th>
<a href="register.php">Logout</a><br>


</tr>

 <?php

    include 'conn.php';

    $q = "select * from lead ";
    
    $query = mysqli_query($con,$q);

    while($res = mysqli_fetch_array($query)){

    

    ?>
<tr class="text-center">

<td> <?php echo $res['Id']; ?> </td>
<td> <?php echo $res['Name']; ?> </td>
<td> <?php echo $res['Email']; ?> </td>
<td> <?php echo $res['Mobile']; ?> </td>
<td> <button class="btn-primary btn"> <a href="insert.php?Id=<?php echo $res['Id']; ?>" class= "text-white">Insert</a> </button> </td>
<td> <button class="btn-primary btn"> <a href="update.php?Id=<?php echo $res['Id']; ?>" class= "text-white">Update</a> </button> </td>
<td> <button class="btn-danger btn"> <a href="delete.php?Id=<?php echo $res['Id']; ?>" class= "text-white">Delete</a> </button> </td>

</tr>
<?php
    }
    ?>

</table>
</div>
</div>






</body>
</html>