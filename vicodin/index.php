<?php
session_start();
if (isset($_COOKIE['CULLENMEDICALSHOP2024'])) {
    require_once "dbcon.php";
    $query = "SELECT `user_email` FROM `user` WHERE `user_id`= '$_COOKIE[CULLENMEDICALSHOP2024]'";
    $result = mysqli_query($db, $query);
    if (mysqli_num_rows($result) == 1) {
        $row = $result->fetch_assoc();
        $_SESSION['user_email'] = $row['user_email'];
        $_SESSION['user_id'] = $_COOKIE['CULLENMEDICALSHOP2024'];
        header('location: index.php');
    } else {
        header('location: login.php');
    }
}
require_once "dbcon.php";

?>
<!DOCTYPE html>
<html class="no-js" lang="zxx">
<!-- Mirrored from index/tf/html/vicodin-preview/vicodin/index.php by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 13 Feb 2024 08:53:30 GMT -->

<head>
    <meta charset="utf-8" />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <title>Cullen Medical - Medical eCommerce HTML</title>
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
        <!-- HEADER AREA START (header-5) -->
        <?php include_once('../vicodin/header_big.php'); ?>

        <!-- HEADER AREA END -->
        <!-- Utilize Mobile Menu Start -->
        <?php include_once('../vicodin/header_mobile.php'); ?>
        <!-- Utilize Mobile Menu End -->

        <div class="ltn__utilize-overlay"></div>

        <!-- SLIDER AREA START (slider-3) -->
        <div class="ltn__slider-area ltn__slider-3 section-bg-1">
            <div class="ltn__slide-one-active slick-slide-arrow-1 slick-slide-dots-1">
                <!-- ltn__slide-item -->
                <div class="ltn__slide-item ltn__slide-item-2 ltn__slide-item-3-normal--- ltn__slide-item-3 bg-image bg-overlay-theme-black-60---"
                    data-bs-bg="img/slider/13.jpg">
                    <div class="ltn__slide-item-inner text-left">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-12 align-self-center">
                                    <div class="slide-item-info">
                                        <div class="slide-item-info-inner ltn__slide-animation">
                                            <h6 class="slide-sub-title white-color--- animated">
                                                <span><i class="fas fa-syringe"></i></span> 100%
                                                genuine Products
                                            </h6>
                                            <h1 class="slide-title animated">
                                                Get 20% Discount <br />Of N95 Mask
                                            </h1>
                                            <div class="slide-brief animated">
                                                <p>
                                                    Lorem ipsum dolor sit amet, consectetur adipisicing
                                                    elit, sed do eiusmod tempor incididunt ut labore.
                                                </p>
                                            </div>
                                            <div class="btn-wrapper animated">
                                                <a href="shop.php" class="theme-btn-1 btn btn-effect-1">Shop Now</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- ltn__slide-item -->
                <div class="ltn__slide-item ltn__slide-item-2 ltn__slide-item-3-normal--- ltn__slide-item-3 bg-image bg-overlay-theme-black-60---"
                    data-bs-bg="img/slider/11.jpg">
                    <div class="ltn__slide-item-inner text-center">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-12 align-self-center">
                                    <div class="slide-item-info">
                                        <div class="slide-item-info-inner ltn__slide-animation">
                                            <div class="slide-video mb-50 d-none">
                                                <a class="ltn__video-icon-2 ltn__video-icon-2-border"
                                                    href="https://www.youtube.com/embed/tlThdr3O5Qo"
                                                    data-rel="lightcase:myCollection">
                                                    <i class="fa fa-play"></i>
                                                </a>
                                            </div>
                                            <h6 class="slide-sub-title white-color--- animated">
                                                <span><i class="fas fa-syringe"></i></span> 100%
                                                genuine Products
                                            </h6>
                                            <h1 class="slide-title animated">
                                                Get 20% Discount <br />Of N95 Mask
                                            </h1>
                                            <div class="slide-brief animated">
                                                <p>
                                                    Lorem ipsum dolor sit amet, consectetur adipisicing
                                                    elit, sed do eiusmod tempor incididunt ut labore.
                                                </p>
                                            </div>
                                            <div class="btn-wrapper animated">
                                                <a href="shop.php" class="theme-btn-1 btn btn-effect-1">Shop Now</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- ltn__slide-item -->
                <div class="ltn__slide-item ltn__slide-item-2 ltn__slide-item-3-normal--- ltn__slide-item-3 bg-image bg-overlay-theme-black-60---"
                    data-bs-bg="img/slider/12.jpg">
                    <div class="ltn__slide-item-inner text-right text-end">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-12 align-self-center">
                                    <div class="slide-item-info">
                                        <div class="slide-item-info-inner ltn__slide-animation">
                                            <h6 class="slide-sub-title white-color--- animated">
                                                <span><i class="fas fa-syringe"></i></span> 100%
                                                genuine Products
                                            </h6>
                                            <h1 class="slide-title animated">
                                                Get 20% Discount <br />Of N95 Mask
                                            </h1>
                                            <div class="slide-brief animated">
                                                <p>
                                                    Lorem ipsum dolor sit amet, consectetur adipisicing
                                                    elit, sed do eiusmod tempor incididunt ut labore.
                                                </p>
                                            </div>
                                            <div class="btn-wrapper animated">
                                                <a href="shop.php" class="theme-btn-1 btn btn-effect-1">Shop Now</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--  -->
            </div>
        </div>
        <!-- SLIDER AREA END -->

        <!-- CATEGORY AREA START -->
        <div class="ltn__category-area section-bg-1-- pt-50 pb-90">
            <div class="container">
                <div class="row ltn__category-slider-active-six slick-arrow-1 border-bottom">
                    <div class="col-12">
                        <div class="ltn__category-item ltn__category-item-6 text-center">
                            <div class="ltn__category-item-img">
                                <a href="shop.php">
                                    <i class="fas fa-notes-medical"></i>
                                </a>
                            </div>
                            <div class="ltn__category-item-name">
                                <h6><a href="shop.php">Best Deals</a></h6>
                            </div>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="ltn__category-item ltn__category-item-6 text-center">
                            <div class="ltn__category-item-img">
                                <a href="shop.php">
                                    <i class="fas fa-box-tissue"></i>
                                </a>
                            </div>
                            <div class="ltn__category-item-name">
                                <h6><a href="shop.php">Germs Pads</a></h6>
                            </div>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="ltn__category-item ltn__category-item-6 text-center">
                            <div class="ltn__category-item-img">
                                <a href="shop.php">
                                    <i class="fas fa-pump-medical"></i>
                                </a>
                            </div>
                            <div class="ltn__category-item-name">
                                <h6><a href="shop.php">Accessories</a></h6>
                            </div>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="ltn__category-item ltn__category-item-6 text-center">
                            <div class="ltn__category-item-img">
                                <a href="shop.php">
                                    <i class="fas fa-bong"></i>
                                </a>
                            </div>
                            <div class="ltn__category-item-name">
                                <h6><a href="shop.php">Medicine Cap</a></h6>
                            </div>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="ltn__category-item ltn__category-item-6 text-center">
                            <div class="ltn__category-item-img">
                                <a href="shop.php">
                                    <i class="fas fa-tooth"></i>
                                </a>
                            </div>
                            <div class="ltn__category-item-name">
                                <h6><a href="shop.php">Dental Item</a></h6>
                            </div>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="ltn__category-item ltn__category-item-6 text-center">
                            <div class="ltn__category-item-img">
                                <a href="shop.php">
                                    <i class="fas fa-microscope"></i>
                                </a>
                            </div>
                            <div class="ltn__category-item-name">
                                <h6><a href="shop.php">Best Deals</a></h6>
                            </div>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="ltn__category-item ltn__category-item-6 text-center">
                            <div class="ltn__category-item-img">
                                <a href="shop.php">
                                    <i class="fas fa-syringe"></i>
                                </a>
                            </div>
                            <div class="ltn__category-item-name">
                                <h6><a href="shop.php">All Products</a></h6>
                            </div>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="ltn__category-item ltn__category-item-6 text-center">
                            <div class="ltn__category-item-img">
                                <a href="shop.php">
                                    <i class="fas fa-stethoscope"></i>
                                </a>
                            </div>
                            <div class="ltn__category-item-name">
                                <h6><a href="shop.php">Germs Pads</a></h6>
                            </div>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="ltn__category-item ltn__category-item-6 text-center">
                            <div class="ltn__category-item-img">
                                <a href="shop.php">
                                    <i class="fas fa-hand-holding-medical"></i>
                                </a>
                            </div>
                            <div class="ltn__category-item-name">
                                <h6><a href="shop.php">Accessories</a></h6>
                            </div>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="ltn__category-item ltn__category-item-6 text-center">
                            <div class="ltn__category-item-img">
                                <a href="shop.php">
                                    <i class="fas fa-procedures"></i>
                                </a>
                            </div>
                            <div class="ltn__category-item-name">
                                <h6><a href="shop.php">Medicine Cap</a></h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- CATEGORY AREA END -->

        <!-- ABOUT US AREA START -->
        <div class="ltn__about-us-area pt-25 pb-120">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 align-self-center">
                        <div class="about-us-img-wrap about-img-left">
                            <img src="img/others/9.png" alt="About Us Image" />
                        </div>
                    </div>
                    <div class="col-lg-6 align-self-center">
                        <div class="about-us-info-wrap">
                            <div class="section-title-area ltn__section-title-2--- mb-30">
                                <h6 class="section-subtitle section-subtitle-2 ltn__secondary-color d-none">
                                    About Us
                                </h6>
                                <h1 class="section-title">
                                    Your faithful partners in Medical Goods
                                </h1>

                            </div>
                            <ul class="ltn__list-item-1 ltn__list-item-1-before--- clearfix">
                                <li>
                                    <i class="fas fa-check-square"></i> Better security for
                                    patient privacy and information.
                                </li>
                                <li>
                                    <i class="fas fa-check-square"></i> More products at lower
                                    prices.
                                </li>
                                <li>
                                    <i class="fas fa-check-square"></i> Connecting customers
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- ABOUT US AREA END -->

        <!-- ABOUT US AREA START -->
        <div class="ltn__about-us-area section-bg-1">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 align-self-center">
                        <div class="">
                            <img src="../vicodin/media/20% OFF.png">
                        </div>
                    </div>
                    <div class="col-lg-6 align-self-center">
                        <div class="about-us-info-wrap">
                            <div class="section-title-area ltn__section-title-2--- mb-20">
                                <h6 class="section-subtitle section-subtitle-2--- ltn__secondary-color">
                                    N95 Facial Covering Mask
                                </h6>
                                <h1 class="section-title">
                                    Grade A Safety Masks For Sale. Haurry Up!
                                </h1>
                                <p>
                                    Over 39,000 people work for us in more than 70 countries all
                                    over the This breadth of global coverage, combined with
                                    specialist services
                                </p>
                            </div>
                            <ul class="ltn__list-item-half clearfix">
                                <li>
                                    <i class="flaticon-home-2"></i>
                                    Activated Carbon
                                </li>
                                <li>
                                    <i class="flaticon-mountain"></i>
                                    Breathing Valve
                                </li>
                                <li>
                                    <i class="flaticon-heart"></i>
                                    6 Layer Filteration
                                </li>
                                <li>
                                    <i class="flaticon-secure"></i>
                                    Rewashes & Reusable
                                </li>
                            </ul>
                            <div class="btn-wrapper animated">
                                <a href="service.html"
                                    class="ltn__secondary-color text-uppercase text-decoration-underline">View
                                    Products</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- ABOUT US AREA END -->

        <!-- CALL TO ACTION START (call-to-action-6) -->
        <div class="ltn__call-to-action-area call-to-action-6 before-bg-bottom d-none" data-bs-bg="img/1.jpg--">
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

        <!-- FOOTER AREA START -->
        <?php include_once('../vicodin/footer.php'); ?>

        <!-- FOOTER AREA END -->

        <!-- MODAL AREA START -->
        <?php include_once('../vicodin/modals.php'); ?>
        <!-- MODAL AREA END -->

    </div>
    <!-- Body main wrapper end -->

    <!-- preloader area start -->
    <div class="preloader d-none" id="preloader">
        <div class="preloader-inner">
            <div class="spinner">
                <div class="dot1"></div>
                <div class="dot2"></div>
            </div>
        </div>
    </div>
    <!-- preloader area end -->

    <!-- All JS Plugins -->
    <script src="js/plugins.js"></script>
    <!-- Main JS -->
    <script src="js/main.js"></script>
</body>

</html>