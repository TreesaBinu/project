	<!DOCTYPE html>
	
	<html>

	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width">
	  	<title>Delicious | Restaurant Web App</title>
	    <link rel="stylesheet" type="text/css" href="./css/script1.css">
	</head>

	<body>
	<header>
		<div class="container">
		<div id="branding">	
		<a href="#banner"><span class="highlight">Delicious</span></h2> 
		</div>
		<nav>
		<ul>
            <li><a href="#menu-list">Menu</a></li>
			<li><a href="#contact">Table Reservation</a></li>
		</nav>
		</div>
	</header>
	<br><br>
	
<!--banner-->
	<section id="banner">
	<div class="bg-color">
        <div class="container">
		<nav class="navbar">
    <span class="open-slide">
      <a href="#" onclick="openSlideMenu()">
        <svg width="30" height="30">
            <path d="M0,5 30,5" stroke="#fff" stroke-width="5"/>
            <path d="M0,14 30,14" stroke="#fff" stroke-width="5"/>
            <path d="M0,23 30,23" stroke="#fff" stroke-width="5"/>
        </svg>
      </a>
    </span>
  </nav>
  <div id="side-menu" class="side-nav">
    <a href="#" class="btn-close" onclick="closeSlideMenu()">&times;</a>
    <a class="navig" href="#about">About</a>
    <a class="navig" href="#event">Event</a>
    <a class="navig" href="#menu-list">Menu</a>
    <a class="navig" href="#contact">Book a table</a>
  </div>
			<br><br><br><br>
            <font style="font-size:80px;color:rgb(255,176,59);font-weight:bold;">Delicious</font>
            <h2>Food To fit your lifestyle & health.</h2>
            <p>Specialized in Indian Cuisine!!</p>
          </div>
        </div>
	</section>
	
	<!--about1-->
	<section id="about">
	<div class="container">
	<h1 class="header-h">Delicious Journey</h1>
        <p class="header-p">Award winning, generous, unpretentious and prepared to perfection.
        <br> If you're serious about food, a visit to the highly acclaimed Delicious Restaurant is a must.</p>
	<!--about2-->
	<div>
            <img src="img/res001.jpg" alt="" class="img-abt">
    </div>
	<div class="about-info">
        <h2 class="heading">Taste how much we care.</h2>
              <p>At Delicious, our mission is simple: enhance and educate the palate with the freshest ingredients and flavors, while surprising and exciting each guest with personal care and service!</p>
				<div class="details-list">
                <ul>
                  <li><i class="fa fa-check"></i>Experience the wide range of Indian Cuisines.</li>
                  <li><i class="fa fa-check"></i>Bring your Family to a friendly environment.</li>
                  <li><i class="fa fa-check"></i>Book our hall to make your celebrations more memorable.</li>
                  <li><i class="fa fa-check"></i>Your satisfaction is our happiness!</li>
                </ul>
				</div>
	</div>
	</div>
	</section>
			  
	<!--Event-->
	<section id="event">
    <div class="bg-color">
      <div class="container">
          <div style="padding:60px;">
            <h1 class="header-h">Up Coming events</h1>
            <p class="header-p" style="font-size:20px;color:white;">Decorations 100% complete here</p>
          </div>
          <divstyle="padding-bottom:60px;">
                <img src="img/res02.jpg" class="img-resp">
                <div class="content-holder">
                  <h2>Joyful party</h2>
                  <p>Tired at the weekend after work? Want to refresh yourself for the weekend? Gear up for the next best event coming up in our party hall. Yes, every saturday come to our party hall to witness live musical shows conducted by renowned musicians and musical band. </p>
                  <address style="font-size:15px;color:white;">
                              <strong>Place: </strong>
                              161 Radha Str, Chennai 600034
                              <br>
                              <strong>Time: </strong>
                              07:30pm
                            </address>
                  <a class="btn-read-more" href="events-details.html">Read more</a>
                </div>
              </div>
            </div>
  </section>
  
  <!-- menu -->
  <section id="menu-list" class="section-padding">
    <div class="container">
          <h1 class="header-h">Menu List</h1>
          <p class="header-p">Discover the wide range of food options available at our restaurant.<br>Present a treat to your taste-buds. </p>
    </div>
        <div id="myBtnContainer">
			<button class="btn active" onclick="filterSelection('all')"> Show all</button>
			<button class="btn" onclick="filterSelection('breakfast')">Breakfast</button>
			<button class="btn" onclick="filterSelection('lunchnch')">Lunch</button>
			<button class="btn" onclick="filterSelection('dinner')">Dinner</button>
		</div><br><br><br><br>
        <div class="container">
			<a href="#" class="filterDiv breakfast dinner">Idly, Sambar and Vada</a><br>
			<a href="#" class="filterDiv breakfast">Poori, Potato</a><br>
			<a href="#" class="filterDiv breakfast dinner">Chapati</a><br>
			<a href="#" class="filterDiv breakfast kunch dinner">Paratha</a><br>
			<a href="#" class="filterDiv breakfast dinner">Dosa, sambar and vada</a><br>
			<a href="#" class="filterDiv lunch dinner">Hyderabadi chicken Biriyani</a><br>
			<a href="#" class="filterDiv lunch">Meals Ready</a><br>
			<a href="#" class="filterDiv lunch">Thali meals</a><br>
			<a href="#" class="filterDiv breakfast dinner">Palak paneer</a><br>
			<a href="#" class="filterDiv lunch dinner">Prawn Biriyani</a><br>
			<a href="#" class="filterDiv breakfast dinner">Garlic butter naan</a><br>
			<a href="#" class="filterDiv lunch dinner">Crispy Tandoori</a><br>
			<a href="#" class="filterDiv breakfast lunch dinner">Dum Aloo</a><br>
			<a href="#" class="filterDiv breakfast lunch dinner">Butter Chicken</a><br>
			<a href="#" class="filterDiv breakfast lunch dinner">Paneer Butter masala</a><br>
			<a href="#" class="filterDiv breakfast lunch dinner">Chicken Tikka Masala</a><br>
			<a href="#" class="filterDiv dinner">Chicken 65</a><br>
			<a href="#" class="filterDiv breakfast dinner">Aloo Tikki</a><br>
			<a href="#" class="filterDiv lunch dinner">Kadai Mushroom Masala</a><br>
			<a href="#" class="filterDiv dinner">Grilled Chicken</a><br>
		</div>
  </section>
  
 <!-- contact -->
  <section id="contact" class="bg-13">
    <div class="container">
          <h1 class="header-h">Book Your table</h1>
          <p class="header-p">Pre-book your table at delicious to avoid fuss.
            <br>Have a tension free dining!</p>
		<div style="margin:0 40%;float:right;">
            <div class="media-body">
              <h4 class="dark-blue regular">Phone Numbers</h4>
              <p class="light-blue regular alt-p">+440 875369208 - <span class="contacts-sp">Phone Booking</span></p>
            </div>
            <div class="media-body">
              <h4 class="dark-blue regular">Opening Hours</h4>
              <p class="light-blue regular alt-p"> Monday to Friday 09.00 - 24:00</p>
              <p class="light-blue regular alt-p">
                Friday and Sunday 08:00 - 03.00
              </p>
            </div>
		</div>
	
	<!--Form-->
	<div id="main-wrapper">
	<div class="container">
	<form action="login.php" method="post">
	<input type="submit" action="login.php" id="login" value="Login"><br>
	</form>
	<form action="register.php" method="post">
	<input type="submit" action="register.php" id="register" value="Sign-up">
	</form>
	</div>	
	</div>		
	</section>
			

 <!--footer-->
	<footer class="footer
	<div class="container">
		<div>
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
		</div>
	</footer>
  
	<script>
		function openSlideMenu(){
      document.getElementById('side-menu').style.width = '250px';
      document.getElementById('main').style.marginLeft = '250px';
    }

    function closeSlideMenu(){
      document.getElementById('side-menu').style.width = '0';
      document.getElementById('main').style.marginLeft = '0';
    }
	
	filterSelection("all")
		function filterSelection(c) 
		{
			var x, i;
			x = document.getElementsByClassName("filterDiv");
			if (c == "all") c = "";
			for (i = 0; i < x.length; i++) 
			{
					w3RemoveClass(x[i], "show");
						if (x[i].className.indexOf(c) > -1) w3AddClass(x[i], "show");
			}
		}

	function w3AddClass(element, name) 
	{
		var i, arr1, arr2;
		arr1 = element.className.split(" ");
		arr2 = name.split(" ");
		for (i = 0; i < arr2.length; i++) {
		if (arr1.indexOf(arr2[i]) == -1) {element.className += " " + arr2[i];}
  }
}

function w3RemoveClass(element, name) {
  var i, arr1, arr2;
  arr1 = element.className.split(" ");
  arr2 = name.split(" ");
  for (i = 0; i < arr2.length; i++) {
    while (arr1.indexOf(arr2[i]) > -1) {
      arr1.splice(arr1.indexOf(arr2[i]), 1);     
    }
  }
  element.className = arr1.join(" ");
}

// Add active class to the current button (highlight it)
var btnContainer = document.getElementById("myBtnContainer");
var btns = btnContainer.getElementsByClassName("btn");
for (var i = 0; i < btns.length; i++) {
  btns[i].addEventListener("click", function(){
    var current = document.getElementsByClassName("active");
    current[0].className = current[0].className.replace(" active", "");
    this.className += " active";
  });
}
	</script>
	
	</body>
	</html>
        