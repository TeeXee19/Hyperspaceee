<!doctype html>
<html lang="en">
<?php
	include_once("config/session.php");

	if(!isset($_SESSION["registration_error"])){

		$_SESSION["registration_error"] = null;

	}
?>

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="Hyperspace Admin Panel" />
    <meta name="keywords" content="Register" />
    <meta name="author" content="Hyperspace Africa" />
    <link rel="shortcut icon" href="img/favicon.ico" />
    <title>Hyperspace Admin Dashboard - Register</title>

    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700" rel="stylesheet">

    <!-- Common CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <link rel="stylesheet" href="fonts/icomoon/icomoon.css" />

    <!-- Mian and Login css -->
    <link rel="stylesheet" href="css/main.css" />

</head>

<body class="login-bg">

    <div class="container">
        <div class="login-screen row align-items-center">
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                <form action="controllers/registerController.php" method="POST">
                    <div class="login-container">
                        <div class="row no-gutters">
                            <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12">
                                <div class="login-box">
                                    <a href="#" class="login-logo">
                                        <img src="img/hyperspace-logo.png" alt="Hyperspace Admin Dashboard" />
                                    </a>
                                    <div class="input-group">
                                        <span class="input-group-addon"><i class="icon-account_circle"></i></span>
                                        <input type="text" required="" name="firstname" class="form-control"
                                            placeholder="Firstname">
                                    </div>
                                    <br>
                                    <div class="input-group">
                                        <span class="input-group-addon"><i class="icon-account_circle"></i></span>
                                        <input type="text" required="" name="lastname" class="form-control"
                                            placeholder="Lastname">
                                    </div>
                                    <br>
                                    <div class="input-group">
                                        <span class="input-group-addon"><i class="icon-email"></i></span>
                                        <input type="email" required="" name="email" class="form-control"
                                            placeholder="Email Address">
                                    </div>
                                    <br>
                                    <div class="input-group">
                                        <span class="input-group-addon"><i class="icon-verified_user"></i></span>
                                        <input type="password" required="" name="password" class="form-control"
                                            placeholder="Password">
                                    </div>
                                    <?php
                                        if( $_SESSION["registration_error"] != null)
                                        {
                                        ?>
                                        <br />
                                        <div class="alert alert-info">
                                            <p class="text-center">
                                                <?php
                                                    echo($_SESSION["registration_error"]);
                                                ?>
                                            </p>
                                        </div>
                                        <?php
                                        }
                                    ?>
                                    <div class="actions clearfix">
                                        <button type="submit" name="register" class="btn btn-primary">Register</button>
                                    </div>
                                    <div class="or"></div>
                                    <div class="mt-4">
                                        <a href="index.php" class="additional-link">Already have an Account? <span>Login
                                                Now</span></a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-8 col-lg-8 col-md-6 col-sm-12">
                                <div class="login-slider"></div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <footer class="main-footer no-bdr fixed-btm">
        <div class="container">
            Copyright Hyperspace Admin 2019.
        </div>
    </footer>
</body>


</html>