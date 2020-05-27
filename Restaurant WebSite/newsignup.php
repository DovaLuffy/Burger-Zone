<?php include('server.php'); ?>


<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Colorlib Templates">
    <meta name="author" content="Colorlib">
    <meta name="keywords" content="Colorlib Templates">

    <!-- Title Page-->
    <title>Sign Up</title>

    <!-- Icons font CSS-->
    <!-- <link href="vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all"> -->
    <link rel="stylesheet" href="Signup Form/vendor/mdi-font/css/material-design-iconic-font.min.css" media="all">

    <!-- <link href="vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all"> -->

    <link rel="stylesheet" href="Signup Form/vendor/font-awesome-4.7/css/font-awesome.min.css" media="all">
    <!-- Font special for pages-->
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i" rel="stylesheet">


    <!-- Vendor CSS-->
    <!-- <link href="vendor/select2/select2.min.css" rel="stylesheet" media="all"> -->

    <link rel="stylesheet" href="Signup Form/vendor/select2/select2.min.css" media="all">

    <!-- <link href="vendor/datepicker/daterangepicker.css" rel="stylesheet" media="all"> -->

    <link rel="stylesheet" href="Signup Form/vendor/datepicker/daterangepicker.css" media="all">

    <!-- Main CSS-->
    <!-- <link href="css/main.css" rel="stylesheet" media="all"> -->

    <link rel="stylesheet" href="Signup Form/css/main.css" media="all">

    <link rel="stylesheet" href="Signup Form/css/style.css" media="all">
    <link rel="stylesheet" href="Signup Form/css/random.css" media="all">
    

</head>

<body>
    <div id="wrapper" class="page-wrapper bg-red p-t-180 p-b-100 font-robo">
        <div class="wrapper wrapper--w960">
            <div id="card" class="card card-2">
                <div class="card-heading"></div>
                <div class="card-body">
                    <h2 class="title">Registration Info</h2>

                    <form action="newsignup.php" method="POST">
                        <?php include('errors.php'); ?>
                        <div class="input-group">
                            <input class="input--style-2" type="text" placeholder="Username" id="username" name="username" value="<?php echo $username; ?>">
                        </div>
                        <div class="row row-space">

                            <div class="col-2">
                                <div class="input-group">
                                    <div class="rs-select2 js-select-simple select--no-search">


                                        <input class="input--style-2" type="email" placeholder="email" id="email" name="email" value="<?php echo $email; ?>">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="input-group">
                            <div class="rs-select2 js-select-simple select--no-search">
                                <input class="input--style-2" type="password" placeholder="Password" id="password" name="password_1">

                            </div>
                        </div>
                        <div class="input-group">
                            <div class="rs-select2 js-select-simple select--no-search">

                                <input class="input--style-2" type="password" placeholder="Confirm Password" id="confirmed" name="password_2">

                            </div>
                        </div>
                        <div class="p-t-30">
                            <button id="signup" name="signUp" class="btn btn--radius btn--green" type="submit">Sign up</button>
                        </div>
                        <div id="sign-up-div">
                            <span class="sign-up-black">Already a member?</span> <a class="log-in" href="newlogin.php"> <span id="gg" class="sign-up">Log In</span> </a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Jquery JS-->
    <!-- <script src="vendor/jquery/jquery.min.js"></script> -->

    <script src="Signup Form/vendor/jquery/jquery.min.js"></script>
    <!-- Vendor JS-->
    <!-- <script src="vendor/select2/select2.min.js"></script> -->

    <script src="Signup Form/vendor/select2/select2.min.css"></script>

    <!-- <script src="vendor/datepicker/moment.min.js"></script> -->

    <script src="Signup Form/vendor/datepicker/moment.min.js"></script>

    <!-- <script src="vendor/datepicker/daterangepicker.js"></script> -->

    <script src="Signup Form/vendor/datepicker/daterangepicker.js"></script>

    <!-- Main JS-->
    <!-- <script src="js/global.js"></script> -->

    <!-- <script src="Signup Form/js/global.js"></script> -->

    <!-- <script src="js/app.js"></script> -->

    <!-- <script src="Signup Form/js/app.js"></script> -->

</body>
<!-- This templates was made by Colorlib (https://colorlib.com) -->

</html>
<!-- end document-->