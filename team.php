<?php
session_start();

require('includes/db_connection.php');
include('includes/functions.php');


$query = mysqli_query($con, "SELECT * FROM submissions ORDER BY team_sort") or die(mysqli_error($con));
$count = mysqli_num_rows($query);

?>

<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<meta http-equiv="X-UA-Compatible" content="ie=edge" />

	<meta name="description" content="Volunteer.ng is a platform for NGOs and other entities in need of funding and manpower from the general public. Registered organizations will be able to create projects and receive funding or volunteer applications from other users.">
	<meta name="keywords" content="donation, funding, volunteer, give out, crowdfunding, help" />
	<meta property="og:title" content="VolunteerNG" />
	<meta property="og:image" content="https://res.cloudinary.com/judejax/image/upload/v1567639575/volunteerNG_green_background.png" />
	<meta property="og:description" content="Volunteer.ng is a platform for NGOs and other entities in need of funding and manpower from the general public. Registered organizations will be able to create projects and receive funding or volunteer applications from other users." />

	<title>Volunteer NG | The Team</title>

	<link href="./css/fontawesome/css/all.min.css" rel="stylesheet" />
	<link href="./css/base.css" rel="stylesheet" />
	<link href="./css/pages/teams.css" rel="stylesheet" />


	<link rel="icon" href="./images/favicon.ico" alt="Volunteeer NG Icon" sizes="16x16" type="image/png" />
</head>

<body>
	<!-- Include Top Nav & Header files -->
	<!-- Top Header -->
	<div class="topnav">
		<div class="topnav__icons">
			<a href=""><i class="fab fa-facebook"></i> </a>
			<a href=""><i class="fab fa-instagram"></i> </a>
			<a href=""><i class="fab fa-twitter"></i> </a>
			<a href=""><i class="fab fa-youtube"></i> </a>
		</div>
		<div class="topnav__contact">
			<a href="tel:7071234567"><i class="fa fa-phone"></i> +234 7071234567</a>
			<a href="mailto:volunteerng@gmail.com"><i class="fa fa-envelope"></i> volunteerng@gmail.com</a>
		</div>
	</div>

	<!-- Header -->
	<header class="header">
		<div class="header__container">
			<div class="header__logo">
				<a href="index.html">
					<img src="https://res.cloudinary.com/judejax/image/upload/v1567639575/logo.png" alt="Volunteeer Logo" title="Volunteer NG" />
				</a>
			</div>
			<nav class="header__nav">
				<ul>
					<li><a href="index.html">Home</a></li>
					<li><a href="entities.php">Entities</a></li>
					<li><a href="about.html">About</a></li>
					<li class="current"><a href="team.php">The Team</a></li>
					<li class="auth_button">
						<a href="sign-in.php"> <i class="fa fa-user white-fa"></i> Sign In | Sign Up</a>
					</li>
				</ul>
			</nav>
		</div>
	</header>

	<!-- Team Banner -->

	<section class="team__banner">
		<div class="team__banner__container">
			<h2 class="team__banner__heading">Our Team</h2>

			<p class="team__banner__quote">
				In the words of Jim Kwon, <span class="quote__q">"One piece of log creates a small
					fire, adequate to warm you up, add just a few more pieces to blast an
					immense bonfire, large enough to warm up your entire circle of friends;
					needless to say, that individuality counts but teamwork dynamites."</span>
			</p>
			<p class="team__banner__text">
				This wouldn't have been possible with only the Visionaire. Cheers to a
				great team!
			</p>
		</div>
	</section>

	<section class="team__members">
		<div class="team__members__container">
			<?php

			if ($count == 0) {
				echo "<p class=\"team__members__none\"> NO team members</p>";
			} else {

				while ($row = mysqli_fetch_array($query)) {

					$link = $row["cv_link"];
					$fullname = $row["fullname"];
					$cloudinary = $row["cloudinary"];
					$track = $row["track"];
					$contribution = $row["contribution"];
					$code = $row["code"];


					?>
					<div class="team__members__card">
						<div class="team__card__container">
							<img class="team__card__image" src="<?php echo $cloudinary ?>" alt="<?php echo $fullname ?>" />
							<h3 class="team__card__name"><?php echo $fullname ?></h3>
							<p class="team__card__code"> Code: <?php echo $code ?> </p>
							<p class="team__card__track"> Track: <?php echo $track ?> </p>
							<p class="team__card__contrib"> Contribution: <?php echo $contribution ?></p>
						</div>
						<a href="<?php echo $link; ?>" class="team__card__link c_button c_button--block">More Details</a>
					</div>
			<?php
				}
			}

			?>
		</div>
	</section>

	<footer class="footer">
		<div class="footer__container">
			<div class="footer__col footer__contact">
				<div class="footer__contact__img">
					<img src="https://res.cloudinary.com/judejax/image/upload/v1567645699/volunteerNG_white_full.png" alt="Volunteer Ng logo" title="volunteer ng">
				</div>
				<a href=""><i class="fa fa-phone"></i>&nbsp; +234 7071234567</a>
				<a href=""><i class="fa fa-envelope"></i>&nbsp; volunteerng@gmail.com</a>
				<a href="https://goo.gl/maps/qhUnDeF5drZUdH83A" target="_blank"><i class="fas fa-map-marker"></i>&nbsp; Find Us</a>
			</div>
			<div class="footer__col footer__donations">
				<h3>Donations</h3>
				<ul>
					<li><a href="material-gift.html">Gift Donation</a></li>
					<li><a href="entities.php">Money Donation</a></li>
					<li><a href="render-a-service.html">Offer a Service</a></li>
					<li><a href="sign-in.php">Request for a Donation</a></li>
				</ul>
			</div>
			<div class="footer__col footer__quick">
				<h3>Quick Links</h3>
				<ul>
					<li><a href="team.php">Our Team</a></li>
					<li><a href="about.html">About Us</a></li>
				</ul>
			</div>
			<div class="footer__col footer__news">
				<h3 class="footer__news__heading">Stay Updated</h3>
				<p class="footer__news__subheading">Subscribe to our newsletter</p>
				<form class="footer__news__form">
					<input type="email" name="email" required="required" placeholder="Email Address" class="c_button--left">
					<input type="submit" value="Subscribe" class="c_button c_button--accent c_button--right">
				</form>
				<div class="footer__news__icons">
					<a href=""><i class="fab fa-facebook"></i> </a>
					<a href=""><i class="fab fa-instagram"></i> </a>
					<a href=""><i class="fab fa-twitter"></i> </a>
					<a href=""><i class="fab fa-youtube"></i> </a>
				</div>
			</div>
		</div>
	</footer>

	<!-- <script src="./js/team.js"></script> -->
</body>

</html>