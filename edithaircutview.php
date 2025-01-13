<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <link href="style.css" rel="stylesheet" type="text/css">
    </head>
    <body>  
  <?php
       $Id= $_GET['ID'];
       
        $connection = mysqli_connect("localhost","root","","im_alfornondb");
        $sql = "SELECT * FROM haircut WHERE Id=$Id";
       $result = $connection->query($sql);
       $row = mysqli_fetch_assoc($result);
         
 ?>
       <form action="edithaircut.php" method="POST">
           <input type="hidden" id="Id" name="Id" value="<?php echo $row['ID'];?>">
           <label for="cut">CUT</label>
           <input type="text" id="cut" name="cut" placeholder="cut" value="<?php echo $row['Cut'];  ?>">
           <label for="size">SIZE</label>
           <input type="text" id="size" name="size" placeholder="size" value="<?php echo $row['Size'];  ?>">
            <label for="color">COLOR</label>
              <input type="text" id="color" name="color" placeholder="color" value="<?php echo $row['Color'];  ?>">
            <label for="price">PRICE</label>
            <input type="text" id="price" name="price" placeholder="price" value="<?php echo $row['Price'];  ?>">
            <input type="submit" value="Edit" onclick="return confirm()">
          </form>
    </body>
</html>
