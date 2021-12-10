
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
		}
	</style>
</head>
<body>

	
<?php
$result = mysqli_query($con,"SELECT * FROM apointment ORDER BY id DESC");


?>
 <table width='60%' border=1 style="border-collapse: collapse;text-align: center;margin: auto;background: #fab91c;">

 	<tr>
 		<th colspan="4">Quick-Walk</th>
 	</tr>
        <tr>
            <td> Name</td>
            <td> Phone No. </td>
            <td> City </td>
            <td> Comment </td>
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