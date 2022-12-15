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
      (first_name, last_name,  phone, email, role, staff_id, status, branch_name)
      VALUES
      ('$first_name', '$last_name', '$phone', '$email', '$role', '$staff_id', '$status', '$branch_name')";
      if (mysqli_query($connect, $insert)) {
        echo "<script>alert('The staff details has been registered successfully')</script>";
      }
    }
  }
}


function createBranch()
{
  if (isset($_POST['createBranch'])) {
    $branch_name = htmlentities(addslashes($_POST['branch_name']));
    $address = htmlentities(addslashes($_POST['address']));
    $phone = htmlentities(addslashes($_POST['phone']));
    $email = htmlentities(addslashes($_POST['email']));
    $branch_id = htmlentities($_POST['branch_id']);
    include 'connect.inc.php';
    $check = "SELECT * FROM branch WHERE branch_name = '$branch_name' || branch_id = '$branch_id'";
    $query = mysqli_query($connect, $check);
    include 'connect.inc.php';
    if (mysqli_num_rows($query) > 0) {
      echo "<script>alert('This branch name or branch ID already exist')</script>";
    } else {
      $insert = "INSERT INTO branch
      (branch_name, branch_id,  phone, email, address)
      VALUES
      ('$branch_name', '$branch_id', '$phone', '$email', '$address')";
      if (mysqli_query($connect, $insert)) {
        echo "<script>alert('The branch has been created successfully')</script>";
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
