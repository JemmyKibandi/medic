<?php 
session_start();
if (isset($_COOKIE['CULLENMEDICALSHOP2024'])) {
	require_once "dbcon.php";
	$query = "SELECT `user_email` FROM `user` WHERE `user_id`= '$_COOKIE[CULLENMEDICALSHOP2024]'";
    $result = mysqli_query($db, $query);
	if (mysqli_num_rows($result) == 1) {
		$row = $result->fetch_assoc();
        $_SESSION['user_email'] = $row['user_email'];
		$_SESSION['user_id']=$_COOKIE['CULLENMEDICALSHOP2024'];
      header('location: index.php');
      exit();}	
	}
?>

<!DOCTYPE html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <title>Vicodin - Medical eCommerce HTML Template</title>
    <meta name="robots" content="noindex, follow" />
    <meta name="description" content="" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

    <!-- Place favicon.png in the root directory -->
    <link rel="shortcut icon" href="img/favicon.png" type="image/x-icon" />
    <!-- Font Icons css -->
    <link rel="stylesheet" href="css/font-icons.css" />
    <!-- plugins css -->
    <link rel="stylesheet" href="css/plugins.css" />
    <!-- Main Stylesheet -->
    <link rel="stylesheet" href="css/style.css" />
    <!-- Responsive css -->
    <link rel="stylesheet" href="css/responsive.css" />
</head>

<body>
    <!-- Body main wrapper start -->
    <div class="body-wrapper">

        <!-- HEADER AREA START (header-3) -->
        <header class="ltn__header-area ltn__header-3">
            <!-- ltn__header-top-area start -->
            <div class="ltn__header-top-area border-bottom">
                <div class="container">
                    <div class="row">
                        <div class="col-md-7">
                            <div class="ltn__top-bar-menu">
                                <ul>
                                    <li>
                                        <a href="mailto:info@webmail.com?Subject=Flower%20greetings%20to%20you"><i
                                                class="icon-mail"></i> info@webmail.com</a>
                                    </li>
                                    <li>
                                        <a href="locations.html"><i class="icon-placeholder"></i> 15/A, Nest Tower,
                                            NYC</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-md-5">
                            <div class="top-bar-right text-right text-end">
                                <div class="ltn__top-bar-menu">
                                    <ul>
                                        <li>
                                            <!-- ltn__language-menu -->
                                            <div class="ltn__drop-menu ltn__currency-menu ltn__language-menu">
                                                <ul>
                                                    <li>
                                                        <a href="#" class="dropdown-toggle"><span
                                                                class="active-currency">English</span></a>
                                                        <ul>
                                                            <li><a href="#">Arabic</a></li>
                                                            <li><a href="#">Bengali</a></li>
                                                            <li><a href="#">Chinese</a></li>
                                                            <li><a href="#">English</a></li>
                                                            <li><a href="#">French</a></li>
                                                            <li><a href="#">Hindi</a></li>
                                                        </ul>
                                                    </li>
                                                </ul>
                                            </div>
                                        </li>
                                        <li>
                                            <!-- ltn__social-media -->
                                            <div class="ltn__social-media">
                                                <ul>
                                                    <li>
                                                        <a href="#" title="Facebook"><i
                                                                class="fab fa-facebook-f"></i></a>
                                                    </li>
                                                    <li>
                                                        <a href="#" title="Twitter"><i class="fab fa-twitter"></i></a>
                                                    </li>

                                                    <li>
                                                        <a href="#" title="Instagram"><i
                                                                class="fab fa-instagram"></i></a>
                                                    </li>
                                                    <li>
                                                        <a href="#" title="Dribbble"><i class="fab fa-dribbble"></i></a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ltn__header-top-area end -->
            <!-- ltn__header-middle-area start -->
            <div class="ltn__header-middle-area"
                style="background: linear-gradient(to bottom, #14a368, #ffffff); height: 100px;">
                <div class="container">
                    <div class="row">
                        <div class="col">
                            <div class="site-logo">
                                <a href="index.php"><img src="img/Cullen Logo-02.png" style="height:100px; width:100px;" alt="Logo" /></a>
                            </div>
                        </div>
                        <div class="col header-contact-serarch-column d-none d-lg-block">
                            <div class="header-contact-search">
                                <!-- header-feature-item -->
                                <div class="header-feature-item">
                                    <div class="header-feature-icon">
                                        <i class="icon-call"></i>
                                    </div>
                                    <div class="header-feature-info">
                                        <h6>Phone</h6>
                                        <p><a href="tel:0123456789">+0123-456-789</a></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <!-- header-options -->
                            <div class="ltn__header-options">
                                <ul>
                                    <li class="d-none">
                                        <!-- ltn__currency-menu -->
                                        <div class="ltn__drop-menu ltn__currency-menu">
                                            <ul>
                                                <li>
                                                    <a href="#" class="dropdown-toggle"><span
                                                            class="active-currency">USD</span></a>
                                                    <ul>
                                                        <li><a href="login.html">USD - US Dollar</a></li>
                                                        <li>
                                                            <a href="wishlist.html">CAD - Canada Dollar</a>
                                                        </li>
                                                        <li><a href="register.html">EUR - Euro</a></li>
                                                        <li>
                                                            <a href="account.html">GBP - British Pound</a>
                                                        </li>
                                                        <li>
                                                            <a href="wishlist.html">INR - Indian Rupee</a>
                                                        </li>
                                                        <li>
                                                            <a href="wishlist.html">BDT - Bangladesh Taka</a>
                                                        </li>
                                                        <li>
                                                            <a href="wishlist.html">JPY - Japan Yen</a>
                                                        </li>
                                                        <li>
                                                            <a href="wishlist.html">AUD - Australian Dollar</a>
                                                        </li>
                                                    </ul>
                                                </li>
                                            </ul>
                                        </div>
                                    </li>
                                    <li class="d-lg-none">
                                        <!-- header-search-1 -->
                                        <div class="header-search-wrap">
                                            <div class="header-search-1">
                                                <div class="search-icon">
                                                    <i class="icon-search for-search-show"></i>
                                                    <i class="icon-cancel for-search-close"></i>
                                                </div>
                                            </div>
                                            <div class="header-search-1-form">
                                                <form id="#" method="get" action="#">
                                                    <input type="text" name="search" value=""
                                                        placeholder="Search here..." />
                                                    <button type="submit">
                                                        <span><i class="icon-search"></i></span>
                                                    </button>
                                                </form>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="d-none---">
                                        <!-- user-menu -->
                                        <div class="ltn__drop-menu user-menu">
                                            <ul>
                                                <li>
                                                    <a href="#"><i class="icon-user"></i></a>
                                                    <ul>
                                                        <li><a href="login.html">Sign in</a></li>
                                                        <li><a href="register.html">Register</a></li>
                                                        <li><a href="account.html">My Account</a></li>
                                                        <li><a href="wishlist.html">Wishlist</a></li>
                                                    </ul>
                                                </li>
                                            </ul>
                                        </div>
                                    </li>
                                    <li>
                                        <!-- mini-cart 2 -->
                                        <div class="mini-cart-icon mini-cart-icon-2">
                                            <a href="#" class="ltn__utilize-toggle">
                                                <span class="mini-cart-icon">
                                                    <i class="icon-shopping-cart"></i>
                                                    <sup>2</sup>
                                                </span>
                                                <h6>
                                                    <span>Your Cart</span>
                                                    <span class="ltn__secondary-color">$89.25</span>
                                                </h6>
                                            </a>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ltn__header-middle-area end -->
        </header>
        <!-- Utilize Cart Menu Start -->

        <!-- Utilize Cart Menu End -->

        <!-- Utilize Mobile Menu Start -->
        <div id="ltn__utilize-mobile-menu" class="ltn__utilize ltn__utilize-mobile-menu">
            <div class="ltn__utilize-menu-inner ltn__scrollbar">
                <div class="ltn__utilize-menu-head">
                    <div class="site-logo">
                        <a href="index.php"><img src="img/Cullen Logo-02.png" style="height:100px; width:100px;" alt="Logo" /></a>
                    </div>
                    <button class="ltn__utilize-close">×</button>
                </div>
                <div class="ltn__utilize-menu-search-form">
                    <form action="#">
                        <input type="text" placeholder="Search..." />
                        <button><i class="fas fa-search"></i></button>
                    </form>
                </div>
                <div class="ltn__utilize-menu">
                    <ul>
                        <li>
                            <a href="#">Home</a>
                            <ul class="sub-menu">
                                <li><a href="index.php">Home Style 01</a></li>
                                <li><a href="index-2.html">Home Style 02</a></li>
                                <li><a href="index-3.html">Home Style 03</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="#">About</a>
                            <ul class="sub-menu">
                                <li><a href="about.html">About</a></li>
                                <li><a href="service.html">Services</a></li>
                                <li><a href="service-details.html">Service Details</a></li>
                                <li><a href="portfolio.html">Portfolio</a></li>
                                <li><a href="portfolio-2.html">Portfolio - 02</a></li>
                                <li>
                                    <a href="portfolio-details.html">Portfolio Details</a>
                                </li>
                                <li><a href="team.html">Team</a></li>
                                <li><a href="team-details.html">Team Details</a></li>
                                <li><a href="faq.html">FAQ</a></li>
                                <li><a href="locations.html">Google Map Locations</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="#">Shop</a>
                            <ul class="sub-menu">
                                <li><a href="shop.php">Shop</a></li>
                                <li><a href="shop-grid.html">Shop Grid</a></li>
                                <li>
                                    <a href="shop-left-sidebar.html">Shop Left sidebar</a>
                                </li>
                                <li>
                                    <a href="shop-right-sidebar.html">Shop right sidebar</a>
                                </li>
                                <li><a href="product-details.php">Shop details </a></li>
                                <li><a href="cart.html">Cart</a></li>
                                <li><a href="wishlist.html">Wishlist</a></li>
                                <li><a href="checkout.html">Checkout</a></li>
                                <li><a href="order-tracking.html">Order Tracking</a></li>
                                <li><a href="account.html">My Account</a></li>
                                <li><a href="login.html">Sign in</a></li>
                                <li><a href="register.html">Register</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="#">News</a>
                            <ul class="sub-menu">
                                <li><a href="blog.html">News</a></li>
                                <li><a href="blog-grid.html">News Grid</a></li>
                                <li>
                                    <a href="blog-left-sidebar.html">News Left sidebar</a>
                                </li>
                                <li>
                                    <a href="blog-right-sidebar.html">News Right sidebar</a>
                                </li>
                                <li><a href="blog-details.html">News details</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="#">Pages</a>
                            <ul class="sub-menu">
                                <li><a href="about.html">About</a></li>
                                <li><a href="service.html">Services</a></li>
                                <li><a href="service-details.html">Service Details</a></li>
                                <li><a href="portfolio.html">Portfolio</a></li>
                                <li><a href="portfolio-2.html">Portfolio - 02</a></li>
                                <li>
                                    <a href="portfolio-details.html">Portfolio Details</a>
                                </li>
                                <li><a href="team.html">Team</a></li>
                                <li><a href="team-details.html">Team Details</a></li>
                                <li><a href="faq.html">FAQ</a></li>
                                <li><a href="history.html">History</a></li>
                                <li><a href="add-listing.html">Add Listing</a></li>
                                <li><a href="locations.html">Google Map Locations</a></li>
                                <li><a href="404.html">404</a></li>
                                <li><a href="contact.html">Contact</a></li>
                                <li><a href="coming-soon.html">Coming Soon</a></li>
                            </ul>
                        </li>
                        <li><a href="contact.html">Contact</a></li>
                    </ul>
                </div>
                <div class="ltn__utilize-buttons ltn__utilize-buttons-2">
                    <ul>
                        <li>
                            <a href="account.html" title="My Account">
                                <span class="utilize-btn-icon">
                                    <i class="far fa-user"></i>
                                </span>
                                My Account
                            </a>
                        </li>
                        <li>
                            <a href="wishlist.html" title="Wishlist">
                                <span class="utilize-btn-icon">
                                    <i class="far fa-heart"></i>
                                    <sup>3</sup>
                                </span>
                                Wishlist
                            </a>
                        </li>
                        <li>
                            <a href="cart.html" title="Shoping Cart">
                                <span class="utilize-btn-icon">
                                    <i class="fas fa-shopping-cart"></i>
                                    <sup>5</sup>
                                </span>
                                Shoping Cart
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="ltn__social-media-2">
                    <ul>
                        <li>
                            <a href="#" title="Facebook"><i class="fab fa-facebook-f"></i></a>
                        </li>
                        <li>
                            <a href="#" title="Twitter"><i class="fab fa-twitter"></i></a>
                        </li>
                        <li>
                            <a href="#" title="Linkedin"><i class="fab fa-linkedin"></i></a>
                        </li>
                        <li>
                            <a href="#" title="Instagram"><i class="fab fa-instagram"></i></a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- Utilize Mobile Menu End -->

        <div class="ltn__utilize-overlay"></div>
        <?php if (isset($_SESSION['succ'])) { ?>
        <div class="alert border-0 border-start border-5 border-success alert-dismissible fade show py-2">
            <div class="d-flex align-items-center">
                <div class="font-35 text-success"><i class="bx bxs-check-circle"></i>
                </div>
                <div class="ms-3">
                    <h6 class="mb-0 text-success">Success Alert</h6>
                    <div><?php echo $_SESSION['succ'];
                                    unset($_SESSION['succ']); ?></div>
                </div>
            </div>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div><?php } ?>
        <?php if (isset($_SESSION['err'])) { ?><div
            class="alert border-0 border-start border-5 border-danger alert-dismissible fade show py-2">
            <div class="d-flex align-items-center">
                <div class="font-35 text-danger"><i class="bx bxs-message-square-x"></i>
                </div>
                <div class="ms-3">
                    <h6 class="mb-0 text-danger">Error Alert</h6>
                    <div><?php echo $_SESSION['err'];
                                    unset($_SESSION['err']); ?></div>
                </div>
            </div>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
        <?php } ?>
        <!-- LOGIN AREA START -->
        <div class="ltn__login-area pb-65">
            <div class="container">
                <div class="row text-center">
                    <div class="col-lg-6 mx-auto">
                        <!-- Added mx-auto class here -->
                        <div class="account-login-inner">
                            <form method="post" action="server.php" enctype="multipart/form-data"
                                class="ltn__form-box contact-form-box">
                                <input type="text" name="email" placeholder="Email*" />
                                <input type="password" name="password" placeholder="Password*" />
                                <div class="btn-wrapper mt-0">
                                    <button class="theme-btn-1 btn btn-block" type="submit" name="login">SIGN
                                        IN</button>
                                </div>
                                <div class="go-to-btn mt-20">
                                    <a href="#"><small>FORGOTTEN YOUR PASSWORD?</small></a>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>

            </div>
        </div>
        <!-- LOGIN AREA END -->

        <!-- CALL TO ACTION START (call-to-action-6) -->
        <div class="ltn__call-to-action-area call-to-action-6 before-bg-bottom" data-bs-bg="img/1.jpg--">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div
                            class="call-to-action-inner call-to-action-inner-6 ltn__secondary-bg position-relative text-center---">
                            <div class="coll-to-info text-color-white">
                                <h1>
                                    Buy medical disposable face mask <br />
                                    to protect your loved ones
                                </h1>
                            </div>
                            <div class="btn-wrapper">
                                <a class="btn btn-effect-3 btn-white" href="shop.php">Explore Products <i
                                        class="icon-next"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- CALL TO ACTION END -->
        <?php include_once('../vicodin/footer.php');?>

    </div>
    <!-- Body main wrapper end -->

    <!-- All JS Plugins -->
    <script src="js/plugins.js"></script>
    <!-- Main JS -->
    <script src="js/main.js"></script>
</body>


</html>