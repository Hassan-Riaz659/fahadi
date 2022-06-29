<?php include('server.php') ?>
<?php if(isset($_SESSION['email'])) {
	session_start();
$id = $_GET['id'];
// connect to the database
$db = mysqli_connect('localhost', 'root', '', 'bahar_al_shamal');
$query = "DELETE FROM orders WHERE id='$id'";
mysqli_query($db, $query);
header('location: profile.php');
}
else{
	header('location: login.php');
}

?>
