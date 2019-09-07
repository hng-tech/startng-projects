<?php
session_start();

require('includes/db_connection.php');
include('includes/functions.php');


$query = mysqli_query($con, "SELECT * FROM users WHERE is_completed = 0") or die(mysqli_error($con));
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
    
    <title>Volunteer NG | Entities</title>
    
    <link href="./css/fontawesome/css/all.min.css" rel="stylesheet" />
    <link href="./css/base.css" rel="stylesheet" />
    <link href="./css/pages/entities.css" rel="stylesheet" />
    
    <link rel="icon" href="https://res.cloudinary.com/judejax/image/upload/v1567639756/favicon.ico" alt="Volunteeer NG Icon" sizes="16x16" type="image/png" />
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
    <header class="header" >
        <div class="header__container">
            <div class="header__logo">
                <a href="index.html">
                    <img src="https://res.cloudinary.com/judejax/image/upload/v1567639575/logo.png"
                        alt="Volunteeer Logo" title="Volunteer NG"  />
                </a>
            </div>
            <nav class="header__nav" >
                <ul>
                    <li><a href="index.html">Home</a></li>
                    <li class="current" ><a href="entities.php">Entities</a></li>
                    <li><a href="about.html">About</a></li>
                    <li><a href="team.php">The Team</a></li>
                    <li class="auth_button">
                        <a href="sign-in.php"> <i class="fa fa-user white-fa"></i>
                            Sign In | Sign Up</a>
                    </li>
                </ul>
            </nav>
        </div>
    </header>

    <div class="entities">
        <h2 class="entities__heading" >Entities</h2>
		<div class="entities__container" >
        	<?php

        		if ($count == 0) {
            		echo "<h1>No Enitity Yes!</h1>";
        		} else {
            		while ($row = mysqli_fetch_array($query)) {
                		$userId = $row['user_id'];
                		//Get total donations for user
                		$user_donation_query = mysqli_query($con, "SELECT SUM(amount) as totalDonations FROM donations WHERE user_id = '$userId'") or die(myslqli_error($con));
                		$donation_row = mysqli_fetch_array($user_donation_query);

                		$donations = $donation_row['totalDonations'];
        	?>

                		<div class="entities__card">
                    		<div class="entities__card__container">
                    			<div class="entities__card__top">
                        			<div class="entities__card__img">
                            			<img src="https://res.cloudinary.com/judejax/image/upload/v1567639756/avatar.png" alt="<?php echo $row['name'] ?>" title="<?php echo $row['name'] ?>">
                        			</div>
                        			<div class="entities__card__details">
                            			<p class="entities__card__name"> <?php echo $row['name'] ?> </p> 
                            			<p class="entities__card__title"> <?php echo $row['title'] ?> </p>
                            			<p class="entities__card__type"> <?php echo $row['type'] ?> </p>
                        			</div>
                        		</div>
                    			<p class="entities__card__description"><?php echo $row['description'] ?></p>
                    			<div class="entities__card__money">
                    				<p class="entities__card__raised">N<?php echo $donations == '' || $donations == 0 ? 0 : $donations ?></p>
                        			<progress class="entities__card__progress" max="<?php echo $row['donation_amount'] ?>" 
                        				value="<?php echo $donations == '' || $donations == 0 ? 0 : $donations ?>">
                        			</progress>
                        			<p class="entities__card__goal">N<?php echo $row['donation_amount'] ?></p>
                    			</div>
                    			<div class="entities__card__buttons">
                        			<a class="c_button c_button--accent" href="make-payment.php?id=<?php echo $row['user_id'] ?>">Donate Now</a>
                    			</div>
                			</div>
                		</div>

        	<?php 
        			}
        		}
        	?>
        </div>
    </div>




	<footer class="footer" >
    	<div class="footer__container" >
            <div class="footer__col footer__contact">
            	<div class="footer__contact__img" >
                	<img src="https://res.cloudinary.com/judejax/image/upload/v1567645699/volunteerNG_white_full.png"
                    alt="Volunteer Ng logo" title="volunteer ng">
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
            <div class="footer__col footer__news" >
                <h3 class="footer__news__heading" >Stay Updated</h3>
                <p class="footer__news__subheading" >Subscribe to our newsletter</p>
                <form class="footer__news__form" >
                    <input type="email" name="email" required="required" placeholder="Email Address"  class="c_button--left" >
                    <input type="submit" value="Subscribe" class="c_button c_button--accent c_button--right" >
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

</body>

</html>