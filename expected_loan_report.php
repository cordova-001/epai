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
    <title>Finance Automation System</title>
    <!-- StyleSheets  -->
    <link rel="stylesheet" href="./assets/css/dashlite.css?ver=3.0.3">
    <link id="skin-default" rel="stylesheet" href="./assets/css/theme.css?ver=3.0.3">
</head>

<body class="nk-body bg-lighter npc-default has-sidebar ">
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

                                <!-- <div class="components-preview wide-md mx-auto" style="border: 1px solid; width: 100%; margin-left: 0px; padding-left: 0px;"> -->
                                <div class="nk-block-head nk-block-head-lg wide-sm">
                                    <div class="nk-block-head-content">

                                        <h2 class="nk-block-title fw-normal">Expected Loan Report</h2>

                                    </div>
                                </div><!-- .nk-block-head -->
                                <div class="nk-block nk-block-lg">
                                    <div class="card">
                                        <div class="card-inner">
                                            <div class="tab-content">
                                                <div class="tab-pane active" id="tabItem10">
                                                    <!-- <h4 class="title nk-block-title">Edit Staff</h4> -->
                                                    <!-- <p>Processing of loan application.</p> -->
                                                    <div class="row gy-4">
                                                        <div class="col-md-4">
                                                            <div class="form-group">
                                                                <label class="form-label" for="first-name">Start Date</label>
                                                                <input type="date" name="start_date" class="form-control" placeholder="Start Date">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <div class="form-group">
                                                                <label class="form-label" for="first-name">End Date</label>
                                                                <input type="date" name="end_date" class="form-control" placeholder="End Date">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <label class="form-label" for="first-name"></label><br>
                                                            <button type="submit" name="request_loan" class="btn btn-lg btn-primary">Create Report</button>
                                                        </div>
                                                    </div>


                                                </div>
                                                <!--tab pan -->


                                            </div>
                                        </div>
                                        <!--card inner-->
                                    </div>
                                    <!--card-->
                                </div>

                                <div class="nk-block nk-block-lg">

                                    <div class="card card-bordered card-preview">
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
                                                            
                                                        </tr>
                                                    ";
                                                    }

                                                    ?>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div><!-- .card-preview -->
                                </div> <!-- nk-block -->


                            </div><!-- .components-preview -->
                            <!-- </div> -->


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







    <!-- JavaScript -->
    <script src="./assets/js/bundle.js?ver=3.0.3"></script>
    <script src="./assets/js/scripts.js?ver=3.0.3"></script>
    <script src="./assets/js/libs/datatable-btns.js?ver=3.0.3"></script>
</body>

</html>