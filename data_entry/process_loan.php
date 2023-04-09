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
                                            <h3 class="nk-block-title page-title"> Loan Processing </h3>
                                        </div><!-- .nk-block-head-content -->
                                    </div><!-- .nk-block-between -->
                                </div><!-- .nk-block-head -->

                                <?php
                                if(isset($_GET['request_loan'])){
                                  $lproduct = htmlentities(addslashes($_GET['lproduct']));
                                  $customer_id = htmlentities(addslashes($_GET['customer_id']));
                                  $lamount = htmlentities(addslashes($_GET['lamount']));
                                  $date = htmlentities(addslashes($_GET['date']));
                                  include 'php/connect.inc.php';
                                  $select_loan_product = "SELECT * FROM loanproduct WHERE product_name = '$lproduct' ";
                                  $query = mysqli_query($connect, $select_loan_product);
                                  while($row = mysqli_fetch_assoc($query)){
                                    $pid = $row['product_id'];
                                    $pname = $row['product_name'];
                                    $max = $row['max_amount'];
                                    $min = $row['min_amount'];
                                    $rate = $row['rate'];
                                    $description = $row['description'];
                                  }
                                  $repayment = ($lamount * $rate)/100;
                                  $repay_amount = $lamount + $repayment;
                                  if($lamount < $min){
                                    $msg = "The amount requested is below the required amount for this loan product";
                                    echo "<div class='nk-block nk-block-lg'>
                                        <div class='card'>
                                            <div class='card-inner'>
                                                <div class='tab-content'>
                                                    <div class='tab-pane active' id='tabItem5'>
                                                        <h4 class='title nk-block-title' style='text-align: center;'> Loan Processing Status</h4>
                                                        <p style='text-align: center;'>$msg</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>";
                                  }else{
                                    if($lamount > $max){
                                      $msg = "The amount requested is above the required amount for this loan product";
                                      echo "<div class='nk-block nk-block-lg'>
                                          <div class='card'>
                                              <div class='card-inner'>
                                                  <div class='tab-content'>
                                                      <div class='tab-pane active' id='tabItem5'>
                                                          <h4 class='title nk-block-title' style='text-align: center;'> Loan Processing Status</h4>
                                                          <p style='text-align: center;'>$msg</p>
                                                      </div>
                                                  </div>
                                              </div>
                                          </div>
                                      </div>";
                                  }else{
                                  $select_customer = "SELECT * FROM customer WHERE customer_id = '$customer_id'";
                                  $sql = mysqli_query($connect, $select_customer);
                                  while($fetch = mysqli_fetch_assoc($sql)){
                                    $fname = $fetch['first_name'];
                                    $lname = $fetch['last_name'];
                                    $phone = $fetch['phone'];
                                    $email = $fetch['email'];
                                    $status = $fetch['status'];
                                    $customer_id = $fetch['customer_id'];
                                  }




                                echo "<div class='nk-block nk-block-lg'>
                                    <div class='card'>
                                        <div class='card-inner'>
                                            <div class='tab-content'>
                                                <div class='tab-pane active' id='tabItem5'>
                                                    <h4 class='title nk-block-title'>Confirm Loan Application Details</h4>
                                                    <p>Processing of loan application.</p>
                                                    <form action='#' class='gy-3 form-settings' method='POST'>

                                                        <div class='row g-3 align-center'>
                                                            <div class='col-lg-4'>
                                                                <div class='form-group'>
                                                                    <label class='form-label' for='site-name'>Customer ID</label>

                                                                </div>
                                                            </div>
                                                            <div class='col-lg-8'>
                                                                <div class='form-group'>
                                                                    <div class='form-control-wrap'>
                                                                        <input type='text' name='customer_id' readonly class='form-control' id='site-name' value='$customer_id'>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class='row g-3 align-center'>
                                                            <div class='col-lg-4'>
                                                                <div class='form-group'>
                                                                    <label class='form-label' for='site-name'>First Name</label>

                                                                </div>
                                                            </div>
                                                            <div class='col-lg-8'>
                                                                <div class='form-group'>
                                                                    <div class='form-control-wrap'>
                                                                        <input type='text' name='fname' readonly class='form-control' id='site-name' value='$fname'>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class='row g-3 align-center'>
                                                            <div class='col-lg-4'>
                                                                <div class='form-group'>
                                                                    <label class='form-label' for='site-name'>Last Name</label>

                                                                </div>
                                                            </div>
                                                            <div class='col-lg-8'>
                                                                <div class='form-group'>
                                                                    <div class='form-control-wrap'>
                                                                        <input type='text' name='lname' readonly class='form-control' id='site-name' value='$lname'>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class='row g-3 align-center'>
                                                            <div class='col-lg-4'>
                                                                <div class='form-group'>
                                                                    <label class='form-label' for='site-name'>Email</label>

                                                                </div>
                                                            </div>
                                                            <div class='col-lg-8'>
                                                                <div class='form-group'>
                                                                    <div class='form-control-wrap'>
                                                                        <input type='text' name='email' readonly class='form-control' id='site-name' value='$email'>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class='row g-3 align-center'>
                                                            <div class='col-lg-4'>
                                                                <div class='form-group'>
                                                                    <label class='form-label' for='site-name'>Phone</label>

                                                                </div>
                                                            </div>
                                                            <div class='col-lg-8'>
                                                                <div class='form-group'>
                                                                    <div class='form-control-wrap'>
                                                                        <input type='text' name='phone' readonly class='form-control' id='site-name' value='$phone'>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class='row g-3 align-center'>
                                                            <div class='col-lg-4'>
                                                                <div class='form-group'>
                                                                    <label class='form-label' for='site-name'>Date Applied</label>

                                                                </div>
                                                            </div>
                                                            <div class='col-lg-8'>
                                                                <div class='form-group'>
                                                                    <div class='form-control-wrap'>
                                                                        <input type='text' name='date' readonly class='form-control' id='site-name' value='$date'>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <hr>

                                                        <div class='row g-3 align-center'>
                                                            <div class='col-lg-4'>
                                                                <div class='form-group'>
                                                                    <label class='form-label' for='site-name'>Loan Amount</label>

                                                                </div>
                                                            </div>
                                                            <div class='col-lg-8'>
                                                                <div class='form-group'>
                                                                    <div class='form-control-wrap'>
                                                                        <input type='text' name='lamount' readonly class='form-control' id='site-name' value='$lamount'>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class='row g-3 align-center'>
                                                            <div class='col-lg-4'>
                                                                <div class='form-group'>
                                                                    <label class='form-label' for='site-name'>Interest Rate</label>

                                                                </div>
                                                            </div>
                                                            <div class='col-lg-8'>
                                                                <div class='form-group'>
                                                                    <div class='form-control-wrap'>
                                                                        <input type='text' name='rate' readonly class='form-control' id='site-name' value='$rate'>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class='row g-3 align-center'>
                                                            <div class='col-lg-4'>
                                                                <div class='form-group'>
                                                                    <label class='form-label' for='site-name'>Repayment Amount</label>

                                                                </div>
                                                            </div>
                                                            <div class='col-lg-8'>
                                                                <div class='form-group'>
                                                                    <div class='form-control-wrap'>
                                                                        <input type='text' name='repayment' readonly class='form-control' id='site-name' value='$repay_amount'>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class='row g-'>
                                                            <div class='col-lg-7'>
                                                                <div class='form-group mt-2'>
                                                                    <button type='submit' name='apply_loan' class='btn btn-lg btn-primary' data-bs-target='#modalAlert' data-bs-toggle='modal'>Proceed</button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </form>
                                                </div>
                                                <!--tab pan -->

                                              ";}
                                            }
                                          }

                                         include 'php/function.php';  add_loan();
                                              ?>


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
