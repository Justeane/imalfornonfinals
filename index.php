<!DOCTYPE html>
<!--
Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
Click nbfs://nbhost/SystemFileSystem/Templates/Project/PHP/PHPProject.php to edit this template
-->
<html>
        </table>
    </body>
</html> 
    <head>
        <meta charset="UTF-8">
        <title></title>
        <link href="style.css" rel="stylesheet" type="text/css">
    </head>
    <body>  
       <form action="addhaircut.php">
           <label for='cut'>CUT</label>
            <input type="text" id="cut" name="cut">
            <label for='size'>SIZE</label>
            <input type="text" id="size" name="size">
            <label for='color'>COLOR</label>
            <input type="text" id="color" name="color">
             <label for='price'>PRICE</label>
            <input type="text" id="price" name="price">
            <input type="submit" value="ADD" name="addhaircut"/>
            </form>
        <table>
            <tr>
                <th>ID</th>
                <th>CUT</th>
                <th>SIZE</th>
                <th>COLOR</th>
                <th>PRICE</th>
                <th>ACTION</th>
            </tr>
       
     <?php
        $connection = mysqli_connect("localhost","root","","im_alfornondb");
        $sql = "SELECT * FROM haircut";
       
       $result = $connection->query($sql);
     
        while($row = mysqli_fetch_assoc($result)){
            echo "<tr>";
            echo "<td>".$row['ID']."</td>";
            echo "<td>".$row['Cut']."</td>";
            echo "<td>".$row['Size']."</td> ";
            echo "<td>".$row['Color']."</td> ";
            echo "<td>".$row['Price']."</td> ";
            echo "<td>"
            . "<a class=\"btn\"href=\"edithaircutview.php?ID=".$row['ID']."\">Edit</a>"
                    . "<a class=\"btn\"href=\"delete.php?ID=".$row['ID']."\" onclick=\"return confirm('Delete im_alfornondb?')\">Delete</a>"
                    . "</td> ";
            echo "</tr>";
        }
       $connection->close();
     
     ?>
        </table>
    </body>
</html>
