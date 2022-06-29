<?php include('server.php') ?>
<?php if(isset($_SESSION['employee_email'])) : ?>
<?php 
session_start();
$id = $_GET['id'];
// connect to the database
$db = mysqli_connect('localhost', 'root', '', 'bahar_al_shamal');
$query = "DELETE FROM orders WHERE id='$id'";
mysqli_query($db, $query);
header('location: employee_portal.php');
?>
<?php else : ?>
  <h4 align="center" style="color: red;">Only Employee has access to this page</h4>
<?php endif?>