<?php
include '../php/function.php';
include '../php/connect.inc.php';

?>
<!DOCTYPE html>
<html lang="zxx" class="js">

<head>
    <base href="..">
    <meta charset="utf-8">
    <meta name="author" content="Softnio">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="A powerful and conceptual apps base dashboard template that especially build for developers and programmers.">
    <!-- Fav Icon  -->
    <link rel="shortcut icon" href="./images/favicon.png">
    <!-- Page Title  -->
    <title>Financial Automation System</title>
    <!-- StyleSheets  -->
    <link rel="stylesheet" href="./assets/css/dashlite.css?ver=3.0.3">
    <link id="skin-default" rel="stylesheet" href="./assets/css/theme.css?ver=3.0.3">
</head>

<body class="nk-body bg-lighter npc-general has-sidebar ">
    <div class="nk-app-root">
        <!-- main @s -->
        <div class="nk-main ">
            <!-- sidebar @s -->
            <div class="nk-sidebar nk-sidebar-fixed is-light " data-content="sidebarMenu">


                <?php include 'nav.php'; ?>


            </div>
            <!-- sidebar @e -->
            <!-- wrap @s -->
            <div class="nk-wrap ">
                <!-- main header @s -->


                <?php include 'top.php'; ?>

                <!-- main header @e -->
                <!-- content @s -->
                <div class="nk-content ">
                    <div class="container-fluid">
                        <div class="nk-content-inner">
                            <div class="nk-content-body">
                                <div class="nk-block-head nk-block-head-sm">
                                    <div class="nk-block-between">
                                        <div class="nk-block-head-content">
                                            <h3 class="nk-block-title page-title">Dashboard</h3>
                                            <div class="nk-block-des text-soft">
                                                <!-- <p>Welcome to Learning Management Dashboard.</p> -->
                                            </div>
                                        </div><!-- .nk-block-head-content -->
                                        <div class="nk-block-head-content">
                                            <div class="toggle-wrap nk-block-tools-toggle">
                                                <a href="#" class="btn btn-icon btn-trigger toggle-expand me-n1" data-target="pageMenu"><em class="icon ni ni-more-v"></em></a>
                                                <div class="toggle-expand-content" data-content="pageMenu">
                                                    <ul class="nk-block-tools g-3">
                                                    </ul>
                                                </div>
                                            </div>
                                        </div><!-- .nk-block-head-content -->
                                    </div><!-- .nk-block-between -->
                                </div><!-- .nk-block-head -->
                                <div class="nk-block">
                                    <div class="row g-gs">
                                        <div class="col-xxl-6">
                                            <div class="row g-gs">
                                                <div class="col-md-12">
                                                    <div class="card">
                                                        <div class="card-inner">
                                                            <div class="card-title-group align-start mb-2">
                                                                <div class="card-title">
                                                                    <h6 class="title">Loan Performances</h6>
                                                                    <p>In last 30 days</p>
                                                                </div>
                                                                <div class="card-tools">
                                                                    <em class="card-hint icon ni ni-help-fill" data-bs-toggle="tooltip" data-bs-placement="left" title="Financial System"></em>
                                                                </div>
                                                            </div>
                                                            <div class="align-end gy-3 gx-5 flex-wrap flex-md-nowrap flex-lg-wrap flex-xxl-nowrap">
                                                                <div class="nk-sale-data-group flex-md-nowrap g-4">
                                                                    <!-- <div class="nk-sale-data">
                                                                        <span class="amount">5490 <span class="change down text-danger"><em class="icon ni ni-arrow-long-down"></em>16.93%</span></span>
                                                                        <span class="sub-title">This Month</span>
                                                                    </div>
                                                                    <div class="nk-sale-data">
                                                                        <span class="amount">1480<span class="change up text-success"><em class="icon ni ni-arrow-long-up"></em>4.26%</span></span>
                                                                        <span class="sub-title">This Week</span>
                                                                    </div> -->
                                                                </div>
                                                                <div class="nk-sales-ck sales-revenue">
                                                                    <canvas class="student-enrole" id="enrolement"></canvas>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div><!-- .col -->
                                                <div class="col-md-3">
                                                    <div class="card">
                                                        <div class="nk-ecwg nk-ecwg3">
                                                            <div class="card-inner pb-0">
                                                                <div class="card-title-group">
                                                                    <div class="card-title">
                                                                        <h6 class="title">Pending Loan Application</h6>
                                                                    </div>
                                                                </div>
                                                                <div class="data">
                                                                    <div class="data-group">
                                                                        <div class="amount fw-normal"><?php totalPendingLoans(); ?></div>
                                                                        <div class="info text-end">
                                                                            <!-- <h5> <?php pendingLoans(); ?> Customers</h5> -->
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div><!-- .card-inner -->
                                                            <div class="nk-ecwg3-ck">
                                                                <!-- <canvas class="courseSells" id="totalSells"></canvas> -->
                                                            </div>
                                                        </div><!-- .nk-ecwg -->
                                                    </div><!-- .card -->
                                                </div><!-- .col -->
                                                <div class="col-md-3">
                                                    <div class="card">
                                                        <div class="nk-ecwg nk-ecwg3">
                                                            <div class="card-inner pb-0">
                                                                <div class="card-title-group">
                                                                    <div class="card-title">
                                                                        <h6 class="title">Pending Loan Application</h6>
                                                                    </div>
                                                                </div>
                                                                <div class="data">
                                                                    <div class="data-group">
                                                                        <div class="amount fw-normal"><?php totalPendingLoans(); ?></div>
                                                                        <div class="info text-end">
                                                                            <!-- <h5> <?php pendingLoans(); ?> Customers</h5> -->
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div><!-- .card-inner -->
                                                            <div class="nk-ecwg3-ck">
                                                                <!-- <canvas class="courseSells" id="totalSells"></canvas> -->
                                                            </div>
                                                        </div><!-- .nk-ecwg -->
                                                    </div><!-- .card -->
                                                </div><!-- .col -->
                                                <div class="col-md-3">
                                                    <div class="card">
                                                        <div class="nk-ecwg nk-ecwg3">
                                                            <div class="card-inner pb-0">
                                                                <div class="card-title-group">
                                                                    <div class="card-title">
                                                                        <h6 class="title">Total Loan Approved</h6>
                                                                    </div>
                                                                </div>
                                                                <div class="data">
                                                                    <div class="data-group">
                                                                        <div class="amount fw-normal"><?php disbursedLoans(); ?></div>
                                                                        <h5> <?php pendingLoans(); ?> Customers</h5>
                                                                    </div>
                                                                </div>
                                                            </div><!-- .card-inner -->
                                                            <div class="nk-ecwg3-ck">
                                                                <!-- <canvas class="courseSells" id="weeklySells"></canvas> -->
                                                            </div>
                                                        </div><!-- .nk-ecwg -->
                                                    </div><!-- .card -->
                                                </div><!-- .col -->

                                                <div class="col-md-3">
                                                    <div class="card">
                                                        <div class="nk-ecwg nk-ecwg3">
                                                            <div class="card-inner pb-0">
                                                                <div class="card-title-group">
                                                                    <div class="card-title">
                                                                        <h6 class="title">Total Loan Approved</h6>
                                                                    </div>
                                                                </div>
                                                                <div class="data">
                                                                    <div class="data-group">
                                                                        <div class="amount fw-normal"><?php disbursedLoans(); ?></div>
                                                                        <h5> <?php pendingLoans(); ?> Customers</h5>
                                                                    </div>
                                                                </div>
                                                            </div><!-- .card-inner -->
                                                            <div class="nk-ecwg3-ck">
                                                                <!-- <canvas class="courseSells" id="weeklySells"></canvas> -->
                                                            </div>
                                                        </div><!-- .nk-ecwg -->
                                                    </div><!-- .card -->
                                                </div><!-- .col -->

                                                <div class="col-md-3">
                                                    <div class="card" style="background-color: skyblue;">
                                                        <div class="nk-ecwg nk-ecwg3">
                                                            <div class="card-inner pb-0">
                                                                <div class="card-title-group">
                                                                    <div class="card-title">
                                                                        <h6 class="title">Total Loan Disbursed</h6>
                                                                    </div>
                                                                </div>
                                                                <div class="data">
                                                                    <div class="data-group">
                                                                        <div class="amount fw-normal"><?php disbursedLoans(); ?></div>
                                                                        <div class="info text-end">

                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div><!-- .card-inner -->
                                                            <div class="nk-ecwg3-ck">
                                                                <!-- <canvas class="courseSells" id="totalSells"></canvas> -->
                                                            </div>
                                                        </div><!-- .nk-ecwg -->
                                                    </div><!-- .card -->
                                                </div><!-- .col -->
                                                <div class="col-md-3">
                                                    <div class="card" style="background-color: skyblue;">
                                                        <div class="nk-ecwg nk-ecwg3">
                                                            <div class="card-inner pb-0">
                                                                <div class="card-title-group">
                                                                    <div class="card-title">
                                                                        <h6 class="title">Total Loan Disbursed</h6>
                                                                    </div>
                                                                </div>
                                                                <div class="data">
                                                                    <div class="data-group">
                                                                        <div class="amount fw-normal"><?php disbursedLoans(); ?></div>
                                                                        <div class="info text-end">

                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div><!-- .card-inner -->
                                                            <div class="nk-ecwg3-ck">
                                                                <!-- <canvas class="courseSells" id="totalSells"></canvas> -->
                                                            </div>
                                                        </div><!-- .nk-ecwg -->
                                                    </div><!-- .card -->
                                                </div><!-- .col -->
                                                <div class="col-md-3">
                                                    <div class="card" style="background-color: skyblue;">
                                                        <div class="nk-ecwg nk-ecwg3">
                                                            <div class="card-inner pb-0">
                                                                <div class="card-title-group">
                                                                    <div class="card-title">
                                                                        <h6 class="title">Total Loan Repaid</h6>
                                                                    </div>
                                                                </div>
                                                                <div class="data">
                                                                    <div class="data-group">
                                                                        <div class="amount fw-normal">#2,995.81</div>

                                                                    </div>
                                                                </div>
                                                            </div><!-- .card-inner -->
                                                            <div class="nk-ecwg3-ck">
                                                                <!-- <canvas class="courseSells" id="weeklySells"></canvas> -->
                                                            </div>
                                                        </div><!-- .nk-ecwg -->
                                                    </div><!-- .card -->
                                                </div><!-- .col -->
                                                <div class="col-md-3">
                                                    <div class="card" style="background-color: skyblue;">
                                                        <div class="nk-ecwg nk-ecwg3">
                                                            <div class="card-inner pb-0">
                                                                <div class="card-title-group">
                                                                    <div class="card-title">
                                                                        <h6 class="title">Total Loan Repaid</h6>
                                                                    </div>
                                                                </div>
                                                                <div class="data">
                                                                    <div class="data-group">
                                                                        <div class="amount fw-normal">#2,995.81</div>

                                                                    </div>
                                                                </div>
                                                            </div><!-- .card-inner -->
                                                            <div class="nk-ecwg3-ck">
                                                                <!-- <canvas class="courseSells" id="weeklySells"></canvas> -->
                                                            </div>
                                                        </div><!-- .nk-ecwg -->
                                                    </div><!-- .card -->
                                                </div><!-- .col -->

                                            </div><!-- .row -->
                                        </div><!-- .col -->
                                        <div class="col-md-6 col-xxl-4">
                                            <div class="card h-100">
                                                <div class="card-inner">
                                                    <div class="card-title-group mb-2">
                                                        <div class="card-title">
                                                            <h6 class="title">Recent Loan Disbursed</h6>
                                                        </div>
                                                    </div>
                                                    <ul class='nk-top-products'>
                                                        <li class='item'>

                                                            <div class='info'>
                                                                <div class='title'><b>Customer</b></div>
                                                            </div>
                                                            <div class='total'>
                                                                <div class='amount'><b>Repayment Amount</b>
                                                                </div>
                                                        </li>
                                                    </ul>

                                                    <?php
                                                    include '../php/connect.inc.php';
                                                    $select = "SELECT * FROM loan WHERE status = 'Disbursed' ";
                                                    $query = mysqli_query($connect, $select);
                                                    if (mysqli_num_rows($query) == 0) {
                                                        echo "<span style='text-align: center;'>This is no loan that has been disbursed</span>";
                                                    } else {
                                                        while ($row = mysqli_fetch_assoc($query)) {
                                                            $fname = $row['fname'];
                                                            $lname = $row['lname'];
                                                            $customer_id = $row['customer_id'];
                                                            $repayment = $row['repayment'];

                                                            echo "<ul class='nk-top-products'>
                                                        <li class='item'>

                                                            <div class='info'>
                                                                <div class='title'>$fname $lname ($customer_id)</div>
                                                            </div>
                                                            <div class='total'>
                                                                <div class='amount'>$repayment
                                                            </div>
                                                        </li>
                                                    </ul>";
                                                        }
                                                    }
                                                    ?>


                                                </div><!-- .card-inner -->
                                            </div><!-- .card -->
                                        </div><!-- .col -->



                                        <div class="col-md-6 col-xxl-4">
                                            <div class="card h-100">
                                                <div class="card-inner">
                                                    <div class="card-title-group mb-2">
                                                        <div class="card-title">
                                                            <h6 class="title">Recent Loan Repaid</h6>
                                                        </div>
                                                        <!-- <div class="card-tools">
                                                            <div class="dropdown">
                                                                <a href="#" class="dropdown-toggle link link-light link-sm dropdown-indicator" data-bs-toggle="dropdown">Weekly</a>
                                                                <div class="dropdown-menu dropdown-menu-sm dropdown-menu-end">
                                                                    <ul class="link-list-opt no-bdr">
                                                                        <li><a href="#"><span>Daily</span></a></li>
                                                                        <li><a href="#" class="active"><span>Weekly</span></a></li>
                                                                        <li><a href="#"><span>Monthly</span></a></li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div> -->
                                                    </div>
                                                    <ul class='nk-top-products'>
                                                        <li class='item'>

                                                            <div class='info'>
                                                                <div class='title'><b>Customer</b></div>
                                                            </div>
                                                            <div class='total'>
                                                                <div class='amount'><b>Repayment Amount</b>
                                                                </div>
                                                        </li>
                                                    </ul>

                                                    <?php
                                                    include '../php/connect.inc.php';
                                                    $select = "SELECT * FROM loan WHERE status = 'Pending' ";
                                                    $query = mysqli_query($connect, $select);
                                                    while ($row = mysqli_fetch_assoc($query)) {
                                                        $fname = $row['fname'];
                                                        $lname = $row['lname'];
                                                        $customer_id = $row['customer_id'];
                                                        $repayment = $row['repayment'];

                                                        echo "<ul class='nk-top-products'>
                                                        <li class='item'>

                                                            <div class='info'>
                                                                <div class='title'>$fname $lname ($customer_id)</div>
                                                            </div>
                                                            <div class='total'>
                                                                <div class='amount'>$repayment
                                                            </div>
                                                        </li>
                                                    </ul>";
                                                    }
                                                    ?>
                                                </div><!-- .card-inner -->
                                            </div><!-- .card -->
                                        </div><!-- .col -->
                                    </div>
                                </div>
                            </div>
                        </div>



                    </div>
                </div>
                <!-- content @e -->
                <!-- footer @s -->


                <?php include 'footer.php'; ?>


                <!-- footer @e -->
            </div>
            <!-- wrap @e -->
        </div>
        <!-- main @e -->
    </div>
    <!-- app-root @e -->
    <!-- select region modal -->
    <div class="modal fade" tabindex="-1" role="dialog" id="region">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <a href="#" class="close" data-bs-dismiss="modal"><em class="icon ni ni-cross-sm"></em></a>
                <div class="modal-body modal-body-md">
                    <h5 class="title mb-4">Select Your Country</h5>
                    <div class="nk-country-region">
                        <ul class="country-list text-center gy-2">
                            <li>
                                <a href="#" class="country-item">
                                    <img src="./images/flags/arg.png" alt="" class="country-flag">
                                    <span class="country-name">Argentina</span>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="country-item">
                                    <img src="./images/flags/aus.png" alt="" class="country-flag">
                                    <span class="country-name">Australia</span>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="country-item">
                                    <img src="./images/flags/bangladesh.png" alt="" class="country-flag">
                                    <span class="country-name">Bangladesh</span>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="country-item">
                                    <img src="./images/flags/canada.png" alt="" class="country-flag">
                                    <span class="country-name">Canada <small>(English)</small></span>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="country-item">
                                    <img src="./images/flags/china.png" alt="" class="country-flag">
                                    <span class="country-name">Centrafricaine</span>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="country-item">
                                    <img src="./images/flags/china.png" alt="" class="country-flag">
                                    <span class="country-name">China</span>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="country-item">
                                    <img src="./images/flags/french.png" alt="" class="country-flag">
                                    <span class="country-name">France</span>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="country-item">
                                    <img src="./images/flags/germany.png" alt="" class="country-flag">
                                    <span class="country-name">Germany</span>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="country-item">
                                    <img src="./images/flags/iran.png" alt="" class="country-flag">
                                    <span class="country-name">Iran</span>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="country-item">
                                    <img src="./images/flags/italy.png" alt="" class="country-flag">
                                    <span class="country-name">Italy</span>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="country-item">
                                    <img src="./images/flags/mexico.png" alt="" class="country-flag">
                                    <span class="country-name">México</span>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="country-item">
                                    <img src="./images/flags/philipine.png" alt="" class="country-flag">
                                    <span class="country-name">Philippines</span>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="country-item">
                                    <img src="./images/flags/portugal.png" alt="" class="country-flag">
                                    <span class="country-name">Portugal</span>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="country-item">
                                    <img src="./images/flags/s-africa.png" alt="" class="country-flag">
                                    <span class="country-name">South Africa</span>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="country-item">
                                    <img src="./images/flags/spanish.png" alt="" class="country-flag">
                                    <span class="country-name">Spain</span>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="country-item">
                                    <img src="./images/flags/switzerland.png" alt="" class="country-flag">
                                    <span class="country-name">Switzerland</span>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="country-item">
                                    <img src="./images/flags/uk.png" alt="" class="country-flag">
                                    <span class="country-name">United Kingdom</span>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="country-item">
                                    <img src="./images/flags/english.png" alt="" class="country-flag">
                                    <span class="country-name">United State</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div><!-- .modal-content -->
        </div><!-- .modla-dialog -->
    </div><!-- .modal -->
    <!-- JavaScript -->
    <script src="./assets/js/bundle.js?ver=3.0.3"></script>
    <script src="./assets/js/scripts.js?ver=3.0.3"></script>
    <script src="./assets/js/charts/chart-lms.js?ver=3.0.3"></script>
</body>

</html>