
<?php include('server.php') ?>
<!DOCTYPE html>
<html lang="eng">
    <head>
        <title>

        </title>
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
        <div class="modal-dialog text-center" >
            
                <div class="modal-content" style="margin-top: 100px; background-color: rgba(255, 255, 255, .15); backdrop-filter: blur(5px);;padding: 0 10px;">
                    <div class="col-12 user-img">
                        <a href="index.php"> <img src="img/pic.png"></a>
                                               <div class="heading"style="color: #9ACD32";><h3> Add New Employee</h3></div>	

                    </div>
                    <?php if(isset($_SESSION['admin_email'])) : ?>
                    <form class="col-12" action="add_new_employee.php" method="post">
                        <?php include('errors.php'); ?>
                        <div class="form-group" style="float: left;">
                            <input type="text" class="form-control" placeholder="Full Name" required autocomplete="off" name="username">   
                        </div>
                        <div class="form-group" style="float: right;">
                            <input type="number" class="form-control" placeholder="Enter Mobile Number" required autocomplete="off" name="mobile_number">   
                        </div>
                        <div class="form-group" style="float: left;">
                            <input type="email" class="form-control" placeholder="Enter E-mail" required autocomplete="off"
                            name="email">   
                        </div>
                        <div class="form-group" style="float: right;">
                            <input type="number" class="form-control" placeholder="Emirates ID" required autocomplete="off"
                            name="emirates_id">   
                        </div>
                        <div class="form-group" style="float: left;">
                            <input type="text" class="form-control" placeholder="Passport Number" required autocomplete="off"
                            name="passport_number">   
                        </div>
                        <div class="form-group" style="float: right;">
                            <input type="text" class="form-control" placeholder="Address" required autocomplete="off"
                            name="address">   
                        </div>
                        <div class="form-group" style="float: left;">
                            <input type="text" class="form-control" placeholder="Nationality" required autocomplete="off"
                            name="nationality">   
                        </div>
                        <div class="form-group" style="float: right;">
                            <select name="gender" required class="form-control">
                                <option value="">Select Gender...</option>
                                <option value="male">Male</option>
                                <option value="female">Female</option>
                                <option value="other">Other</option>
                            </select>   
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Religion" required autocomplete="off"name="religion">   
                        </div>
                        <div class="form-group">
                             <input type="password" class="form-control" placeholder="Enter password" name="password_1" required>
                            </div>
                            <div class="form-group">
                                <input type="password" class="form-control" placeholder="Re-type Password" name="password_2" required >   
                            </div>
                            
                            <button type="submit" class="btn" name="reg_employee"><i class="fa fa-sign-in" aria-hidden="true"></i> Submit</button><br>
                    </form>
                    <?php else : ?>
                        <h4 style="margin-top: 20px;">Only Admin has access to this page</h4>
                    <?php endif ?>
                </div>


            </div>

        </div>

    </body>
</html>