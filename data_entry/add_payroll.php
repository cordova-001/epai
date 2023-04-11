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
                  <div class="card-title-group align-start mb-2" style="border: 1px solid; background-color: white;">
                    <div class="card-title">
                      <div class="card-inner">
                        <div class="row gy-12">

                          <div class="col-md-12" style="float:left; border: 1px solid;">
                            <div class="form-group">
                              <label class="form-label" for="first-name">Employee Name</label>
                              <input type="text" name="employee_name" class="form-control" id="first-name" placeholder="Employee name">
                            </div>

                          </div>
                          <span><br></span>
                          <div class="col-md-4" style="float: left;">
                            <div class="form-group">
                              <label class="form-label" for="last-name">Employee Number</label>
                              <input type="text" name="employee_no" class="form-control" id="last-name" placeholder="Employee Number">
                            </div>
                          </div>
                          <span><br></span>
                          <div class="col-md-4" style="float: left;">
                            <div class="form-group">
                              <label class="form-label" for="email">Payroll Date</label>
                              <input type="date" name="payroll_date" class="form-control" id="email" placeholder="Payroll Date">
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="card-tools">
                      <em class="card-hint icon ni ni-help-fill" data-bs-toggle="tooltip" data-bs-placement="left" title="Financial System"></em>
                    </div>
                  </div>
                  <div class="card" style="width: 50%; float: left;">
                    <div class="card-inner">
                      <div class="tab-content">

                        <div class="tab-pane active" id="tabItem5">
                          <h5 class="title">Add A Payroll </h5>
                          <?php customerRegistration(); ?>
                          <form action="#" class="pt-2" method="POST">
                            <div class="row gy-12">

                              <span><br></span>
                              <div class="col-md-12">
                                <div class="form-group">
                                  <label class="form-label" for="email">Basic Salary</label>
                                  <input type="text" name="basic_salary" class="form-control" id="email" placeholder="Basic Salary">
                                </div>
                              </div>
                              <span><br></span>
                              <div class="col-md-12">
                                <div class="form-group">
                                  <label class="form-label" for="address-st">Over time </label>
                                  <input type="text" name="overtime" class="form-control" id="address-st" placeholder="Overtime">
                                </div>
                              </div>

                              <span><br></span>
                              <div class="col-md-12">
                                <div class="form-group">
                                  <label class="form-label" for="address-st"> Transport Allowance </label>
                                  <input type="text" name="transport_allowance" class="form-control" id="address-st" placeholder="Transport Allowance">
                                </div>
                              </div>
                              <span><br></span>
                              <div class="col-md-12">
                                <div class="form-group">
                                  <label class="form-label" for="address-st"> Medical Allowance </label>
                                  <input type="text" name="medical" class="form-control" id="address-st" placeholder="Medical Allowance">
                                </div>
                              </div>

                              <span><br></span>
                              <div class="col-md-12">
                                <div class="form-group">
                                  <label class="form-label" for="address-st"> Other Allowance </label>
                                  <input type="text" name="other_allowance" class="form-control" id="address-st" placeholder="Other Allowance">
                                </div>
                              </div>
                              <span><br></span>
                              <hr>
                              <div class="col-md-12">
                                <div class="form-group">
                                  <label class="form-label" for="address-st"> Total Pay </label>
                                  <input type="text" name="total_pay" class="form-control" id="address-st" placeholder="Total Pay">
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
                    <div class="card-inner" style="">
                      <div class="tab-content" style="">
                        <div class="tab-pane active" id="tabItem5">
                          <h5 class="title">Deductions </h5>

                          <form action="#" class="pt-2" method="POST">
                            <div class="row gy-12">
                              <div class="col-md-12">
                                <div class="form-group">
                                  <label class="form-label" for="first-name">Pensions</label>
                                  <input type="text" name="employee_name" class="form-control" id="first-name" placeholder="Employee name">
                                </div>
                              </div>
                              <span><br></span>
                              <div class="col-md-12">
                                <div class="form-group">
                                  <label class="form-label" for="last-name">Health Insurance</label>
                                  <input type="text" name="employee_no" class="form-control" id="last-name" placeholder="Employee Number">
                                </div>
                              </div>
                              <span><br></span>
                              <div class="col-md-12">
                                <div class="form-group">
                                  <label class="form-label" for="email">Unpaid Leave</label>
                                  <input type="date" name="payroll_date" class="form-control" id="email" placeholder="Payroll Date">
                                </div>
                              </div>
                              <span><br></span>
                              <div class="col-md-12">
                                <div class="form-group">
                                  <label class="form-label" for="email">Tax Deduction</label>
                                  <input type="text" name="basic_salary" class="form-control" id="email" placeholder="Basic Salary">
                                </div>
                              </div>
                              <span><br></span>
                              <div class="col-md-12">
                                <div class="form-group">
                                  <label class="form-label" for="address-st"> Salary Loan </label>
                                  <input type="text" name="overtime" class="form-control" id="address-st" placeholder="Overtime">
                                </div>
                              </div>

                              <span><br></span>
                              <div class="col-md-12">
                                <div class="form-group">
                                  <label class="form-label" for="address-st"> Total Deductions </label>
                                  <input type="text" name="bonuses" class="form-control" id="address-st" placeholder="Bonuses">
                                </div>
                              </div>


                              <hr>

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