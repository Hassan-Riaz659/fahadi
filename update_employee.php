<?php include('server.php') ?>
<?php if(isset($_SESSION['admin_email'])) : ?>
<?php
$db = mysqli_connect('localhost', 'root', '', 'bahar_al_shamal');

$id = $_GET['id'];

$query ="SELECT * FROM employee WHERE id='$id'";
$result = mysqli_query($db,$query);
$user = mysqli_fetch_assoc($result);
?>
<!DOCTYPE html>
<html>
<head>
	<title>Update Employee</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha256-eZrrJcwDc/3uDhsdt61sL2oOBY362qM3lon1gyExkL0=" crossorigin="anonymous" />
<link rel="stylesheet" href="css/form.css" type="text/css">
</head>
<body>
	<div class="modal-dialog text-center">
            
    <div class="col-sm-8 main-section">
        
        <div class="modal-content">
            <div class="col-12 user-img">
                <a href="index.php"> <img src="img/pic.png"></a>
                
            </div>
				<form method="post" action="e_update.php?id=<?php echo $id?>">
				<div class="form-group">
				    <h3 style="color: #ffffff; margin-bottom: 15px;">Update Employee</h3>
				    <input type="text" value="<?php echo $user['username']?>" class="form-control" placeholder="Enter Username" required autocomplete="off" name="username">   
				</div>
				<div class="form-group">
				    <input type="email" value="<?php echo $user['email']?>" class="form-control" placeholder="Enter E-mail" required autocomplete="off"
				    name="email">   
				</div>
				<div class="form-group">
				    <input type="number" value="<?php echo $user['mobile_number']?>" class="form-control" placeholder="Enter Mobile Number" required autocomplete="off" name="mobile_number">   
				</div>
				<div class="form-group">
                            <input type="number" value="<?php echo $user['emirates_id']?>" class="form-control" placeholder="Emirates ID" required autocomplete="off"
                            name="emirates_id">   
                        </div>
                        <div class="form-group">
                            <input type="text" value="<?php echo $user['passport_number']?>" class="form-control" placeholder="Passport Number" required autocomplete="off"
                            name="passport_number">   
                        </div>
                        <div class="form-group">
                            <input type="text" value="<?php echo $user['address']?>" class="form-control" placeholder="Address" required autocomplete="off"
                            name="address">   
                        </div>
                        <div class="form-group">
                            <input type="text" value="<?php echo $user['nationality']?>" class="form-control" placeholder="Nationality" required autocomplete="off"
                            name="nationality">   
                        </div>
                        <div class="form-group">
                            <select name="gender" required class="form-control">
                                <option value="">Select Gender...</option>
                                <option value="male">Male</option>
                                <option value="female">Female</option>
                                <option value="other">Other</option>
                            </select>   
                        </div>
                        <div class="form-group">
                            <input type="text" value="<?php echo $user['religion']?>" class="form-control" placeholder="Religion" required autocomplete="off"name="religion">  
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-control" placeholder="New password" required name="new_password">  
                        </div>

				<button type="submit" class="btn" name="update_employee"><i class="fa fa-sign-in" aria-hidden="true"></i> Save</button>
				</form>
				</div>
        </div>

    </div>
    <?php else : ?>
  <h4 align="center" style="color: red;">Only Admin has access to this page</h4>
<?php endif?>
</body>
</html>