<?php
if (isset($_GET['client_details'])) {
    $customer_id = $_GET['customer_id'];
    include 'php/connect.inc.php';
    //customer detail pull
    $select_cus = "SELECT * FROM customer WHERE customer_id = '$customer_id' ";
    $query = mysqli_query($connect, $select_cus);
    while ($row = mysqli_fetch_assoc($query)) {
        $fname = $row['first_name'];
        $lname = $row['last_name'];
        $gender = $row['gender'];
        $phone = $row['phone'];
        $email = $row['email'];
        $address = $row['address'];
        $soo = $row['state_of_origin'];
        $lga = $row['lga'];
        $customer_id = $row['customer_id'];
        $status = $row['status'];
        $branch = $row['branch'];
    }
} else {
    header("Location: individual_client");
}

//loan pull
if (isset($_GET['client_details'])) {
    $customer_id = $_GET['customer_id'];
    include 'php/connect.inc.php';
    $select_cus = "SELECT * FROM loan WHERE customer_id = '$customer_id' ";
    $query = mysqli_query($connect, $select_cus);
    while ($row = mysqli_fetch_assoc($query)) {
        $fname = $row['fname'];
        $lname = $row['lname'];
        $phone = $row['phone'];
        $email = $row['email'];
        $lamount = $row['lamount'];
        $rate = $row['rate'];
        $repayment = $row['repayment'];
        $customer_id = $row['customer_id'];
        $status = $row['status'];
        $branch = $row['branch'];
    }
} else {
    header("Location: individual_client");
}

function totalPendingLoans()
{
    if (isset($_GET['client_details'])) {
        $customer_id = $_GET['customer_id'];
        include 'php/connect.inc.php';
        // include 'org_sessions.php';
        $select = "SELECT * FROM loan WHERE status = 'Pending' && customer_id = '$customer_id' ";
        $query = mysqli_query($connect, $select);
        $totalLoan = 0;
        while ($row = mysqli_fetch_assoc($query)) {
            $totalLoan += $row['lamount'];
        }
        echo '<del>N</del>' . number_format($totalLoan);
    }
}

function totalRepaidLoans()
{
    if (isset($_GET['client_details'])) {
        $customer_id = $_GET['customer_id'];
        include 'php/connect.inc.php';
        // include 'org_sessions.php';
        $select = "SELECT * FROM loan WHERE status = 'Repaid' && customer_id = '$customer_id' ";
        $query = mysqli_query($connect, $select);
        $totalLoan = 0;
        while ($row = mysqli_fetch_assoc($query)) {
            $totalLoan += $row['lamount'];
        }
        echo '<del>N</del>' . number_format($totalLoan);
    }
}

?>

<!DOCTYPE html>
<html lang="zxx" class="js">

<head>
    <base href="">
    <meta charset="utf-8">
    <meta name="author" content="Softnio">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="A powerful and conceptual apps base dashboard template that especially build for developers and programmers.">
    <!-- Fav Icon  -->
    <link rel="shortcut icon" href="./images/favicon.png">
    <!-- Page Title  -->
    <title>Financial Automation Software</title>
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
                                            <h4 class="nk-block-title page-title"> Ahmad Akorede - <?php echo $customer_id; ?> </h4>
                                        </div><!-- .nk-block-head-content -->
                                    </div><!-- .nk-block-between -->
                                </div><!-- .nk-block-head -->
                                <div class="nk-block">
                                    <div class="row g-gs">
                                        <div class="col-xxl-4 col-md-6">
                                            <div class="card is-dark h-100">
                                                <div class="nk-ecwg nk-ecwg1">
                                                    <div class="card-inner">
                                                        <div class="card-title-group">
                                                            <div class="card-title">
                                                                <h6 class="title">Total Loan Collected</h6>
                                                            </div>

                                                        </div>
                                                        <div class="data">
                                                            <div class="amount"><?php totalPendingLoans(); ?></div>

                                                        </div>
                                                        <div class="data">
                                                            <h6 class="sub-title">Total Loan Repaid</h6>
                                                            <div class="data-group">
                                                                <div class="amount"><?php totalRepaidLoans(); ?></div>

                                                            </div>
                                                        </div>
                                                    </div><!-- .card-inner -->
                                                    <div class="nk-ecwg1-ck">
                                                        <canvas class="ecommerce-line-chart-s1" id="totalSales"></canvas>
                                                    </div>
                                                </div><!-- .nk-ecwg -->
                                            </div><!-- .card -->
                                        </div><!-- .col -->
                                        <div class="col-xxl-4 col-md-6">
                                            <div class="card h-100">
                                                <div class="nk-ecwg nk-ecwg2">
                                                    <div class="card-inner">
                                                        <div class="card-title-group mt-n1">
                                                            <div class="card-title">

                                                            </div>

                                                        </div>
                                                        <div class="data">
                                                            <div class="data-group">

                                                                <div class="info text-end"><span class="change up text-danger"><em class="icon ni ni-arrow-long-up"></em></div>
                                                            </div>
                                                        </div>

                                                        <h6 class="sub-title">First Name: <?php echo $fname; ?></h6>
                                                        <h6 class="sub-title">Last Name: <?php echo $lname; ?></h6>
                                                        <h6 class="sub-title">Gender: <?php echo $gender; ?></h6>
                                                        <h6 class="sub-title">Phone Number: <?php echo $phone; ?></h6>
                                                        <h6 class="sub-title">Address: <?php echo $address; ?></h6>
                                                        <h6 class="sub-title">Customer ID: <?php echo $customer_id; ?></h6>
                                                        <h6 class="sub-title">Account Status: <?php echo $status; ?></h6>
                                                        <h6 class="sub-title">Branch: <?php echo $branch; ?></h6>
                                                    </div><!-- .card-inner -->
                                                    <!-- <div class="nk-ecwg2-ck">
                                                        <canvas class="ecommerce-bar-chart-s1" id="averargeOrder"></canvas>
                                                    </div> -->
                                                </div><!-- .nk-ecwg -->
                                            </div><!-- .card -->
                                        </div><!-- .col -->
                                        <div class="col-xxl-4">
                                            <div class="row g-gs">
                                                <div class="col-xxl-12 col-md-6">
                                                    <div class="card">
                                                        <div class="nk-ecwg nk-ecwg3">
                                                            <div class="card-inner pb-0">
                                                                <div class="card-title-group">
                                                                    <div class="card-title">
                                                                        <h6 class="title">Orders</h6>
                                                                    </div>
                                                                </div>
                                                                <div class="data">
                                                                    <div class="data-group">
                                                                        <div class="amount">329</div>
                                                                        <div class="info text-end"><span class="change up text-danger"><em class="icon ni ni-arrow-long-up"></em>4.63%</span><br><span>vs. last week</span></div>
                                                                    </div>
                                                                </div>
                                                            </div><!-- .card-inner -->
                                                            <div class="nk-ecwg3-ck">
                                                                <canvas class="ecommerce-line-chart-s1" id="totalOrders"></canvas>
                                                            </div>
                                                        </div><!-- .nk-ecwg -->
                                                    </div><!-- .card -->
                                                </div><!-- .col -->
                                                <div class="col-xxl-12 col-md-6">
                                                    <div class="card">
                                                        <div class="nk-ecwg nk-ecwg3">
                                                            <div class="card-inner pb-0">
                                                                <div class="card-title-group">
                                                                    <div class="card-title">
                                                                        <h6 class="title">Customers</h6>
                                                                    </div>
                                                                </div>
                                                                <div class="data">
                                                                    <div class="data-group">
                                                                        <div class="amount">194</div>
                                                                        <div class="info text-end"><span class="change up text-danger"><em class="icon ni ni-arrow-long-up"></em>4.63%</span><br><span>vs. last week</span></div>
                                                                    </div>
                                                                </div>
                                                            </div><!-- .card-inner -->
                                                            <div class="nk-ecwg3-ck">
                                                                <canvas class="ecommerce-line-chart-s1" id="totalCustomers"></canvas>
                                                            </div>
                                                        </div><!-- .nk-ecwg -->
                                                    </div><!-- .card -->
                                                </div><!-- .col -->
                                            </div><!-- .row -->
                                        </div><!-- .col -->


                                        <div class="nk-block nk-block-lg">
                                            <div class="card card-bordered card-preview">
                                                <div class="card-inner">
                                                    <div class="card-title-group">
                                                        <div class="card-title">
                                                            <h6 class="title">Loan Transactions</h6>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="card-inner">
                                                    <table class="datatable-init-export nowrap table" data-export-title="Export">
                                                        <thead>
                                                            <tr>
                                                                <th>Customer ID</th>
                                                                <th>Name </th>
                                                                <th>Loan Amount</th>
                                                                <th>Rate</th>
                                                                <th>Repayment Amount</th>

                                                                <th>Application date</th>
                                                                <th>Status</th>
                                                                <th>Action</th>

                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <?php
                                                            if (isset($_GET['branch_details'])) {
                                                                $bname = $_GET['bname'];

                                                                include 'php/connect.inc.php';
                                                                $select = "SELECT * FROM loan WHERE branch = '$bname' ";
                                                                $query = mysqli_query($connect, $select);
                                                                while ($row = mysqli_fetch_assoc($query)) {
                                                                    $customer_id = $row['customer_id'];
                                                                    $fname = $row['fname'];
                                                                    $lname = $row['lname'];
                                                                    $lamount = $row['lamount'];
                                                                    $repayment = $row['repayment'];
                                                                    $rate = $row['rate'];
                                                                    $date = $row['application_date'];
                                                                    $status = $row['status'];

                                                                    echo "
                                                        <tr>
                                                            <td>$customer_id</td>
                                                            <td>$fname  $lname</td>
                                                            <td>$lamount</td>
                                                            <td>$rate</td>
                                                            <td>$repayment</td>

                                                            <td>$date</td>
                                                            <td>$status</td>
                                                            <td>View</td>
                                                            
                                                        </tr>
                                                    ";
                                                                }
                                                            }

                                                            ?>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div><!-- .card-preview -->
                                        </div> <!-- nk-block -->

                                        <div class="nk-block nk-block-lg">
                                            <div class="card card-bordered card-preview">
                                                <div class="card-inner">
                                                    <div class="card-title-group">
                                                        <div class="card-title">
                                                            <h6 class="title">Savings Transactions</h6>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="card-inner">
                                                    <table class="datatable-init-export nowrap table" data-export-title="Export">
                                                        <thead>
                                                            <tr>
                                                                <th>Customer ID</th>
                                                                <th>Name </th>
                                                                <th>Loan Amount</th>
                                                                <th>Rate</th>
                                                                <th>Repayment Amount</th>

                                                                <th>Application date</th>
                                                                <th>Status</th>
                                                                <th>Action</th>

                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <?php
                                                            include 'php/connect.inc.php';
                                                            $select = "SELECT * FROM loan";
                                                            $query = mysqli_query($connect, $select);
                                                            while ($row = mysqli_fetch_assoc($query)) {
                                                                $customer_id = $row['customer_id'];
                                                                $fname = $row['fname'];
                                                                $lname = $row['lname'];
                                                                $lamount = $row['lamount'];
                                                                $repayment = $row['repayment'];
                                                                $rate = $row['rate'];
                                                                $date = $row['application_date'];
                                                                $status = $row['status'];

                                                                echo "
                                                                <tr>
                                                                    <td>$customer_id</td>
                                                                    <td>$fname  $lname</td>
                                                                    <td>$lamount</td>
                                                                    <td>$rate</td>
                                                                    <td>$repayment</td>

                                                                    <td>$date</td>
                                                                    <td>$status</td>
                                                                     <td>View</td>

                                                                </tr>
                                                            ";
                                                            }

                                                            ?>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="nk-block nk-block-lg">
                                            <div class="card card-bordered card-preview">
                                                <div class="card-inner">
                                                    <div class="card-title-group">
                                                        <div class="card-title">
                                                            <h6 class="title">Withdrawal Transactions</h6>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="card-inner">
                                                    <table class="datatable-init-export nowrap table" data-export-title="Export">
                                                        <thead>
                                                            <tr>
                                                                <th>Customer ID</th>
                                                                <th>Name </th>
                                                                <th>Loan Amount</th>
                                                                <th>Rate</th>
                                                                <th>Repayment Amount</th>

                                                                <th>Application date</th>
                                                                <th>Status</th>
                                                                <th>Action</th>

                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <?php
                                                            include 'php/connect.inc.php';
                                                            $select = "SELECT * FROM loan";
                                                            $query = mysqli_query($connect, $select);
                                                            while ($row = mysqli_fetch_assoc($query)) {
                                                                $customer_id = $row['customer_id'];
                                                                $fname = $row['fname'];
                                                                $lname = $row['lname'];
                                                                $lamount = $row['lamount'];
                                                                $repayment = $row['repayment'];
                                                                $rate = $row['rate'];
                                                                $date = $row['application_date'];
                                                                $status = $row['status'];

                                                                echo "
                                                                <tr>
                                                                    <td>$customer_id</td>
                                                                    <td>$fname  $lname</td>
                                                                    <td>$lamount</td>
                                                                    <td>$rate</td>
                                                                    <td>$repayment</td>

                                                                    <td>$date</td>
                                                                    <td>$status</td>
                                                                     <td>View</td>

                                                                </tr>
                                                            ";
                                                            }

                                                            ?>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>




                                    </div><!-- .row -->
                                </div><!-- .nk-block -->
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

                    </div>
                </div>
            </div><!-- .modal-content -->
        </div><!-- .modla-dialog -->
    </div><!-- .modal -->
    <!-- JavaScript -->
    <script src="./assets/js/bundle.js?ver=3.0.3"></script>
    <script src="./assets/js/scripts.js?ver=3.0.3"></script>
    <script src="./assets/js/charts/chart-ecommerce.js?ver=3.0.3"></script>
    <script src="./assets/js/libs/datatable-btns.js?ver=3.0.3"></script>
</body>

</html>