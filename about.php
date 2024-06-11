<?php
session_start();
error_reporting(0);

include('includes/dbconnection.php');
?>
<!DOCTYPE html>
<html>
<head>
<title>Event Management System || About Us</title>
<link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
<!-- Custom Theme files -->
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<link rel="stylesheet" href="css/touchTouch.css" type="text/css" media="all" />
<!-- Custom Theme files -->
<script src="js/jquery.min.js"></script>
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!--webfont-->
<link href='http://fonts.googleapis.com/css?family=Monoton' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Raleway' rel='stylesheet' type='text/css'>
<!---//End-css-style-switecher----->
<script type="text/javascript" src="js/jquery.fancybox.js"></script>
		<link rel="stylesheet" type="text/css" href="css/jquery.fancybox.css" media="screen" />
	   <script type="text/javascript">
			$(document).ready(function() {
				/*
				 *  Simple image gallery. Uses default settings
				 */

				$('.fancybox').fancybox();

			});
		</script>

</head>
<body>
<!---->
<?php include_once('includes/header.php');?>
<div class="about content">
	 <div class="container"> 		 
		 <ol class="breadcrumb">
		  <li><a href="index.php">Home</a></li>
		  <li class="active">About</li>	  
		 </ol>
		 <?php
$sql="SELECT * from tblpage where PageType='aboutus'";
$query = $dbh -> prepare($sql);
$query->execute();
$results=$query->fetchAll(PDO::FETCH_OBJ);

$cnt=1;
if($query->rowCount() > 0)
{
foreach($results as $row)
{               ?>
		 <h2><?php  echo htmlentities($row->PageTitle);?></h2>
		 <div class="about-main">
			 <div class="col-md-6 abt-pic">
				 <img src="images/abt.jpg" class="img-responsive" alt=""/>
			 </div>
			 <div class="col-md-6 abt-pic-info">
				 
				 <p style="color:#45fc03"><?php  echo $row->PageDescription;?>.</p>
				
			 </div>
			 <?php $cnt=$cnt+1;}} ?>
			 <div class="clearfix"></div>
		 </div>
	
		 <div class="latest">
			 <h3>LATEST PHOTOS</h3>		
			 <div class="pic start">
				 <a class="fancybox" href="images/img/wedding.jpg" data-fancybox-group="gallery" title="Wedding"><img src="images/img/wedding.jpg" class="img-style row6" alt=""><span> </span></a>	
				 <h4><a href="event.html">wedding</a></h4>
				 <p>A wedding planner is a professional who assists with the design.</p>
			 </div>
			 <div class="pic">
				 <a class="fancybox" href="images/img/party.jpg" data-fancybox-group="gallery" title="Party"><img src="images/img/party.jpg" class="img-style row6" alt=""><span> </span></a>	
				 <h4><a href="event.html">party</a></h4>
				 <p>We can manage your parties proffessionly.</p>
			 </div>
			 <div class="pic">
				 <a class="fancybox" href="images/img/birthday.jpg" data-fancybox-group="gallery" title="Birthday"><img src="images/img/birthday.jpg" class="img-style row6" alt=""><span> </span></a>	
				 <h4><a href="event.html">birthday</a></h4>
				 <p>We are proffessional Birtday party decorator.</p>
			 </div>
			 <div class="pic">
				 <a class="fancybox" href="images/img/ceremony.jpg" data-fancybox-group="gallery" title="Ceremony"><img src="images/img/ceremony.jpg" class="img-style row6" alt=""><span> </span></a>	
				 <h4><a href="event.html">Ceremony</a></h4>
				 <p>We arrange your ceremony at very low price.</p>
			 </div>
			 <div class="pic">
				 <a class="fancybox" href="images/img/dinner.jpg" data-fancybox-group="gallery" title="Dinner"><img src="images/img/dinner.jpg" class="img-style row6" alt=""><span> </span></a>	
				 <h4><a href="event.html">Dinners</a></h4>
				 <p>We arrange Dinner parties for your functions.</p>
			 </div>
			 <div class="clearfix"></div>
		 </div>
		<?php include_once('includes/footer.php');?>
	 </div>
</div>
<!---->

<!---->
</body>
</html>