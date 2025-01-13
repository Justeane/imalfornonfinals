<?php

$Id = $_GET['ID'];


$connection = mysqli_connect("localhost","root","","im_alfornondb");
     
     $sql = "DELETE FROM haircut WHERE Id= $Id";
     
     $result = $connection->query($sql);
     
     $connection->close();
     
     header("location:index.php");
