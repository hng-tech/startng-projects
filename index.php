<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="assets/ahome.css" />
    <link href="https://fonts.googleapis.com/css?family=Lato&display=swap" rel="stylesheet">
    <meta name="author" content="Team Rio">
    <meta name="description" content="HelpAChild Foundation is a Non Profit Organization that focuses on the growth and well-being of a child">
    <meta name="keywords" content="Charity, NGO, HelpAChild, Nigeria">
    <link rel="cannonical" href="https://www.helpachild.bindas.co">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <title>Home | Help A Child Foundation</title>
</head>

<body>
    <div class="home-bg">
        <div class="topnav" id="myTopnav">
            <a href="index.php" class="as"><img src="https://res.cloudinary.com/bindasfs/image/upload/v1567628558/startng/helpAChildLogo1_a0ntag_eya8d5.png" alt="Help A Child Logo" class="header-icon"></a>
            <a href="donation.html" class="nav-link btn join">Donate</a>
            <a href="contact.html" class="nav-link">Contact Us</a>
            <a href="teampage.html" class="nav-link">Our Team</a>
            <a href="about.html" class="nav-link">About</a>
            <a href="index.php" class="nav-link">Home</a>

            <a href="javascript:void(0);" class="icon" onclick="myFunction()">
                <i class="fas fa-bars"></i>
            </a>
        </div>
        <?php 
        if (isset($_SESSION['msg'])) {
            echo $_SESSION['msg'];
            unset($_SESSION['msg']);
        }
        ?>
        <h1 class="intro">Protect the children of today <br>for a better tommorrow</h1>
        <a href="donation.html" class="donate-btn btn">DONATE</a>
        
    </div>
    <div class="content" id="about">
        <p class="content-head">Let's build a world without child abuse and neglect</p>
        <p class="content-body">Imagine a world free from child abuse and neglect.
		Beautiful. Peaceful. Lovely.
		This can only begin with you and me.
		Our children's safety is our primary concern and a responsibility our society must take upon herself.
		You can make a difference in one child's life today; you can  in two , you can make a change in as many lives as you want. 
		It all starts with a will, with our little quarter, our little cent, a word of encouragement,our action.

		Come! Help us, join us to make this a reality,together  we can build a world free from child abuse, free from child neglect but filled with love and laughter.
		</p>

    </div>
    <div class="">
        <div class="request">
            <div class="main main-bg2">
                <h2 class="head">Become a Volunteer</h2>
                <p class="body">We need more hands on deck.
				Actions they say speaks louder than words.
				Indeed this is true and it cannot be over-emphasized. 
				Where your money cannot go ,your services can 
				Become a volunteer today and help a life.
				</p>
            </div>
        </div>
        <div class="request">
            <div class="main main-bg1">
                <h2 class="head">Send Donation</h2>
                <p class="body">With your money we can continue our innovative programs and promote policies that will help our children live up to potential.
				Put that money to good use today and you will have a generation free from child abuse to thank you for it.
				</p>
            </div>
            <a href="donation.html" class="sub main-bg1">DONATE</a>
        </div>
        <div class="request">
            <div class="main main-bg3">
                <h2 class="head">Give Inspiration</h2>
                <p class="body">You can never underestimate the power of words.
				It is soothing to the soul.
				Share your story today, leave a word of encouragement ,motivate a child today.
				Inspire away.
				</p>
            </div>
        </div>
    </div>

    <footer class="footer">
        <div class="footer">
            <div class="footer-img"><img src="https://res.cloudinary.com/bindasfs/image/upload/v1567628558/startng/helpAChildLogo1_a0ntag_eya8d5.png" alt="Help A Child Logo" class="footer-icon">
                <p class="footer-con">Challenging child protection</p>
            </div>
            <div class="address">
                <p class="heads">CONTACT US</p>
                <p class="contentss">3, Birrel Avenue, Sabo <br>Yaba, Lagos.</p>
            </div>
        </div>
    </footer>
    <script src="assets/script.js"></script>
</body>

</html>