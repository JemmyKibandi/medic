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
	}else {
        header('location: login.php');
    }
    exit();}	
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
    <link rel="shortcut icon" href="img/Cullen Logo-02.png" type="image/x-icon" />
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
        <?php include_once('../vicodin/header_big.php');?>

        <!-- HEADER AREA END -->
        <!-- Utilize Mobile Menu Start -->
        <?php include_once('../vicodin/header_mobile.php');?>
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
                                                   Cullen Health Sciences shines as a premier distributor of cutting-edge medical products, specializing in fields like General Surgery, Ophthalmology, and Orthopaedic Soft Goods. We proudly represent global leaders, offering exclusive service licenses with top brands. Elevate your healthcare experience with our innovative solutions, setting new standards in medical excellence..
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
                                                   Cullen Health Sciences shines as a premier distributor of cutting-edge medical products, specializing in fields like General Surgery, Ophthalmology, and Orthopaedic Soft Goods. We proudly represent global leaders, offering exclusive service licenses with top brands. Elevate your healthcare experience with our innovative solutions, setting new standards in medical excellence..
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
                                                   Cullen Health Sciences shines as a premier distributor of cutting-edge medical products, specializing in fields like General Surgery, Ophthalmology, and Orthopaedic Soft Goods. We proudly represent global leaders, offering exclusive service licenses with top brands. Elevate your healthcare experience with our innovative solutions, setting new standards in medical excellence..
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


        <!-- FOOTER AREA START -->
        <?php include_once('../vicodin/footer.php');?>

        <!-- FOOTER AREA END -->

        <!-- MODAL AREA START -->
        <?php include_once('../vicodin/modals.php');?>
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