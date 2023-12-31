
<!DOCTYPE html>
<html>

<head>
    <title>&star;DESTIGNIFY</title>
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Calibri">
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Tangerine">
	<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link href="style.css" rel="stylesheet" type="text/css">
	<meta charset="UTF-8">
	<meta name="description" content="Free Web tutorials">
	<meta name="keywords" content="HTML, CSS, JavaScript">
	<meta name="author" content="Urveesh">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	
	<script>
		/* Navbar Scripts */
	// jQuery to collapse the navbar on scroll
    $(window).on('scroll load', function() {
		if ($(".list").offset().top > 20) {
			$(".fixed-top").addClass("top-nav-collapse");
		} else {
			$(".fixed-top").removeClass("top-nav-collapse");
		}
    });
	</script>
</head>

<body>
    
	<div class="list">
            
			<h3><i class="material-icons">handshake</i>DESTIGNIFY</h3>
			
			<ul>
                <li><a href="#big-size" >HOME</a></li>
                <li><a href="#home" >ABOUT</a></li>
                <li><a href="#form" >REGISTER</a></li>
                <li><a href="#section" >DESTINATIONS</a></li>
            </ul><!--end of list tag-->
    </div><!--end of list class-->
	<div class="big-size" id="big-size">
		<div class="span">
			<span>Hello !! There </span>
		</div>
	</div><!--end of big-size class-->
	
	<div class="container2">
		<div class="card1">
			<p>intro</p>
			<div>We Offer Some Of The Best Destinations For explore experience for our clients</div>
		</div><!--end of card1-->
		
		<div class="card2">
			<div>
				<img src="images/intro-office.jpg" alt="an img">
			</div>
		</div><!--end of card 2-->
	</div><!--end of container2-->
	
	<div class ="container3">
		<div class="container3-inside">
			<div class="material">
				
			</div>
		</div>
	</div>
	
	
	<div class="theory">
		<p>Tourism is vital for the success of many economies around the world. There are several benefits of tourism on host destinations.  Tourism boosts the revenue of the economy, creates thousands of jobs, develops the infrastructures of a country, and plants a sense of cultural exchange between foreigners and citizens.
			The number of jobs created by tourism in many different areas is significant. These jobs are not only a part of the tourism sector but may also include the agricultural sector, communication sector, health sector, and the educational sector. Many tourists travel to experience the hosting destination’s culture, different traditions, and gastronomy. This is very profitable to local restaurants, shopping centers, and stores. Melbourne, Australia’s population is greatly affected by tourism. It has a population of around 4 million people and around 22,000 citizens are employed by the tourism sector only.
			</p>
		<img src="images/55748.jpg" alt="An image">
		
	</div><!--end of theory class-->
	
	
	 <div class="bg-img1"> 
		<div class="paragraph">
			<p>An adventure is an exciting experience or undertaking that is typically bold, sometimes risky.
			Adventures may be activities with danger such as traveling, exploring, skydiving, mountain climbing, scuba diving, river rafting, or other extreme sports.</p>
		</div><!--end of paragraph class-->
	 </div><!--end of bg-img1 class-->
	
	<section id="section">
		<div class="description">
			<h2>Popular destinations</h2>
			<p>Here are few of them</p>
		</div><!--end of description class-->
		
		<div class="container" id="destinations">
			<div class="card">
				
				<img src="images/rajasthan.jpg" alt="An image" height="240px" width="240px">
				<ul style="list-style-type:square">
				<li style="display:inline;color:#16A085;">Rajasthan</li></ul>
				<p>A good traveller has no fixed plans and is not intent on arriving</p>
				<br><br>
				<a href="" target="">Visit</a>
			</div><!--end of card class-->
			
			<div class="card">
				<img src="images/gujarat 700x500.jpg" alt="Image 2" height="600px" width="240px" >
				<ul style="list-style-type:square">
				<li style="display:inline;color:#16A085;">Gujarat</li></ul>
				<p>A good traveller has no fixed plans and is not intent on arriving</p>
				<br><br>
				<a href="" target="">Visit</a>
			</div><!--end of card class-->
			
			<div class="card">
				<img src="images/jk700x500.jpg" height="240px" width="240px" alt="Image 3">
				<ul style="list-style-type:square">
				<li style="display:inline;color:#16A085;">Srinagar</li></ul>
				<p>A good traveller has no fixed plans and is not intent on arriving</p>
				<br><br>
				<a href="" target="">Visit</a>
			</div><!--end of card class-->
			
			<div class="card">
				<img src="images/kullumanali700x500.jpg" alt="Image 4">
				<ul style="list-style-type:square">
				<li style="display:inline;color:#16A085;">Kullu Manali</li></ul>
				<p>A good traveller has no fixed plans and is not intent on arriving</p>
				<br><br>
				<a href="" target="">Visit</a>
			</div><!--end of card class-->
		
		</div><!--end of container class-->
	
	</section><!--end of section tag-->
	
	<div class="bg-img2">
		<div>
			"Jobs fill your pockets, adventures fill your soul.”
			“Remember that happiness is a way of travel, not a destination.”
			“The world is a book and those who do not travel read only one page.”
		</div>
	</div> 
	
	
	<div class="form" id="form">
		<div class="header">
			<p>Contact us</p><br>
			<h2>Get in touch with us</h2>
			<!-- <p>You can stop by our office for a cup of coffee and just use the contact form below for any questions and inquiries</p> -->
			
		</div><!--end of header class-->
		
		<div class="form-id">
			
			<div id="div">
				 <div class="img"><img src="images/user-logo.jpg" alt="logo"></div>
				<!--<p><i class="material-icons">home</i>Address : XYZ India</p> -->
			</div>
			
			<form action="process.php" method="post" >
				<label>Name</label>
				<input type="text" name="fullname" class="input-fields" placeholder="Enter your name" required>
				<br>
				<label>Email</label>
				<input type="email" name="email" class="input-fields" placeholder="Enter your email" required>
				<br>
				<textarea cols="50" rows="5" placeholder="Add something" class="input-fields" name="message" style="resize:none"></textarea>
				<br>
				<button type="submit" class="button" name="submit">submit</button>
				<!-- <input type="time"><br><input type="file" placeholder="choose file">   -->
			</form><!--end of form -->
		</div><!--end of form-id class-->
	</div><!--end of form class-->
	
	<h2>Creators</h2>
	
	<div class="credits">
		
		<div class="cards-details">
			<img src="images/sumit.jpg" alt="author-1" width="60%" height="auto">
			<p>Hi there! , I am Sumit </p>
			
		</div>
	
	
	
		<div class="cards-details">
			<img src="images/myimg4.jpg" alt="author-1" width="60%" height="auto">
			<p>Hi there! , I am Urveesh </p>
		</div>
	
	
	
		<div class="cards-details">
			<img src="images/ujjawal.jpg" alt="author-3" width="60%" height="auto">
			<p>Hi there! , I am Ujjawal </p>
		</div>
	</div>
	
	<div class="footer-space">
		<footer>
			<div class="destinations">
				<h2>Top Destinations</h2>
				<ul>
					<li>Indonesia</li>
					<li>Jakarta</li>
					<li>Maldives</li>
					<li>Europe</li>
					<li>Thailand</li>
				</ul><!--end of list tag-->
			</div><!--end of destinations class-->
			
			<div class="destinations">
				<h2>Categories</h2>
				<ul>
					<li>Travel</li>
					<li>Lifestyle</li>
					<li>Fashion</li>
					<li>Education</li>
					<li>Food & Drink</li>
				</ul><!--end of list tag-->
			</div><!--end of destinations class-->
			
			<div class="destinations">
				<h2>Quick links</h2>
				<ul>
					<li>About</li>
					<li>Contact</li>
					<li>Tours</li>
					<li>Booking</li>
					<li>Terms & Conditions</li>
				</ul><!--end of list tag-->
			</div><!--end of destinations class-->
			
			
			<div class="last">
				<h2>DESTIGNIFY</h2>
				<br>
				<p><i class="material-icons">copyright</i>All Rights Reserved.</p>
			</div><!--end of last class-->
		</footer><!--end of footer tag-->
	</div><!--end of footer-space class-->
	
	<div></div>
	
	
	
</body><!--end of body tag-->

</html><!--end of html tag-->
