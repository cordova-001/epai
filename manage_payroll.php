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
                      <h3 class="nk-block-title page-title"> Manage Payroll</h3>
                    </div>
                    <div class="nk-block-head-content">
                      <div class="toggle-wrap nk-block-tools-toggle">
                        <a href="#" class="btn btn-icon btn-trigger toggle-expand me-n1" data-target="more-options"><em class="icon ni ni-more-v"></em></a>
                        <div class="toggle-expand-content" data-content="more-options">
                          <ul class="nk-block-tools g-3">



                          </ul>
                        </div>
                      </div>
                    </div><!-- .nk-block-head-content -->
                  </div><!-- .nk-block-between -->
                </div><!-- .nk-block-head -->
                <div class="nk-block">
                  <div class="card">
                    <div class="card-inner-group">
                      <div class="card-inner p-0">
                        <div class="nk-tb-list nk-tb-ulist">
                          <div class="nk-tb-item nk-tb-head">

                            <div class="nk-tb-col"><span class="sub-text">Name</span></div>
                            <div class="nk-tb-col tb-col-md"><span class="sub-text">Phone</span></div>
                            <div class="nk-tb-col tb-col-lg"><span class="sub-text">Email</span></div>
                            <div class="nk-tb-col tb-col-lg"><span class="sub-text">Customer ID</span></div>
                            <div class="nk-tb-col tb-col-mb"><span class="sub-text"></span>Address</div>
                            <div class="nk-tb-col tb-col-md"><span class="sub-text">Status</span></div>
                            <div class="nk-tb-col nk-tb-col-tools">
                              <ul class="nk-tb-actions gx-1 my-n1">
                                <li>
                                  <div class="drodown">
                                    <a href="#" class="dropdown-toggle btn btn-icon btn-trigger" data-bs-toggle="dropdown"><em class="icon ni ni-more-h"></em></a>

                                  </div>
                                </li>
                              </ul>
                            </div>
                          </div><!-- .nk-tb-item -->

                          <?php
                          include 'php/connect.inc.php';
                          $select = "SELECT * FROM customer";
                          $query = mysqli_query($connect, $select);
                          while ($row = mysqli_fetch_assoc($query)) {
                            $fname = $row['first_name'];
                            $lname = $row['last_name'];
                            $phone = $row['phone'];
                            $email = $row['email'];
                            $gender = $row['gender'];
                            $address = $row['address'];
                            $state_of_origin = $row['state_of_origin'];
                            $lga = $row['lga'];
                            $next_of_kin = $row['next_of_kin'];
                            $addy_of_nok = $row['addy_of_nok'];
                            $date_of_birth = $row['date_of_birth'];
                            $occupation = $row['occupation'];
                            $customer_id = $row['customer_id'];
                            $status = $row['status'];
                            echo "<div class='nk-tb-item'>
                                                        
                                                        <div class='nk-tb-col'>
                                                            
                                                                <div class='user-card'>

                                                                    <div class='user-info'>
                                                                        <span class='tb-lead'>$fname $lname <span class='dot dot-success d-md-none ms-1'></span></span>

                                                                    </div>
                                                                </div>
                                                            
                                                        </div>
                                                        <div class='nk-tb-col tb-col-md'>
                                                            <span>$phone</span>
                                                        </div>
                                                        <div class='nk-tb-col tb-col-lg'>
                                                            <span>$email</span>
                                                        </div>
                                                        <div class='nk-tb-col tb-col-lg'>
                                                            <span>$customer_id</span>
                                                        </div>
                                                        <div class='nk-tb-col tb-col-md'>
                                                            <span class='tb-status text-success'>$address</span>
                                                        </div>

                                                        <div class='nk-tb-col tb-col-md'>
                                                            <span class='tb-status text-success'>$status</span>
                                                        </div>
                                                        <div class='nk-tb-col nk-tb-col-tools'>
                                                            <ul class='nk-tb-actions gx-1'>

                                                                <li>
                                                                    <div class='drodown'>
                                                                    <form method='get'>
                                                                        <a href='' class='dropdown-toggle btn btn-icon btn-trigger' data-bs-toggle='dropdown'><em class='icon ni ni-more-h'></em></a>
                                                                        <div class='dropdown-menu dropdown-menu-end'>
                                                                            <ul class='link-list-opt no-bdr'>
                                                                              <li><input name='client_details' type='submit' formaction='customer_details' style='border: 0px; background-color: white; float: center;' value='View Details' class='icon ni ni-eye' /></li><br>
                                                                              <li><input type='text' name='customer_id'  hidden value='$customer_id'  /></li>
                                                                                <li><input name='edit_client' type='submit' formaction='edit_client' style='border: 0px; background-color: white; float: center;' value='Edit Customer' class='icon ni ni-eye' /></li>
                                                                            </ul>
                                                                        </div>
                                                                        </form>
                                                                    </div>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div><!-- .nk-tb-item -->

                                                    ";
                          }
                          ?>




                        </div><!-- .nk-tb-list -->
                      </div>
                      <div class="card-inner">
                        <div class="nk-block-between-md g-3">
                          <!-- <div class="g">
                                                        <ul class="pagination justify-content-center justify-content-md-start">
                                                            <li class="page-item"><a class="page-link" href="#"><em class="icon ni ni-chevrons-left"></em></a></li>
                                                            <li class="page-item"><a class="page-link" href="#">1</a></li>
                                                            <li class="page-item"><a class="page-link" href="#">2</a></li>
                                                            <li class="page-item"><span class="page-link"><em class="icon ni ni-more-h"></em></span></li>
                                                            <li class="page-item"><a class="page-link" href="#">6</a></li>
                                                            <li class="page-item"><a class="page-link" href="#">7</a></li>
                                                            <li class="page-item"><a class="page-link" href="#"><em class="icon ni ni-chevrons-right"></em></a></li>
                                                        </ul> .pagination 
                                                    </div> -->
                          <div class="g">
                            <!-- <div class="pagination-goto d-flex justify-content-center justify-content-md-start gx-3">
                                                            <div>Page</div>

                                                        </div> -->
                          </div><!-- .pagination-goto -->
                        </div><!-- .nk-block-between -->
                      </div>
                      <!--card inner-->
                    </div>
                  </div>
                  <!--card-->
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

  <!-- Add instructor-->

  <!-- JavaScript -->
  <script src="./assets/js/bundle.js?ver=3.0.3"></script>
  <script src="./assets/js/scripts.js?ver=3.0.3"></script>
</body>

</html>