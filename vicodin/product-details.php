<?php
session_start();
if (!isset($_GET['product'])) {
    header('location: shop.php');
    exit();
}
require_once 'dbcon.php';

?>

<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Vicodin - Medical eCommerce HTML Template</title>
    <meta name="robots" content="noindex, follow" />
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Place favicon.png in the root directory -->
    <link rel="shortcut icon" href="img/favicon.png" type="image/x-icon" />
    <!-- Font Icons css -->
    <link rel="stylesheet" href="css/font-icons.css">
    <!-- plugins css -->
    <link rel="stylesheet" href="css/plugins.css">
    <!-- Main Stylesheet -->
    <link rel="stylesheet" href="css/style.css">
    <!-- Responsive css -->
    <link rel="stylesheet" href="css/responsive.css">
</head>

<body>
    <div class="body-wrapper">
        <!-- HEADER AREA START (header-3) -->
        <?php include_once('../vicodin/header_big.php'); ?>

        <!-- HEADER AREA END -->
        <!-- Utilize Mobile Menu Start -->
        <?php include_once('../vicodin/header_mobile.php'); ?>
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
        <!-- BREADCRUMB AREA START -->
        <div class="ltn__breadcrumb-area text-left bg-overlay-white-30 bg-image" data-bs-bg="img/bg/14.jpg">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="ltn__breadcrumb-inner">
                            <h1 class="page-title">Shop</h1>
                            <div class="ltn__breadcrumb-list">
                                <ul>
                                    <li>
                                        <a href="index.php"><span class="ltn__secondary-color"><i
                                                    class="fas fa-home"></i></span>
                                            Home</a>
                                    </li>
                                    <li>Shop</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- BREADCRUMB AREA END -->

        <div class="ltn__utilize-overlay"></div>
        <!-- SHOP DETAILS AREA START -->
        <div class="ltn__shop-details-area pb-85">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-md-12">
                        <div class="ltn__shop-details-inner mb-60">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="ltn__shop-details-img-gallery">
                                        <div class="ltn__shop-details-large-img">
                                            <?php
                                            $query = "SELECT * FROM medical_products WHERE product_id =$_GET[product]";
                                            $result = mysqli_query($db, $query);

                                            if (mysqli_num_rows($result) >= 1) {
                                                while ($row = mysqli_fetch_assoc($result)) {
                                                    // Split the image paths by commas
                                                    $imagePaths = explode(',', $row['product_images']);
                                                    $firstImagePath = trim($imagePaths[0]);
                                            ?>

                                            <div class="single-large-img">
                                                <a href="<?php echo $firstImagePath; ?>"
                                                    data-rel="lightcase:myCollection">
                                                    <img src="<?php echo $firstImagePath; ?>" alt="Image">
                                                </a>
                                            </div>

                                        </div>
                                        <div class="ltn__shop-details-small-img slick-arrow-2">
                                            <?php
                                                    // Output all images including the first one
                                                    foreach ($imagePaths as $imagePath) {
                                                        $trimmedImagePath = trim($imagePath);
                                            ?>
                                            <div class="single-small-img">
                                                <img src="<?php echo $trimmedImagePath; ?>" alt="Image">
                                            </div>
                                            <?php } ?>

                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="modal-product-info shop-details-info pl-0">

                                        <div class="product-ratting">
                                            <ul>
                                                <li><a href="#"><i class="fas fa-star"></i></a></li>
                                                <li><a href="#"><i class="fas fa-star"></i></a></li>
                                                <li><a href="#"><i class="fas fa-star"></i></a></li>
                                                <li><a href="#"><i class="fas fa-star-half-alt"></i></a></li>
                                                <li><a href="#"><i class="far fa-star"></i></a></li>
                                                <li class="review-total"> <a href="#"> ( 95 Reviews )</a></li>
                                            </ul>
                                        </div>
                                        <h3><?php echo $row['product_name']; ?></h3>

                                        <div class="modal-product-meta ltn__product-details-menu-1">
                                            <ul>
                                                <li>
                                                    <strong>Categories:</strong>
                                                    <span>
                                                        <p><?php echo $row['product_tag']; ?></p>
                                                    </span>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="ltn__product-details-menu-2">
                                            <ul>
                                                <li>
                                                    <div class="cart-plus-minus">
                                                        <input type="text" value="02" name="qtybutton"
                                                            class="cart-plus-minus-box">
                                                    </div>
                                                </li>
                                                <li>
                                                    <a href="#" class="theme-btn-1 btn btn-effect-1" title="Add to Cart"
                                                        data-bs-toggle="modal" data-bs-target="#inquire">
                                                        <i class="fas fa-shopping-cart"></i>
                                                        <span>Inquire</span>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                        <hr>
                                        <div class="ltn__social-media">
                                            <ul>
                                                <li>Share:</li>
                                                <li><a href="#" title="Facebook"><i class="fab fa-facebook-f"></i></a>
                                                </li>
                                                <li><a href="#" title="Twitter"><i class="fab fa-twitter"></i></a></li>
                                                <li><a href="#" title="Linkedin"><i class="fab fa-linkedin"></i></a>
                                                </li>
                                                <li><a href="#" title="Instagram"><i class="fab fa-instagram"></i></a>
                                                </li>

                                            </ul>
                                        </div>
                                        <hr>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Shop Tab Start -->
                        <div class="ltn__shop-details-tab-inner ltn__shop-details-tab-inner-2">
                            <div class="ltn__shop-details-tab-menu">
                                <div class="nav">
                                    <a class="active show" data-bs-toggle="tab"
                                        href="#liton_tab_details_1_1">Description</a>
                                </div>
                            </div>
                            <div class="tab-content">
                                <div class="tab-pane fade active show" id="liton_tab_details_1_1">
                                    <div class="ltn__shop-details-tab-content-inner">
                                        <h4 class="title-2">Product Description</h4>
                                        <?php echo $row['product_desc']; ?>
                                    </div>
                                </div>
                                <?php }
                                            } ?>
                            </div>
                        </div>
                        <!-- Shop Tab End -->
                    </div>
                    <div class="col-lg-4">
                        <aside class="sidebar ltn__shop-sidebar ltn__right-sidebar">
                            <!-- Top Rated Product Widget -->
                            <div class="widget ltn__top-rated-product-widget">
                                <h4 class="ltn__widget-title ltn__widget-title-border">Top Rated ProductS</h4>
                                <ul>
                                    <?php
                    $query = "SELECT * FROM medical_products LIMIT 4";
                    $result = mysqli_query($db, $query);

                    if (mysqli_num_rows($result) >= 1) {
                        while ($row = mysqli_fetch_assoc($result)) {
                            // Split the image paths by commas and select the first one
                            $imagePaths = explode(',', $row['product_images']);
                            $firstImagePath = trim($imagePaths[0]);

                            // Output the product HTML
                    ?>
                                    <li>
                                        <div class="top-rated-product-item clearfix">
                                            <div class="top-rated-product-img">
                                                <a href="product-details.php"><img src="<?php echo $firstImagePath; ?>"
                                                        alt="#"></a>
                                            </div>
                                            <div class="top-rated-product-info">
                                                <div class="product-ratting">
                                                    <ul>
                                                        <li><a href="#"><i class="fas fa-star"></i></a></li>
                                                        <li><a href="#"><i class="fas fa-star"></i></a></li>
                                                        <li><a href="#"><i class="fas fa-star"></i></a></li>
                                                        <li><a href="#"><i class="fas fa-star"></i></a></li>
                                                        <li><a href="#"><i class="fas fa-star"></i></a></li>
                                                    </ul>
                                                </div>
                                                <h6><a
                                                        href="product-details.php"><?php echo $row['product_name']; ?></a>
                                                </h6>
                                                <div class="product-price">
                                                    <span><?php echo $row['product_tag']; ?></span>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <?php }} ?>
                                </ul>
                            </div>
                        </aside>
                    </div>
                </div>
            </div>
        </div>
        <!-- SHOP DETAILS AREA END -->

        <!-- PRODUCT SLIDER AREA START -->
        <div class="ltn__product-slider-area ltn__product-gutter pb-70">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="section-title-area ltn__section-title-2">
                            <h4 class="title-2">Related Products<span>.</span></h1>
                        </div>
                    </div>
                </div>
                <div class="row ltn__related-product-slider-one-active slick-arrow-1">
                    <!-- ltn__product-item -->
                    <?php
                            $query = "SELECT * FROM medical_products";
                            $result = mysqli_query($db, $query);

                            if (mysqli_num_rows($result) >= 1) {
                                while ($row = mysqli_fetch_assoc($result)) {
                                    // Split the image paths by commas and select the first one
                                    $imagePaths = explode(',', $row['product_images']);
                                    $firstImagePath = trim($imagePaths[0]);

                                    // Output the product HTML
                            ?>
                    <div class="col-lg-12">
                        <div class="ltn__product-item ltn__product-item-3 text-center">
                            <div class="product-img">
                                <a href="product-details.php"><img src="<?php echo $firstImagePath; ?>" alt="#"></a>
                                <div class="product-badge">
                                    <ul>
                                        <li class="sale-badge">New</li>
                                    </ul>
                                </div>
                                <div class="product-hover-action">
                                    <ul>
                                        <li>
                                            <a href="#" title="Quick View" data-bs-toggle="modal"
                                                data-bs-target="#quick_view_modal<?php echo $row['product_id']; ?>">
                                                <i class="far fa-eye"></i>
                                            </a>
                                        </li>

                                    </ul>
                                </div>
                            </div>
                            <div class="product-info">
                                <div class="product-ratting">
                                    <ul>
                                        <li><a href="#"><i class="fas fa-star"></i></a></li>
                                        <li><a href="#"><i class="fas fa-star"></i></a></li>
                                        <li><a href="#"><i class="fas fa-star"></i></a></li>
                                        <li><a href="#"><i class="fas fa-star-half-alt"></i></a></li>
                                        <li><a href="#"><i class="far fa-star"></i></a></li>
                                    </ul>
                                </div>
                                <h2 class="product-title"><a href="product-details.php">Digital Stethoscope</a></h2>
                                <div class="product-price">
                                    <span>$149.00</span>
                                    <del>$162.00</del>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php }
                            } ?>
                    <!--  -->
                </div>
            </div>
        </div>
        <!-- PRODUCT SLIDER AREA END -->

        <!-- CALL TO ACTION START (call-to-action-6) -->
        <div class="ltn__call-to-action-area call-to-action-6 before-bg-bottom" data-bs-bg="img/1.jpg--">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div
                            class="call-to-action-inner call-to-action-inner-6 ltn__secondary-bg position-relative text-center---">
                            <div class="coll-to-info text-color-white">
                                <h1>Buy medical disposable face mask <br> to protect your loved ones</h1>
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

    </div>
    <!-- Body main wrapper end -->

    <!-- All JS Plugins -->
    <script src="js/plugins.js"></script>
    <!-- Main JS -->
    <script src="js/main.js"></script>

</body>

<!-- Mirrored from index/tf/html/vicodin-preview/vicodin/product-details.php by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 13 Feb 2024 08:54:53 GMT -->

</html>