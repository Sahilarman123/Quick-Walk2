<?php
include('confirg.php');
?>


<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>
<div class="col-md-6 mobileCssDiv">
            <div class="Book_Appointment_form cardCss" data-aos="fade-up">
              <h3 data-aos="fade-up" >Book Appointment</h3>
               <form method="post">
                  <div class="form-input">
                     <input type="text" name="name" placeholder="Name" class="form-control" >
                  </div>
                    <div class="form-input">
                     <input type="text" name="phone" placeholder="Phone Number" class="form-control" >
                  </div>
                    <div class="form-input">
                     <input type="text" name="city" placeholder="Your City" class="form-control" >
                  </div>
                   <div class="form-input">
                    <textarea class="form-control" name="comment" placeholder="Your Message"></textarea>
                  </div>
                   <div class="form-input mb-0">
                   <button class="btn btn-primary w-100" type="submit" name="submit" data-aos="fade-up">Book an Appointment</button>
                  </div>
               </form>
            </div>            
         </div>
</body>
</html>