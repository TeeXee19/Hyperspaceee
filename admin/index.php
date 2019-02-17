<!doctype html>
<html lang="en">

<?php
	include_once("config/session.php");

	if(!isset($_SESSION["login_error"])){

		$_SESSION["login_error"] = null;

	}
		

?>

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="Hyperspace Admin Panel" />
    <meta name="keywords"
        content="Login, Hyperspace Login, Admin, Dashboard, Bootstrap4, Sass, CSS3, HTML5, Responsive Dashboard, Responsive Admin Template, Admin Template, Best Admin Template, Bootstrap Template, Themeforest" />
    <meta name="author" content="Bootstrap Gallery" />
    <link rel="shortcut icon" href="img/favicon.ico" />
    <title>Hyperspace - Login</title>

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
                <form action="http://bootstrap.gallery/unify-admin/design-9/index.html">
                    <div class="login-container">
                        <div class="row no-gutters">
                            <div class="col-xl-4 col-lg-5 col-md-6 col-sm-12">
                                <div class="login-box">
                                    <a href="#" class="login-logo">
                                        <img src="img/hyperspace-logo.png" alt="Hyperspace Dashboard" />
                                    </a>
                                    <div class="input-group">
                                        <span class="input-group-addon" id="username"><i
                                                class="icon-account_circle"></i></span>
                                        <input type="text" class="form-control" placeholder="Username"
                                            aria-label="username" aria-describedby="username">
                                    </div>
                                    <br>
                                    <div class="input-group">
                                        <span class="input-group-addon" id="password"><i
                                                class="icon-verified_user"></i></span>
                                        <input type="password" class="form-control" placeholder="Password"
                                            aria-label="Password" aria-describedby="password">
                                    </div>
                                    <?php
											if( $_SESSION["registration_error"] != null)
											{
											?>
                                    <br />
                                    <div class="alert alert-info">
                                        <p class="text-center">
                                            <?php
																echo($_SESSION["login_error"]);
															?>
                                        </p>
                                    </div>
                                    <?php
											}
										?>
                                    <div class="actions clearfix">
                                        <a href="forgot-pwd.html">Lost password?</a>
                                        <button type="submit" class="btn btn-primary">Login</button>
                                    </div>
                                    <div class="or"></div>
                                    <div class="mt-4">
                                        <a href="register.php" class="additional-link">Don't have an Account?
                                            <span>Create Now</span></a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-8 col-lg-7 col-md-6 col-sm-12">
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
            Copyright Hyperspace 2019.
        </div>
    </footer>
</body>


</html>