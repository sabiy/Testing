<?php

include 'conn.php';

$Id = $_GET['Id'];

$q = "DELETE FROM `lead` WHERE Id= $Id";

mysqli_query($con, $q);

header('location:Display.php');

?>
