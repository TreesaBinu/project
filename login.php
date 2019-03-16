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
		function formValidate()
{
	var cname=/^[a-zA-Z]+$/;
	var n = document.form2.username.value;
	if(n.length<=3)
	{
		alert("Name should contain atleast three characters.");
		form2.username.focus();
		return false;
	}
	if(!n.match(cname))
	{
		alert("Enter valid Name.");
		form2.username.focus();
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
	<br><br><br><br><br><br>
	
	
	<!--Form-->
	<div id="main-wrapper">
	<div class="container">
	<form name="form2" method="post" onsubmit="return formValidate()">
	<center><h2 class="header-h">Login</center></h2>
	<form action="index.php" method="post">
	<label class="tlabel">Username</label><br>
	<input name="username" type="text" class="inputvalues" placeholder="Type your user name"required><br>
	<label class="tlabel">Password</label><br>
	<input name="password" type="password" class="inputvalues" placeholder="Type your password" required><br>
	<input name="lbtn" type="submit" id="login" value="Login"></a><br>
	<a href="register.php"><input type="button" id="login" value="Sign-up"></a><br>
	<a href="index.php"><input type="button" id="login" value="Back"></a><br>
	</form>
	</div>
	</div>
	<?php
		if(isset($_POST['lbtn']))
			{
				$username=$_POST['username'];
				$password=$_POST['password'];
				$query="select * from user where username='$username' AND password='$password'";
				$query_run=mysqli_query($con,$query);
				if(mysqli_num_rows($query_run)>0)
				{
					//valid
					$_SESSION['username']=$username;
					header('location:book.php');
					return true;
				}
				else
				{
					echo'<script type="text/javascript"> alert("User does not exist......Sign up to continue...") </script>';
					return false;
				}
			}
	?>	
	</div>		</section>
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
        