<?php

function customerRegistration()
{
  if (isset($_POST['create_customer'])) {
    $first_name = htmlentities(addslashes($_POST['first_name']));
    $last_name = htmlentities(addslashes($_POST['last_name']));
    $gender = htmlentities(addslashes($_POST['gender']));
    $phone = htmlentities(addslashes($_POST['phone']));
    $email = htmlentities(addslashes($_POST['email']));
    $address = htmlentities(addslashes($_POST['address']));
    $state_of_origin = htmlentities(addslashes($_POST['state_of_origin']));
    $lga = htmlentities(addslashes($_POST['lga']));
    $next_of_kin = htmlentities(addslashes($_POST['next_of_kin']));
    $addy_of_nok = htmlentities(addslashes($_POST['addy_of_nok']));
    $date_of_birth = htmlentities(addslashes($_POST['date_of_birth']));
    $occupation = htmlentities(addslashes($_POST['occupation']));
    $customer_id = htmlentities(addslashes($_POST['customer_id']));
    $status = htmlentities(addslashes($_POST['status']));
    $branch = htmlentities(addslashes($_POST['branch']));
    include 'connect.inc.php';
    $check = "SELECT * FROM customer WHERE phone = '$phone' || customer_id='$customer_id'";
    $query = mysqli_query($connect, $check);
    if (mysqli_num_rows($query) > 0) {
      echo "<script>alert('This customer with this phone number or customer ID already exist')</script>";
    } else {
      $insert = "INSERT INTO customer
      (first_name, last_name, gender, phone, email, address, state_of_origin, lga,
        next_of_kin, addy_of_nok, date_of_birth, occupation, customer_id, status, branch)
      VALUES
      ('$first_name', '$last_name', '$gender', '$phone', '$email', '$address', '$state_of_origin',
        '$lga', '$next_of_kin', '$addy_of_nok', '$date_of_birth', '$occupation', '$customer_id', '$status', '$branch')";
      if (mysqli_query($connect, $insert)) {
        echo "<script>alert('The customer details has been registered successfully')</script>";
      } else {
        echo mysqli_error($connect);
      }
    }
  }
}


// function upload()
// {
//   $target_dir = "images/";
//   $target_file1 = $target_dir . basename($_FILES["utility"]["name"]);
//   $target_file2 = $target_dir . basename($_FILES["id_card"]["name"]);
//   $target_file3 = $target_dir . basename($_FILES["passport"]["name"]);

//   $uploadOk = 1;
//   $imageFileType1 = strtolower(pathinfo($target_file1, PATHINFO_EXTENSION));
//   $imageFileType2 = strtolower(pathinfo($target_file2, PATHINFO_EXTENSION));
//   $imageFileType3 = strtolower(pathinfo($target_file3, PATHINFO_EXTENSION));

//   // Check if image file is a actual image or fake image
//   if (isset($_POST["submit"])) {
//     $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
//   }

//   // Check file size
//   if ($_FILES["fileToUpload"]["size"] > 500000) {
//     echo "Sorry, your file is too large.";
//     $uploadOk = 0;
//   }

//   // Allow certain file formats
//   if (
//     $imageFileType1 != "jpg" && $imageFileType1 != "png" && $imageFileType1 != "jpeg"
//     && $imageFileType1 != "gif"
//   ) {
//     echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
//     $uploadOk = 0;
//   }

//   // Check if $uploadOk is set to 0 by an error
//   if ($uploadOk == 0) {
//     echo "Sorry, your file was not uploaded.";
//     // if everything is ok, try to upload file
//   } else {
//     if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
//       echo "The file " . htmlspecialchars(basename($_FILES["fileToUpload"]["name"])) . " has been uploaded.";
//     } else {
//       echo "Sorry, there was an error uploading your file.";
//     }
//   }
// }



function loanProduct()
{
  if (isset($_POST['create_loan_product'])) {
    $product_name = htmlentities($_POST['product_name']);
    $max_amount = htmlentities($_POST['max_amount']);
    $min_amount = htmlentities($_POST['min_amount']);
    $description = htmlentities($_POST['description']);
    $product_id = htmlentities($_POST['product_id']);
    $rate = htmlentities($_POST['rate']);
    include 'connect.inc.php';
    if ($max_amount < $min_amount) {
      echo "<script>alert('The minimum amount can not be greater than the maximum amount')</script>";
    } else {
      $check = "SELECT * FROM loanproduct WHERE product_name = '$product_name'";
      $query = (mysqli_query($connect, $check));
      if (mysqli_num_rows($query) > 0) {
        echo "<script>alert('Loan Product already created')</script>";
      } else {
        $create = "INSERT INTO loanproduct (product_id, product_name, max_amount, min_amount, rate, description)
      VALUES ('$product_id', '$product_name', '$max_amount', '$min_amount', '$rate', '$description')";
        if (mysqli_query($connect, $create)) {
          echo "<script>alert('The Loan product has been successfully created')</script>";
        }
      }
    }
  }
}


function createStaff()
{
  if (isset($_POST['createStaff'])) {
    $first_name = htmlentities(addslashes($_POST['first_name']));
    $last_name = htmlentities(addslashes($_POST['last_name']));
    $phone = htmlentities(addslashes($_POST['phone']));
    $email = htmlentities(addslashes($_POST['email']));
    $role = htmlentities($_POST['role']);
    $status = htmlentities($_POST['status']);
    $staff_id = htmlentities($_POST['staff_id']);
    $branch_name = htmlentities($_POST['bname']);
    // $branch = htmlentities($_POST['branch']);
    include 'connect.inc.php';
    $check = "SELECT * FROM staff WHERE phone = '$phone' || staff_id = '$staff_id'";
    $query = mysqli_query($connect, $check);
    include 'connect.inc.php';
    if (mysqli_num_rows($query) > 0) {
      echo "<script>alert('The staff with this phone number or staff ID already exist')</script>";
    } else {
      $insert = "INSERT INTO staff
      (first_name, last_name,  phone, email, role, staff_id, status, branch)
      VALUES
      ('$first_name', '$last_name', '$phone', '$email', '$role', '$staff_id', '$status', '$branch_name')";
      if (mysqli_query($connect, $insert)) {
        echo "<script>alert('The staff details has been registered successfully')</script>";
      }
    }
  }
}


function checkLogin()
{
  if (!isset($_SESSION['urUsername'])) {
    header('Location: http://localhost/primax/login');
  }
}

function clientSupportLogin()
{
  if (isset($_POST['clientSupport'])) {
    $role = htmlentities(addslashes($_POST['role']));
    $email = htmlentities(addslashes($_POST['email']));
    $pword = htmlentities(addslashes($_POST['pword']));
    $bid = htmlentities(addslashes($_POST['bid']));
    $passhash = md5($pword);
    if ($role == "client_support") {
      include 'connect.inc.php';
      $check = "SELECT * FROM staff WHERE email = '$email' AND urPword = '$passhash' AND bid = '$bid' ";
      $qry = mysqli_query($connect, $check);
      if (mysqli_num_rows($qry) == 0) {
        echo "<script>alert('Invalid login. Contact the admin officer')</script>";
      } else {
        //echo mysqli_query($connect);
        $_SESSION['urUsername'] = $org_user;
        header('Location: app/index');
      }
    } else {
      if ($role = "Executive") {
        include 'connect.inc.php';
        $check = "SELECT * FROM user_account WHERE username = '$org_user' AND password = '$passhash'";
        $qry = mysqli_query($connect, $check);
        if (mysqli_num_rows($qry) == 0) {
          echo "<script>alert('Invalid login.')</script>";
        } else {
          //echo mysqli_query($connect);
          $_SESSION['urUsername'] = $org_user;
          header('Location: app/index');
        }
      }
    }
  }
}

function createBranch()
{
  if (isset($_POST['createBranch'])) {
    $branch = htmlentities(addslashes($_POST['branch']));
    $address = htmlentities(addslashes($_POST['address']));
    $phone = htmlentities(addslashes($_POST['phone']));
    $email = htmlentities(addslashes($_POST['email']));
    $branch_id = htmlentities($_POST['branch_id']);
    include 'connect.inc.php';
    $check = "SELECT * FROM branch WHERE branch = '$branch' || branch_id = '$branch_id'";
    $query = mysqli_query($connect, $check);
    include 'connect.inc.php';
    if (mysqli_num_rows($query) > 0) {
      echo "<script>alert('This branch name or branch ID already exist')</script>";
    } else {
      $insert = "INSERT INTO branch
      (branch, branch_id,  phone, email, address)
      VALUES
      ('$branch', '$branch_id', '$phone', '$email', '$address')";
      if (mysqli_query($connect, $insert)) {
        echo "<script>alert('The branch has been created successfully')</script>";
      }
    }
  }
}

function createCenter()
{
  if (isset($_POST['createCenter'])) {
    $branch = htmlentities(addslashes($_POST['branch']));
    $center = htmlentities(addslashes($_POST['center']));
    $branch = htmlentities(addslashes($_POST['branch']));
    $address = htmlentities(addslashes($_POST['address']));
    $phone = htmlentities(addslashes($_POST['phone']));
    $email = htmlentities(addslashes($_POST['email']));
    $center_id = htmlentities($_POST['center_id']);
    include 'connect.inc.php';
    $check = "SELECT * FROM center WHERE center_name = '$center' || center_id = '$center_id'";
    $query = mysqli_query($connect, $check);
    include 'connect.inc.php';
    if (mysqli_num_rows($query) > 0) {
      echo "<script>alert('This center name or center ID already exist')</script>";
    } else {
      $insert = "INSERT INTO center
      (branch, center_name, center_id,  phone, email, address)
      VALUES
      ('$branch', '$center', '$center_id',  '$phone', '$email', '$address')";
      if (mysqli_query($connect, $insert)) {
        echo "<script>alert('The center has been created successfully')</script>";
      } else {
        echo mysqli_error($connect);
      }
    }
  }
}


function add_loan()
{
  if (isset($_POST['apply_loan'])) {
    $customer_id = htmlentities($_POST['customer_id']);
    $fname = htmlentities($_POST['fname']);
    $lname = htmlentities($_POST['lname']);
    $phone = htmlentities($_POST['phone']);
    $email = htmlentities($_POST['email']);
    $date = htmlentities($_POST['date']);
    $lamount = htmlentities($_POST['lamount']);
    $rate = htmlentities($_POST['rate']);
    $repayment = htmlentities($_POST['repayment']);
    $branch = htmlentities($_POST['branch']);
    $status = "Pending";
    include 'connect.inc.php';
    $create = "INSERT INTO loan (customer_id, fname, lname, phone, email, lamount, rate, repayment, application_date, status, branch)
      VALUES ('$customer_id', '$fname', '$lname', '$phone', '$email', '$lamount', '$rate', '$repayment', '$date', '$status', '$branch')";
    if (mysqli_query($connect, $create)) {
      echo "<script>alert('The Loan product has been successfully created')</script>";
    } else {
      echo mysqli_error($connect);
    }
  }
}


function add_savings()
{
  if (isset($_POST['savings'])) {
    $product_name = htmlentities($_POST['product_name']);
    $max_amount = htmlentities($_POST['max_amount']);
    $min_amount = htmlentities($_POST['min_amount']);
    $description = htmlentities($_POST['description']);
    include 'connect.inc.php';
    $check = "SELECT * FROM loan_product WHERE product_name = '$product_name'";
    $query = (mysqli_query($connect, $check));
    if (mysqli_num_rows($query) > 0) {
      echo "<script>alert('Loan Product already created')</script>";
    } else {
      $create = "INSERT INTO loan_product (product_name, max_amount, min_amount, description)
      VALUES ('$product_name', '$max_amount', '$min_amount', '$description')";
      if (mysqli_query($connect, $create)) {
        echo "<script>alert('The Loan product has been successfully created')</script>";
      }
    }
  }
}


function add_withdrawal()
{
  if (isset($_POST['withdrawal'])) {
    $product_name = htmlentities($_POST['product_name']);
    $max_amount = htmlentities($_POST['max_amount']);
    $min_amount = htmlentities($_POST['min_amount']);
    $description = htmlentities($_POST['description']);
    include 'connect.inc.php';
    $check = "SELECT * FROM loan_product WHERE product_name = '$product_name'";
    $query = (mysqli_query($connect, $check));
    if (mysqli_num_rows($query) > 0) {
      echo "<script>alert('Loan Product already created')</script>";
    } else {
      $create = "INSERT INTO loan_product (product_name, max_amount, min_amount, description)
      VALUES ('$product_name', '$max_amount', '$min_amount', '$description')";
      if (mysqli_query($connect, $create)) {
        echo "<script>alert('The Loan product has been successfully created')</script>";
      }
    }
  }
}


function update_staff()
{
  if (isset($_GET['update_staff'])) {
    $firstname = htmlentities(addslashes(($_GET['fname'])));
    $lastname = htmlentities(addslashes(($_GET['lname'])));
    $email = htmlentities(addslashes(($_GET['email'])));
    $phone = htmlentities(addslashes(($_GET['phone'])));
    $role = htmlentities(addslashes(($_GET['role'])));
    $status = htmlentities(addslashes(($_GET['status'])));
    $staff_id = htmlentities(addslashes(($_GET['staff_id'])));
    $branch = htmlentities(addslashes(($_GET['branch'])));
    include 'connect.inc.php';

    if (empty($firstname) || empty($lastname) || empty($email) || empty($phone) || empty($role) || empty($status) || empty($staff_id) || empty($branch)) {
      echo "All the fields are required before you can update the staff details";
    } else {
      $update = "UPDATE staff SET first_name = '$firstname', last_name = '$lastname', email = '$email', phone = '$phone', role = '$role', status = '$status' WHERE staff_id = '$staff_id' ";
      if (mysqli_query($connect, $update)) {
        echo "Update was successfull";
      }
    }
  }
}

function update_branch()
{
  if (isset($_GET['update_staff'])) {
    $firstname = htmlentities(addslashes(($_GET['fname'])));
    $lastname = htmlentities(addslashes(($_GET['lname'])));
    $email = htmlentities(addslashes(($_GET['email'])));
    $phone = htmlentities(addslashes(($_GET['phone'])));
    $role = htmlentities(addslashes(($_GET['role'])));
    $status = htmlentities(addslashes(($_GET['status'])));
    $staff_id = htmlentities(addslashes(($_GET['staff_id'])));
    $branch = htmlentities(addslashes(($_GET['branch'])));
    include 'connect.inc.php';

    if (empty($firstname) || empty($lastname) || empty($email) || empty($phone) || empty($role) || empty($status) || empty($staff_id) || empty($branch)) {
      echo "All the fields are required before you can update the staff details";
    } else {
      $update = "UPDATE staff SET first_name = '$firstname', last_name = '$lastname', email = '$email', phone = '$phone', role = '$role', status = '$status' WHERE staff_id = '$staff_id' ";
      if (mysqli_query($connect, $update)) {
        echo "Update was successfull";
      }
    }
  }
}



function countCustomers()
{
  include 'php/conn.inc.php';
  include 'php/org_sessions.php';
  $select = "SELECT * FROM customer";
  $query = mysqli_query($connect, $select);
  $count = mysqli_num_rows($query);
  echo $count;
}


function totalDeposit()
{

  include 'connect.inc.php';
  // include 'org_sessions.php';
  $select = "SELECT * FROM account_type WHERE transaction_type = 'Deposit' ";
  $query = mysqli_query($connect, $select);
  $totalSavings = 0;
  while ($row = mysqli_fetch_assoc($query)) {
    $totalSavings += $row['amount_paid'];
  }
  echo '<del>N</del>' . ' ' . number_format($totalSavings);
}

function pendingLoans()
{
  include 'connect.inc.php';
  // include 'org_sessions.php';
  $select = "SELECT * FROM loan WHERE status = 'Pending' ";
  $query = mysqli_query($connect, $select);
  $pendLoan = mysqli_num_rows($query);
  echo $pendLoan;
}

function totalPendingLoans()
{

  include 'connect.inc.php';
  // include 'org_sessions.php';
  $select = "SELECT * FROM loan WHERE status = 'Pending'";
  $query = mysqli_query($connect, $select);
  $totalLoan = 0;
  while ($row = mysqli_fetch_assoc($query)) {
    $totalLoan += $row['lamount'];
  }
  echo '<del>N</del>' . number_format($totalLoan);
}

function ndisbursedLoans()
{
  include 'connect.inc.php';
  // include 'org_sessions.php';
  $select = "SELECT * FROM loan WHERE status = 'Disbursed'  ";
  $query = mysqli_query($connect, $select);
  $pendLoan = mysqli_num_rows($query);
  echo $pendLoan;
}

// function totalLoanProduct()
// {

//   include 'connect.inc.php';
//   // include 'org_sessions.php';
//   $select = "SELECT * FROM new_loan_product WHERE  ";
//   $query = mysqli_query($connect, $select);
//   $totalLoanProduct = mysqli_num_rows($query);

//   echo $totalLoanProduct;
// }

function disbursedLoans()
{
  include 'connect.inc.php';
  // include 'org_sessions.php';
  $select = "SELECT * FROM loan WHERE status = 'Disbursed'  ";
  $query = mysqli_query($connect, $select);
  if (mysqli_num_rows($query) == 0) {
    echo 0;
  } else {
    $loan = 0;
    while ($fetch = mysqli_fetch_assoc($query)) {
      $loan += $fetch['lamount'];

      echo '<del>N</del>' . number_format($Loan);
    }
  }
}


function addNewChart()
{
  if (isset($_POST['addChart'])) {
    //$passport = $_POST['passport'];
    $name = htmlentities(addslashes($_POST['name']));
    $gl_code = htmlentities(addslashes($_POST['gl_code']));
    $type = htmlentities(addslashes($_POST['type']));
    $notes = htmlentities(addslashes($_POST['notes']));


    if (empty($name) || empty($gl_code) || empty($type) || empty($notes)) {
      echo "<script>alert('Hello! all fields are required to add a new chart')</script>";
    } else {
      include 'php/connect.inc.php';
      // include 'org_sessions.php';
      // check for double registration
      $chk = "SELECT * FROM chart_of_account WHERE name = '$name' OR gl_code = '$gl_code' ";
      if (mysqli_num_rows(mysqli_query($connect, $chk)) > 0) {
        echo "<script>alert('The chart of account with this name or code has been registered')</script>";
      } else {
        include 'php/connect.inc.php';
        // include 'org_sessions.php';
        $ins = "INSERT INTO chart_of_account
        (name, gl_code, type, notes)
        VALUES
        ('$name', '$gl_code', '$type', '$notes')";
        if (!mysqli_query($connect, $ins)) {
          echo mysqli_error($connect);
        } else {
          echo "<script>alert('The new chart of account has been added')</script>";
        }
      }
    }
  }
}
