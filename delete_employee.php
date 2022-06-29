<?php include('server.php') ?>
<?php if(isset($_SESSION['admin_email'])) : ?>
<?php 

$id = $_GET['id'];
// connect to the database
$db = mysqli_connect('localhost', 'root', '', 'bahar_al_shamal');
$query = "DELETE FROM employee WHERE id='$id'";
mysqli_query($db, $query);
header('location: admin_portal.php');
?>
<?php else : ?>
  <h4 align="center" style="color: red;">Only Admin has access to this page</h4>
<?php endif?>