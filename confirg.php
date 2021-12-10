<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "quick-walk";

$con = mysqli_connect($servername,$username,$password,$dbname);

if (isset($_POST['submit'])) {
  $name = $_POST['name'];
  $phone = $_POST['phone'];
  $city = $_POST['city'];
  $comment = $_POST['comment'];

  $sql = mysqli_query($con,"INSERT INTO apointment(name,phone,city,comment) VALUES ('$name','$phone','$city','$comment')");

  if ($sql) {
    ?> <script>alert("Successfully");
               window.open('index.php','_self');
</script>
<?php
  }

  else{
          ?>

<script>alert("Unsuccessfully");
               window.open('index.php','_self');
</script>

          <?php
  }
}
?>