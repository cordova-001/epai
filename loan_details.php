<?php
if (isset($_GET['click'])) {
    $id = $_GET['id'];
    include 'php/connect.inc.php';
    $select = "SELECT * FROM loan WHERE id = '$id' ";
    $query = mysqli_query($connect, $select);
    while ($row = mysqli_fetch_assoc($query)) {
        $id = $row['id'];
        $customer_id = $row['customer_id'];
        $fname = $row['fname'];
        $lname = $row['lname'];
        $phone = $row['phone'];
        $email = $row['email'];
        $lamount = $row['lamount'];
        $rate = $row['rate'];
        $repayment = $row['repayment'];
        $application_date = $row['application_date'];
        $status = $row['status'];
        $bname = $row['branch_name'];
        $bid = $row['bid'];
    }
} else {
    header('Location: loan_management.php');
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
                                            <h3 class="nk-block-title page-title">Loan Details</h3>
                                        </div><!-- .nk-block-head-content -->
                                    </div><!-- .nk-block-between -->
                                </div><!-- .nk-block-head -->
                                <div class="nk-block nk-block-lg">
                                    <div class="card">
                                        <div class="card-inner">
                                            <div class="tab-content">
                                                <div class="tab-pane active" id="tabItem5">
                                                    <h4 class="title nk-block-title">Loan Details </h4>
                                                    <!-- <p>Processing of loan application.</p> -->
                                                    <form method="post" class="gy-3 form-settings">
                                                        <div class="row g-3 align-center">


                                                        </div>

                                                        <div class="row g-3 align-center">
                                                            <div class="col-lg-4">
                                                                <div class="form-group">
                                                                    <label class="form-label" for="site-email">Customer ID</label>

                                                                </div>
                                                            </div>
                                                            <div class="col-lg-8">
                                                                <div class="form-group">
                                                                    <div class="form-control-wrap">
                                                                        <input type="text" name="cid" readonly required value="<?php echo $customer_id; ?>" class="form-control" id="site-copyright">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row g-3 align-center">
                                                            <div class="col-lg-4">
                                                                <div class="form-group">
                                                                    <label class="form-label" for="site-email">First Name</label>

                                                                </div>
                                                            </div>
                                                            <div class="col-lg-8">
                                                                <div class="form-group">
                                                                    <div class="form-control-wrap">
                                                                        <input type="text" name="fname" readonly required value="<?php echo $fname; ?>" class="form-control" id="site-copyright">
                                                                        <input type="text" name="id" hidden value="<?php echo $id; ?>" class="form-control" id="site-copyright">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row g-3 align-center">
                                                            <div class="col-lg-4">
                                                                <div class="form-group">
                                                                    <label class="form-label" for="site-email">Last Name</label>

                                                                </div>
                                                            </div>
                                                            <div class="col-lg-8">
                                                                <div class="form-group">
                                                                    <div class="form-control-wrap">
                                                                        <input type="text" name="lname" readonly required value="<?php echo $lname; ?>" class="form-control" id="site-copyright">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row g-3 align-center">
                                                            <div class="col-lg-4">
                                                                <div class="form-group">
                                                                    <label class="form-label" for="site-email">Email</label>

                                                                </div>
                                                            </div>
                                                            <div class="col-lg-8">
                                                                <div class="form-group">
                                                                    <div class="form-control-wrap">
                                                                        <input type="email" name="email" readonly required value="<?php echo $email; ?>" class="form-control" id="site-copyright">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row g-3 align-center">
                                                            <div class="col-lg-4">
                                                                <div class="form-group">
                                                                    <label class="form-label" for="site-email">Phone Number</label>

                                                                </div>
                                                            </div>
                                                            <div class="col-lg-8">
                                                                <div class="form-group">
                                                                    <div class="form-control-wrap">
                                                                        <input type="text" name="phone" readonly required value="<?php echo $phone; ?>" class="form-control" id="site-copyright">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row g-3 align-center">
                                                            <div class="col-lg-4">
                                                                <div class="form-group">
                                                                    <label class="form-label" for="site-email">Requested Loan Amount</label>

                                                                </div>
                                                            </div>
                                                            <div class="col-lg-8">
                                                                <div class="form-group">
                                                                    <div class="form-control-wrap">
                                                                        <input type="text" name="lamount" readonly required value="<?php echo $lamount; ?>" class="form-control" id="site-copyright">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="row g-3 align-center">
                                                            <div class="col-lg-4">
                                                                <div class="form-group">
                                                                    <label class="form-label" for="site-email">Interest Rate</label>

                                                                </div>
                                                            </div>
                                                            <div class="col-lg-8">
                                                                <div class="form-group">
                                                                    <div class="form-control-wrap">
                                                                        <input type="text" name="rate" readonly required value="<?php echo $rate; ?>" class="form-control" id="site-copyright">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row g-3 align-center">
                                                            <div class="col-lg-4">
                                                                <div class="form-group">
                                                                    <label class="form-label" for="site-email">Repayment Loan Amount</label>

                                                                </div>
                                                            </div>
                                                            <div class="col-lg-8">
                                                                <div class="form-group">
                                                                    <div class="form-control-wrap">
                                                                        <input type="text" name="repayment" readonly required value="<?php echo $repayment; ?>" class="form-control" id="site-copyright">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="row g-3 align-center">
                                                            <div class="col-lg-4">
                                                                <div class="form-group">
                                                                    <label class="form-label" for="site-email">Application Date</label>

                                                                </div>
                                                            </div>
                                                            <div class="col-lg-8">
                                                                <div class="form-group">
                                                                    <div class="form-control-wrap">
                                                                        <input type="text" name="adate" readonly required value="<?php echo $application_date; ?>" class="form-control" id="site-copyright">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row g-3 align-center">
                                                            <div class="col-lg-4">
                                                                <div class="form-group">
                                                                    <label class="form-label" for="site-email">Status</label>

                                                                </div>
                                                            </div>
                                                            <div class="col-lg-8">
                                                                <div class="form-group">
                                                                    <div class="form-control-wrap">
                                                                        <input type="text" name="status" readonly required value="<?php echo $status; ?>" class="form-control" id="site-copyright">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row g-3 align-center">
                                                            <div class="col-lg-4">
                                                                <div class="form-group">
                                                                    <label class="form-label" for="site-email">Branch</label>

                                                                </div>
                                                            </div>
                                                            <div class="col-lg-8">
                                                                <div class="form-group">
                                                                    <div class="form-control-wrap">
                                                                        <input type="text" name="branch" readonly required value="<?php echo $bname; ?>" class="form-control" id="site-copyright">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>



                                                        <div class="row g-3">
                                                            <div class="col-lg-7">
                                                                <div class="form-group mt-2">
                                                                    <button type="submit" name="approve_loan" formaction="loan_approval.php" class="btn btn-lg btn-primary">APPROVE LOAN APPLICATION</button>
                                                                    <button type="submit" name="reject_loan" formaction="loan_reject.php" class="btn btn-lg btn-danger">REJECT LOAN APPLICATION</button>
                                                                </div>

                                                            </div>
                                                        </div>
                                                    </form>
                                                </div>
                                                <!--tab pan -->


                                            </div>
                                        </div>
                                        <!--card inner-->
                                    </div>
                                    <!--card-->
                                </div>
                                <!--nk-block-->
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


    <!-- JavaScript -->
    <script src="./assets/js/bundle.js?ver=3.0.3"></script>
    <script src="./assets/js/scripts.js?ver=3.0.3"></script>
</body>

</html>