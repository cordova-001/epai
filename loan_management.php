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

                                            <h2 class="nk-block-title fw-normal">Loan Management</h2>

                                        </div>
                                    </div><!-- .nk-block-head -->

                                    <div class="nk-block nk-block-lg">
                                        <div class="nk-block-head-content" style="width: 100%;">
                                            <div class="toggle-wrap nk-block-tools-toggle">
                                                <a href="#" class="btn btn-icon btn-trigger toggle-expand me-n1" data-target="more-options"><em class="icon ni ni-more-v"></em></a>
                                                <div class="toggle-expand-content" data-content="more-options">
                                                    <ul class="nk-block-tools g-3">


                                                        <li class="nk-block-tools-opt">
                                                            <a href="#" class="btn btn-icon btn-primary d-md-none"><em class="icon ni ni-plus"></em></a>
                                                            <a class="btn btn-primary d-none d-md-inline-flex" data-bs-toggle="modal" href="#instructor-add"><em class="icon ni ni-plus"></em><span>Add</span></a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div><!-- .nk-block-head-content -->
                                        <br>


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
                                                            <th>Action</th>
                                                        </tr>
                                                    </thead>
                                                    <?php
                                                    include 'php/connect.inc.php';
                                                    $select = "SELECT * FROM loan";
                                                    $query = mysqli_query($connect, $select);
                                                    while($row = mysqli_fetch_assoc($query)){
                                                      $customer_id = $row['customer_id'];
                                                      $fname = $row['fname'];
                                                      $lname = $row['lname'];
                                                      $lamount = $row['lamount'];
                                                      $repayment = $row['repayment'];
                                                      $rate = $row['rate'];
                                                      $date = $row['application_date'];
                                                      $status = $row['status'];

                                                    echo "<tbody>
                                                        <tr>
                                                            <td>$customer_id</td>
                                                            <td>$fname  $lname</td>
                                                            <td>$lamount</td>
                                                            <td>$rate</td>
                                                            <td>$repayment</td>

                                                            <td>$date</td>
                                                            <td>$status</td>
                                                            <td></td>
                                                        </tr>
                                                    </tbody>";
                                                  }

                                                  ?>
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

    <div class="modal fade" role="dialog" id="instructor-add">
        <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
            <div class="modal-content">
                <a href="#" class="close" data-bs-dismiss="modal"><em class="icon ni ni-cross-sm"></em></a>
                <div class="modal-body modal-body-md">
                    <h5 class="title">Record Savings </h5>
                    <form action="#" class="pt-2">
                        <div class="row gy-4">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="form-label" for="first-name">First Name</label>
                                    <input type="text" class="form-control" id="first-name" placeholder="First name">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="form-label" for="last-name">Last Name</label>
                                    <input type="text" class="form-control" id="last-name" placeholder="Last name">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="form-label" for="email">Email Address</label>
                                    <input type="email" class="form-control" id="email" placeholder="Email Address">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="form-label" for="phone-no">Phone Number</label>
                                    <input type="text" class="form-control" id="phone-no" value="+880" placeholder="Phone Number">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="form-label" for="address-l1">Address Line 1</label>
                                    <input type="text" class="form-control" id="address-l1" value="2337 Kildeer Drive">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="form-label" for="address-line2">Address Line 2</label>
                                    <input type="text" class="form-control" id="address-line2" value="">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="form-label" for="address-st">State</label>
                                    <input type="text" class="form-control" id="address-st" value="Kentucky">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="form-label" for="country">Country</label>
                                    <select class="form-select js-select2" id="country">
                                        <option>Canada</option>
                                        <option>United State</option>
                                        <option>United Kindom</option>
                                        <option>Australia</option>
                                        <option>India</option>
                                        <option>Bangladesh</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group">
                                    <label class="form-label" for="about-instractor">About Instractor</label>
                                    <textarea class="form-control textarea-sm" id="about-instractor" placeholder="Discribe a little bit"></textarea>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <ul class="align-center flex-wrap flex-sm-nowrap gx-4 gy-2">
                                    <li>
                                        <a href="#" class="btn btn-primary">Add Instructor</a>
                                    </li>
                                    <li>
                                        <a href="#" data-bs-dismiss="modal" class="link link-light">Cancel</a>
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
    <script src="./assets/js/libs/datatable-btns.js?ver=3.0.3"></script>
</body>

</html>
