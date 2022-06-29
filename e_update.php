<?php include('server.php') ?>
<?php if(isset($_SESSION['admin_email'])) : ?>
<?php
$db = mysqli_connect('localhost', 'root', '', 'bahar_al_shamal');

if(isset($_POST['update_employee'])){

	$id = $_GET['id'];
	$username = mysqli_real_escape_string($db, $_POST['username']);
  	$email = mysqli_real_escape_string($db, $_POST['email']);
  	$mobile_number = mysqli_real_escape_string($db, $_POST['mobile_number']);
  	$emirates_id =mysqli_real_escape_string($db, $_POST['emirates_id']);
  	$passport_number =mysqli_real_escape_string($db, $_POST['passport_number']);
  	$address =mysqli_real_escape_string($db, $_POST['address']);
  	$nationality=mysqli_real_escape_string($db, $_POST['nationality']);
  	$gender =mysqli_real_escape_string($db, $_POST['gender']);
  	$religion =mysqli_real_escape_string($db, $_POST['religion']);
    $new_password =mysqli_real_escape_string($db, $_POST['new_password']);

  	$query = "UPDATE employee SET username ='$username',email='$email',mobile_number='$mobile_number',emirates_id='$emirates_id',passport_number='$passport_number',address='$address',nationality='$nationality',gender='$gender',religion='$religion',password='$new_password'
          WHERE id='$id'";
    mysqli_query($db, $query);
    header('location: admin_portal.php');
}

?>
<?php else : ?>
  <h4 align="center" style="color: red;">Only Admin has access to this page</h4>
<?php endif?>