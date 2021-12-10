
<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "quick-walk";

$con = mysqli_connect($servername,$username,$password,$dbname);
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title></title>
    <style type="text/css">
        
        td{
            padding: 10px;
            border: solid 2px black;
        }
        th{
            padding: 10px;
            border: solid 2px black;
        }
    </style>
</head>
<body>

    
<?php
$result = mysqli_query($con,"SELECT * FROM apointment ORDER BY id DESC");


?>
 <table width='60%' border=5 style="border-collapse: collapse;text-align: center;margin: auto;background: #fab91c;border: solid 2px black;">

    <tr>
        <th colspan="4"><b>Quick-Walk</b></th>
    </tr>
        <tr>
            <th> Name</th>
            <th> Phone No. </th>
            <th> City </th>
            <th> Comment </th>
        </tr>
        <?php 
     
        while($con = mysqli_fetch_array($result)) {         
            echo "<tr>";
            echo "<td>".$con['name']."</td>";
            echo "<td>".$con['phone']."</td>";
            echo "<td>".$con['city']."</td>";    
            echo "<td>".$con['comment']."</td>";        
        }
        ?>
    </table>

</body>
</html>