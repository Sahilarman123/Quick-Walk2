
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Quick Walk Admin</title>
	<link rel="stylesheet" type="text/css" href="	https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="	https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js">
	<link rel="stylesheet" type="text/css" href="	https://use.fontawesome.com/releases/v5.7.2/css/all.css">
</head>
	<style>
		
		@import url('https://fonts.googleapis.com/css?family=Montserrat:400,700&display=swap');

* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    list-style: none;
    font-family: 'Montserrat', sans-serif
}

p {
    margin: 0px
}

body {
    display: flex;
    justify-content: center;
    align-items: center;
    min-height: 100vh;
    background-color: #060672;
    padding: 30px 10px
}

.container {
    max-width: 500px;
    background-color: #010152;
    margin: auto;
    color: white;
    border-radius: 10px;
    position: relative
}

.text-1 {
    position: absolute;
    top: -50px;
    left: -30%;
    width: 350px;
    height: 350px;
    clip-path: circle(50%);
    background-color: #2d4dda;
    z-index: -1
}

.text-2 {
    position: absolute;
    top: -30px;
    right: -10%;
    width: 100px;
    height: 100px;
    clip-path: circle(50%);
    background-color: #2d4dda
}

.text-3 {
    position: absolute;
    bottom: -50px;
    right: -10%;
    width: 150px;
    height: 150px;
    clip-path: circle(50%);
    background-color: #2d4dda;
    z-index: -1
}

.display-7 {
    font-size: 35px
}

small .btn.btn-primary {
    background-color: transparent;
    border: none;
    color: #26D0CE
}

.create .btn.btn-primary {
    width: 100%;
    padding: 0 20px;
    display: block;
    color: white;
    font-size: 14px;
    font-weight: 600;
    background-image: linear-gradient(to right, #1A2980 0%, #26D0CE 51%, #1A2980 100%);
    background-size: 200% auto;
    border: none;
    text-transform: capitalize;
    transition: 0.5s
}

.create .btn.btn-primary:hover {
    background-position: right center;
    color: #fff;
    text-decoration: none
}

.create .btn.btn-primary:hover .fas {
    transform: translateX(10px);
    transition: transform 0.5s ease
}

.form-control {
    color: white;
    text-transform: capitalize;
    background-color: #060672;
    border: 2px solid transparent;
    height: 50px;
    padding-left: 20px
}

.form-control:focus {
    color: white;
    background-color: #010152;
    border: 2px solid #2d4dda;
    box-shadow: none
}

.username {
    font-size: 14px
}

::placeholder {
    font-size: 12px;
    font-weight: 600
}

@media(max-width:930px) {
    .text-1 {
        display: none
    }

    .text-2 {
        z-index: -1
    }

    .display-7 {
        font-size: 30px
    }
}
	</style>
<body>
<div class="container pt-4 pb-5">
    <div class="text-1"></div>
    <div class="text-2"></div>
    <div class="text-3"></div>
    <form action="" method="post">
        <div class="text-center pt-3">
            <p class="display-7 fw-bold">Log<span class="ps-1">In</span></p> <small class="d-flex align-items-center justify-content-center mb-3">
               
            </small>
        </div>
        <div class="row px-md-4 px-1 m-0">
            
            <div class="col-12"> <input type="email" class="form-control mb-4" name="email" id="pass" placeholder="Email" required="required"> </div>
            <div class="col-12"> <input type="password" class="form-control mb-4" name="password" id="pass" placeholder="Password" required="required"> </div>
           
            <div class="col-12 create">
               <div class="btn btn-primary py-3 ">
                    <div class="d-flex align-items-center justify-content-between">
                        <p class=""><button name="submit" type="submit" style="background: none;color: white;border: none;"><b>Login</b></button></p> <span class="fas fa-arrow-right "></span>
                    </div>
                </div>
            </div>
            </div>
        </div>
    </form>
</div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
</body>
</html>
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "quick-walk";

$con = mysqli_connect($servername,$username,$password,$dbname);

if (isset($_POST['submit']))  {
	 $email = $_POST['email'];  
 $password = $_POST['password'];  
        
        $email = stripcslashes($email);  
        $password = stripcslashes($password);  
        $email = mysqli_real_escape_string($con, $email);  
        $password = mysqli_real_escape_string($con, $password);  
      
        $sql = "SELECT *FROM admin WHERE email = '$email' and password = '$password'";  
        $result = mysqli_query($con, $sql);  
        $row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
        $count = mysqli_num_rows($result);  
          
        if($count >= 1){  
           ?> <script>alert("Successfully");
               window.open('admin-index.php','_self');
</script>  
<?php
        }  
        else{  
            ?>

<script>alert("Unsuccessfully");
               window.open('admin-login.php','_self');
</script>

          <?php 
        }     
}
?>  