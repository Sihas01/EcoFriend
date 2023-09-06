<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Dashboard</title>
    <link rel="icon" href="./resorses/planet-earth.png">

    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">


    <link href="./new/css/sb-admin-2.min.css" rel="stylesheet">
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">


</head>

<body id="page-top">

    <?php
    session_start();



    require "connection.php";

    if (isset($_SESSION["u"])) {

        $email = $_SESSION["u"]["email"];

        $details_rs = Database::search("SELECT * FROM `users` WHERE `email`='" . $email . "'");


        $details_data = $details_rs->fetch_assoc();

    ?>


        <div id="wrapper">


            <ul class="navbar-nav bg-gradient-secondary sidebar sidebar-dark accordion" id="accordionSidebar">


                <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
                    <div class="sidebar-brand-icon rotate-n-15">

                    </div>
                    <div class="sidebar-brand-text mx-3"><img class="brand" src="./resorses/brand.png"></div>
                </a>


                <hr class="sidebar-divider my-0">


                <li class="nav-item active">
                    <a class="nav-link" href="./dashboard.php">
                        <i class="fas fa-fw fa-tachometer-alt"></i>
                        <span>Dashboard</span></a>
                </li>


                <hr class="sidebar-divider">


                <div class="sidebar-heading">
                    Products
                </div>


                <li class="nav-item">
                    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
                        <i class="bi bi-house-check"></i>
                        <span>Can Use</span>
                    </a>
                    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                        <div class="bg-white py-2 collapse-inner rounded">
                            <h6 class="collapse-header">Options:</h6>
                            <a class="collapse-item" href="#">Donate</a>
                            <a class="collapse-item" href="./sell_use.php">Sell</a>
                        </div>
                    </div>
                </li>


                <li class="nav-item">
                    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities" aria-expanded="true" aria-controls="collapseUtilities">
                        <i class="bi bi-house-dash-fill"></i>
                        <span>Can't Use</span>
                    </a>
                    <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
                        <div class="bg-white py-2 collapse-inner rounded">
                            <h6 class="collapse-header">Options:</h6>
                            <a class="collapse-item" href="./donate_c.php">Donate</a>
                            <a class="collapse-item" href="./sell_c.php">Sell</a>
                        </div>
                    </div>
                </li>


                <hr class="sidebar-divider">


                <div class="sidebar-heading">
                    Addons
                </div>


                <li class="nav-item">
                    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages" aria-expanded="true" aria-controls="collapsePages">
                        <i class="fas fa-fw fa-folder"></i>
                        <span>Pages</span>
                    </a>
                    <div id="collapsePages" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
                        <div class="bg-white py-2 collapse-inner rounded">
                            <h6 class="collapse-header">Login Screens:</h6>
                            <a class="collapse-item" href="login.html">Login</a>
                            <a class="collapse-item" href="register.html">Register</a>
                            <a class="collapse-item" href="forgot-password.html">Forgot Password</a>
                            <div class="collapse-divider"></div>
                            <h6 class="collapse-header">Other Pages:</h6>
                            <a class="collapse-item" href="404.html">404 Page</a>
                            <a class="collapse-item" href="blank.html">Blank Page</a>
                        </div>
                    </div>
                </li>


                <li class="nav-item">
                <a class="nav-link" href="./history.php">
                    <i class="bi bi-clock-history"></i>
                        <span>History</span></a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="./pofile-1.php">
                    <i class="bi bi-person-square"></i>
                    <span>Profile</span></a>
                </li>


                <hr class="sidebar-divider d-none d-md-block">


                <div class="text-center d-none d-md-inline">
                    <button class="rounded-circle border-0" id="sidebarToggle"></button>
                </div>


                <div class="sidebar-card d-none d-lg-flex">
                    <img class="sidebar-card-illustration mb-2" src="img/undraw_rocket.svg" alt="...">
                    <p class="text-center mb-2"><strong>SB Admin Pro</strong> is packed with premium features, components,
                        and more!</p>
                    <a class="btn btn-success btn-sm" href="https://startbootstrap.com/theme/sb-admin-pro">Upgrade to
                        Pro!</a>
                </div>

            </ul>



            <div id="content-wrapper" class="d-flex flex-column">


                <div id="content">


                    <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">


                        <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                            <i class="fa fa-bars"></i>
                        </button>


                        <form class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
                            <div class="input-group">
                                <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
                                <div class="input-group-append">
                                    <button class="btn btn-primary" type="button">
                                        <i class="fas fa-search fa-sm"></i>
                                    </button>
                                </div>
                            </div>
                        </form>


                        <ul class="navbar-nav ml-auto">


                            <li class="nav-item dropdown no-arrow d-sm-none">
                                <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class="fas fa-search fa-fw"></i>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in" aria-labelledby="searchDropdown">
                                    <form class="form-inline mr-auto w-100 navbar-search">
                                        <div class="input-group">
                                            <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
                                            <div class="input-group-append">
                                                <button class="btn btn-primary" type="button">
                                                    <i class="fas fa-search fa-sm"></i>
                                                </button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </li>


                            <li class="nav-item dropdown no-arrow mx-1">
                                <a class="nav-link dropdown-toggle" href="#" id="alertsDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class="fas fa-bell fa-fw"></i>
                                    <!-- Counter - Alerts -->
                                    <span class="badge badge-danger badge-counter">3+</span>
                                </a>


                            </li>

                            <!-- Nav Item - Messages -->
                            <li class="nav-item dropdown no-arrow mx-1">
                                <a class="nav-link dropdown-toggle" href="#" id="messagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class="fas fa-envelope fa-fw"></i>
                                    <!-- Counter - Messages -->
                                    <span class="badge badge-danger badge-counter">7</span>
                                </a>


                            </li>

                            <div class="topbar-divider d-none d-sm-block"></div>


                            <!-- Nav Item - User Information -->
                            <li class="nav-item dropdown no-arrow">
                                <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <span class="mr-2 d-none d-lg-inline text-gray-600 small"><?php echo $details_data["fname"] . " " . $details_data["lname"]; ?></span>
                                    <img class="img-profile rounded-circle" src="./resorses/user.png">
                                </a>
                                <!-- Dropdown - User Information -->
                                <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                                    <a class="dropdown-item" href="./pofile-1.php">
                                        <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                                        Profile
                                    </a>
                                    <a class="dropdown-item" href="#">
                                        <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
                                        Settings
                                    </a>
                                    <a class="dropdown-item" href="#">
                                        <i class="fas fa-list fa-sm fa-fw mr-2 text-gray-400"></i>
                                        Activity Log
                                    </a>
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                                        <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                        Logout
                                    </a>
                                </div>
                            </li>

                        </ul>

                    </nav>
                <?php }
                ?>

                <div class="container">
                    <div class="row gy-3">


                        <div class="col-12">
                            <div class="row">

                                <div class="col-12 text-center">
                                    <h2 class="h2 text-success fw-bold">Donate Product</h2>
                                </div>

                                <div class="col-12 mt-2">
                                    <div class="row">

                                        <div class="col-12 col-lg-4 border-end border-success">
                                            <div class="row">

                                                <div class="col-12">
                                                    <label class="form-label fw-bold" style="font-size: 20px;">Select
                                                        Product Category</label>
                                                </div>

                                                <div class="col-12">
                                                    <select class="form-select text-center s1" id="category" onchange="loadBrands();">
                                                        <option value="0">Select Category</option>

                                                        <?php


                                                        $category_rs = Database::search("SELECT * FROM `category`");
                                                        $category_num = $category_rs->num_rows;

                                                        for ($x = 0; $x < $category_num; $x++) {
                                                            $category_data = $category_rs->fetch_assoc();

                                                        ?>

                                                            <option value="<?php echo $category_data["cat_id"]; ?>"><?php echo $category_data["cat_name"]; ?></option>

                                                        <?php
                                                        }

                                                        ?>






                                                    </select>
                                                </div>

                                            </div>
                                        </div>

                                        <div class="col-12 col-lg-4 border-end border-success">
                                            <div class="row">

                                                <div class="col-12">
                                                    <label class="form-label fw-bold" style="font-size: 20px;">Select
                                                        Product Brand</label>
                                                </div>

                                                <div class="col-12">
                                                    <select class="form-select text-center s1" id="brand">
                                                        <option value="0">Select Brand</option>
                                                        <?php


                                                        $brand_rs = Database::search("SELECT * FROM `brand`");
                                                        $brand_num = $brand_rs->num_rows;

                                                        for ($x = 0; $x < $brand_num; $x++) {
                                                            $brand_data = $brand_rs->fetch_assoc();

                                                        ?>

                                                            <option value="<?php echo $brand_data["brand_id"]; ?>"><?php echo $brand_data["brand_name"]; ?></option>

                                                        <?php
                                                        }

                                                        ?>


                                                    </select>
                                                </div>

                                            </div>
                                        </div>

                                        <div class="col-12 col-lg-4 border-end border-success">
                                            <div class="row">

                                                <div class="col-12">
                                                    <label class="form-label fw-bold" style="font-size: 20px;">Select
                                                        Product Model</label>
                                                </div>

                                                <div class="col-12">
                                                    <select class="form-select text-center s1" id="model">
                                                        <option value="0">Select Model</option>


                                                        <?php

                                                        $model_rs = Database::search("SELECT * FROM `model`");
                                                        $model_num = $model_rs->num_rows;

                                                        for ($x = 0; $x < $model_num; $x++) {
                                                            $model_data = $model_rs->fetch_assoc();

                                                        ?>

                                                            <option value="<?php echo $model_data["model_id"]; ?>"><?php echo $model_data["model_name"]; ?></option>

                                                        <?php
                                                        }

                                                        ?>


                                                    </select>
                                                </div>

                                            </div>
                                        </div>

                                        <div class="col-12">
                                            <hr class="border-success" />
                                        </div>

                                        <div class="col-12">
                                            <div class="row">
                                                <div class="col-12">
                                                    <label class="form-label fw-bold" style="font-size: 20px;">
                                                        Add a Title to your Product
                                                    </label>
                                                </div>
                                                <div class="offset-0 offset-lg-2 col-12 col-lg-8">
                                                    <input type="text" class="form-control" id="title" />
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-12">
                                            <hr class="border-success" />
                                        </div>

                                        <div class="col-12">
                                            <div class="row">

                                                <div class="col-12 col-lg-4 border-end border-success">
                                                    <div class="row">
                                                        <div class="col-12">
                                                            <label class="form-label fw-bold" style="font-size: 20px;">Select Product
                                                                Condition</label>
                                                        </div>
                                                        <div class="col-12">
                                                            <div class="form-check form-check-inline mx-5">
                                                                <input class="form-check-input" type="radio" id="b" name="c" checked />
                                                                <label class="form-check-label fw-bold" for="b">Brandnew</label>
                                                            </div>
                                                            <div class="form-check form-check-inline">
                                                                <input class="form-check-input" type="radio" id="u" name="c" />
                                                                <label class="form-check-label fw-bold" for="u">Used</label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="col-12 col-lg-4 border-end border-success">
                                                    <div class="row">

                                                        <div class="col-12">
                                                            <label class="form-label fw-bold" style="font-size: 20px;">Select Product Colour</label>
                                                        </div>

                                                        <div class="col-12">

                                                            <select class="col-12 form-select" id="clr">
                                                                <option value="0">Select Colour</option>
                                                                <?php

                                                                $clr_rs = Database::search("SELECT * FROM `color`");
                                                                $clr_num = $clr_rs->num_rows;

                                                                for ($x = 0; $x < $clr_num; $x++) {
                                                                    $clr_data = $clr_rs->fetch_assoc();
                                                                ?>

                                                                    <option value="<?php echo $clr_data["clr_id"]; ?>"><?php echo $clr_data["clr_name"]; ?></option>

                                                                <?php
                                                                }

                                                                ?>
                                                            </select>

                                                        </div>

                                                        <div class="col-12">
                                                            <div class="input-group mt-2 mb-2">
                                                                <input type="text" class="form-control" placeholder="Add new Colour" id="clr_in" />
                                                                <button class="btn btn-outline-primary" type="button" id="button-addon2">+ Add</button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="col-12 col-lg-4">
                                                    <div class="row">
                                                        <div class="col-12">
                                                            <label class="form-label fw-bold" style="font-size: 20px;">Add Product Quantity</label>
                                                        </div>
                                                        <div class="col-12">
                                                            <input type="number" class="form-control" value="0" min="0" id="qty" />
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>

                                        <div class="col-12">
                                            <hr class="border-success" />
                                        </div>

                                        <div class="col-12">
                                            <div class="row">

                                                <div class="col-6 border-end border-success">
                                                    <div class="row">
                                                        <div class="col-12">
                                                            <label class="form-label fw-bold" style="font-size: 20px;">Cost Per Item</label>
                                                        </div>
                                                        <div class="offset-0 offset-lg-2 col-12 col-lg-8">
                                                            <div class="input-group mb-2 mt-2">
                                                                <span class="input-group-text">Rs.</span>
                                                                <input type="text" class="form-control" id="cost" />
                                                                <span class="input-group-text">.00</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="col-6">
                                                    <div class="row">
                                                        <div class="col-12">
                                                            <label class="form-label fw-bold" style="font-size: 20px;">Approved Payment
                                                                Methods</label>
                                                        </div>
                                                        <div class="col-12">
                                                            <div class="row">
                                                                <div class="offset-0 offset-lg-2 col-2 pm pm1"></div>
                                                                <div class="col-2 pm pm2"></div>
                                                                <div class="col-2 pm pm3"></div>
                                                                <div class="col-2 pm pm4"></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>

                                        <div class="col-12">
                                            <hr class="border-success" />
                                        </div>

                                        <div class="col-12">
                                            <div class="row">
                                                <div class="col-12">
                                                    <label class="form-label fw-bold" style="font-size: 20px;">Delivery
                                                        Cost</label>
                                                </div>
                                                <div class="col-12 col-lg-6 border-end border-success">
                                                    <div class="row">
                                                        <div class="col-12 offset-lg-1 col-lg-3">
                                                            <label class="form-label">Delivery cost Within
                                                                Colombo</label>
                                                        </div>
                                                        <div class="col-12 col-lg-8">
                                                            <div class="input-group mb-2 mt-2">
                                                                <span class="input-group-text">Rs.</span>
                                                                <input type="text" class="form-control" id="dwc" />
                                                                <span class="input-group-text">.00</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-12 col-lg-6">
                                                    <div class="row">
                                                        <div class="col-12 offset-lg-1 col-lg-3">
                                                            <label class="form-label">Delivery cost out of
                                                                Colombo</label>
                                                        </div>
                                                        <div class="col-12 col-lg-8">
                                                            <div class="input-group mb-2 mt-2">
                                                                <span class="input-group-text">Rs.</span>
                                                                <input type="text" class="form-control" id="doc" />
                                                                <span class="input-group-text">.00</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-12">
                                            <hr class="border-success" />
                                        </div>

                                        <div class="col-12">
                                            <div class="row">
                                                <div class="col-12">
                                                    <label class="form-label fw-bold" style="font-size: 20px;">Product
                                                        Description</label>
                                                </div>
                                                <div class="col-12">
                                                    <textarea cols="30" rows="15" class="form-control" id="desc"></textarea>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-12">
                                            <hr class="border-success" />
                                        </div>

                                        <div class="col-12">
                                            <div class="row">
                                                <div class="col-12">
                                                    <label class="form-label fw-bold" style="font-size: 20px;">Add
                                                        Product Images</label>
                                                </div>
                                                <div class="offset-lg-3 col-12 col-lg-6">
                                                    <div class="row">
                                                        <div class="col-4 border border-primary rounded">
                                                            <img src="resorses/addproductimg.svg" class="img-fluid" style="width: 250px;" id="i0" />
                                                        </div>
                                                        <div class="col-4 border border-primary rounded">
                                                            <img src="resorses/addproductimg.svg" class="img-fluid" style="width: 250px;" id="i1" />
                                                        </div>
                                                        <div class="col-4 border border-primary rounded">
                                                            <img src="resorses/addproductimg.svg" class="img-fluid" style="width: 250px;" id="i2" />
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="offset-lg-3 col-12 col-lg-6 d-grid mt-3">
                                                    <input type="file" class="d-none" id="imageuploader" multiple />
                                                    <label for="imageuploader" class="col-12 btn btn-primary" onclick="changeProductImage();">Upload Images</label>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-12">
                                            <hr class="border-success" />
                                        </div>

                                        <div class="col-12">
                                            <label class="form-label fw-bold" style="font-size: 20px;">Notice...</label><br />
                                            <label class="form-label">
                                                We are taking 5% of the product from price from every
                                                product as a service charge.
                                            </label>
                                        </div>

                                        <div class="offset-lg-4 col-12 col-lg-4 d-grid mt-3 mb-3 text-center">
                                            <button class="btn btn-success" onclick="addProduct();">Save
                                                Product</button>
                                        </div>

                                    </div>
                                </div>

                            </div>
                        </div>


                    </div>
                </div>

                <footer class="sticky-footer bg-white">
                    <div class="container my-auto">
                        <div class="copyright text-center my-auto">
                            <span>Copyright &copy; Your Website 2021</span>
                        </div>
                    </div>
                </footer>


                </div>


            </div>

            <a class="scroll-to-top rounded" href="#page-top">
                <i class="fas fa-angle-up"></i>
            </a>


            <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">×</span>
                            </button>
                        </div>
                        <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                        <div class="modal-footer">
                            <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                            <a class="btn btn-primary" href="login.html">Logout</a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Bootstrap core JavaScript-->
            <script src="vendor/jquery/jquery.min.js"></script>
            <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

            <!-- Core plugin JavaScript-->
            <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

            <!-- Custom scripts for all pages-->
            <script src="./new/js/sb-admin-2.min.js"></script>

            <!-- Page level plugins -->
            <script src="vendor/chart.js/Chart.min.js"></script>

            <!-- Page level custom scripts -->
            <script src="js/demo/chart-area-demo.js"></script>
            <script src="js/demo/chart-pie-demo.js"></script>

            <script src="./js/script.js"></script>

</body>

</html>