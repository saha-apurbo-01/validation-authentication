<?php
session_start();
require 'db.php';
// logo section
$logo = "SELECT * FROM logos";
$logo_query = mysqli_query($db_connection, $logo);
$after_assoc_logo = mysqli_fetch_assoc($logo_query);

// about section
$select_data = "SELECT * FROM abouts";
$data_query = mysqli_query($db_connection, $select_data);
$after_assoc_data = mysqli_fetch_assoc($data_query);

// skill section
$skill = "SELECT * FROM skills WHERE Status= 1";
$skill_res =  mysqli_query($db_connection, $skill);

$service = "SELECT * FROM services WHERE Status= 1";
$service_res = mysqli_query($db_connection, $service);


$portfolio = "SELECT * FROM portfolios WHERE Status= 1";
$port_res = mysqli_query($db_connection, $portfolio);

$feeds = "SELECT * FROM feedbacks";
$feeds_res = mysqli_query($db_connection, $feeds);
?>



<!DOCTYPE html>
<html lang="zxx">

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<meta name="description" content="portfolio,creative,business,company,agency,multipurpose,modern,bootstrap4">

	<meta name="author" content="themeturn.com">

	<title>Apurbo| Creative portfolio template</title>

	<!-- Mobile Specific Meta-->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- bootstrap.min css -->
	<link rel="stylesheet" href="plugins/bootstrap/css/bootstrap.min.css">
	<!-- Themeify Icon Css -->
	<link rel="stylesheet" href="plugins/themify/css/themify-icons.css">
	<!-- animate.css -->
	<link rel="stylesheet" href="plugins/animate-css/animate.css">
	<link rel="stylesheet" href="plugins/aos/aos.css">
	<!-- owl carousel -->
	<link rel="stylesheet" href="plugins/owl/assets/owl.carousel.min.css">
	<link rel="stylesheet" href="plugins/owl/assets/owl.theme.default.min.css">
	<!-- Slick slider CSS -->
	<link rel="stylesheet" href="plugins/slick-carousel/slick/slick.css">
	<link rel="stylesheet" href="plugins/slick-carousel/slick/slick-theme.css">

	<!-- Main Stylesheet -->
	<link rel="stylesheet" href="css/style.css">



</head>

<body class="portfolio" id="top">


	<!-- Navigation start -->
	<!-- Header Start -->

	<nav class="navbar navbar-expand-lg bg-transprent py-4 fixed-top navigation" id="navbar">
		<div class="container">
			<a class="navbar-brand" href="index.html">
				<img src="logos/<?= $after_assoc_logo['Header'] ?>" alt="" width="50">
			</a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample09" aria-controls="navbarsExample09" aria-expanded="false" aria-label="Toggle navigation">
				<span class="ti-view-list"></span>
			</button>

			<div class="collapse navbar-collapse text-center" id="navbarsExample09">
				<ul class="navbar-nav ml-auto">
					<li class="nav-item"><a class="nav-link" href="index.php">Home</a></li>
					<li class="nav-item"><a class="nav-link smoth-scroll" href="#skillbar">Expertise</a></li>
					<li class="nav-item"><a class="nav-link smoth-scroll" href="#service">Services</a></li>
					<li class="nav-item"><a class="nav-link smoth-scroll" href="#portfolio">Portfolio</a></li>
					<li class="nav-item"><a class="nav-link smoth-scroll" href="#testimonial">Testimonial</a></li>
					<li class="nav-item"><a class="nav-link smoth-scroll" href="#contact">Contact</a></li>
				</ul>
			</div>
		</div>
	</nav>


	<!-- Navigation End -->

	<!-- Banner start -->

	<!-- Slider Start -->
	<section class="slider py-7 ">
		<div class="container">
			<div class="row align-items-center">
				<div class="col-lg-5 col-sm-12 col-12 col-md-5">
					<div class="slider-img position-relative">
						<img src="uploads/<?= $after_assoc_data['Image'] ?>" alt="" class="img-fluid w-100">
					</div>
				</div>

				<div class="col-lg-6 col-12 col-md-7">

					<?php
					$after_assoc = explode(' ', $after_assoc_data['Name']);
					$last = end($after_assoc);
					?>
					<div class="ml-5 position-relative mt-5 mt-lg-0">
						<span class="head-trans"><?= $last ?></span>
						<h1 class="font-weight-normal text-color text-md"><i class="ti-minus mr-2"></i><?= $after_assoc_data['Designation'] ?></h1>
						<h2 class="mt-3 text-lg mb-3 text-capitalize"><?= $after_assoc_data['Name'] ?></h2>
						<p class="animated fadeInUp lead mt-4 mb-5 text-white-50 lh-35"><?= $after_assoc_data['Description'] ?></p>
						<a href="#about" class="btn btn-solid-border">About Me</a>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- Banner End -->

	<!-- Skills start -->
	<section class="section bg-gray" id="skillbar" data-aos="fade-up">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-lg-8">
					<div class="section-title text-center">
						<span class="text-color mb-0 text-uppercase letter-spacing text-sm"><i class="ti-minus mr-2"></i>Skills Set</span>
						<h2 class="title">Expertise</h2>
					</div>
				</div>
			</div>
			<div class="row">
				<?php foreach ($skill_res as $skills) { ?>
					<div class="col-lg-6 col-md-6">
						<div class="skill-bar mb-4 mb-lg-0">
							<div class="mb-4 text-right">
								<h4 class="font-weight-normal"><?= $skills['Name'] ?></h4>
							</div>
							<div class="progress">
								<div class="progress-bar" data-percent="<?= $skills['Parcentage'] ?>">
									<span class="percent-text"><span class="count"><?= $skills['Parcentage'] ?></span>%</span>
								</div>
							</div>
						</div>
					</div>
				<?php } ?>
			</div>
		</div>
	</section>

	<!-- Skills End -->

	<!-- Service start -->
	<section class="section bg-gray" id="service" data-aos="fade-up">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-lg-8">
					<div class="section-title text-center">
						<span class="text-color mb-0 text-uppercase letter-spacing text-sm"><i class="ti-minus mr-2"></i>What i do</span>
						<h2 class="title">Services</h2>
					</div>
				</div>
			</div>

			<div class="row no-gutters">
				<?php foreach ($service_res as $services) { ?>
					<div class="col-lg-4 col-md-6">
						<div class="card p-5 rounded-0">
							<h3 class="my-4 text-capitalize"><?= $services['Name'] ?></h3>
							<p><?= $services['Description'] ?></p>
						</div>
					</div>
				<?php } ?>
			</div>

			<div class="row align-items-center mt-5" data-aos="fade-up">
				<div class="col-lg-6 mt-5">
					<h2 class="mb-5 text-lg-2 text-white-50">Let's <span class="text-white">work together</span> on your next project </h2>
				</div>
				<div class="col-lg-4 ml-auto text-right">
					<a href="#contact" class="btn btn-main text-white smoth-scroll">Hire Me</a>
				</div>
			</div>
		</div>
	</section>
	<!-- Service End -->

	<!-- Portfolio start -->
	<section class="section" id="portfolio" data-aos="fade-up">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-lg-8">
					<div class="section-title text-center">
						<span class="text-color mb-0 text-uppercase letter-spacing text-sm"><i class="ti-minus"></i>works</span>
						<h2 class="title">Portfolio</h2>
					</div>
				</div>
			</div>
		</div>

		<div class="container-fluid">
			<div class="row">
				<div class="post_gallery owl-carousel owl-theme">
					<?php foreach ($port_res as $ports) { ?>
						<div class="item">
							<div class="portfolio-item position-relative">
								<img src="uploads/<?= $ports['Image'] ?>" alt="" class="img-fluid">

								<div class="portoflio-item-overlay">
									<a href="portfolio-single.html"><i class="ti-plus"></i></a>
								</div>
							</div>
							<div class="text mt-3">
								<h4 class="mb-1 text-capitalize"><?= $ports['Title'] ?></h4>
								<p class="text-uppercase letter-spacing text-sm"><?= $ports['Catagory'] ?></p>
							</div>
						</div>
					<?php } ?>
				</div>
			</div>
		</div>
	</section>
	<!-- Portfolio End -->

	<!-- Tetsimonial start -->
	<section id="testimonial" class="section testomionial" data-aos="fade-up">
		<div class="container">
			<div class="row">
				<div class="col-lg-8">
					<div class="section-title">
						<span class="text-color mb-0 text-uppercase letter-spacing text-sm"> <i class="ti-minus mr-2"></i>testimonial</span>
						<h1 class="title">What People Say About me</h1>
					</div>
				</div>
			</div>

			<div class="row justify-content-center">
				<div class="col-lg-10">
					<div class="testimonial-slider">
						<?php foreach ($feeds_res as $feeds) { ?>
							<div class="testimonial-item position-relative">
								<i class="ti-quote-left text-white-50"></i>
								<div class="testimonial-content">
									<p class="text-md mt-3"><?= $feeds['Feedback'] ?> </p>

									<div class="media mt-5 align-items-center">
										<img src="uploads/<?= $feeds['Image'] ?>" alt="" class="img-fluid  rounded-circle align-self-center mr-4">
										<div class="media-body">
											<h3 class="mb-0"><?= $feeds['Name'] ?></h3>
											<span class="text-muted"><?= $feeds['Designation'] ?></span>
										</div>
									</div>
								</div>
							</div>
						<?php } ?>
					</div>

				</div>
			</div>
		</div>
	</section>
	<!-- Tetsimonial End -->


	<!-- Feedback start -->
	<section class="section" id="feedback" data-aos="fade-up">
		<div class="container">

			<div class="row justify-content-center">
				<div class="col-lg-8">
					<div class="section-title text-center">
						<span class="text-color mb-0 text-uppercase letter-spacing text-sm"> <i class="ti-minus mr-2"></i>Feedback</span>
						<h1 class="title">Give Your Feedback</h1>
					</div>
					<?php if (isset($_SESSION['success'])) { ?>
						<div class="alert alert-success"><?= $_SESSION['success'] ?></div>
					<?php }
					unset($_SESSION['success']) ?>
				</div>
			</div>

			<div class="row justify-content-center">
				<div class="col-lg-8">
					<form class="contact__form form-row contact-form" method="post" action="feedback_post.php" enctype="multipart/form-data">
						<div class="form-group col-lg-6 mb-5">
							<input type="text" id="name" name="name" class="form-control bg-transparent" placeholder="Your Name">
						</div>
						<div class="form-group col-lg-6 mb-5">
							<input type="text" name="designation" class="form-control bg-transparent" placeholder="Your Designation">
						</div>
						<div class="form-group col-lg-12 mb-5">
							<input type="file" name="image" class="form-control bg-transparent" placeholder="Your Image">
						</div>

						<div class="form-group col-lg-12 mb-5">
							<textarea name="feedback" cols="30" rows="6" class="form-control bg-transparent" placeholder="Your Feedback"></textarea>

							<div class="text-center">
								<input class="btn btn-main text-white mt-5" id="submit" name="submit" type="submit" class="btn btn-hero" value="Send Feedback">
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
	</section>
	<!-- Feedback End -->


	<!-- Contact start -->
	<section class="section" id="contact" data-aos="fade-up">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-lg-8">
					<div class="section-title text-center">
						<span class="text-color mb-0 text-uppercase letter-spacing text-sm"> <i class="ti-minus mr-2"></i>Contact</span>
						<h1 class="title">Get in Touch</h1>
					</div>
					<?php if (isset($_SESSION['msg'])) { ?>
						<div class="alert alert-success"><?= $_SESSION['msg'] ?></div>
					<?php }
					unset($_SESSION['msg']) ?>
				</div>
			</div>

			<div class="row justify-content-center">
				<div class="col-lg-8">
					<form class="contact__form form-row contact-form" method="post" action="contact_post.php">
						<div class="form-group col-lg-6 mb-5">
							<input type="text" id="name" name="name" class="form-control bg-transparent" placeholder="Your Name">
						</div>
						<div class="form-group col-lg-6 mb-5">
							<input type="text" name="email" id="email" class="form-control bg-transparent" placeholder="Your Email">
						</div>
						<div class="form-group col-lg-12 mb-5">
							<input type="text" name="subject" id="subject" class="form-control bg-transparent" placeholder="Your Subject">
						</div>

						<div class="form-group col-lg-12 mb-5">
							<textarea id="message" name="message" cols="30" rows="6" class="form-control bg-transparent" placeholder="Your Message"></textarea>

							<div class="text-center">
								<input class="btn btn-main text-white mt-5" id="submit" name="submit" type="submit" class="btn btn-hero" value="Send Message">
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
	</section>
	<!-- Contact End -->

	<!-- Footer start -->
	<footer class="footer border-top-1">
		<div class="container">
			<div class="row align-items-center text-center text-lg-left">
				<div class="col-lg-2">
					<img src="logos/<?= $after_assoc_logo['Footer'] ?>" alt="" width="50">
				</div>
				<div class="col-lg-10">
					<div class="text-right">
						<p class="lead">Copyright © All right reserved by <span class="text-color">Apurbo Saha</span>.</p>
						<a href="#top" class="backtop smoth-scroll"><i class="ti-angle-up"></i></a>
					</div>
				</div>
			</div>
		</div>
	</footer>
	<!-- Footer End -->


	<!-- 
    Essential Scripts
    =====================================-->

	<!-- jQuery first, then Popper.js, then Bootstrap JS -->
	<!-- Main jQuery -->
	<script src="plugins/jquery/jquery.min.js"></script>
	<!-- Bootstrap 4.3.1 -->
	<script src="plugins/bootstrap/js/popper.js"></script>
	<script src="plugins/bootstrap/js/bootstrap.min.js"></script>
	<script src="plugins/nav/jquery.easing.1.3.html"></script>

	<!-- Slick Slider -->
	<script src="plugins/slick-carousel/slick/slick.min.js"></script>
	<script src="plugins/owl/owl.carousel.min.js"></script>

	<!-- Skill COunt -->
	<script src="plugins/counto/apear.js"></script>
	<script src="plugins/counto/counTo.js"></script>
	<!-- AOS Animation -->
	<script src="plugins/aos/aos.js"></script>

	<script src="js/script.js"></script>
	<script src="js/ajax-contact.html"></script>

</body>

</html>