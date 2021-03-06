<?php
	
	echo date('d-m-Y h:i:s');
	exit;
	include "config.php";
	include "access.php";
?>
<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Activitar Template">
    <meta name="keywords" content="Activitar, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Activitar | Template</title>

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css?family=Nunito+Sans:400,600,700,800,900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Oswald:300,400,500,600,700&display=swap" rel="stylesheet">

    <!-- Css Styles -->
    <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="css/font-awesome.min.css" type="text/css">
    <link rel="stylesheet" href="css/elegant-icons.css" type="text/css">
    <link rel="stylesheet" href="css/nice-select.css" type="text/css">
    <link rel="stylesheet" href="css/owl.carousel.min.css" type="text/css">
    <link rel="stylesheet" href="css/magnific-popup.css" type="text/css">
    <link rel="stylesheet" href="css/slicknav.min.css" type="text/css">
    <link rel="stylesheet" href="css/style.css" type="text/css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" type="text/css">
	<link rel="stylesheet" href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap.min.css" type="text/css">

</head>

<body>
    <!-- Page Preloder -->
    <div id="preloder">
        <div class="loader"></div>
    </div>

    <!-- Header Section Begin -->
    <header class="header-section header-normal">
        <div class="container-fluid">
            <div class="logo">
                <a href="./index.html">
                    <img src="img/logo.png" alt="">
                </a>
            </div>
        <!--    <div class="top-social">
                <a href="#"><i class="fa fa-pinterest-p"></i></a>
                <a href="#"><i class="fa fa-linkedin"></i></a>
                <a href="#"><i class="fa fa-pinterest-p"></i></a>
                <a href="#"><i class="fa fa-youtube-play"></i></a>
                <a href="#"><i class="fa fa-instagram"></i></a>
            </div>   -->
            <div class="container">
                <div class="nav-menu">
                    <nav class="mainmenu mobile-menu">
                        <ul>
                            <li><a href="./index.html">Home</a></li>
                            <li><a href="./about-us.html">About us</a></li>
                         <!--   <li><a href="./schedule.html">Schedule</a></li>  -->
                            <li><a href="./gallery.html">Gallery</a></li>
                         <!--   <li><a href="./blog.html">Blog</a>
                                <ul class="dropdown">
                                    <li><a href="./about-us.html">About Us</a></li>
                                    <li><a href="./blog-single.html">Blog Details</a></li>
                                </ul>
                            </li>  -->
                            <li class="active"><a href="./contact.html">Contacts</a></li>
                        </ul>
                    </nav>
                </div>
            </div>
            <div id="mobile-menu-wrap"></div>
        </div>
    </header>
    <!-- Header End -->

	
    <!-- Breadcrumb Section Begin -->
    <section class="breadcrumb-section set-bg spad" data-setbg="img/about-bread.jpg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb-text">
                        <h2>Contact Us</h2>
                    <!--    <div class="breadcrumb-controls">
                            <a href="#"><i class="fa fa-home"></i> Home</a>
                            <span>Contact Us</span>
                        </div>  -->
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Breadcrumb End -->

    <!-- Map Section Begin -->
<!--    <div class="contact-map">
        <iframe
            src="https://www.google.com/maps/embed?pb=!1m10!1m8!1m3!1d188618.51311104256!2d-71.236572!3d42.381647!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sbd!4v1576756626784!5m2!1sen!2sbd"
            height="530" style="border: 0" allowfullscreen=""></iframe>
        <div class="map-hover">
            <h5>New York</h5>
            <ul>
                <li>Weekdays: 10.00 - 23.00</li>
                <li>Saturday: 10.00 - 23.00</li>
                <li>Sunday: Close</li>
            </ul>
            <i class="icon_pin"></i>
        </div>
    </div>    -->
    <!-- Map Section End -->

    <!-- Contact Section Begin -->
    <section class="contact-section spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                    <div class="contact-info">
                        <h4>Information</h4>
                        <ul>
							 <li><i class="fa fa-info"></i>Prabhu Pani</li>
                            <li><i class="fa fa-phone"></i>8073401533</li>
                            <li><i class="fa fa-envelope"></i>prabhupani18@gmail.com</li>
                        </ul>
                    </div>
                    <div class="contact-address">
                        <h4>Address</h4>
                        <ul>
                            <li><i class="fa fa-map-marker"></i> Electronics City ,Bangalore 560068
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-8 offset-lg-1">
                    <div class="contact-form">
                        <h4>Get in touch</h4>
                        <form id="visitorForm" name="visitorForm" action="#" method="POST" entype="" >
                            <div class="row">
                                <div class="col-lg-6">
                                    <input type="text" placeholder="Name*" class="" id="visitorName" name="visitorName" required="required" >
                                </div>
                                <div class="col-lg-6">
                                    <input type="text" placeholder="Subject*" class="" id="visitorSubject" name="visitorSubject" required="required" >
                                </div>
								 <div class="col-lg-6">
                                    <input type="text" placeholder="Email" class="" id="visitorEmail" name="visitorEmail" required="" >
                                </div>
                                <div class="col-lg-6">
                                    <input type="text" placeholder="Phone Number*" class="" id="visitorPhone" name="visitorPhone" required="required" onkeypress='return event.charCode >= 48 && event.charCode <= 57'>>
                                </div>
                                <div class="col-lg-12">
                                    <textarea placeholder="Message" id="visitorMsg" name="visitorMsg" required=" "></textarea>
                                    <button type="submit" class="c-btn" id="sendMsg" name="sendMsg" required=" " >Send Message</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
			Submiytted Data<br>
			
			<font color="white">
			<?php
				$sql = "SELECT * FROM visitors ORDER BY slno";
				if ($result = $con->query($sql)) {
					/* fetch associative array */
					while ($row = $result->fetch_assoc()) {
						//printf ("%s (%s)\n", $row["visitorName"], $row["visitorMsg"]);
						echo $row["visitorMsg"]." <font color='gray'>Submitted by  </font>".$row["visitorName"]."(". $row["visitorEmail"].")";
						echo "<br>";
					}

					/* free result set */
					$result->free();
				}

			?>
			</font>
        </div>
    </section>
    <!-- Contact Section End -->
			<table id="example" class="table table-striped table-bordered" style="width:100%">
        <thead>
            <tr>
                <th>Sl.No</th>
                <th>Visitor Name</th>
                <th>Message</th>
                <th>Email</th>
				<th>Action</th>
            </tr>
        </thead>
        <tbody>
		<?php
				$sql = "SELECT * FROM visitors ORDER BY slno";
				if ($result = $con->query($sql)) {
					$counter = 0;
					while ($row = $result->fetch_assoc()) {
						echo "<tr>";
						echo "<td>".++$counter;"</td>";
						echo "<td>".$row["visitorName"]."</td>";
						echo "<td>".$row["visitorMsg"]."</td>";
						echo "<td>".$row["visitorEmail"]."</td>";
						echo 
						'<td>
							<button type="button" class="btn btn-info">Edit</button>
							<button type="button" class="btn btn-danger">Delete</button>
						</td>';
						echo "</tr>";
					}
			$result->free();
				}
			?>
      </tbody>
        <tfoot>
            <tr>
                <th>Sl.No</th>
                <th>Visitor Name</th>
                <th>Message</th>
                <th>Email</th>
				<th>Action</th>
			</tr>
        </tfoot>
    </table>

    <!-- Cta Section Begin -->
    <section class="cta-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="cta-text">
                        <h3><i class="fa fa-heart-o" aria-hidden="true"></i> Time to try bodyweight --------> Let's get started --------> Welcome to Ninja Gym <i class="fa fa-heart-o" aria-hidden="true"></i></h3>
                     <!--   <p>New student special! $30 unlimited Gym for the first week anh 50% of our member!</p>
                    </div>
                    <a href="#" class="primary-btn cta-btn">book now</a>
                </div> -->
            </div>
        </div>
    </section>   
    <!-- Cta Section End -->

    <!-- Footer Section Begin -->
   <!-- Footer Section Begin -->
    <footer class="footer-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-5">
                    <div class="footer-logo-item">
                        <div class="f-logo">
                            <a href="#"><img src="img/logo.png" alt=""></a>
                        </div>
                        <p>Despite growth of the Internet over the past seven years, the use of toll-free phone numbers
                            in television advertising continues.</p>
                  <!--      <div class="social-links">
                            <h6>Follow us</h6>
                            <a href="#"><i class="fa fa-facebook"></i></a>
                            <a href="#"><i class="fa fa-twitter"></i></a>
                            <a href="#"><i class="fa fa-google-plus"></i></a>
                            <a href="#"><i class="fa fa-linkedin"></i></a>
                            <a href="#"><i class="fa fa-instagram"></i></a>
                        </div>  -->
                    </div>
                </div>
               <!-- <div class="col-lg-3 offset-lg-1">
                    <div class="footer-widget">
                        <h5>Our Blog</h5>
                        <div class="footer-blog">
                            <a href="#" class="fb-item">
                                <h6>Most people who work</h6>
                                <span class="blog-time"><i class="fa fa-clock-o"></i> Jan 02, 2019</span>
                            </a>
                            <a href="#" class="fb-item">
                                <h6>Freelance Design Tricks How </h6>
                                <span class="blog-time"><i class="fa fa-clock-o"></i> Jan 02, 2019</span>
                            </a>
                            <a href="#" class="fb-item">
                                <h6>have a computer at home have had </h6>
                                <span class="blog-time"><i class="fa fa-clock-o"></i> Jan 02, 2019</span>
                            </a>
                        </div> 
                    </div>  
                </div>  -->
                <div class="col-lg-3">
                    <div class="footer-widget">
                        <h5>Several Plans Per Week</h5>
                        <ul class="workout-program">
                            <li><a href="#">Biceps Day</a></li>
                            <li><a href="#">Pushup Day</a></li>
                            <li><a href="#">Leg Day</a></li>
                            <li><a href="#">Weight Lifting</a></li>
                            <li><a href="#">Cardio Day</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="footer-widget">
                        <h5>Information</h5>
                        <ul class="footer-info">
							<li>
                                <i class="fa fa-info"></i>
                                <span>Name:</span>
                               <p> Prabhu Pani<p>
                            </li>
                            <li>
                                <i class="fa fa-phone"></i>
                                <span>Phone:</span>
                                8073401533
                            </li>
                            <li>
                                <i class="fa fa-envelope-o"></i>
                                <span>Email:</span>
                                prabhupani18@gmail.com
                            </li>
                            <li>
                                <i class="fa fa-map-marker"></i>
                                <span>Address</span>
                                Electronics City,Bangalore 560068
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="copyright-text">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 text-center">
                        <div class="ct-inside"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | Design </i> by <strong>PRABHU PANI<strong></a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --> </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- Footer Section End -->

    <!-- Js Plugins -->
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.magnific-popup.min.js"></script>
    <script src="js/mixitup.min.js"></script>
    <script src="js/jquery.nice-select.min.js"></script>
    <script src="js/jquery.slicknav.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/masonry.pkgd.min.js"></script>
    <script src="js/main.js"></script>
	<script>
	$(document).ready(function() {
    $('#example').DataTable();
} );
</script>
<script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap.min.js"></script>
</body>

</html>
<?php
	if(isset($_POST['sendMsg']))
	{
		$visitorName = $_POST['visitorName'];
		$visitorSubject = $_POST['visitorSubject'];
		$visitorEmail = $_POST['visitorEmail'];
		$visitorPhone = $_POST['visitorPhone'];
		$visitorMsg = $_POST['visitorMsg'];
		//Mail
		mail("info@ninjagym.com","Visitor Contacted Through a Web","Body Of the eMAIL");
		if($visitorEmail != ""){
			$visitorMailBody = "Dear" .$visitorName.",<br>Thank you for Submitting this form. Welcome back to ninja gym";
			mail($visitorEmail,"Thank you for your Data Submittionndfnd ",$visitorMailBody);
		}
		//Storing into The Database
		$visitorQuery = "INSERT INTO visitors (visitorName, visitorSubject, visitorEmail, visitorPhone, visitorMsg)
		VALUES ('$visitorName', '$visitorSubject', '$visitorEmail', '$visitorPhone', '$visitorMsg')";

		if ($con->query($visitorQuery) === TRUE) {
			echo "New record created successfully";
		} else {
			echo "Error: " . $visitorQuery . "<br>" . $con->error;
		}
		$con->close();
		 echo "<br>";
		//Disp;ay to the End User. Thanking
		echo "Dear $visitorName,<br>Thankyou for submitting this form.";
		//Redirect to Thank You Page
	  // echo "<script>window.location = 'http://www.google.com';</script>";

	}
?>