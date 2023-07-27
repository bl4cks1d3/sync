﻿<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="generator" content="">
    <title>FiMobile V2.0 - Mobile HTML template</title>

    <!-- manifest meta -->
    <meta name="apple-mobile-web-app-capable" content="yes">
    <link rel="manifest" href="manifest.json">

    <!-- Favicons -->
    <link rel="apple-touch-icon" href="../assets/img/favicon180.png" sizes="180x180">
    <link rel="icon" href="../assets/img/favicon32.png" sizes="32x32" type="image/png">
    <link rel="icon" href="../assets/img/favicon16.png" sizes="16x16" type="image/png">

    <!-- Google fonts-->

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;600;700&display=swap" rel="stylesheet">

    <!-- bootstrap icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">

    <!-- swiper carousel css -->
    <link rel="stylesheet" href="../assets/vendor/swiperjs-6.6.2/swiper-bundle.min.css">

    <!-- style css for this template -->
    <link href="../assets/css/style.css" rel="stylesheet" id="style">
</head>

<body class="body-scroll" data-page="sendmoney1">

    <!-- loader section -->
    <div class="container-fluid loader-wrap">
        <div class="row h-100">
            <div class="col-10 col-md-6 col-lg-5 col-xl-3 mx-auto text-center align-self-center">
                <div class="loader-cube-wrap loader-cube-animate mx-auto">
                    <img src="../assets/img/logo.png" alt="Logo">
                </div>
                <p class="mt-4">It's time for track budget<br><strong>Please wait...</strong></p>
            </div>
        </div>
    </div>
    <!-- loader section ends -->

    <!-- Begin page -->
    <main class="h-100">

        <!-- Header -->
        <header class="header position-fixed">
            <div class="row">
                <div class="col-auto">
                    <button class="btn btn-light btn-44 back-btn" onclick="window.location.replace('bills');">
                        <i class="bi bi-arrow-left"></i>
                    </button>
                </div>
                <div class="col align-self-center text-center">
                    <h5>Pay Bill</h5>
                </div>
                <div class="col-auto">
                    <a href="notifications" target="_self" class="btn btn-light btn-44">
                        <i class="bi bi-bell"></i>
                        <span class="count-indicator"></span>
                    </a>
                </div>
            </div>
        </header>
        <!-- Header ends -->

        <!-- main page content -->
        <div class="main-container container">
            <!-- selected contacts -->
            <div class="row mb-4">
                <div class="col-auto">
                    <div class="avatar avatar-44 rounded-10 shadow-sm">
                        <img src="../assets/img/company3.jpg" alt="">
                    </div>
                </div>
                <div class="col align-self-center ps-0">
                    <p class="mb-1 text-color-theme">Walmart</p>
                    <p class="text-muted size-12">Invoice ID: IDE0515416385</p>
                </div>
            </div>

            <div class="row">
                <div class="col-12 text-center mb-4">
                    <input type="text" class="trasparent-input text-center" value="118.00" placeholder="Enter Amount">
                    <div class="text-center"><span class="text-muted">Amount in USD</span>
                        <button class="btn btn-link btn-sm text-muted px-1 dropdown-toggle" type="button" id="ln1" data-bs-toggle="dropdown" aria-expanded="false">
                        </button>
                        <ul class="dropdown-menu dropdown-menu-end shadow border-0 w-110" aria-labelledby="ln1">
                            <li><a class="dropdown-item active" href="#">USD</a></li>
                            <li><a class="dropdown-item" href="#">AUD</a></li>
                            <li><a class="dropdown-item" href="#">BTC</a></li>
                            <li><a class="dropdown-item" href="#">ETH</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- amount breakdown -->
            <div class="row mb-3">
                <div class="col">
                    <p class="text-color-theme">Transfer Amount</p>
                </div>
                <div class="col-auto text-end">
                    <p class="text-muted">110.00</p>
                </div>
            </div>

            <div class="row mb-3">
                <div class="col">
                    <p class="text-color-theme">Transaction Charge (1%)</p>
                </div>
                <div class="col-auto text-end">
                    <p class="text-muted">8.00</p>
                </div>
            </div>

            <div class="row mb-4 fw-medium ">
                <div class="col">
                    <p class="text-color-theme">Total Deduction</p>
                </div>
                <div class="col-auto text-end">
                    <p class="text-muted">118.00</p>
                </div>
            </div>

            <!-- coupon code-->
            <div class="row">
                <div class="col-12 mb-4">
                    <div class="form-group form-floating is-valid">
                        <input type="text" class="form-control " id="coupon" placeholder="Coupon Code" value="CASHBACK05NEW">
                        <label class="form-control-label" for="coupon">Coupon Code</label>
                        <div class=" tooltip-btn">
                            <span class="tag bg-success text-white border-0 py-1 px-2 float-end mt-1">Applied</span>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Saving targets -->
            <div class="row mb-3">
                <div class="col">
                    <h6 class="title">Amount pay from</h6>
                </div>
                <div class="col-auto">
                    <a href="" class="small">Add New</a>
                </div>
            </div>
            <div class="row mb-3">
                <div class="col-12 px-0">
                    <div class="swiper-container cardswiper">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="form-check position-absolute end-0 bottom-0 m-1">
                                            <input class="form-check-input rounded-circle" name="cardselect" type="radio" id="card1">
                                            <label for="card1" class="form-check-label"></label>
                                        </div>
                                        <div class="row mb-3">
                                            <div class="col-auto align-self-center">
                                                <img src="../assets/img/masterocard.png" alt="">
                                            </div>
                                            <div class="col align-self-center text-end">
                                                <p class="small">
                                                    <span class="text-uppercase size-10">Validity</span><br>
                                                    <span class="text-muted">09/24</span>
                                                </p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-12">
                                                <h4 class="fw-normal mb-2">
                                                    150540.00
                                                    <span class="small text-muted">USD</span>
                                                </h4>
                                                <p class="mb-0 text-muted size-12">10141 0021 0001 0154</p>
                                                <p class="text-muted size-12">Debit Card</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="card dark-bg">
                                    <div class="card-body">
                                        <div class="form-check position-absolute end-0 bottom-0 m-1">
                                            <input class="form-check-input rounded-circle" name="cardselect" type="radio" id="card2">
                                            <label for="card2" class="form-check-label"></label>
                                        </div>
                                        <div class="row mb-3">
                                            <div class="col-auto align-self-center">
                                                <img src="../assets/img/masterocard.png" alt="">
                                            </div>
                                            <div class="col align-self-center text-end">
                                                <p class="small">
                                                    <span class="text-uppercase size-10">Validity</span><br>
                                                    <span class="text-muted">06/25</span>
                                                </p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-12">
                                                <h4 class="fw-normal mb-2">
                                                    56040.00
                                                    <span class="small text-muted">USD</span>
                                                </h4>
                                                <p class="mb-0 text-muted size-12">10141 0021 0001 0154</p>
                                                <p class="text-muted size-12">Debit Card</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="card theme-radial-gradient ">
                                    <div class="card-body">
                                        <div class="form-check position-absolute end-0 bottom-0 m-1">
                                            <input class="form-check-input rounded-circle" name="cardselect" type="radio" id="card3">
                                            <label for="card3" class="form-check-label"></label>
                                        </div>
                                        <div class="row mb-3">
                                            <div class="col-auto align-self-center">
                                                <i class="bi bi-wallet2"></i> Wallet
                                            </div>
                                            <div class="col align-self-center text-end">
                                                <p class="small">
                                                    <span class="text-uppercase size-10">Validity</span><br>
                                                    <span class="text-muted">Unlimited</span>
                                                </p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-12">
                                                <h4 class="fw-normal mb-2">
                                                    100.00
                                                    <span class="small text-muted">USD</span>
                                                </h4>
                                                <p class="mb-0 text-muted size-12">10141 0021 0001 0154</p>
                                                <p class="text-muted size-12">Debit Card</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row mb-4">
                <div class="col-12 ">
                    <button class="btn btn-default btn-lg shadow-sm w-100" onclick="window.location.replace('thankyou3');">
                        Pay Bill
                    </button>
                </div>
            </div>

        </div>
        <!-- main page content ends -->


    </main>
    <!-- Page ends-->

   
    <!-- Required jquery and libraries -->
    <script src="../assets/js/jquery-3.3.1.min.js"></script>
    <script src="../assets/js/popper.min.js"></script>
    <script src="../assets/vendor/bootstrap-5/js/bootstrap.bundle.min.js"></script>

    <!-- cookie js -->
    <script src="../assets/js/jquery.cookie.js"></script>

    <!-- Customized jquery file  -->
    <script src="../assets/js/main.js"></script>
    <script src="../assets/js/color-scheme.js"></script>

    <!-- PWA app service registration and works -->
    <script src="../assets/js/pwa-services.js"></script>

    <!-- Chart js script -->
    <script src="../assets/vendor/chart-js-3.3.1/chart.min.js"></script>

    <!-- Progress circle js script -->
    <script src="../assets/vendor/progressbar-js/progressbar.min.js"></script>

    <!-- swiper js script -->
    <script src="../assets/vendor/swiperjs-6.6.2/swiper-bundle.min.js"></script>

    <!-- page level custom script -->
    <script src="../assets/js/app.js"></script>

</body>

</html>