<?php
session_start();

require('includes/db_connection.php');
include('includes/functions.php');


$query = mysqli_query($con, "SELECT * FROM submissions") or die(mysqli_error($con));
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
  <link href="./css/fontawesome/css/fontawesome.css" rel="stylesheet" />
  <link href="./css/fontawesome/css/brands.css" rel="stylesheet" />
  <link href="./css/fontawesome/css/solid.css" rel="stylesheet" />
  <link rel="icon" href="./images/favicon.ico" alt="Volunteeer NG Icon" sizes="16x16" type="image/png" />
  <link rel="stylesheet" href="./css/team.css" />
</head>

<body>
  <!-- Top-Most Nav Starts Here -->
  <div class="topmost-nav">
    <div class="left col-3">
      <a href=""><i class="fab fa-facebook"></i> </a> &nbsp; &nbsp; &nbsp;
      <a href=""><i class="fab fa-instagram"></i> </a> &nbsp; &nbsp; &nbsp;
      <a href=""><i class="fab fa-twitter"></i> </a> &nbsp; &nbsp; &nbsp;
      <a href=""><i class="fab fa-youtube"></i> </a> &nbsp; &nbsp; &nbsp;
    </div>
    <div class="right col-6">
      <a href="tel:7071234567"><i class="fa fa-phone"></i> +234 7071234567</a>
      <a href="mailto:volunteerng@gmail.com"><i class="fa fa-envelope"></i> volunteerng@gmail.com</a>
    </div>
  </div>

  <!-- Top-Most Nav Starts Here -->

  <!-- Second Nav starts here -->
  <header>
    <div class="second-nav">
      <div id="branding">
        <img src="https://res.cloudinary.com/judejax/image/upload/v1567639575/logo.png" alt="Volunteeer Logo" title="Volunteer NG" width="165" height="70" />
      </div>
      <nav col-6>
        <ul>
          <li><a href="index.html">Home</a></li>
          <li><a href="entities.php">Entities</a></li>
          <li><a href="about.html">About</a></li>
          <li class="current"><a href="team.php">The Team</a></li>
          <li class="auth_button">
            <a href="sign-in.php"> <i class="fa fa-user"></i> Login | Sign Up</a>
          </li>
        </ul>
      </nav>
    </div>
  </header>

  <!-- Second Nav starts here -->

  <section id="team-header">
    <h1>Our Team</h1>
    <p>
      In the words of Jim Kwon, he said: "One piece of log creates a small
      fire, adequate to warm you up, add just a few more pieces to blast an
      immense bonfire, large enough to warm up your entire circle of friends;
      needless to say, that individuality counts but teamwork dynamites."
    </p>
    <br />
    <h4>
      This wouldn't have been possible with only the Visionaire. Cheers to a
      great team!
    </h4>
  </section>

  <section id="teams">
    <div class="container col-12">

      <?php

      if ($count == 0) {
        echo "<h1> NO team member</h1>";
      } else {

        while ($row = mysqli_fetch_array($query)) {

          $link = $row["cv_link"];
          $fullname = $row["fullname"];
          $cloudinary = $row["cloudinary"];
          $track = $row["track"];
          $contribution = $row["contribution"];
          $code = $row["code"];


          ?>
          <div class="member">
            <img src="<?php echo $cloudinary ?>" alt="<?php echo $fullname ?>" /> <br />
            <h3><?php echo $fullname ?></h3>
            <p>
              Code: <b><?php echo $code ?></b> | Track: <b><?php echo $track ?></b> <br><br>
              Contribution: <?php echo $contribution ?>
            </p>
            <br>
            <a href="<?php echo $link; ?>" style="color: green; text-align: center"><b>More Details..</b></a>
          </div>
      <?php  }
      }

      ?>



    </div>
  </section>

  <!-- <footer>
    <div class="footer">
      <div class="col-3">
        <img src="https://res.cloudinary.com/judejax/image/upload/v1567645699/volunteerNG_white_full.png" alt="Volunteer Ng logo" title="volunteer ng" height="100" width="130"> <br>
        <a href=""><i class="fa fa-phone"></i>+234 7071234567</a>
        <a href=""><i class="fa fa-envelope"></i>volunteerng@gmail.com</a>
        <a href=""><i class="fas fa-map-marker"></i>Find Us</a>
      </div>
      <div class="col-3">
        <h3>Donations</h3>
        <ul>
          <li><i class="fas fa-arrow-right"></i>&nbsp; Food Donation</li>
          <li><i class="fas fa-arrow-right"></i>&nbsp; Money Donation</li>
          <li><i class="fas fa-arrow-right"></i>&nbsp; Water Supply</li>
          <li><i class="fas fa-arrow-right"></i>&nbsp; Outfit Donation</li>
          <li><i class="fas fa-arrow-right"></i>&nbsp; Food Item Donation</li>
          <li><i class="fas fa-arrow-right"></i>&nbsp; Medical Donations</li>
        </ul>
      </div>
      <div class="col-3">
        <h3>Quick Links</h3>
        <ul>
          <li><i class="fas fa-arrow-right"></i>&nbsp; Our Team</li>
          <li><i class="fas fa-arrow-right"></i>&nbsp; Testimonies</li>
          <li><i class="fas fa-arrow-right"></i>&nbsp; Gallery</li>
          <li><i class="fas fa-arrow-right"></i>&nbsp; About Us</li>
      </div>
      <div>
        <h3>Stay Updated</h3>
        <span>Subscribe to our newsletter</span>
        <div class="input-field">
          <form>
            <input type="text">
            <span class="submit"><i class="fas fa-arrow-right"></i></span>
          </form>
        </div>
        <div class="inline">
          <a href=""><i class="fab fa-facebook"></i> </a> &nbsp; &nbsp;
          <a href=""><i class="fab fa-instagram"></i> </a> &nbsp; &nbsp;
          <a href=""><i class="fab fa-twitter"></i> </a> &nbsp; &nbsp;
          <a href=""><i class="fab fa-youtube"></i> </a> &nbsp; &nbsp;
        </div>
      </div>
    </div>
  </footer> -->

  <!-- <script src="./js/team.js"></script> -->
</body>

</html>