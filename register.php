	<?php
		require 'dbconfig/config.php';
	?>
	<!DOCTYPE html>
	
	<html>

	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width">
	  	<title>Delicious | Login page</title>
	    <link rel="stylesheet" type="text/css" href="./css/script1.css">
		<script>
		function formValidation()
{
	var cname=/^[a-zA-Z]+$/;
	var n = document.form1.name.value;
	var p = document.form1.password.value;
	if(n.length<=3)
	{
		alert("Enter atleast three characters for name.");
		form1.name.focus();
		return false;
	}
	if(p.length<=8)
	{
		alert("Enter atleast eight characters for password.");
		form1.name.focus();
		return false;
	}
	if(!n.match(cname))
	{
		alert("Enter valid Name.");
		form1.name.focus();
		return false;
	}
	else 
	{
		return true;
	}
}		</script>
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
	<br><br><br><br>
	
	
	<!--Form-->
	<div id="main-wrapper">
	<div class="container">
	<form name="form1" method="post" onsubmit="return formValidation()">
	<center><h2 class="header-h">Sign-up</center></h2>
	<form action="index.php" method="post">
	<label class="tlabel">Username</label><br>
	<input id="name" name="username" type="text" class="inputvalues" placeholder="Type your user name" required><br>
	<label class="tlabel">Password</label><br>
	<input id="pwd" name="password" type="password" class="inputvalues" placeholder="Type your password" required><br>
	<label class="tlabel">Re-enter Password</label><br>
	<input id="cpwd" name="cpassword" type="password" class="inputvalues" placeholder="Type your password" required><br>
	<input name="sbtn" type="submit" action="login.php" id="login" value="Sign-up"><br>
	<a href="login.php"><input type="button" id="login" value="Login"></a><br>
	<a href="index.php"><input type="button" id="login" value="Back"></a><br>
	</form>
	<?php
		if(isset($_POST['sbtn']))
		{
			echo'<script type="text/javascript"> alert("Confirm Sign-up?") </script>';
			$username=$_POST['username'];
			$password=$_POST['password'];
			$cpassword=$_POST['cpassword'];
			if($password==$cpassword)
			{
				$query="select * from user WHERE username='$username'";				
				$query_run=mysqli_query($con,$query);
				if(mysqli_num_rows($query_run)>0)
				{
					echo'<script type="text/javascript"> alert("User already exists.....Try another user name.") </script>';
				}
				else
				{
					$query="insert into user values('$username','$password')";
					$query_run=mysqli_query($con,$query);
					if($query_run)
					{
						echo'<script type="text/javascript"> alert("User registered....Go to login page to login.") </script>';
					}
					else
					{
						echo'<script type="text/javascript"> alert("Error!") </script>';
					}
				}
				return false;
			}
			else
			{
				echo'<script type="text/javascript"> alert("Password and confirm password does not match.") </script>';
			}
		}
	?>
	</div>
	</div>		
	</div>		
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
	<script>
	
	</script>
	</body>
	</html>