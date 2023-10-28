<?php
session_start();

//use App\DBController, App\RegistrationController;
use App\Services\App, App\Controllers\Auth;

require_once __DIR__ . "/../vendor/autoload.php";
App::start();
require_once __DIR__ . "/../router/routes.php";



?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Home 01</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" type="image/png" href="../images/icons/favicon.png"/>
    <link rel="stylesheet" type="text/css" href="../vendor/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="../fonts/fontawesome-5.0.8/css/fontawesome-all.min.css">
    <link rel="stylesheet" type="text/css" href="../fonts/iconic/css/material-design-iconic-font.min.css">
    <link rel="stylesheet" type="text/css" href="../vendor/animate/animate.css">
    <link rel="stylesheet" type="text/css" href="../vendor/css-hamburgers/hamburgers.min.css">
    <link rel="stylesheet" type="text/css" href="../vendor/animsition/css/animsition.min.css">
    <link rel="stylesheet" type="text/css" href="../css/util.min.css">
    <link rel="stylesheet" type="text/css" href="../css/main.css">
</head>
<?php ?>

<body class="animsition">
<!-- Header -->

<header>
    <!-- Header desktop -->
    <div class="container-menu-desktop">
        <div class="topbar">
            <div class="content-topbar container h-100">
                <div class="left-topbar">
						<span class="left-topbar-item flex-wr-s-c">
							<span>
								New York, NY
							</span>

							<img class="m-b-1 m-rl-8" src="../images/icons/icon-night.png" alt="IMG">

							<span>
								HI 58° LO 56°
							</span>
						</span>

                    <a href="#" class="left-topbar-item">
                        About
                    </a>

                    <a href="#" class="left-topbar-item">
                        Contact
                    </a>

                    <?php if (isset($_SESSION['user'])) { ?>
                        <form action="/auth/logout" method="post">
                            <button type="submit" class="left-topbar-item">Logout</button>
                        </form>
                        <span class="left-topbar-item flex-wr-s-c">
            <span>
HI, <?= $_SESSION['user']['fname'] . " " . $_SESSION['user']['lname']; ?>            </span>
        </span>

                    <?php } else { ?>
                        <a href="/register" class="left-topbar-item">
                            Sign up
                        </a>

                        <a href="/login" class="left-topbar-item">
                            Log in
                        </a>
                    <?php } ?>
                </div>

                <div class="right-topbar">
                    <a href="#">
                        <span class="fab fa-facebook-f"></span>
                    </a>

                    <a href="#">
                        <span class="fab fa-twitter"></span>
                    </a>

                    <a href="#">
                        <span class="fab fa-pinterest-p"></span>
                    </a>

                    <a href="#">
                        <span class="fab fa-vimeo-v"></span>
                    </a>

                    <a href="#">
                        <span class="fab fa-youtube"></span>
                    </a>
                </div>
            </div>
        </div>

        <!-- Header Mobile -->
        <div class="wrap-header-mobile">
            <!-- Logo moblie -->
            <div class="logo-mobile">
                <a href="../index.php"><img src="../images/icons/logo-01.png" alt="IMG-LOGO"></a>
            </div>

            <!-- Button show menu -->
            <div class="btn-show-menu-mobile hamburger hamburger--squeeze m-r--8">
					<span class="hamburger-box">
						<span class="hamburger-inner"></span>
					</span>
            </div>
        </div>

        <!-- Menu Mobile -->
        <div class="menu-mobile">
            <ul class="topbar-mobile">
                <li class="left-topbar">
						<span class="left-topbar-item flex-wr-s-c">
							<span>
								New York, NY
							</span>

							<img class="m-b-1 m-rl-8" src="../images/icons/icon-night.png" alt="IMG">

							<span>
								HI 58° LO 56°
							</span>
						</span>
                </li>

                <li class="left-topbar">
                    <a href="#" class="left-topbar-item">
                        About
                    </a>

                    <a href="#" class="left-topbar-item">
                        Contact
                    </a>

                    <?php if (isset($_SESSION['user'])) { ?>
                        <form action="/auth/logout" method="post">
                            <button type="submit" class="left-topbar-item">Logout</button>
                        </form>
                        <span class="left-topbar-item flex-wr-s-c">
            <span>
HI, <?= $_SESSION['user']['fname'] . " " . $_SESSION['user']['lname']; ?>            </span>
        </span>

                    <?php } else { ?>
                        <a href="/register" class="left-topbar-item">
                            Sign up
                        </a>

                        <a href="/login" class="left-topbar-item">
                            Log in
                        </a>
                    <?php } ?>
                </li>

                <li class="right-topbar">
                    <a href="#">
                        <span class="fab fa-facebook-f"></span>
                    </a>

                    <a href="#">
                        <span class="fab fa-twitter"></span>
                    </a>

                    <a href="#">
                        <span class="fab fa-pinterest-p"></span>
                    </a>

                    <a href="#">
                        <span class="fab fa-vimeo-v"></span>
                    </a>

                    <a href="#">
                        <span class="fab fa-youtube"></span>
                    </a>
                </li>
            </ul>
            <?php include("navbar.php") ?>
        </div>
</header>