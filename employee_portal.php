
<?php include('server.php');

if(isset($_SESSION['employee_email'])){
    $db = mysqli_connect('localhost', 'root', '', 'bahar_al_shamal');
  $query = "SELECT * FROM customers ";
  $result = mysqli_query($db,$query);
  $customers_counts = mysqli_num_rows($result);

  $query = "SELECT * FROM orders ";
  $result = mysqli_query($db,$query);
  $orders_counts = mysqli_num_rows($result);

  $query = "SELECT * FROM emails ";
  $result = mysqli_query($db,$query);
  $emails_counts = mysqli_num_rows($result);

  $query = "SELECT * FROM feedback ";
  $result = mysqli_query($db,$query);
  $feedback_counts = mysqli_num_rows($result);
  }

?>
<?php if(isset($_SESSION['employee_email'])) : ?>
<!DOCTYPE html>
<html>
<head>
	<title>Employee Portal</title>
		 <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha256-eZrrJcwDc/3uDhsdt61sL2oOBY362qM3lon1gyExkL0=" crossorigin="anonymous" />
<link rel="stylesheet" type="text/css" href="css/admin.css">
</head>
<body>

<div class="header" id="topheader">
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark sticky-top ">
      <div class="container">
        <a class="navbar-brand" href="index.php"><img src="img/logo.png" width="100px"></a>
        <div>
            <p style="color: #fff;margin-top: 10px;font-size: 20px;">Employee Portal</p>
          </div>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon" ></span>
        </button>
      
        <div class="collapse navbar-collapse text-center  " id="navbarSupportedContent">
          <ul class="navbar-nav ml-auto text-uppercase">
         
            <li class="nav-item active">
                <a class="nav-link" id="admin_customers" href="#customers_table">

                <span  class="badge badge-warning" style="position: absolute;top:60px;margin-left: 35px;background-color: "><?php if(isset($_SESSION['employee_email'])){echo $customers_counts ;}?></span>Customers</a></li>
                <li class="nav-item active">
                  <a class="nav-link" id="admin_orders" href="#admin_orders_table">
                <span  class="badge badge-warning" style="position: absolute;top:60px;margin-left: 25px;background-color: "><?php if(isset($_SESSION['employee_email'])){echo $orders_counts ;}?></span>Orders</a></li>
                   
                <li class="nav-item active">
                <a class="nav-link" id="admin_feedbacks" href="#customers_feedbacks">
                <span  class="badge badge-warning" style="position: absolute;top:60px;margin-left: 35px;background-color: "><?php if(isset($_SESSION['employee_email'])){echo $feedback_counts ;}?></span>Feedbacks</a>
              </li>
              <li class="nav-item active">
                <a class="nav-link" id="admin_emails" href="#customers_emails">

                <span  class="badge badge-warning" style="position: absolute;top:60px;margin-left: 25px;background-color: "><?php if(isset($_SESSION['employee_email'])){echo $emails_counts ;}?></span>Emails</a>
              </li>
              <?php if(isset($_SESSION['employee_email'])):?>
                <li>
                <a class="nav-link" href="index.php?logout='1'">Logout</a>
              </li>
            <?php endif ?>
          </div>
          </ul>
        </div></nav>
      </div>
  </div>
<div class="container" align="center">
	<div>
		
            <div id="customers_table">
            	<h3 style="float: left; color:#343A40">Customers ></h3>
            	<?php include('e_show_customers.php')?>
            </div>
	</div>
	<div>
		
            <div id="admin_orders_table" >
            	<h3 style="float: left; color:#343A40">Orders ></h3>
            	<?php include('e_show_orders.php')?>
            </div>
	</div>
	
	<div id="customers_feedbacks">
	
            
            <div id="admin_feedback_table">
            	<h3 style="float: left; color:#343A40">FeedBacks ></h3>
            	<?php include('e_show_feedbacks.php')?>
            </div>
	</div>
	<div id="customers_emails">
		
            <div id="admin_email_table">
            	<h3 style="float: left; color:#343A40">Emails ></h3>
            	<?php include('e_show_emails.php')?>
            </div>
	</div>
</div>
<?php else : ?>
  <h4 align="center" style="color: red;">Only Employee has access to this page</h4>
<?php endif?>
</body>
</html>