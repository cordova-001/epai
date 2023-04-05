<?php
if (isset($_GET['branch_details'])) {
    $bname = $_GET['bname'];
    include 'php/connect.inc.php';
    $select = "SELECT * FROM customer WHERE branch = '$bname'";
    $query = mysqli_query($connect, $select);

    $nums = mysqli_num_rows($query);
    echo $nums;

    $chkL = "SELECT * FROM loan WHERE status = 'Approved' and branch = '$bname'";
    $query = mysqli_query($connect, $chkL);
    $loanApproved = mysqli_num_rows($query);

    $chkL = "SELECT * FROM loan WHERE status = 'Disbursed' and branch = '$bname'";
    $query = mysqli_query($connect, $chkL);
    $loanDisbursed = mysqli_num_rows($query);
} else {
    header("Location: manage_branch");
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
                                            <h4 class="nk-block-title page-title"> <?php echo $bname; ?> - 001 </h4>
                                        </div><!-- .nk-block-head-content -->
                                    </div><!-- .nk-block-between -->
                                </div><!-- .nk-block-head -->
                                <div class="card card-bordered card-preview">
                                    <div class="card-inner">
                                        <ul class="nav nav-tabs mt-n3">
                                            <li class="nav-item">
                                                <a class="nav-link active" data-bs-toggle="tab" href="#tabItem5"><em class="icon ni ni-user"></em><span>Branch Summary Report</span></a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" data-bs-toggle="tab" href="#tabItem6"><em class="icon ni ni-lock-alt"></em><span>Loan Product Report</span></a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" data-bs-toggle="tab" href="#tabItem7"><em class="icon ni ni-bell"></em><span>Savings Report</span></a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" data-bs-toggle="tab" href="#tabItem8"><em class="icon ni ni-link"></em><span>Connect</span></a>
                                            </li>
                                        </ul>
                                        <div class="tab-content">
                                            <div class="tab-pane active" id="tabItem5">
                                                <div class="col-xxl-4">
                                                    <div class="row g-gs">
                                                        <div class="col-xxl-12 col-md-6">
                                                            <div class="card">
                                                                <div class="nk-ecwg nk-ecwg3">
                                                                    <div class="card-inner pb-0">
                                                                        <div class="card-title-group">
                                                                            <div class="card-title">
                                                                                <h6 class="title">Total No of Customer</h6>
                                                                            </div>
                                                                        </div>
                                                                        <div class="data">
                                                                            <div class="data-group">
                                                                                <div class="amount"><?php echo $nums; ?></div>
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
                                                                                <h6 class="title">Total No of Centers</h6>
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

                                                <div class="col-xxl-4">
                                                    <div class="row g-gs">
                                                        <div class="col-xxl-12 col-md-6">
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
                                                                                <div class="amount"><?php echo $loanApproved; ?></div>
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
                                                                                <h6 class="title">Total Loan Disbursed</h6>
                                                                            </div>
                                                                        </div>
                                                                        <div class="data">
                                                                            <div class="data-group">
                                                                                <div class="amount"><?php echo $loanDisbursed; ?></div>
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

                                                <div class="col-xxl-4">
                                                    <div class="row g-gs">
                                                        <div class="col-xxl-12 col-md-6">
                                                            <div class="card">
                                                                <div class="nk-ecwg nk-ecwg3">
                                                                    <div class="card-inner pb-0">
                                                                        <div class="card-title-group">
                                                                            <div class="card-title">
                                                                                <h6 class="title">Total Loan Repaid</h6>
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
                                                                                <h6 class="title">Total Unpaid Loan</h6>
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
                                            </div>
                                            <div class="tab-pane" id="tabItem6">
                                                <div class="card-inner">
                                                    <div class="tab-content">
                                                        <div class="tab-pane active" id="tabItem5">
                                                            <!-- <h4 class="title nk-block-title">Edit Staff</h4> -->
                                                            <!-- <p>Processing of loan application.</p> -->
                                                            <ul class="nk-block-tools g-3">
                                                                <li>
                                                                    <div class="form-control-wrap">
                                                                        <div class="form-icon form-icon-right">

                                                                        </div>
                                                                        <input type="text" class="form-control" id="default-04" placeholder="Search by name">
                                                                    </div>
                                                                </li>
                                                                <li>
                                                                    <div class="form-control-wrap">
                                                                        <div class="form-icon form-icon-right">

                                                                        </div>
                                                                        <input type="text" class="form-control" id="default-04" placeholder="Search by name">
                                                                    </div>
                                                                </li>
                                                                <li>
                                                                    <div class="form-control-wrap">
                                                                        <div class="form-icon form-icon-right">

                                                                        </div>
                                                                        <input type="text" class="form-control" id="default-04" placeholder="Search by name">
                                                                    </div>
                                                                </li>
                                                                <li>
                                                                    <div class="form-control-wrap">
                                                                        <div class="form-icon form-icon-right">

                                                                        </div>
                                                                        <input type="text" class="form-control" id="default-04" placeholder="Search by name">
                                                                    </div>
                                                                </li>
                                                                <li>

                                                                </li>
                                                                <div class="form-group mt-2">
                                                                    <button type="submit" name="request_loan" class="btn btn-lg btn-primary">Create Report</button>
                                                                </div>
                                                            </ul>
                                                        </div>
                                                        <!--tab pan -->


                                                    </div>
                                                </div>

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


                                            </div>
                                            <div class="tab-pane" id="tabItem7">
                                                <p>Fugiat id quis dolor culpa eiusmod anim velit excepteur proident dolor aute qui magna. Ad proident laboris ullamco esse anim Lorem Lorem veniam quis Lorem irure occaecat velit nostrud magna nulla. Velit et et proident Lorem do ea tempor officia dolor. Reprehenderit Lorem aliquip labore est magna commodo est ea veniam consectetur.</p>
                                            </div>
                                            <div class="tab-pane" id="tabItem8">
                                                <p>Eu dolore ea ullamco dolore Lorem id cupidatat excepteur reprehenderit consectetur elit id dolor proident in cupidatat officia. Voluptate excepteur commodo labore nisi cillum duis aliqua do. Aliqua amet qui mollit consectetur nulla mollit velit aliqua veniam nisi id do Lorem deserunt amet. Culpa ullamco sit adipisicing labore officia magna elit nisi in aute tempor commodo eiusmod.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div><!-- .card-preview -->

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