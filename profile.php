
<?php include('server.php') ?>
<?php if(isset($_SESSION['email'])):?>
<!DOCTYPE html>
<html lang="on">
    <head>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha256-eZrrJcwDc/3uDhsdt61sL2oOBY362qM3lon1gyExkL0=" crossorigin="anonymous" />
<link rel="stylesheet" href="css/profile.css" type="text/css">  

</head>
<title>Profile</title>
<body>

          <div align="center" style="background-color: #eee;" >
            <img src="img/pic.png" style="width: 10%;">
              <div class="col-md-9">
                <h2 style="text-transform: uppercase;"><?php echo $_SESSION['username']?></h2>
                <p>
                   <?php echo "Mobile Number: ".$_SESSION['mobile_number']?>
                </p>
                <p>
                   <?php echo "Email: ".$_SESSION['email']?>
                </p>
                <div>
                    <p>
                        <a href="index.php" style="float: left;">Home</a>
                    </p>
                    <p>
                        <a href="orders_page.php" style="float: right;">New Order</a>
                    </p>
                </div>
                
            </div>
          </div>
            <div class="profile-use-menu" align="center">
                <ul nav class="nav flex-column">
                    <li class="nav-item">
                        <a class="nav-link active" href="#edit_form" id="edit_now"><i class="fa fa-user-circle" aria-hidden="true"></i> Edit Profile</a>
                    </li>
                    <li class="nav-item" >
                        <a class="nav-link" id="my_order" href="#orders_table" name="my_orders" ><i class="fa fa-check-circle" aria-hidden="true"></i>My Orders</a>
                    </li>
                </ul>
            </div>
        <?php include('errors.php'); ?>
        <div align="center" style="margin-left: 200px;margin-right: 200px;">
            <script type="text/javascript">
                $(document).ready(function() {
                  $("#edit_now").click(function() {
                    $("#edit_form").toggle();
                    document.getElementById("orders_table").style.display="none";
                  });
                });
            </script>
            <form id="edit_form" style="display: none;" action="profile.php" method="post">
                        <div class="form-group">
                            <h3>Update Details</h3>
                            <input type="text" value="<?php echo $_SESSION['username']?>" class="form-control" placeholder="Enter Username" required autocomplete="off" name="username">   
                        </div>
                        <div class="form-group">
                            <input type="email" value="<?php echo $_SESSION['email']?>" class="form-control" placeholder="Enter E-mail" required autocomplete="off"
                            name="email">   
                        </div>
                        <div class="form-group">
                            <input type="number" value="<?php echo $_SESSION['mobile_number']?>" class="form-control" placeholder="Enter Mobile Number" required autocomplete="off" name="mobile_number">   
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-control" placeholder="New password" required name="customer_password">  
                        </div>
                        <button type="submit" class="btn" name="update_user"><i class="fa fa-sign-in" aria-hidden="true"></i> Save</button>
            </form>
        </div>
        <div>
            <script type="text/javascript">
                $(document).ready(function() {
                  $("#my_order").click(function() {
                    $("#orders_table").toggle();
                    document.getElementById("edit_form").style.display="none";
                  });
                });
            </script>
            <div id="orders_table" style="display: none; margin: 0px 80px 40px 80px;">
                <?php include('my_orders.php') ?>
            </div>
    </div>
<?php else :?>
<?php header('location: login.php')?>
<?php endif ?>
</body>

</html>