<!-- <?php
session_start(); // Start the session

$showSuccessMessage = false; // Variable to track if the form was successfully submitted

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $dob = $_POST['dob'];
    $occupation = $_POST['occupation'];
    $phone = $_POST['phone'];
    $gender = $_POST['gender'];
    $address = $_POST['address'];
    $date = $_POST['date'];

    $conn = new mysqli('localhost', 'root', '', 'users');
    if ($conn->connect_error) {
        echo "$conn->connect_error";
        die("Connection Failed: " . $conn->connect_error);
    } else {
        $stmt = $conn->prepare("INSERT INTO booking (name, email, dob, occupation, phone, gender, address, date) VALUES (?, ?, ?, ?, ?, ?, ?, ?)");
        $stmt->bind_param("ssssisss", $name, $email, $dob, $occupation, $phone, $gender, $address, $date);
        $execval = $stmt->execute();
        $stmt->close();
        $conn->close();

        if ($execval) {
            $_SESSION['success'] = true; // Set the success state in session variable
            header("Location: " . $_SERVER['PHP_SELF']); // Redirect to the same page
            exit();
        }
    }
}

// Check if success state is stored in session
if (isset($_SESSION['success']) && $_SESSION['success']) {
    $showSuccessMessage = true;
    unset($_SESSION['success']); // Clear the success state from session
}

?>




<!DOCTYPE html>
<html lang="en">
  <head>
    <title>WAY2PG</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <link href="https://fonts.googleapis.com/css?family=Nunito+Sans:200,300,400,600,700,800,900&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="stylesheet" href="css/animate.css">
    
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">
    
    <link rel="stylesheet" href="css/flaticon.css">
    <link rel="stylesheet" href="css/style.css">
  </head>
  <body>
    
	  <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
	    <div class="container">
	      <a class="navbar-brand" href="index.php"  style="font-size: 45px;" >WAY2PG</a>
	      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
	        <span class="oi oi-menu"></span> Men
	      </button>

	      <div class="collapse navbar-collapse" id="ftco-nav">
	        <ul class="navbar-nav ml-auto">
			  <li class="nav-item"><a href="/way2pg/index.php" class="nav-link">Home</a></li>
	          <li class="nav-item"><a href="/way2pg/about.php" class="nav-link">About</a></li>
	          <li class="nav-item"><a href="/way2pg/agent.php" class="nav-link">Agent</a></li>
	          <li class="nav-item"><a href="/way2pg/services.php" class="nav-link">Services</a></li>
	          <li class="nav-item active"><a href="/way2pg/PG's.php" class="nav-link">PG's</a></li>
	          <li class="nav-item"><a href="/way2pg/contact.php" class="nav-link">Contact</a></li>
			  <li class="nav-item"><a href="\loginsystem\login.php" class="nav-link">Log Out</a></li>
	        </ul>
	      </div>
	    </div>
	  </nav>
    <!-- END nav -->
    
    <section class="hero-wrap hero-wrap-2" style="background-image: url('images/bg_1.jpg');" data-stellar-background-ratio="0.5">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text js-fullheight align-items-center justify-content-center">
          <div class="col-md-9 ftco-animate pb-0 text-center">
          	<p class="breadcrumbs"><span class="mr-2"><a href="index.html">Home <i class="fa fa-chevron-right"></i></a></span> <span class="mr-2"><a href="PG's.html">PG's <i class="fa fa-chevron-right"></i></a></span> <span>PG's Single <i class="fa fa-chevron-right"></i></span></p>
            <h1 class="mb-3 bread">PG Details</h1>
          </div>
        </div>
      </div>
    </section>

    <section class="ftco-section ftco-property-details">
      <div class="container">
      	<div class="row justify-content-center">
      		<div class="col-md-12">
      			<div class="property-details">
      				<div class="img" style="background-image: url(images/work-1.jpg);">
      					<a href="https://vimeo.com/45830194" class="img-video popup-vimeo d-flex align-items-center justify-content-center">
			          	<span class="fa fa-play"></span>
			          </a>
      				</div>
      				<div class="text">
      					<span class="subheading">Basavanagudi</span>
      					<h2>Hari PG</h2>
      				</div>
      			</div>
      		</div>
      	</div>
      	<div class="row">
      		<div class="col-md-12 pills">
						<div class="bd-example bd-example-tabs">
							<div class="d-flex">
							  <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">

							    <li class="nav-item">
							      <a class="nav-link active" id="pills-description-tab" data-toggle="pill" href="#pills-description" role="tab" aria-controls="pills-description" aria-expanded="true">Features</a>
							    </li>
							    <li class="nav-item">
							      <a class="nav-link" id="pills-manufacturer-tab" data-toggle="pill" href="#pills-manufacturer" role="tab" aria-controls="pills-manufacturer" aria-expanded="true">Description</a>
							    </li>
							    <li class="nav-item">
							      <a class="nav-link" id="pills-review-tab" data-toggle="pill" href="#pills-review" role="tab" aria-controls="pills-review" aria-expanded="true">Review</a>
							    </li>
							  </ul>
							</div>
							



						  <div class="tab-content" id="pills-tabContent">
						    <div class="tab-pane fade show active" id="pills-description" role="tabpanel" aria-labelledby="pills-description-tab">
						    	<div class="row">
						    		<div class="col-md-4">
						    			<ul class="features">
						    				<li class="check"><span class="fa fa-check-circle"></span>Lot Area: 1,250 SQ FT</li>
						    				<li class="check"><span class="fa fa-check-circle"></span>Bed Rooms: 4</li>
						    				<li class="check"><span class="fa fa-check-circle"></span>Bath Rooms: 4</li>
						    				<li class="check"><span class="fa fa-check-circle"></span>Luggage</li>
						    				<li class="check"><span class="fa fa-check-circle"></span>Garage: 2</li>
						    			</ul>
						    		</div>
						    		<div class="col-md-4">
						    			<ul class="features">
						    				<li class="check"><span class="fa fa-check-circle"></span>Floor Area: 1,300 SQ FT</li>
						    				<li class="check"><span class="fa fa-check-circle"></span>Year Build:: 2019</li>
						    				<li class="check"><span class="fa fa-check-circle"></span>Water</li>
						    				<li class="check"><span class="fa fa-check-circle"></span>Stories: 2</li>
						    				<li class="check"><span class="fa fa-check-circle"></span>Roofing: New</li>
						    			</ul>
						    		</div>
						    		<div class="col-md-4">
						    			<ul class="features">
						    				<li class="check"><span class="fa fa-check-circle"></span>Floor Area: 1,300 SQ FT</li>
						    				<li class="check"><span class="fa fa-check-circle"></span>Year Build:: 2019</li>
						    				<li class="check"><span class="fa fa-check-circle"></span>Water</li>
						    				<li class="check"><span class="fa fa-check-circle"></span>Stories: 2</li>
						    				<li class="check"><span class="fa fa-check-circle"></span>Roofing: New</li>
						    			</ul>
						    		</div>
						    	</div>
						    </div>
							<!-- Form section -->
							<?php if ($showForm): ?>
							<div class="mt-4">
  							<p class="font-weight-bold" style="font-size: xx-large;">To Book a Schedule!</p>
  <p class="font-weight-bold" style="font-size: x-large;">Enter Personal Info</p>
  <div class="row">
    <div class="col-md-6">
      <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
        <div class="form-group">
          <label for="name">Name:</label>
          <input type="text" id="name" name="name" class="form-control" required>
        </div>
        <div class="form-group">
          <label for="email">Email:</label>
          <input type="email" id="email" name="email" class="form-control" required>
        </div>
        <div class="form-group">
          <label for="dob">Date of Birth:</label>
          <input type="date" id="dob" name="dob" class="form-control" required>
        </div>
        <div class="form-group">
          <label for="occupation">Occupation:</label>
          <select id="occupation" name="occupation" class="form-control" required>
            <option value="">Select Occupation</option>
            <option value="student">Student</option>
            <option value="worker">Worker</option>
          </select>
        </div>
        <div class="form-group">
          <label for="phone">Phone Number:</label>
          <input type="tel" id="phone" name="phone" class="form-control" required>
        </div>
    </div>
    <div class="col-md-6">
        <div class="form-group">
          <label for="gender">Gender:</label>
          <select id="gender" name="gender" class="form-control" required>
            <option value="">Select Gender</option>
            <option value="male">Male</option>
            <option value="female">Female</option>
            <option value="other">Other</option>
          </select>
        </div>
        <div class="form-group">
          <label for="address">Address:</label>
          <textarea id="address" name="address" class="form-control" required></textarea>
        </div>
        <div class="form-group">
          <label for="date">Date:</label>
          <input type="date" id="date" name="date" class="form-control" required>
        </div>
    </div>
  </div>
  <div class="row">
    <div class="col-md-12">
      <button type="submit" class="btn btn-primary">Submit</button>
    </div>
  </div>
</form>
</div>

						    <div class="tab-pane fade" id="pills-manufacturer" role="tabpanel" aria-labelledby="pills-manufacturer-tab">
						      <p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life One day however a small line of blind text by the name of Lorem Ipsum decided to leave for the far World of Grammar.</p>
									<p>When she reached the first hills of the Italic Mountains, she had a last view back on the skyline of her hometown Bookmarksgrove, the headline of Alphabet Village and the subline of her own road, the Line Lane. Pityful a rethoric question ran over her cheek, then she continued her way.</p>
						    </div>

						    <div class="tab-pane fade" id="pills-review" role="tabpanel" aria-labelledby="pills-review-tab">
						      <div class="row">
							   		<div class="col-md-7">
							   			<h3 class="head">23 Reviews</h3>
							   			<div class="review d-flex">
									   		<div class="user-img" style="background-image: url(images/person_1.jpg)"></div>
									   		<div class="desc">
									   			<h4>
									   				<span class="text-left">Jacob Webb</span>
									   				<span class="text-right">14 March 2018</span>
									   			</h4>
									   			<p class="star">
									   				<span>
									   					<i class="fa fa-star"></i>
									   					<i class="fa fa-star"></i>
									   					<i class="fa fa-star"></i>
									   					<i class="fa fa-star"></i>
									   					<i class="fa fa-star"></i>
								   					</span>
								   					<span class="text-right"><a href="#" class="reply"><i class="fa fa-reply"></i></a></span>
									   			</p>
									   			<p>When she reached the first hills of the Italic Mountains, she had a last view back on the skyline of her hometown Bookmarksgrov</p>
									   		</div>
									   	</div>
									   	<div class="review d-flex">
									   		<div class="user-img" style="background-image: url(images/person_2.jpg)"></div>
									   		<div class="desc">
									   			<h4>
									   				<span class="text-left">Jacob Webb</span>
									   				<span class="text-right">14 March 2018</span>
									   			</h4>
									   			<p class="star">
									   				<span>
									   					<i class="fa fa-star"></i>
									   					<i class="fa fa-star"></i>
									   					<i class="fa fa-star"></i>
									   					<i class="fa fa-star"></i>
									   					<i class="fa fa-star"></i>
								   					</span>
								   					<span class="text-right"><a href="#" class="reply"><i class="fa fa-reply"></i></a></span>
									   			</p>
									   			<p>When she reached the first hills of the Italic Mountains, she had a last view back on the skyline of her hometown Bookmarksgrov</p>
									   		</div>
									   	</div>
									   	<div class="review d-flex">
									   		<div class="user-img" style="background-image: url(images/person_3.jpg)"></div>
									   		<div class="desc">
									   			<h4>
									   				<span class="text-left">Jacob Webb</span>
									   				<span class="text-right">14 March 2018</span>
									   			</h4>
									   			<p class="star">
									   				<span>
									   					<i class="fa fa-star"></i>
									   					<i class="fa fa-star"></i>
									   					<i class="fa fa-star"></i>
									   					<i class="fa fa-star"></i>
									   					<i class="fa fa-star"></i>
								   					</span>
								   					<span class="text-right"><a href="#" class="reply"><i class="fa fa-reply"></i></a></span>
									   			</p>
									   			<p>When she reached the first hills of the Italic Mountains, she had a last view back on the skyline of her hometown Bookmarksgrov</p>
									   		</div>
									   	</div>
							   		</div>
							   		<div class="col-md-5">
							   			<div class="rating-wrap">
								   			<h3 class="head">Give a Review</h3>
								   			<div class="wrap">
									   			<p class="star">
									   				<span>
									   					<i class="fa fa-star"></i>
									   					<i class="fa fa-star"></i>
									   					<i class="fa fa-star"></i>
									   					<i class="fa fa-star"></i>
									   					<i class="fa fa-star"></i>
									   					(98%)
								   					</span>
								   					<span>20 Reviews</span>
									   			</p>
									   			<p class="star">
									   				<span>
									   					<i class="fa fa-star"></i>
									   					<i class="fa fa-star"></i>
									   					<i class="fa fa-star"></i>
									   					<i class="fa fa-star"></i>
									   					<i class="fa fa-star"></i>
									   					(85%)
								   					</span>
								   					<span>10 Reviews</span>
									   			</p>
									   			<p class="star">
									   				<span>
									   					<i class="fa fa-star"></i>
									   					<i class="fa fa-star"></i>
									   					<i class="fa fa-star"></i>
									   					<i class="fa fa-star"></i>
									   					<i class="fa fa-star"></i>
									   					(70%)
								   					</span>
								   					<span>5 Reviews</span>
									   			</p>
									   			<p class="star">
									   				<span>
									   					<i class="fa fa-star"></i>
									   					<i class="fa fa-star"></i>
									   					<i class="fa fa-star"></i>
									   					<i class="fa fa-star"></i>
									   					<i class="fa fa-star"></i>
									   					(10%)
								   					</span>
								   					<span>0 Reviews</span>
									   			</p>
									   			<p class="star">
									   				<span>
									   					<i class="fa fa-star"></i>
									   					<i class="fa fa-star"></i>
									   					<i class="fa fa-star"></i>
									   					<i class="fa fa-star"></i>
									   					<i class="fa fa-star"></i>
									   					(0%)
								   					</span>
								   					<span>0 Reviews</span>
									   			</p>
									   		</div>
								   		</div>
							   		</div>
							   	</div>
						    </div>
						  </div>
						</div>
		      </div>
				</div>
      </div>
    </section>

    <footer class="ftco-footer ftco-section">
      <div class="container">
        <div class="row mb-5">
          <div class="col-md">
            <div class="ftco-footer-widget mb-4">
              <h2 class="ftco-heading-2">WAY2PG</h2>
              <p>Far far away, behind the word mountains, far from the countries.</p>
              <ul class="ftco-footer-social list-unstyled mt-5">
                <li class="ftco-animate"><a href="#"><span class="fa fa-twitter"></span></a></li>
                <li class="ftco-animate"><a href="#"><span class="fa fa-facebook"></span></a></li>
                <li class="ftco-animate"><a href="#"><span class="fa fa-instagram"></span></a></li>
              </ul>
            </div>
          </div>
          <div class="col-md">
            <div class="ftco-footer-widget mb-4 ml-md-4">
              <h2 class="ftco-heading-2">Community</h2>
              <ul class="list-unstyled">
                <li><a href="#"><span class="fa fa-chevron-right mr-2"></span>Search PG's</a></li>
                <li><a href="#"><span class="fa fa-chevron-right mr-2"></span>For Agents</a></li>
                <li><a href="#"><span class="fa fa-chevron-right mr-2"></span>Reviews</a></li>
                <li><a href="#"><span class="fa fa-chevron-right mr-2"></span>FAQs</a></li>
              </ul>
            </div>
          </div>
          <div class="col-md">
            <div class="ftco-footer-widget mb-4 ml-md-4">
              <h2 class="ftco-heading-2">About Us</h2>
              <ul class="list-unstyled">
                <li><a href="#"><span class="fa fa-chevron-right mr-2"></span>Our Story</a></li>
                <li><a href="#"><span class="fa fa-chevron-right mr-2"></span>Meet the team</a></li>
                <li><a href="#"><span class="fa fa-chevron-right mr-2"></span>Careers</a></li>
              </ul>
            </div>
          </div>
          <div class="col-md">
             <div class="ftco-footer-widget mb-4">
              <h2 class="ftco-heading-2">Company</h2>
              <ul class="list-unstyled">
                <li><a href="#"><span class="fa fa-chevron-right mr-2"></span>About Us</a></li>
                <li><a href="#"><span class="fa fa-chevron-right mr-2"></span>Press</a></li>
                <li><a href="#"><span class="fa fa-chevron-right mr-2"></span>Contact</a></li>
                <li><a href="#"><span class="fa fa-chevron-right mr-2"></span>Careers</a></li>
              </ul>
            </div>
          </div>
          <div class="col-md">
            <div class="ftco-footer-widget mb-4">
            	<h2 class="ftco-heading-2">Have a Questions?</h2>
            	<div class="block-23 mb-3">
	              <ul>
	                <li><span class="icon fa fa-map"></span><span class="text">Basavangudi, Bengaluru</span></li>
	                <li><a href="#"><span class="icon fa fa-phone"></span><span class="text">+91 992 3929 210</span></a></li>
	                <li><a href="#"><span class="icon fa fa-envelope pr-4"></span><span class="text">info@yourdomain.com</span></a></li>
	              </ul>
	            </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12 text-center">
	
		  <p>Copyright..All rights are reserved </p>
          </div>
        </div>
      </div>
    </footer>
    
  

  <!-- loader -->
  <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>


  <script src="js/jquery.min.js"></script>
  <script src="js/jquery-migrate-3.0.1.min.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/jquery.easing.1.3.js"></script>
  <script src="js/jquery.waypoints.min.js"></script>
  <script src="js/jquery.stellar.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/jquery.magnific-popup.min.js"></script>
  <script src="js/jquery.animateNumber.min.js"></script>
  <script src="js/scrollax.min.js"></script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
  <script src="js/google-map.js"></script>
  <script src="js/main.js"></script>
    
  </body>
</html> -->