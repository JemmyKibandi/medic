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
        <!-- BREADCRUMB AREA START -->
        <div class="ltn__breadcrumb-area text-left bg-overlay-white-30 bg-image" data-bs-bg="img/about.jpg">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="ltn__breadcrumb-inner">
                            <h1 class="page-title">About Us</h1>
                            <div class="ltn__breadcrumb-list">
                                <ul>
                                    <li>
                                        <a href="index.php"><span class="ltn__secondary-color"></span>
                                        </a>
                                    </li>
                                    <li style="color: white; text-align: center; font-size: 24px;">About</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- BREADCRUMB AREA END -->

        <div style="text-align: center;" class="container my-4">
            <p>Cullen Health Sciences is a premier distributor of medical products, serving niche areas including
                General Surgery, Ophthalmology, Operating Theatre Consumables and Orthopaedic Soft Goods. Representing
                global brand leaders, we are one of very few companies in East Africa to hold a fully accredited service
                license agreement with many of the global brands in our portfolio. It is our commitment to excellent
                customer service that helped us to nurture and develop multiple long-standing partnerships across public
                and private hospitals and this is exemplified by the experienced professionals nationwide. Our mission
                is to provide best in-class service across all areas of expertise, ensuring our customers receive a
                level of service that not only meets but exceeds their expectations. We strive to maintain constant
                engagement with our principals while ensuring that we are up to date with all product developments and
                can identify opportunities to enhance our portfolio at any given time. This mantra has helped us grow to
                be the leading distributors of specialist medical devices in East Africa. Cullen Health Sciences provide
                the highest level of efficiency, turnaround times, and close working partnerships with their customers.
                A policy of continuous self-appraisal and attention to detail ensure the ongoing expansion of our
                customer base.</p>
            <br>
            <p>First Contact <br>
                We have a dedicated customer support team available to deal with all enquiries. You can reach us by
                phone, email or via our website.</p>
            <br>
            <p>Understanding Your Needs <br>
                We actively listen and assess your needs to ensure that you receive the product or service that best
                suits your requirements.</p>
            <br>
            <p>Demonstration of the Product/Service <br>
                We can design and demonstrate the solution that best fits your requirements and show how this will
                enhance your patient care.</p>
            <br>
            <p>Tender/Procurement/Quality Assurance/Sales <br>
                We will develop a proposal, tailored to your needs, and work with you through each step of the process
                to ensure your expectations are met. With ISO9001 accreditation you are guaranteed quality in practice.
            </p>
            <br>
            <p>Ongoing Support & Customer Service <br>
                We have a dedicated Customer Service team available to deal with all enquiries.</p>
            <br>
            <p>“We aim to provide best in-class service across all areas of expertise, where customers receive a level
                of service that exceeds their expectations.”</p>
        </div>

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