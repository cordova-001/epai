<?php include 'php/function.php'; ?>

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
                      <h3 class="nk-block-title page-title">Add Payroll</h3>
                    </div><!-- .nk-block-head-content -->
                  </div><!-- .nk-block-between -->
                </div><!-- .nk-block-head -->
                <div class="nk-block nk-block-lg">
                  <div class="card" style="width: 50%; float: left;">
                    <div class="card-inner">
                      <div class="tab-content">
                        <div class="tab-pane active" id="tabItem5">
                          <h5 class="title">Add A Payroll </h5>
                          <?php customerRegistration(); ?>
                          <form action="#" class="pt-2" method="POST">
                            <div class="row gy-4">
                              <div class="col-md-4">
                                <div class="form-group">
                                  <label class="form-label" for="first-name">First Name</label>
                                  <input type="text" name="first_name" class="form-control" id="first-name" placeholder="First name">
                                </div>
                              </div>
                              <div class="col-md-4">
                                <div class="form-group">
                                  <label class="form-label" for="last-name">Last Name</label>
                                  <input type="text" name="last_name" class="form-control" id="last-name" placeholder="Last name">
                                </div>
                              </div>
                              <div class="col-md-4">
                                <div class="form-group">
                                  <label class="form-label" for="email">Email Address</label>
                                  <input type="email" name="email" class="form-control" id="email" placeholder="Email Address">
                                </div>
                              </div>

                              <div class="col-md-6">
                                <div class="form-group">
                                  <label class="form-label" for="address-st">Status</label>
                                  <select class="form-select js-select2" name="status">
                                    <option>Active</option>
                                    <option>Suspended</option>
                                  </select>
                                </div>
                              </div>

                              <div class="col-md-6">
                                <div class="form-group">
                                  <label class="form-label" for="address-st">Customer ID</label>
                                  <input type="text" name="customer_id" class="form-control" id="address-st" placeholder="Customer Id">
                                </div>
                              </div>

                              <hr>

                            </div>
                          </form>
                        </div>





                        <!--tab pan -->


                      </div>
                    </div>
                    <!--card inner-->
                  </div>



                  <div class="card" style="width: 45%; float: left; margin:5px;">
                    <div class="card-inner">
                      <div class="tab-content">
                        <div class="tab-pane active" id="tabItem5">
                          <h5 class="title">Add A Payroll </h5>
                          <?php customerRegistration(); ?>
                          <form action="#" class="pt-2" method="POST">
                            <div class="row gy-4">
                              <div class="col-md-12">
                                <div class="form-group">
                                  <label class="form-label" for="first-name">First Name</label>
                                  <input type="text" name="first_name" class="form-control" id="first-name" placeholder="First name">
                                </div>
                              </div>
                              <div class="col-md-4">
                                <div class="form-group">
                                  <label class="form-label" for="last-name">Last Name</label>
                                  <input type="text" name="last_name" class="form-control" id="last-name" placeholder="Last name">
                                </div>
                              </div>
                              <div class="col-md-4">
                                <div class="form-group">
                                  <label class="form-label" for="email">Email Address</label>
                                  <input type="email" name="email" class="form-control" id="email" placeholder="Email Address">
                                </div>
                              </div>

                              <div class="col-md-6">
                                <div class="form-group">
                                  <label class="form-label" for="address-st">Status</label>
                                  <select class="form-select js-select2" name="status">
                                    <option>Active</option>
                                    <option>Suspended</option>
                                  </select>
                                </div>
                              </div>

                              <div class="col-md-6">
                                <div class="form-group">
                                  <label class="form-label" for="address-st">Customer ID</label>
                                  <input type="text" name="customer_id" class="form-control" id="address-st" placeholder="Customer Id">
                                </div>
                              </div>

                              <hr>


                              <div class="col-md-12">
                                <ul class="align-center flex-wrap flex-sm-nowrap gx-4 gy-2">
                                  <li>
                                    <button name="create_customer" class="btn btn-primary">Add Customer</button>
                                  </li>

                                </ul>
                              </div>
                            </div>
                          </form>
                        </div>

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