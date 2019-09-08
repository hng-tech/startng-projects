<?php

session_start();

require('includes/db_connection.php');

// if(!isset(_SESSION['user_id'])){
//     header('Location: index.html');
// }

$userId = $_SESSION['user_id'];
$userName = $_SESSION['name'];

$donations = mysqli_query($con, "SELECT * FROM  donations WHERE user_id = '$userId'") or die(mysqli_error($con));
$donationsCount = mysqli_num_rows($donations);

$amount = mysqli_query($con, "SELECT * FROM  users WHERE user_id = '$userId'") or die(mysqli_error($con));
$arow = mysqli_fetch_array($amount);
$amountNeeded = $arow['donation_amount'];

$user_donation_query = mysqli_query($con, "SELECT SUM(amount) as totalDonations FROM donations WHERE user_id = '$userId'") or die(myslqli_error($con));
$raisedDonations = mysqli_fetch_array($user_donation_query);
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
    <title>Volunteer NG | Dashboard</title>
    <link rel="stylesheet" href="./css/howYouCanHelp.css" />
    <link rel="stylesheet" href="./css/style.css" />
    <link href="./css/fontawesome/css/all.min.css" rel="stylesheet" />
    <link rel="icon" href="https://res.cloudinary.com/judejax/image/upload/v1567639756/favicon.ico" alt="Volunteeer NG Icon" sizes="16x16" type="image/png" />

</head>

<body>

    <!-- Header -->
    <header>
        <div class="container">
            <div id="branding">
                <a href="index.html">
                    <img src="https://res.cloudinary.com/judejax/image/upload/v1567639575/logo.png" alt="Volunteeer Logo" title="Volunteer NG" width="165" height="70" />
                </a>
            </div>
            <nav>
                <ul>
                    <li><a href=""> <i class="fas fa-user white-fa"></i> <?php echo $userName ?></a></li>
                    <li class="auth_button">
                        <a href="logout.php"> <i class="fas fa-sign-out-alt white-fa"></i>
                            Logout </a>
                    </li>
                </ul>
            </nav>
        </div>
    </header>

    <div class="container">
        <p>
            <h1>Welcome <?php echo $userName ?>, </h1>
        </p>
        <i>Here are your stats </i>

        <!-- Stats  -->
        <section>
            <div class='page-wrapper'>
                <div class='row  u-margin-top-small'>
                    <div class='column'>
                        <div class='col-1-of-3'>
                            <span style="font-size: 60px;"> <?php echo $donationsCount ?> </span>
                            <h2 class="heading-tertiary u-margin-top-small u-margin-bottom-small">Donations</h2>
                        </div>
                    </div>
                    <div class='column'>
                        <div class='col-2-of-3'>
                            <span style="font-size: 60px;">N<?php echo $amountNeeded ?> </span>
                            <h2 class="heading-tertiary  u-margin-top-small u-margin-bottom-small">Amount Needed</h2>
                        </div>
                    </div>
                    <div class='column'>
                        <div class='col-3-of-3'>
                            <span style="font-size: 60px;"><b>N<?php echo $raisedDonations['totalDonations'] ?> </b></span>
                            <h2 class="heading-tertiary u-margin-top-small u-margin-bottom-small">Amount Raised</h2>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <?php

        if ($donationsCount > 0) { ?>

            <p>
                <h1>Donations</h1>
            </p>

            <table id="donations">
                <tr>
                    <th>S/N</th>
                    <th>Full Name</th>
                    <th>Amount Donated</th>
                    <th>Email</th>
                    <th>Phone</th>
                </tr>

                <?php
                    $i = 1;
                    while ($row = mysqli_fetch_array($donations)) { ?>
                    <tr>
                        <td><?php echo $i ?></td>
                        <td><?php echo $row['name_of_donor'] ?></td>
                        <td><b>N<?php echo $row['amount'] ?></b></td>
                        <td><?php echo $row['email_of_donor'] ?></td>
                        <td><?php echo $row['phone'] ?></td>
                    </tr>
                <?php
                        $i++;
                    } ?>
            </table>
        <?php
        }

        ?>


    </div>
    <br><br><br>
    <br><br><br>


</body>

</html>