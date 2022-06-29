<?php
session_start();

// initializing variables
$username = "";
$email    = "";
$mobile_number = "";
$errors = array(); 

// connect to the database
$db = mysqli_connect('localhost', 'root', '', 'bahar_al_shamal');

// REGISTER USER
if (isset($_POST['reg_user'])) {
  // receive all input values from the form
  $username = mysqli_real_escape_string($db, $_POST['username']);
  $email = mysqli_real_escape_string($db, $_POST['email']);
  $mobile_number = mysqli_real_escape_string($db, $_POST['mobile_number']);
  $password_1 = mysqli_real_escape_string($db, $_POST['password_1']);
  $password_2 = mysqli_real_escape_string($db, $_POST['password_2']);

  // form validation: ensure that the form is correctly filled ...
  // by adding (array_push()) corresponding error unto $errors array
  if (empty($username)) { array_push($errors, "Username is required"); }
  if (empty($email)) { array_push($errors, "Email is required"); }
  if (empty($password_1)) { array_push($errors, "Password is required"); }
  if ($password_1 != $password_2) {
	array_push($errors, "The two passwords do not match");
  }

  // first check the database to make sure 
  // a user does not already exist with the same username and/or email
  $user_check_query = "SELECT * FROM customers WHERE username='$username' OR email='$email' LIMIT 1";
  $result = mysqli_query($db, $user_check_query);
  $user = mysqli_fetch_assoc($result);
  
  if ($user) { // if user exists
    if ($user['username'] === $username) {
      array_push($errors, "Username already exists");
    }

    if ($user['email'] === $email) {
      array_push($errors, "Email already exists");
    }
  }

  // Finally, register user if there are no errors in the form
  if (count($errors) == 0) {
  	$password = md5($password_1);//encrypt the password before saving in the database

  	$query = "INSERT INTO customers (username,mobile_number,email, password) 
  			  VALUES('$username',$mobile_number,'$email', '$password')";
  	mysqli_query($db, $query);
  	$_SESSION['username'] = $username;
    $_SESSION['email'] = $email;
    $_SESSION['mobile_number']=$mobile_number;
  	$_SESSION['success'] = "You are now logged in";
  	header('location: index.php');
  }
}
// LOGIN USER
if (isset($_POST['login_user'])) {
  $email = mysqli_real_escape_string($db, $_POST['email']);
  $password = mysqli_real_escape_string($db, $_POST['password']);
  if($email=="admin@gmail.com" && $password=="admin"){
    $_SESSION['admin_email']= $email;
    header('location: admin_portal.php'); 
  }
  if (empty($email)) {
    array_push($errors, "Email is required");
  }
  if (empty($password)) {
    array_push($errors, "Password is required");
  }

  if (count($errors) == 0 && $email!="admin@gmail.com") {
    $password = md5($password);
    $query = "SELECT * FROM customers WHERE email='$email' AND password='$password'";
    $results = mysqli_query($db, $query);
    $user = mysqli_fetch_assoc($results);
    echo "user".$user;
    $_SESSION['id']=$user['id'];
    $_SESSION['username']=$user['username'];
    $_SESSION['mobile_number']=$user['mobile_number'];
    if (mysqli_num_rows($results) == 1) {
      $_SESSION['email'] = $email;
      $_SESSION['success'] = "You are now logged in";
      header('location: index.php');
    }else {
      array_push($errors, "Wrong email/password combination");
    }
  }
}

//Profile
if(isset($_GET['email'])){
  $username ="";
  $mobile_number="";
  $email ="";
  $email = $_GET['email'];
  $user_check_query = "SELECT * FROM customers WHERE email='$email' LIMIT 1";
  $result = mysqli_query($db, $user_check_query);
  $user = mysqli_fetch_assoc($result);
  if($user){
    $_SESSION['id'] =$user['id'];
    $_SESSION['username'] =$user['username'];
    $_SESSION['mobile_number'] =$user['mobile_number'];
    $_SESSION['email'] =$user['email'];
  }

  header('location: profile.php');
}

//Update user registration detail
if(isset($_POST['update_user'])){
  $id = $_SESSION['id'];
  $username = "";
  $email    = "";
  $old_email ="";
  $mobile_number = "";
  $customer_password="";


  $username = mysqli_real_escape_string($db, $_POST['username']);
  $email = mysqli_real_escape_string($db, $_POST['email']);
  $mobile_number = mysqli_real_escape_string($db, $_POST['mobile_number']);
  $customer_password = md5(mysqli_real_escape_string($db, $_POST['customer_password']));
  
   // Finally, register user if there are no errors in the form
  if (count($errors) == 0) {
    $query = "UPDATE customers SET username ='$username',email='$email',mobile_number='$mobile_number',password='$customer_password'
          WHERE id='$id'";
    if(isset($_SESSION['email'])){
      $old_email = $_SESSION['email'];
      $order_query = "UPDATE orders SET username ='$username',email='$email',mobile_number='$mobile_number'
          WHERE email='$old_email'";
          mysqli_query($db, $order_query);
    }
    mysqli_query($db, $query);
    $_SESSION['username'] = $username;
    $_SESSION['email'] = $email;
    $_SESSION['mobile_number'] =$mobile_number;
    $_SESSION['success'] = "You are now logged in";
    header('location: profile.php');
  }
}

//Place Order
if(isset($_POST['place_order'])){
  $username ="None";
  $email ="None";
  $mobile_number = "None";
  $address ="None";
  $days ="None";
  $price ="None";
  $service="None";
  $starting_date ="";
  $ending_date ="";
//Geeting all values from place order form
  $username = mysqli_real_escape_string($db, $_POST['username']);
  $email = mysqli_real_escape_string($db, $_POST['email']);
  $mobile_number = mysqli_real_escape_string($db, $_POST['mobile_number']);
  $address = mysqli_real_escape_string($db, $_POST['address']);
  $days = mysqli_real_escape_string($db, $_POST['days']);
  $price = mysqli_real_escape_string($db, $_POST['price']);
  $service = mysqli_real_escape_string($db, $_POST['service']);
  $starting_date = mysqli_real_escape_string($db, $_POST['starting_date']);
  $ending_date = mysqli_real_escape_string($db, $_POST['ending_date']);

  $query = "INSERT INTO orders (username,email,mobile_number,address,days,price,service,starting_date,ending_date) 
          VALUES('$username','$email',$mobile_number,'$address','$days','$price','$service','$starting_date','$ending_date')";
    $result = mysqli_query($db, $query);
    if($result){
      echo '<script type="text/javascript">alert("Order Placed");</script>';
      header('location: index.php');
    }
}

//Register new employee

if (isset($_POST['reg_employee'])) {
  // receive all input values from the form
  $username = mysqli_real_escape_string($db, $_POST['username']);
  $email = mysqli_real_escape_string($db, $_POST['email']);
  $mobile_number = mysqli_real_escape_string($db, $_POST['mobile_number']);
  $emirates_id =mysqli_real_escape_string($db, $_POST['emirates_id']);
  $passport_number =mysqli_real_escape_string($db, $_POST['passport_number']);
  $address =mysqli_real_escape_string($db, $_POST['address']);
  $nationality=mysqli_real_escape_string($db, $_POST['nationality']);
  $gender =mysqli_real_escape_string($db, $_POST['gender']);
  $religion =mysqli_real_escape_string($db, $_POST['religion']);
  $password_1 = mysqli_real_escape_string($db, $_POST['password_1']);
  $password_2 = mysqli_real_escape_string($db, $_POST['password_2']);

  // form validation: ensure that the form is correctly filled ...
  // by adding (array_push()) corresponding error unto $errors array
  if (empty($username)) { array_push($errors, "Username is required"); }
  if (empty($email)) { array_push($errors, "Email is required"); }
  if (empty($password_1)) { array_push($errors, "Password is required"); }
  if ($password_1 != $password_2) {
  array_push($errors, "The two passwords do not match");
  }

  // first check the database to make sure 
  // a user does not already exist with the same username and/or email
  $user_check_query = "SELECT * FROM employee WHERE username='$username' OR email='$email' LIMIT 1";
  $result = mysqli_query($db, $user_check_query);
  $user = mysqli_fetch_assoc($result);
  
  if ($user) { // if user exists
    if ($user['username'] === $username) {
      array_push($errors, "Username already exists");
    }

    if ($user['email'] === $email) {
      array_push($errors, "Email already exists");
    }
    if ($user['emirates_id'] === $emirates_id) {
      array_push($errors, "Emirates ID already exists");
    }
    if ($user['passport_number'] === $passport_number) {
      array_push($errors, "Passport Number already exists");
    }
  }

  // Finally, register user if there are no errors in the form
  if (count($errors) == 0) {
    $password = $password_1;

    $query = "INSERT INTO employee (username,email,mobile_number,emirates_id,passport_number,address,nationality,gender,religion,password) 
          VALUES('$username','$email',$mobile_number,'$emirates_id','$passport_number','$address','$nationality','$gender','$religion','$password')";
    mysqli_query($db, $query);
    $_SESSION['success'] = "You are now logged in";
    header('location: admin_portal.php');
  }
}

//Customer feedback
if(isset($_POST['customer_feedback'])){
  $username = mysqli_real_escape_string($db, $_POST['username']);
  $email = mysqli_real_escape_string($db, $_POST['email']);
  $mobile_number = mysqli_real_escape_string($db, $_POST['mobile_number']);
  $message = mysqli_real_escape_string($db, $_POST['message']);

   $query = "INSERT INTO feedback (username,mobile_number,email, message) 
          VALUES('$username',$mobile_number,'$email', '$message')";
    mysqli_query($db, $query);
}

//Collect Customers Emails
if(isset($_POST['customer_email'])){
  $email = mysqli_real_escape_string($db, $_POST['email']);
  $query = "INSERT INTO emails (email) 
          VALUES('$email')";
    mysqli_query($db, $query);
}

//Employee Login
if (isset($_POST['login_employee'])) {
  $email = mysqli_real_escape_string($db, $_POST['email']);
  $password = mysqli_real_escape_string($db, $_POST['password']);
  if (empty($email)) {
    array_push($errors, "Email is required");
  }
  if (empty($password)) {
    array_push($errors, "Password is required");
  }

  if (count($errors) == 0 ) {
    $password = $password;
    $query = "SELECT * FROM employee WHERE email='$email' AND password='$password'";
    $results = mysqli_query($db, $query);
    if (mysqli_num_rows($results) == 1) {
      $_SESSION['employee_email'] = $email;
      $_SESSION['success'] = "You are now logged in";
      header('location: employee_portal.php');
    }else {
      array_push($errors, "Wrong email/password combination");
    }
  }
}


?>