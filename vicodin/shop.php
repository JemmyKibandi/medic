<?php require_once "dbcon.php"; ?>
<!DOCTYPE html>
<html class="no-js" lang="zxx">
<!-- Mirrored from index/tf/html/vicodin-preview/vicodin/shop.php by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 13 Feb 2024 08:54:51 GMT -->

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
        <?php include_once('../vicodin/header_big.php');?>

        <!-- HEADER AREA END -->
        <!-- Utilize Mobile Menu Start -->
        <?php include_once('../vicodin/header_mobile.php');?>
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
                                        <a href="index.html"><span class="ltn__secondary-color"><i
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

        <!-- PRODUCT DETAILS AREA START -->
        <div class="ltn__product-area ltn__product-gutter mb-120">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8">
                        <div class="ltn__shop-options">
                            <ul>
                                <li>
                                    <div class="ltn__grid-list-tab-menu">
                                        <div class="nav">
                                            <a class="active show" data-bs-toggle="tab" href="#liton_product_grid">
                                                <i class="fas fa-th-large"></i></a>
                                            <a data-bs-toggle="tab" href="#liton_product_list">
                                                <i class="fas fa-list"></i></a>
                                            <a href="add.php">
                                                <i class="fas fa-plus"></i></a>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="showing-product-number text-right">
                                        <span>Showing 1–12 of 18 results</span>
                                    </div>
                                </li>
                                <li>
                                    <div class="short-by text-center">
                                        <select class="nice-select">
                                            <option>Default Sorting</option>
                                            <option>Sort by popularity</option>
                                            <option>Sort by new arrivals</option>
                                            <option>Sort by price: low to high</option>
                                            <option>Sort by price: high to low</option>
                                        </select>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <div class="tab-content">
                            <div class="tab-pane fade active show" id="liton_product_grid">
                                <div class="ltn__product-tab-content-inner ltn__product-grid-view">
                                    <div class="row">
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
                                        <div class="col-xl-4 col-sm-6 col-6">
                                            <div class="ltn__product-item ltn__product-item-3 text-center"
                                                style="height:400px;">
                                                <div class="product-img">
                                                    <a href="product-details.html">
                                                        <img src="<?php echo $firstImagePath; ?>" alt="Product Image"
                                                            style="height:200px;">
                                                    </a>
                                                    <div class=" product-badge">
                                                        <ul>
                                                            <li class="sale-badge">New</li>
                                                        </ul>
                                                    </div>
                                                    <div class="product-hover-action">
                                                        <ul>
                                                            <li>
                                                                <a href="#" title="Quick View" data-bs-toggle="modal"
                                                                    data-bs-target="#quick_view_modal">
                                                                    <i class="far fa-eye"></i>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="#" title="Add to Cart" data-bs-toggle="modal"
                                                                    data-bs-target="#add_to_cart_modal">
                                                                    <i class="fas fa-shopping-cart"></i>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="#" title="Wishlist" data-bs-toggle="modal"
                                                                    data-bs-target="#liton_wishlist_modal">
                                                                    <i class="far fa-heart"></i>
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
                                                            <li><a href="#"><i class="fas fa-star-half-alt"></i></a>
                                                            </li>
                                                            <li><a href="#"><i class="far fa-star"></i></a></li>
                                                        </ul>
                                                    </div>
                                                    <h2 class="product-title">
                                                        <a
                                                            href="product-details.html"><?php echo $row['product_name']; ?></a>
                                                    </h2>
                                                    <div class="product-price">
                                                        <span><?php echo $row['product_category']; ?></span>
                                                        <del><?php echo $row['product_desc']; ?></del>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <?php
                                            }
                                        }
                                        ?>


                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="ltn__pagination-area text-center">
                            <div class="ltn__pagination">
                                <ul>
                                    <li>
                                        <a href="#"><i class="fas fa-angle-double-left"></i></a>
                                    </li>
                                    <li><a href="#">1</a></li>
                                    <li class="active"><a href="#">2</a></li>
                                    <li><a href="#">3</a></li>
                                    <li><a href="#">...</a></li>
                                    <li><a href="#">10</a></li>
                                    <li>
                                        <a href="#"><i class="fas fa-angle-double-right"></i></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <aside class="sidebar ltn__shop-sidebar ltn__right-sidebar">
                            <!-- Category Widget -->
                            <div class="widget ltn__menu-widget">
                                <h4 class="ltn__widget-title ltn__widget-title-border">
                                    Product categories
                                </h4>
                                <ul>
                                    <li>
                                        <a href="portfolio-details.html">Hand Sanitizer
                                            <span><i class="fas fa-long-arrow-alt-right"></i></span></a>
                                    </li>
                                    <li>
                                        <a href="portfolio-details.html">Lab N95 Face Mask
                                            <span><i class="fas fa-long-arrow-alt-right"></i></span></a>
                                    </li>
                                    <li>
                                        <a href="portfolio-details.html">Hand Gloves
                                            <span><i class="fas fa-long-arrow-alt-right"></i></span></a>
                                    </li>
                                    <li>
                                        <a href="portfolio-details.html">Medical Equipment
                                            <span><i class="fas fa-long-arrow-alt-right"></i></span></a>
                                    </li>
                                    <li>
                                        <a href="portfolio-details.html">New Arrival Product
                                            <span><i class="fas fa-long-arrow-alt-right"></i></span></a>
                                    </li>
                                    <li>
                                        <a href="portfolio-details.html">Uncategorized
                                            <span><i class="fas fa-long-arrow-alt-right"></i></span></a>
                                    </li>
                                    <li>
                                        <a href="portfolio-details.html">Special Offers
                                            <span><i class="fas fa-long-arrow-alt-right"></i></span></a>
                                    </li>
                                </ul>
                            </div>
                            <!-- Price Filter Widget -->
                            <div class="widget ltn__price-filter-widget">
                                <h4 class="ltn__widget-title ltn__widget-title-border">
                                    Filter by price
                                </h4>
                                <div class="price_filter">
                                    <div class="price_slider_amount">
                                        <input type="submit" value="Your range:" />
                                        <input type="text" class="amount" name="price" placeholder="Add Your Price" />
                                    </div>
                                    <div class="slider-range"></div>
                                </div>
                            </div>
                            <!-- Top Rated Product Widget -->
                            <div class="widget ltn__top-rated-product-widget">
                                <h4 class="ltn__widget-title ltn__widget-title-border">
                                    Top Rated Product
                                </h4>
                                <ul>
                                    <li>
                                        <div class="top-rated-product-item clearfix">
                                            <div class="top-rated-product-img">
                                                <a href="product-details.html"><img src="img/product/1.png"
                                                        alt="#" /></a>
                                            </div>
                                            <div class="top-rated-product-info">
                                                <div class="product-ratting">
                                                    <ul>
                                                        <li>
                                                            <a href="#"><i class="fas fa-star"></i></a>
                                                        </li>
                                                        <li>
                                                            <a href="#"><i class="fas fa-star"></i></a>
                                                        </li>
                                                        <li>
                                                            <a href="#"><i class="fas fa-star"></i></a>
                                                        </li>
                                                        <li>
                                                            <a href="#"><i class="fas fa-star"></i></a>
                                                        </li>
                                                        <li>
                                                            <a href="#"><i class="fas fa-star"></i></a>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <h6>
                                                    <a href="product-details.html">Mixel Solid Seat Cover</a>
                                                </h6>
                                                <div class="product-price">
                                                    <span>$49.00</span>
                                                    <del>$65.00</del>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="top-rated-product-item clearfix">
                                            <div class="top-rated-product-img">
                                                <a href="product-details.html"><img src="img/product/2.png"
                                                        alt="#" /></a>
                                            </div>
                                            <div class="top-rated-product-info">
                                                <div class="product-ratting">
                                                    <ul>
                                                        <li>
                                                            <a href="#"><i class="fas fa-star"></i></a>
                                                        </li>
                                                        <li>
                                                            <a href="#"><i class="fas fa-star"></i></a>
                                                        </li>
                                                        <li>
                                                            <a href="#"><i class="fas fa-star"></i></a>
                                                        </li>
                                                        <li>
                                                            <a href="#"><i class="fas fa-star"></i></a>
                                                        </li>
                                                        <li>
                                                            <a href="#"><i class="fas fa-star"></i></a>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <h6>
                                                    <a href="product-details.html">Thermometer Gun</a>
                                                </h6>
                                                <div class="product-price">
                                                    <span>$49.00</span>
                                                    <del>$65.00</del>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="top-rated-product-item clearfix">
                                            <div class="top-rated-product-img">
                                                <a href="product-details.html"><img src="img/product/3.png"
                                                        alt="#" /></a>
                                            </div>
                                            <div class="top-rated-product-info">
                                                <div class="product-ratting">
                                                    <ul>
                                                        <li>
                                                            <a href="#"><i class="fas fa-star"></i></a>
                                                        </li>
                                                        <li>
                                                            <a href="#"><i class="fas fa-star"></i></a>
                                                        </li>
                                                        <li>
                                                            <a href="#"><i class="fas fa-star"></i></a>
                                                        </li>
                                                        <li>
                                                            <a href="#"><i class="fas fa-star-half-alt"></i></a>
                                                        </li>
                                                        <li>
                                                            <a href="#"><i class="far fa-star"></i></a>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <h6>
                                                    <a href="product-details.html">Coil Spring Conversion</a>
                                                </h6>
                                                <div class="product-price">
                                                    <span>$49.00</span>
                                                    <del>$65.00</del>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            <!-- Search Widget -->
                            <div class="widget ltn__search-widget">
                                <h4 class="ltn__widget-title ltn__widget-title-border">
                                    Search Objects
                                </h4>
                                <form action="#">
                                    <input type="text" name="search" placeholder="Search your keyword..." />
                                    <button type="submit"><i class="fas fa-search"></i></button>
                                </form>
                            </div>
                            <!-- Tagcloud Widget -->
                            <div class="widget ltn__tagcloud-widget">
                                <h4 class="ltn__widget-title ltn__widget-title-border">
                                    Popular Tags
                                </h4>
                                <ul>
                                    <li><a href="#">Body</a></li>
                                    <li><a href="#">Doctor</a></li>
                                    <li><a href="#">Drugs</a></li>
                                    <li><a href="#">Eye</a></li>
                                    <li><a href="#">Face</a></li>
                                    <li><a href="#">Hand</a></li>
                                    <li><a href="#">Mask</a></li>
                                    <li><a href="#">Medicine</a></li>
                                    <li><a href="#">Price</a></li>
                                    <li><a href="#">Sanitizer</a></li>
                                    <li><a href="#">Virus</a></li>
                                </ul>
                            </div>
                            <!-- Size Widget -->
                            <div class="widget ltn__tagcloud-widget ltn__size-widget">
                                <h4 class="ltn__widget-title ltn__widget-title-border">
                                    Product Size
                                </h4>
                                <ul>
                                    <li><a href="#">S</a></li>
                                    <li><a href="#">M</a></li>
                                    <li><a href="#">L</a></li>
                                    <li><a href="#">XL</a></li>
                                    <li><a href="#">XXL</a></li>
                                </ul>
                            </div>
                            <!-- Color Widget -->
                            <div class="widget ltn__color-widget">
                                <h4 class="ltn__widget-title ltn__widget-title-border">
                                    Product Color
                                </h4>
                                <ul>
                                    <li class="black"><a href="#"></a></li>
                                    <li class="white"><a href="#"></a></li>
                                    <li class="red"><a href="#"></a></li>
                                    <li class="silver"><a href="#"></a></li>
                                    <li class="gray"><a href="#"></a></li>
                                    <li class="maroon"><a href="#"></a></li>
                                    <li class="yellow"><a href="#"></a></li>
                                    <li class="olive"><a href="#"></a></li>
                                    <li class="lime"><a href="#"></a></li>
                                    <li class="green"><a href="#"></a></li>
                                    <li class="aqua"><a href="#"></a></li>
                                    <li class="teal"><a href="#"></a></li>
                                    <li class="blue"><a href="#"></a></li>
                                    <li class="navy"><a href="#"></a></li>
                                    <li class="fuchsia"><a href="#"></a></li>
                                    <li class="purple"><a href="#"></a></li>
                                    <li class="pink"><a href="#"></a></li>
                                    <li class="nude"><a href="#"></a></li>
                                    <li class="orange"><a href="#"></a></li>

                                    <li><a href="#" class="orange"></a></li>
                                    <li><a href="#" class="orange"></a></li>
                                </ul>
                            </div>
                            <!-- Banner Widget -->
                            <div class="widget ltn__banner-widget">
                                <a href="shop.php"><img src="img/banner/banner-2.jpg" alt="#" /></a>
                            </div>
                        </aside>
                    </div>
                </div>
            </div>
        </div>
        <!-- PRODUCT DETAILS AREA END -->

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

        <!-- FOOTER AREA START -->
        <?php include_once('../vicodin/footer.php'); ?>

        <!-- FOOTER AREA END -->
        <!-- MODAL AREA START -->
        <?php include_once('../vicodin/modals.php');?>
        <!-- MODAL AREA END -->
    </div>
    <!-- Body main wrapper end -->

    <!-- All JS Plugins -->
    <script src="js/plugins.js"></script>
    <!-- Main JS -->
    <script src="js/main.js"></script>
</body>

</html>