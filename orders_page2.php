<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
	<title>Place your order</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha256-eZrrJcwDc/3uDhsdt61sL2oOBY362qM3lon1gyExkL0=" crossorigin="anonymous" />
<link rel="stylesheet" href="css/p_order.css" type="text/css">
</head>
<body>
	<?php if(isset($_SESSION['email'])):?>
<div class="modal-dialog text-center">
          
        <div class="modal-content" style="margin-top: 100px;">
            <div class="col-12 user-img">
                <a href="index.php"> <img src="img/p_order.png"></a>
                
            </div>
				<form class="col-12" method="post" action="orders_page2.php">
					<div class="form-group" style="float: left;">
						<input type="text" name="username" placeholder="Username" required value="<?php echo $_SESSION['username'] ?>">
					</div>
					<div class="form-group" style="float: right;">
						<input type="email" name="email" placeholder="Email" required value="<?php echo $_SESSION['email'] ?>">
					</div>
					<div class="form-group" style="float: left;">
						<input type="number" name="mobile_number" placeholder="Mobile Number" required value="<?php echo $_SESSION['mobile_number'] ?>">
					</div>
					<div class="form-group" style="float: right;">
						<input type="text" name="address" placeholder="Address" required>
					</div>
					<div class="form-group" style="float: left;">
						<select name="days" required class="form-control">
							<option value="">Select Days...</option>
							<option value="daily">Daily</option>
							<option value="weekly">Weekly</option>
							<option value="bi_weekly">Bi-Weekly</option>
						</select>
						
					</div>
					<div class="form-group" style="float: right">
						<select name="price" required class="form-control">
							<option value="">Select Price...</option>
							<option value="35">35/hour</option>
						</select>
					</div>
					<div class="form-group">
						<input type="text" name="service" class="form-control" readonly required value="<?php echo $_GET["service"]?>">
					</div>
					<div class="form-group" style="float: left;">
						<p style="color: #fff;">Starting Date</p>
						<input type="date" name="starting_date" required>
					</div>
					<div class="form-group" style="float: right;">
						<p style="color: #fff;">Ending Date</p>
						<input type="date" name="ending_date" required>
					</div>
					<div class="form-group">
						<button type="submit" class="btn" name="place_order"><i class="fa fa-sign-in" aria-hidden="true"></i> Place Order</button>
					</div>
				</form>
 			</div>
        </div>

    </div>
    <?php else :?>
    	<a href="login.php" style="color: #000;">Login First</a>
<?php endif?>
</body>
</html>