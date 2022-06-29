<!DOCTYPE html>
<?php include("server.php")?>
<html lang="en">
    <head>
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
<link rel="stylesheet" href="css/services.css" type="text/css">
    </head>
    <title>services</title>
    <body>
        
            <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
                    <a class="navbar-brand" href="index.php"><img src="img/logo.png" width="100"></a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                      <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse text-center" id="navbarNav">
                      <ul class="navbar-nav ml-auto">
                        <li class="nav-item ">
                          <a class="nav-link" href="index.php">Home </a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link" href="#footerid">About</a>
                        </li>
                        
                        <li class="nav-item active">
                                <a class="nav-link" href="#">Services<span class="sr-only">(current)</span></a>
                              </li>
                              <li class="nav-item">
                                    <a class="nav-link" href="#footerid">Contact us</a>
                                  </li>
                        <li class="nav-item active"></li>
                         <?php if (isset($_SESSION['email'])) : ?>
                           <a href="orders_page.php"> <button type="button" class="btn btn-primary btn-lg">Get a Quote</button></a>
                           <button class="btn login"><a href="index.php?logout='1'">Logout</a></button>
                           <?php endif ?>
                        <?php if (!isset($_SESSION['email'])) : ?>
                        <a href="login.php"> <button type="button" class="btn btn-primary btn-lg">Get a Quote</button></a>
                        <button class="btn login"><a href="login.php"><i class="fa fa-sign-in"></i> </a></button>
                      <?php endif ?>
                        

                         <li class="nav-item active ">
                          </li>
                      </ul>
                    </div>
                  </nav>



       
          <div class="services-section">
              <div class="inner-width">
                  <h1 class="section-title">Our Services</h1>
                  <div class="border"></div>
                  <div class="services-container">
                    <a <?php if(isset($_SESSION['email'])) : ?>href="orders_page2.php?service=Home Cleaning"
                      <?php else :?>href="login.php"<?php endif?>><div class="services-box">
                         <div class="services-icon">
                                <i class="fa fa-home" aria-hidden="true"></i>
                          </div>
                          <div class="services-title">
                              Home Cleaning
                          </div></a>
                          <div class="services-desc" >
                                If you’re in need of home cleaning,
                                 apartment cleaning, or a maid service, we’re simply the best,
                                  most convenient home cleaning service out there.
                          </div>
                      </div>

                      <a <?php if(isset($_SESSION['email'])) : ?>href="orders_page2.php?service=Office Cleaning"
                      <?php else :?>href="login.php"<?php endif?>><div class="services-box">
                            <div class="services-icon">
                                    <i class="fa fa-building-o" aria-hidden="true"></i>
                            </div>
                            <div class="services-title">
                                Office Cleaning
                            </div></a>
                            <div class="services-desc">
                                  If you’re in need of home cleaning,
                                   apartment cleaning, or a maid service, we’re simply the best,
                                    most convenient home cleaning service out there.
                            </div>
                        </div>

                        <a <?php if(isset($_SESSION['email'])) : ?>href="orders_page2.php?service=Appartment Cleaning"
                      <?php else :?>href="login.php"<?php endif?>><div class="services-box">
                                <div class="services-icon">
                                      <i class="fa fa-home" aria-hidden="true"></i>
                                </div>
                                <div class="services-title">
                                    Appartment Cleaning
                                </div></a>
                                <div class="services-desc">
                                      If you’re in need of home cleaning,
                                       apartment cleaning, or a maid service, we’re simply the best,
                                        most convenient home cleaning service out there.
                                </div>
                            </div>

                            <a <?php if(isset($_SESSION['email'])) : ?>href="orders_page2.php?service=Hospital Cleaning"
                      <?php else :?>href="login.php"<?php endif?>>  <div class="services-box">
                                    <div class="services-icon">
                                            <i class="fa fa-hospital-o" aria-hidden="true"></i>
                                    </div>
                                    <div class="services-title">
                                        Hospital Cleaning
                                    </div></a>
                                    <div class="services-desc">
                                          If you’re in need of home cleaning,
                                           apartment cleaning, or a maid service, we’re simply the best,
                                            most convenient home cleaning service out there.
                                    </div>
                                </div>

                                <a <?php if(isset($_SESSION['email'])) : ?>href="orders_page2.php?service=Gym Cleaning"
                      <?php else :?>href="login.php"<?php endif?>> <div class="services-box">
                                        <div class="services-icon">
                                          <i class="fa fa-heartbeat" aria-hidden="true"></i>
                                        </div>
                                        <div class="services-title">
                                            Gym Cleaning
                                        </div></a>
                                        <div class="services-desc">
                                              If you’re in need of home cleaning,
                                               apartment cleaning, or a maid service, we’re simply the best,
                                                most convenient home cleaning service out there.
                                        </div>
                                    </div>

                                    <a <?php if(isset($_SESSION['email'])) : ?>href="orders_page2.php?service=Maid Service"
                      <?php else :?>href="login.php"<?php endif?>>  <div class="services-box">
                                            <div class="services-icon">
                                              <i class="fa fa-female" aria-hidden="true"></i>
                                            </div>
                                            <div class="services-title">
                                                Maid Service
                                            </div></a>
                                            <div class="services-desc">
                                                  If you’re in need of home cleaning,
                                                   apartment cleaning, or a maid service, we’re simply the best,
                                                    most convenient home cleaning service out there.
                                            </div>
                                        </div>

                                        <a <?php if(isset($_SESSION['email'])) : ?>href="orders_page2.php?service=Ironing"
                      <?php else :?>href="login.php"<?php endif?>> <div class="services-box">
                                                <div class="services-icon">
                                                      <i class="fa fa-home" aria-hidden="true"></i>
                                                </div>
                                                <div class="services-title">
                                                    Ironing
                                                </div></a>
                                                <div class="services-desc">
                                                      If you’re in need of home cleaning,
                                                       apartment cleaning, or a maid service, we’re simply the best,
                                                        most convenient home cleaning service out there.
                                                </div>
                                            </div>

                                            <a <?php if(isset($_SESSION['email'])) : ?>href="orders_page2.php?service=Villa Cleaning"
                      <?php else :?>href="login.php"<?php endif?>>  <div class="services-box">
                                                    <div class="services-icon">
                                                          <i class="fa fa-home" aria-hidden="true"></i>
                                                    </div>
                                                    <div class="services-title">
                                                        Villa Cleaning
                                                    </div></a>
                                                    <div class="services-desc">
                                                          If you’re in need of home cleaning,
                                                           apartment cleaning, or a maid service, we’re simply the best,
                                                            most convenient home cleaning service out there.
                                                    </div>
                                                </div>

                                                <a <?php if(isset($_SESSION['email'])) : ?>href="orders_page2.php?service=Party Help"
                      <?php else :?>href="login.php"<?php endif?>>   <div class="services-box">
                                                        <div class="services-icon">
                                                          <i class="fa fa-users" aria-hidden="true"></i>
                                                        </div>
                                                        <div class="services-title">
                                                            Party Help
                                                        </div></a>
                                                        <div class="services-desc">
                                                              If you’re in need of home cleaning,
                                                               apartment cleaning, or a maid service, we’re simply the best,
                                                                most convenient home cleaning service out there.
                                                        </div>
                                                    </div>
                  </div>
              </div>

          </div>


          <!------------------------------------- footer start  ---------------------------->
<footer class="footersection" id="footerid">
    <div class="container">
      <div class="row">
        <div class="col-lg-4 col-md-6 col-12 footer-div">
          <div>
            <h3>BAHAR AL SHAMAL</h3>
            <p>our customers requirements by providing superior
               laundry services in a timely manner, and every day striving to improve the qualit
               y and breadth of our offerings.</p>
          </div>
  
        </div>
        <div class="col-lg-4 col-md-6 col-12 footer-div text-center">
            <div>
              <h3>Navigation Links</h3>
              <li><a href="">Home</a></li>
              <li><a href="">About</a></li>
              <li><a href="">Pricing</a></li>
              <li><a href="">Services</a></li>
            </div>
    
          </div>
          <div class="col-lg-4 col-md-12 col-12 footer-div">
              <div>
                <h3>CONTACT US</h3>
                <li><i class="fa-1x fa fa-whatsapp " aria-hidden="true">  0300-0576066</i></li>
                <li><i class="fa fa-envelope-square" aria-hidden="true"> alshamalalbahar@gmail.com</i></li>
              </div>
      
            </div>
  
      </div>
      <div class="mt-5 text-center">
        <p>© Alshamalalbahar 2020 All Right Reserved</p>
      </div>
      <div class="scrolltop float-right">
          <i class="fa fa-arrow-circle-up " onclick="topFunction()" id="myBtn" aria-hidden="true"></i>
      </div>
  
      </div>
    </div>
  
  </footer>     
  
  
  
  <!------------------------------------- footer  end  ---------------------------->
  <script src="JQuery.js"></script>
<script>
mybutton = document.getElementById("myBtn");
window.onscroll = function(){scrollFunction()};
function scrollFunction(){
  if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20){
    mybutton.style.display = "block";
  }
  else{
    mybutton.style.display = "none";
  }
}
function topFunction(){
  document.body.scrollTop = 0;
  document.documentElement.scrollTop = 0;
}
</script>

    </body>
</html>