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
                      <h3 class="nk-block-title page-title"> Chart of Account</h3>
                    </div>
                    <div class="nk-block-head-content">
                      <div class="toggle-wrap nk-block-tools-toggle">
                        <a href="#" class="btn btn-icon btn-trigger toggle-expand me-n1" data-target="more-options"><em class="icon ni ni-more-v"></em></a>
                        <div class="toggle-expand-content" data-content="more-options">
                          <ul class="nk-block-tools g-3">
                            <li>
                              <div class="form-control-wrap">
                                <div class="form-icon form-icon-right">
                                  <em class="icon ni ni-search"></em>
                                </div>
                                <input type="text" class="form-control" id="default-04" placeholder="Search by name">
                              </div>
                            </li>
                            <li>

                            </li>
                            <li class="nk-block-tools-opt">
                              <a href="#" class="btn btn-icon btn-primary d-md-none"><em class="icon ni ni-plus"></em></a>
                              <a class="btn btn-primary d-none d-md-inline-flex" data-bs-toggle="modal" href="#instructor-add"><em class="icon ni ni-plus"></em><span>Add Chart of Account</span></a>
                            </li>
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
                            <div class="nk-tb-col nk-tb-col-check">
                              <div class="custom-control custom-control-sm custom-checkbox notext">
                                <input type="checkbox" class="custom-control-input" id="uid">
                                <label class="custom-control-label" for="uid"></label>
                              </div>
                            </div>
                            <div class="nk-tb-col"><span class="sub-text">GL Code</span></div>
                            <div class="nk-tb-col"><span class="sub-text">Name</span></div>
                            <div class="nk-tb-col tb-col-md"><span class="sub-text">Type</span></div>
                            <div class="nk-tb-col tb-col-lg"><span class="sub-text">Notes</span></div>


                            <div class="nk-tb-col nk-tb-col-tools">
                              <ul class="nk-tb-actions gx-1 my-n1">
                                <li>
                                  <div class="drodown">
                                    <a href="#" class="dropdown-toggle btn btn-icon btn-trigger" data-bs-toggle="dropdown"><em class="icon ni ni-more-h"></em></a>
                                    <div class="dropdown-menu dropdown-menu-end">
                                      <ul class="link-list-opt no-bdr">
                                        <li><a href="#"><em class="icon ni ni-mail"></em><span>Send Email to All</span></a></li>
                                        <li><a href="#"><em class="icon ni ni-na"></em><span>Suspend Selected</span></a></li>
                                        <li><a href="#"><em class="icon ni ni-trash"></em><span>Remove Seleted</span></a></li>
                                      </ul>
                                    </div>
                                  </div>
                                </li>
                              </ul>
                            </div>
                          </div><!-- .nk-tb-item -->

                          <?php
                          include 'php/connect.inc.php';
                          $select = "SELECT * FROM chart_of_account";
                          $query = mysqli_query($connect, $select);
                          while ($row = mysqli_fetch_assoc($query)) {
                            $bname = $row['name'];
                            $bid = $row['gl_code'];
                            $phone = $row['type'];
                            $email = $row['notes'];


                            echo "<div class='nk-tb-item'>
                                                        <div class='nk-tb-col nk-tb-col-check'>
                                                            <div class='custom-control custom-control-sm custom-checkbox notext'>
                                                                <input type='checkbox' class='custom-control-input' id='uid1'>
                                                                <label class='custom-control-label' for='uid1'></label>
                                                            </div>
                                                        </div>
                                                        <div class='nk-tb-col'>
                                                            <a href=''>
                                                                <div class='user-card'>

                                                                    <div class='user-info'>
                                                                        <span class='tb-lead'>$bname <span class='dot dot-success d-md-none ms-1'></span></span>

                                                                    </div>
                                                                </div>
                                                            </a>
                                                        </div>
                                                        <div class='nk-tb-col tb-col-md'>
                                                            <span>$bid</span>
                                                        </div>
                                                        <div class='nk-tb-col tb-col-lg'>
                                                            <span>$phone</span>
                                                        </div>
                                                        <div class='nk-tb-col tb-col-lg'>
                                                            <span>$email</span>
                                                        </div>
                                                       

                                                       
                                                        <div class='nk-tb-col nk-tb-col-tools'>
                                                            <ul class='nk-tb-actions gx-1'>

                                                                <li>
                                                                    <div class='drodown'>
                                                                        <a href='' class='dropdown-toggle btn btn-icon btn-trigger' data-bs-toggle='dropdown'><em class='icon ni ni-more-h'></em></a>
                                                                        <div class='dropdown-menu dropdown-menu-end'>
                                                                        <form method='get'>
                                                                            <ul class='link-list-opt no-bdr'>
                                                                              <li><span><em class='icon ni ni-eye'></em><input name='branch_details' formaction='' type='submit' style='border: 0px; background-color: white; float: center;' value='View Details' class='icon ni ni-eye' /></span></li>
                                                                              <br>
                                                                              <input type='text' name='bname' value='$bname' hidden />
                                                                              <li><em class='icon ni ni-activity-round'></em><input name='edit_branch' type='submit' formaction='' style='border: 0px; background-color: white; float: center;' value='Edit Branch' class='icon ni ni-eye' /></li>
                                                                                
                                                                            </ul>
                                                                            </form>
                                                                        </div>
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

                          <div class="g">

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
  <div class="modal fade" role="dialog" id="instructor-add">
    <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
      <div class="modal-content">
        <a href="#" class="close" data-bs-dismiss="modal"><em class="icon ni ni-cross-sm"></em></a>
        <div class="modal-body modal-body-md">
          <h5 class="title">Add A Chart </h5>
          <?php addNewChart(); ?>
          <form action="#" class="pt-2" method="POST">
            <div class="row gy-4">
              <div class="col-md-12">
                <div class="form-group">
                  <label class="form-label" for="first-name"> Name</label>
                  <input type="text" name="name" class="form-control" id="first-name" placeholder="Chart Name">
                </div>
              </div>
              <div class="col-md-12">
                <div class="form-group">
                  <label class="form-label" for="last-name">GL Code</label>
                  <input type="text" name="gl_code" class="form-control" id="last-name" placeholder="GL COde">
                </div>
              </div>
              <div class="col-md-12">
                <div class="form-group">
                  <label class="form-label" for="address-l1">Type</label>
                  <select class="form-select js-select2" id="gender" name="type">
                    <option>Asset</option>
                    <option>Equity</option>
                    <option>Expenses</option>
                    <option>Liabilities</option>
                    <option>Revenues</option>

                  </select>
                </div>
              </div>
              <div class="col-md-12">
                <div class="form-group">
                  <label class="form-label" for="phone-no">Notes</label>

                  <textarea name="notes" class="form-control"></textarea>
                </div>
              </div>






              <div class="col-md-12">
                <ul class="align-center flex-wrap flex-sm-nowrap gx-4 gy-2">
                  <li>
                    <button name="addChart" class="btn btn-primary">Add Chart</button>
                  </li>

                </ul>
              </div>
            </div>
          </form>
        </div><!-- .modal-body -->
      </div><!-- .modal-content -->
    </div><!-- .modal-dialog -->
  </div><!-- .modal -->
  <!-- JavaScript -->
  <script src="./assets/js/bundle.js?ver=3.0.3"></script>
  <script src="./assets/js/scripts.js?ver=3.0.3"></script>
</body>

</html>