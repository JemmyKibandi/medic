<?php 
session_start();
?>
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

        <div class="ltn__login-area pb-65">
            <div class="container">
                <form method="post" action="server.php" enctype="multipart/form-data"
                    class="ltn__form-box contact-form-box">
                    <div class="row">
                        <div class="col-lg-6">
                            <!-- Left side -->
                            <div class="account-login-inner">
                                <h3>Add a Product</h3>
                                <div class="row -m-4">
                                    <div class="col-lg-12 mb-3">
                                        <!-- First input box with bottom margin -->
                                        <label>Product Name</label>
                                        <input type="text" name="product_name" placeholder="Email*" />
                                    </div>
                                    <div class="col-lg-12 mb-3">
                                        <label class="">Product Tag</label><br>
                                        <select class="form-control w-100" name="product_tag">
                                            <option value="Medical Gowns">Medical Gowns</option>
                                            <option value="Arthroscopy">Arthroscopy</option>
                                            <option value="Surgical Gloves">Surgical Gloves</option>
                                            <option value="Primary Drapes">Primary Drapes</option>
                                        </select>
                                    </div>
                                    <div class="col-lg-12 mb-3">
                                        <!-- Second input box with bottom margin -->
                                        <label class="">Product Category</label><br>
                                        <select class="form-control w-100" name="product_category">
                                            <option value="Medical Gowns">Medical Gowns</option>
                                            <option value="Knee Arthroscopy">Knee Arthroscopy</option>
                                            <option value="Shoulder Arthroscopy">Shoulder Arthroscopy</option>
                                            <option value="Set Arthroscopy">Arthroscopy Instrument Set </option>
                                            <option value="Latex Surgical Gloves">Latex Surgical Gloves</option>
                                            <option value="Synthetic Surgical Gloves">Synthetic Surgical Gloves</option>
                                            <option value="Primary Drapes">Primary Drapes</option>
                                        </select>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <!-- Right side -->
                            <div class="account-login-inner">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <!-- Fifth input box with bottom margin -->
                                        <label class="mt-2">Product Description</label>
                                        <textarea type="text" name="product_description"
                                            placeholder="Product Description*"></textarea>
                                    </div>
                                    <div class="col-lg-12">
                                        <!-- Sixth input box -->
                                        <label style="font-weight: bold;">Product Images</label><br>
                                        <div id="dropzone"
                                            style="border: 2px dashed #ccc; padding: 20px; cursor: pointer; position: relative;"
                                            onmouseover="this.style.borderColor='#aaa';"
                                            onmouseout="this.style.borderColor='#ccc';" ondrop="drop(event);"
                                            ondragover="allowDrop(event);">
                                            <span id="uploadText">Drag & Drop files here or
                                                <a href="#"
                                                    onclick="document.getElementById('fileInput').click(); return false;"
                                                    style="text-decoration: underline; color: blue;">click to upload</a>
                                            </span><br>
                                            <input id="fileInput" type="file" name="files[]" class="form-control w-100"
                                                style="display: none;" multiple
                                                accept="image/jpeg, image/jpg, image/png"
                                                onchange="handleFiles(this.files);" />
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                    <br>
                    <div class="btn-wrapper mt-0 text-center ">
                        <button class="theme-btn-1 btn btn-block text-center" type="submit" name="product_upload_data">
                            Add Product
                        </button>
                    </div>
                </form>
            </div>
        </div>
        <!-- FOOTER AREA START -->
        <?php include_once('../vicodin/footer.php'); ?>

        <!-- FOOTER AREA END -->
    </div>
    <!-- Body main wrapper end -->
    <script>
    var selectedImages = [];

    function allowDrop(event) {
        event.preventDefault();
        event.dataTransfer.dropEffect = "copy";
    }

    function drop(event) {
        event.preventDefault();
        var files = event.dataTransfer.files || event.target.files;
        handleFiles(files);
    }

    function handleFiles(files) {
        var dropzone = document.getElementById('dropzone');
        if (files && files.length > 0) {
            for (var i = 0; i < files.length; i++) {
                var file = files[i];
                if (file.type.match('image.*')) {
                    var reader = new FileReader();
                    reader.onload = function(e) {
                        var imgSrc = e.target.result;
                        var imgElement = document.createElement('img');
                        imgElement.src = imgSrc;
                        imgElement.style.width = '100px';
                        imgElement.style.height = '100px';
                        imgElement.style.margin = '5px';
                        imgElement.style.border = '2px solid green'; // Applying the green border
                        imgElement.style.borderRadius = '10px'; // Rounded border
                        imgElement.className = 'uploaded-image';
                        var closeButton = document.createElement('button');
                        closeButton.innerHTML = 'x';
                        closeButton.style.marginLeft = '5px';
                        closeButton.style.cursor = 'pointer';
                        closeButton.onclick = function() {
                            var index = selectedImages.indexOf(imgSrc);
                            if (index !== -1) {
                                selectedImages.splice(index, 1);
                            }
                            dropzone.removeChild(imgElement);
                            dropzone.removeChild(closeButton);
                        };
                        selectedImages.push(imgSrc);
                        dropzone.appendChild(imgElement);
                        dropzone.appendChild(closeButton);
                    };
                    reader.readAsDataURL(file);
                } else {
                    alert('Please select only image files.');
                }
            }
        }
    }
    </script>
    <!-- All JS Plugins -->
    <script src="js/plugins.js"></script>
    <!-- Main JS -->
    <script src="js/main.js"></script>
</body>

</html>