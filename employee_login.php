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
<link rel="stylesheet" href="css/login3.css" type="text/css">
    </head>

    <body>
        <div class="modal-dialog text-center">
            
            <div class="col-sm-8 main-section">
                
                <div class="modal-content">
                    <div class="col-12 user-img">
                       <a href="index.php"> <img src="img/pic.png"></a>
                       <div class="heading"style="color: #9ACD32";><h3> Login</h3></div>	

                    </div>
                    <form class="col-12" method="post" action="employee_login.php">
                        <?php include('errors.php'); ?>
                        <div class="form-group">
                            <input type="email" class="form-control" placeholder="Enter E-mail" required autocomplete="off" name="email">   
                        </div>
                        <div class="form-group">
                             <input type="password" class="form-control" placeholder="Enter password"required
                             name="password">
                            </div>
                            <button type="submit" class="btn" name="login_employee"><i class="fa fa-sign-in" aria-hidden="true"></i> Login</button>

                    </form>
                    
                    </div>

                </div>


            </div>

        </div>

    </body>
</html>