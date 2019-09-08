<?php

$userId = $_GET['id'];

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>VolunteerNG | Donate</title>
    <link rel="stylesheet" href="./css/style.css" />
    <link href="./css/fontawesome/css/fontawesome.css" rel="stylesheet" />
    <link href="./css/fontawesome/css/brands.css" rel="stylesheet" />
    <link href="./css/fontawesome/css/solid.css" rel="stylesheet" />
    <link rel="icon" href="https://res.cloudinary.com/judejax/image/upload/v1567639756/favicon.ico" alt="Volunteeer NG Icon" sizes="16x16" type="image/png" />
</head>

<body>

    <style type="text/css">
        .form-style-2 {
            max-width: 500px;
            padding: 20px 12px 10px 20px;
            font: 13px Arial, Helvetica, sans-serif;
            float: center;
        }

        .form-style-2-heading {
            font-weight: bold;
            font-style: italic;
            border-bottom: 2px solid #ddd;
            margin-bottom: 20px;
            font-size: 15px;
            padding-bottom: 3px;
        }

        .form-style-2 label {
            display: block;
            margin: 0px 0px 15px 0px;
        }

        .form-style-2 label>span {
            width: 100px;
            font-weight: bold;
            float: left;
            padding-top: 8px;
            padding-right: 5px;
        }

        .form-style-2 span.required {
            color: red;
        }

        .form-style-2 .tel-number-field {
            width: 40px;
            text-align: center;
        }

        .form-style-2 input.input-field,
        .form-style-2 .select-field {
            width: 48%;
        }

        .form-style-2 input.input-field,
        .form-style-2 .tel-number-field,
        .form-style-2 .textarea-field,
        .form-style-2 .select-field {
            box-sizing: border-box;
            -webkit-box-sizing: border-box;
            -moz-box-sizing: border-box;
            border: 1px solid #C2C2C2;
            box-shadow: 1px 1px 4px #EBEBEB;
            -moz-box-shadow: 1px 1px 4px #EBEBEB;
            -webkit-box-shadow: 1px 1px 4px #EBEBEB;
            border-radius: 3px;
            -webkit-border-radius: 3px;
            -moz-border-radius: 3px;
            padding: 7px;
            outline: none;
        }

        .form-style-2 .input-field:focus,
        .form-style-2 .tel-number-field:focus,
        .form-style-2 .textarea-field:focus,
        .form-style-2 .select-field:focus {
            border: 1px solid #0C0;
        }

        .form-style-2 .textarea-field {
            height: 100px;
            width: 55%;
        }

        .form-style-2 input[type=submit],
        .form-style-2 input[type=button] {
            border: none;
            padding: 8px 15px 8px 15px;
            background: #188038;
            color: #fff;
            box-shadow: 1px 1px 4px #DADADA;
            -moz-box-shadow: 1px 1px 4px #DADADA;
            -webkit-box-shadow: 1px 1px 4px #DADADA;
            border-radius: 3px;
            -webkit-border-radius: 3px;
            -moz-border-radius: 3px;
        }

        .form-style-2 input[type=submit]:hover,
        .form-style-2 input[type=button]:hover {
            background: #cccfcb;
            color: #fff;
        }
    </style>

    <!-- Top Header -->
    <div class="top-header">
        <div class="container">
            <div id="branding">
                <a href=""><i class="fab fa-facebook"></i> </a> &nbsp; &nbsp; &nbsp;
                <a href=""><i class="fab fa-instagram"></i> </a> &nbsp; &nbsp; &nbsp;
                <a href=""><i class="fab fa-twitter"></i> </a> &nbsp; &nbsp; &nbsp;
                <a href=""><i class="fab fa-youtube"></i> </a> &nbsp; &nbsp; &nbsp;
            </div>
            <nav>
                <ul>
                    <li class="current"><i class="fa fa-phone"></i> +234 7071234567</li>
                    <li><i class="fa fa-envelope"></i> volunteerng@gmail.com</li>
                </ul>
            </nav>
        </div>
    </div>

    <!-- Header -->
    <header>
        <div class="container">
            <div id="branding">
                <img src="https://res.cloudinary.com/judejax/image/upload/v1567639575/logo.png" alt="Volunteeer Logo" title="Volunteer NG" width="120" height="70" />
            </div>
            <nav>
                <ul>
                    <li><a href="index.html">Home</a></li>
                    <li><a href="entities.php">Entities</a></li>
                    <li><a href="about.html">About</a></li>
                    <li><a href="team.php">The Team</a></li>
                    <li class="auth_button"><a href="login.php"> <i class="fa fa-user"></i> Login</a></li>
                    <li class="auth_button"><a href="signup.php"> <i class="fa fa-person-booth"></i> Sign Up</a></li>
                </ul>
            </nav>
        </div>
    </header>

    <section id="team-header">
        <h1>Welcome to the page for World Changers!</h1>
        <p>
            Statistics show that about 7.1 million people in Nigeria are in need of humanitarian
            assistance. Your donations go a long way in helping a child, a teenager, an adult or the
            elderly live a better life. <br><br>
            About 80 percent of Small and Medium Enterprises, SMEs, in Nigeria fail within the first five
            years of their existence due to lack of experience and other wrong business practices.
        </p>
        <br />
        <h5>
            You're just one step from changing the future!!!
        </h5>
    </section>

    <div class="container">

        <div class="form-style-2">
            <div class="form-style-2-heading">Provide your information</div>
            <form action="pay.php" method="get">
                <input type="hidden" name="user" value="<?php echo $userId; ?>">
                <label for="field1"><span>First Name <span class="required">*</span></span><input type="text" class="input-field" name="firstname" value="" /></label>
                <label for="field1"><span>Last Name <span class="required">*</span></span><input type="text" class="input-field" name="lastname" value="" /></label>
                <label for="field2"><span>Email <span class="required">*</span></span><input type="text" class="input-field" name="email" value="" /></label>
                <label for="field2"><span>Amount to Donate <span class="required">*</span></span><input type="text" class="input-field" name="amount" value="" /></label>

                <label><span> </span><input type="submit" value="Submit" /></label>
            </form>
        </div>



    </div>

</body>

</html>