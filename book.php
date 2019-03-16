	<?php
		session_start();
		require 'dbconfig/config.php';
	?>
	<!DOCTYPE html>
	
	<html>

	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width">
	  	<title>Delicious | Book a table</title>
	    <link rel="stylesheet" type="text/css" href="./css/script1.css">
		<script>
		function Validation(form3)
{
	var cdate=/^[0-9]{2}\/[0-9]{2}\/[0-9]{4}+$/;
	var cemail=/^[a-zA-Z0-9_]([\.-]?[a-zA-Z0-9_])*@[a-zA-Z0-9_]([\.-]?[a-zA-Z0-9_])*(\.[a-zA-Z]{2,3})+$/;
	var ctime=/^[0-9]{2}\:[0-9]{2}+$/;
	var cphone=/^[0-9]{10}+$/;
	var cpeople=/^[0-9]{2}+$/;
	var d = form3.datte.value;
	var e = form3.mail.value;
	var t = form3.timee.value;
	var ph = form3.phone.value;
	var np = form3.ppl.value;
	if(!d.match(cdate))
	{
		alert("Enter valid Date.");
		form3.date.focus();
		return false;
	}
	if(!e.match(cemail))
	{
		alert("Enter valid Email ID.");
		form3.mail.focus();
		return false;
	}
	if(!t.match(ctime))
	{
		alert("Enter valid Time.");
		form3.timee.focus();
		return false;
	}
	if(!ph.match(cphone))
	{
		alert("Enter valid Phone Number.");
		form3.ph.focus();
		return false;
	}
	if(!np.match(cpeople))
	{
		alert("maximum of only 99 people are possible.");
		form3.ppl.focus();
		return false;
	}
	else 
	{
		return true;
	}
}
</script>
	</head>

	<body>
	<header>
		<div class="container">
		<div id="branding">	
		<a><span class="highlight">Delicious</span></h2> 
		</div><br>
	</header>
	<br><br>
	
<!--banner-->
	<section id="banner">
	<div class="bg-color">
	<br><br><br>
	<!--Form-->
	<div id="main-wrapper">
	<div class="container">
	<form name="form3" method="post" onsubmit="return Validation(this)">
	<center><h2 class="header-h">Welcome <?php echo ['username.value'];?></h2>
	<label class="tlabel">Confirm your Login name:</label><br>
	<input class="belements" type="text" name="username" id="name" placeholder="Name" required><br>
	<label class="tlabel">Enter the date to be booked on:</label><br>
	<input class="belements" type="date" name="datte" id="date" placeholder="dd/mm/yyyy" required><br>
	<label class="tlabel">Enter your email:</label><br>
    <input class="belements" type="email" name="mail" id="email" placeholder="abc@xyz.com" required><br>
	<label class="tlabel">Enter the time when the booking is to be done:</label><br>
    <input class="belements" type="time" name="timee" id="time" placeholder="hh:mm" required><br>
	<label class="tlabel">Enter your phone number:</label><br>
    <input class="belements" type="text" name="phone" id="phone" placeholder="Phone" required><br>
	<label class="tlabel">Enter the number of people:</label><br>
    <input class="belements" type="text" name="ppl" id="people" placeholder="1-100" required><br>
	<label class="tlabel">Give your comment:</label><br>
    <textarea class="belements" name="message" rows="5" rows="3" placeholder="Please write something for us"></textarea>
	<input name="reg" type="submit" id="login" value="Register"><br>
	<a href="display.php"><input type="button" id="login" value="Display your bookings"></a><br>
	<?php
		if(isset($_POST['reg']))
			{
				echo'<script type="text/javascript"> alert("Confirm Booking?") </script>';
				$username=$_POST['username'];
				$date=$_POST['datte'];
				$email=$_POST['mail'];
				$time=$_POST['timee'];
				$phone=$_POST['phone'];
				$people=$_POST['ppl'];
				$message=$_POST['message'];
				$query="insert into booking values('$username','$date','$email','$time','$phone','$people','$message')";
					$query_run=mysqli_query($con,$query);
					if($query_run)
					{
						echo'<script type="text/javascript"> alert("Your table has been booked.") </script>';
					}
					else
					{
						echo'<script type="text/javascript"> alert("Error!") </script>';
					}
			}
	?>
    </section>
 <!--footer-->
	<footer class="footer">
		<div class="container">
			<div>
				<div>
					<div>
					<h4>Delicious</h4>
					<address>324 Ellte Road<br>Delhi, DL 110013</address>
						<div class="social-list">
							<a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
							<a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
						</div>
					<p>
						&copy; Delicious Theme. All Rights Reserved
					</p>
					</div>
				</div>
			</div>
		</div>
	</footer>
	
	</body>
	</html>
	
	
	
	
	
	
	
	
	