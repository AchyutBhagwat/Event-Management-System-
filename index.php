
<!DOCTYPE html>
<html>
<head>
<title>Online Event Managment System||Home Page</title>
<link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
<!-- jQuery (Bootstrap's JavaScript plugins) -->
<script src="js/jquery.min.js"></script>
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- Custom Theme files -->
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />

<link href='http://fonts.googleapis.com/css?family=Monoton' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Raleway' rel='stylesheet' type='text/css'>
</head>
<body>
<!---->
<?php include_once('includes/header.php');?>
<!---->
<script src="js/responsiveslides.min.js"></script>
  <script>
    // You can also use "$(window).load(function() {"
    $(function () {
      $("#slider").responsiveSlides({
      	auto: true,
        manualControls: '#slider3-pager',
      });
    });
  </script> 
<div class="content">
	 <div class="container">  
		  <div class="slider">
			<!-- Slideshow 3 -->
			<ul class="rslides" id="slider">
			  <li><img src="images/img/wedding.jpg" alt="">
				<div class="caption">
					<h1>Wedding</h1>
					<p>A wedding planner is a professional who assists with the design, planning and management of a client's wedding</p>
				</div>
			  </li>
			  <li><img src="images/img/birthday.jpg" alt="">
				<div class="caption">
					<h1>Birthday Parties</h1>	  
					<p>We are proffessional Birtday party decorator. offering complete event planning services for a birthday. Our team of professionals will analyze your requirements and provide birthday ideas to suit your needs and budget.</p>
				</div>
			  </li>	      
			  <li><img src="images/img/festival.jpg" alt="">
				<div class="caption">
					<h1>Festival Gatherings</h1>	  
					<p>Festival Management International Perspective is a unique text looking at the central role of events management in the cultural, tourism and arts industries. </p>
				</div>
			  </li>
			  <li><img src="images/img/conference.jpg" alt="">
				<div class="caption">
					<h1>Conferences</h1>
					<p>Conference management relates to the executive management of a conference either in-house within a company or for a client of a professional conference organiser</p>
				</div>
			  </li>
			  <li><img src="images/img/dinner.jpg" alt="">
				<div class="caption">
					<h1>Business Dinners</h1>	  
					<p>Small, seated dinners have long been a popular way for companies and brands to thank their employees or entertain V.I.P. clients in an intimate setting. </p>
				</div>
			  </li>	      
			  <li><img src="images/img/network.jpg" alt="">
				<div class="caption">
					<h1>Networking Events</h1>	  
					<p>Networking comes in different forms. One of the most popular is a networking event. It can be a conference wherein you can connect with the attendees and even the keynote speakers.</p>
				</div>
			  </li>
			  <li><img src="images/img/sport.jpg" alt="">
				<div class="caption">
					<h1>Sports Events</h1>	  
					<p>Sport event managers deal with a plethora of issues related to planning, organizing, leading and delivering sport events.</p>
				</div>
			  </li>	      
			</ul>
			<!-- Slideshow 3 Pager --></br></br>
			<ul id="slider3-pager">
			  <li><a href="#"><img src="images/img/wedding.jpg" alt=""></a></li>
			  <li><a href="#"><img src="images/img/birthday.jpg" alt=""></a></li>
			  <li><a href="#"><img src="images/img/festival.jpg" alt=""></a></li>
			   <li><a href="#"><img src="images/img/conference.jpg" alt=""></a></li>
			  <li><a href="#"><img src="images/img/dinner.jpg" alt=""></a></li>
			  <li><a href="#"><img src="images/img/network.jpg" alt=""></a></li>
			  <li><a href="#"><img src="images/img/sport.jpg" alt=""></a></li>
			</ul>   
				<div class="clearfix"></div>
		  </div>
	 </div>
	<?php include_once('includes/footer.php');?>
</div>
<!---->

<!---->
</body>
</html>