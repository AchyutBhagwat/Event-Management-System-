<?php
session_start();
error_reporting(0);
include('includes/dbconnection.php');

    if(isset($_POST['submit']))
  {
 $name=$_POST['name'];
  $mobnum=$_POST['mobnum'];
 $email=$_POST['email'];
 $msg=$_POST['message'];
$sql="insert into tbluser(Name,MobileNumber,Email,Message)values(:name,:mobnum,:email,:msg)";
$query=$dbh->prepare($sql);
$query->bindParam(':name',$name,PDO::PARAM_STR);
$query->bindParam(':mobnum',$mobnum,PDO::PARAM_STR);
$query->bindParam(':email',$email,PDO::PARAM_STR);
$query->bindParam(':msg',$msg,PDO::PARAM_STR);
 $query->execute();
   $LastInsertId=$dbh->lastInsertId();
   if ($LastInsertId>0) {
    echo '<script>alert("Your Message Has Been Send. We Will Contact You Soon")</script>';
echo "<script>window.location.href ='contact.php'</script>";
  }
  else
    {
         echo '<script>alert("Something Went Wrong. Please try again")</script>';
    }

}

?>
<!DOCTYPE html>
<html>
<head>
<title>Event Managment System || Contact Us</title>
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
<?php include_once('includes/header.php');?>
<div class="contact content">
	 <div class="container"> 		 
		 <ol class="breadcrumb">
		  <li><a href="index.php">Home</a></li>
		  <li class="active">Contact</li>	  
		 </ol>
		 <?php
$sql="SELECT * from tblpage where PageType='contactus'";
$query = $dbh -> prepare($sql);
$query->execute();
$results=$query->fetchAll(PDO::FETCH_OBJ);

$cnt=1;
if($query->rowCount() > 0)
{
foreach($results as $row)
{               ?>
		 <h2><?php  echo htmlentities($row->PageTitle);?></h2>
		 <div class="contact-main">
			 <h4 style="color: white"><span class="glyphicon glyphicon-home" aria-hidden="true"> <?php  echo htmlentities($row->PageDescription);?></h4>
			 	<br>
			 	<h4 style="color: white"><span class="glyphicon glyphicon-envelope" aria-hidden="true"> <?php  echo htmlentities($row->Email);?></h4>
			 		<br>
			 		<h4 style="color: white"><span class="glyphicon glyphicon-phone" aria-hidden="true"> <?php  echo  htmlentities($row->MobileNumber);?></h4>
			 		<?php $cnt=$cnt+1;}} ?>

			 <div class="contact-grids">
				 <div class="col-md-6 contact-left">
					 <p>or drop a message we wiil reply you soon, </p>
					 <form method="post">
						 <ul>
							 <li class="text-info">Name: </li>
							 <li><input type="text" class="text" name="name" required="true" ></li>
						 </ul>					 				 
						 <ul>
							 <li class="text-info">Email: </li>
							 <li><input type="text" class="text" name="email" required="true"></li>
						 </ul>
						 <ul>
							 <li class="text-info">Mobile Number: </li>
							 <li><input type="text" class="text" name="mobnum" required="true" maxlength="10" pattern="[0-9]+"></li>
						 </ul>					 
						 <ul>
							 <li class="text-info">Message:</li>
							 <li><textarea value="Write here" name="message" required="true"></textarea></li>
						 </ul>						
						 <input type="submit" name="submit" value="Submit">					 
					 </form>
				 </div>
				 <div class="col-md-6 contact-right">
					 	<div class="contact-map">
						 <iframe src="https://maps.google.com/maps?width=600&amp;height=400&amp;hl=en&amp;q=Kopargaon, Maharashtra, India&amp;t=&amp;z=14&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"> </iframe>
						</div>
				 </div>
				 <div class="clearfix"></div>
			 </div>
		 </div>
		<?php include_once('includes/footer.php');?>
	 </div>
</div>
<!---->

<!---->
</body>
</html>