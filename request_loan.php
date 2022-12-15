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
                                            <h3 class="nk-block-title page-title">Request Loan</h3>
                                        </div><!-- .nk-block-head-content -->
                                    </div><!-- .nk-block-between -->
                                </div><!-- .nk-block-head -->
                                <div class="nk-block nk-block-lg">
                                    <div class="card">
                                        <div class="card-inner">
                                            <div class="tab-content">
                                                <div class="tab-pane active" id="tabItem5">
                                                    <h4 class="title nk-block-title">Request Loan</h4>
                                                    <p>Processing of loan application.</p>
                                                    <form action="process_loan.php" method="GET" class="gy-3 form-settings">
                                                        <div class="row g-3 align-center">
                                                            <div class="col-lg-4">
                                                                <div class="form-group">
                                                                    <label class="form-label" for="site-name">Loan Product</label>

                                                                </div>
                                                            </div>
                                                            <div class="col-lg-8">
                                                              <div class="form-group">
                                                                <select class='form-select js-select2' name='lproduct'>
                                                                  <?php
                                                                    include 'php/connect.inc.php';
                                                                    $select = "SELECT * FROM loanproduct";
                                                                    $query = mysqli_query($connect, $select);
                                                                    while($row = mysqli_fetch_assoc($query)){
                                                                      $pname = $row['product_name'];

                                                                    echo "
                                                                      <option>$pname</option>
                                                                      ";
                                                                    }
                                                                  ?>

                                                                  </select>
                                                              </div>
                                                            </div>
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
                                                                      <select class='form-select js-select2' name='customer_id'>
                                                                        <?php
                                                                          include 'php/connect.inc.php';
                                                                          $select = "SELECT * FROM customer";
                                                                          $query = mysqli_query($connect, $select);
                                                                          while($row = mysqli_fetch_assoc($query)){
                                                                            $customer_id = $row['customer_id'];

                                                                          echo "
                                                                            <option>$customer_id</option>
                                                                            ";
                                                                          }
                                                                        ?>

                                                                        </select>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row g-3 align-center">
                                                            <div class="col-lg-4">
                                                                <div class="form-group">
                                                                    <label class="form-label" for="site-copyright">Loan Amount</label>

                                                                </div>
                                                            </div>
                                                            <div class="col-lg-8">
                                                                <div class="form-group">
                                                                    <div class="form-control-wrap">
                                                                        <input type="number" name="lamount" class="form-control" id="site-copyright">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="row g-3 align-center">
                                                            <div class="col-lg-4">
                                                                <div class="form-group">
                                                                    <label class="form-label">Application Date</label>

                                                                </div>
                                                            </div>
                                                            <div class="col-lg-8">
                                                                <div class="form-group">
                                                                    <div class="form-control-wrap">
                                                                        <input type="date" class="form-control" name="date">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>


                                                        <div class="row g-3">
                                                            <div class="col-lg-7">
                                                                <div class="form-group mt-2">
                                                                    <button type="submit" name="request_loan.php" class="btn btn-lg btn-primary" data-bs-target="#modalAlert" data-bs-toggle="modal">Proceed</button>
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

    <div class="modal fade" tabindex="-1" id="modalAlert">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <a href="#" class="close" data-bs-dismiss="modal"><em class="icon ni ni-cross"></em></a>
                <div class="modal-body modal-body-lg text-center">
                    <div class="nk-modal">
                        <em class="nk-modal-icon icon icon-circle icon-circle-xxl ni ni-check bg-success"></em>
                        <h4 class="nk-modal-title">Congratulations!</h4>
                        <div class="nk-modal-text">
                            <div class="caption-text">You’ve successfully Updated.</div>
                            <span class="sub-text-sm">Lorem ipsum dolor sit amet. <a href="#"> Click here</a></span>
                        </div>
                        <div class="nk-modal-action">
                            <a href="#" class="btn btn-lg btn-mw btn-primary" data-bs-dismiss="modal">OK</a>
                        </div>
                    </div>
                </div><!-- .modal-body -->
                <div class="modal-footer bg-lighter">
                    <div class="text-center w-100">
                        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit.<a href="#">Lorem, ipsum.</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- JavaScript -->
    <script src="./assets/js/bundle.js?ver=3.0.3"></script>
    <script src="./assets/js/scripts.js?ver=3.0.3"></script>
</body>

</html>
