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
	<form>
	 <?php
			$name= $_SESSION['username'];
            $sql    = "SELECT * FROM booking WHERE username='$name'";
            $result = mysqli_query($sql) or die("Unable to connect");
            while ($row    = mysqli_fetch_array($result))
            {

                $name     = $row['username'];
                $dt     = $row['date'];
                $mail     = $row['email'];
                $t     = $row['time'];
                $ph     = $row['phone'];
                $ppl     = $row['people'];
                $msg = $row['message'];
            }
            ?>
			<form method="post">
            Name
            <input type="text" name= "Name" value= "<?php echo $row ['name']; ?> "size=10>
            Date
            <input type="text" name= "Username" value= "<?php echo $row ['dt']; ?> "size=10>
            Email
            <input type="text" name= "Password" value= "<?php echo $row ['mail']; ?>" size=17>
			Time
            <input type="text" name= "Password" value= "<?php echo $row ['t']; ?>" size=17>
			Phone Number
            <input type="text" name= "Password" value= "<?php echo $row ['ph']; ?>" size=17>
			Number of People
            <input type="text" name= "Password" value= "<?php echo $row ['ppl']; ?>" size=17>
            <input type="submit" name= "submit" value="Update">
        </form>
	<input action="index.php" name="delete" type="button" id="login" value="Delete Booking"></a><br>
	<input name="logout" type="button" id="login" value="Logout"></a><br>
	 <?php
			$name= $_SESSION['username'];
			if(isset($_POST['delete']))
            $sql    = "DELETE * FROM booking WHERE username='$name'";
            header('location:display.php');
			return true;
            ?>
	<?php
		if(isset($_POST['logout']))
		session_destroy();
		header('location:index.php');
	?>
	</form>
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