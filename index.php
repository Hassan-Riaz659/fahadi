<?php 
include('server.php');


  if (isset($_GET['logout'])) {
    session_destroy();
    unset($_SESSION['admin_email']);
    unset($_SESSION['employee_email']);
    unset($_SESSION['email']);
    header("location: index.php");
  }
  if(isset($_SESSION['email'])){
    $db = mysqli_connect('localhost', 'root', '', 'bahar_al_shamal');
  $email = $_SESSION['email'];
  $query = "SELECT * FROM orders WHERE email='$email'";
  $result = mysqli_query($db,$query);
  $rows = mysqli_num_rows($result);
  }
  
?>
<!doctype html>
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
<link rel="stylesheet" type="text/css" href="css/index.css">


    <title>My Project</title>
  </head>

  <body>
    <div class="header" id="topheader">
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark sticky-top ">
      <div class="container">
        <a class="navbar-brand" href="index.php"><img src="img/logo.png" width="100px"></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon" ></span>
        </button>
      
        <div class="collapse navbar-collapse text-center  " id="navbarSupportedContent">
          <ul class="navbar-nav ml-auto text-uppercase">
         
            <li class="nav-item active">
                <a class="nav-link" href="#pricingdiv">Pricing</a></li>
                <li class="nav-item active">
                  <a class="nav-link" href="services.php">Services</a></li>
                   <li class="nav-item active">
                    <a class="nav-link" href="#notificationid">About</a>
                    </li>
                <li class="nav-item active">
                <a class="nav-link" href="#contactid">Contact Us <span class="sr-only">(current)</span></a>
              </li>
              
            <li class="nav-item active"></li>
            <?php if (isset($_SESSION['email'])) : ?>
              
                <a href="orders_page.php"> <button type="button" class="btn btn-primary btn-lg">Get a Quote</button></a>
              
            <?php elseif (!isset($_SESSION['email'])) : ?>
            
                <a href="login.php"> <button type="button" class="btn btn-primary btn-lg">Get a Quote</button></a>
              
            <?php endif ?>
            
            <?php if(isset($_SESSION['email'])):?>
              <a href="index.php?logout='1'" style="margin-left: 10px;margin-top: 10px;">Logout</a>
              <a href="profile.php?email=<?php echo $_SESSION['email'] ?>" style="margin-left: 10px;margin-top: 10px;"><?php echo $_SESSION['username'] ?></a>
            <?php elseif (!isset($_SESSION['email'])):?>
               <button class="btn login"><a href="login.php"><i class="fa fa-sign-in"></i> </a></button>
            <?php endif?>
          </div>
          <i class="fa" style="font-size:24px;color: #fff;margin-left: 10px;">&#xf07a;</i>
          <span class='badge badge-warning' id='lblCartCount' style="position: relative;top: -10px;">
            <?php if(isset($_SESSION['email'])){echo $rows ;}?></span>
          </ul>
        </div></nav>
      </div>
    
  </div>
 <section class="slide">
<div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100" src="img/s3.jpg" alt="First slide">
      <div class="carousel-caption d-none d-md-block">
        
      </div>
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="img/s2.jpg" alt="Second slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="img/s3.jpg" alt="Third slide">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div></section>
  
      <!------------------------Header part end------------------------------>   
 <!-------------------------------------  extra div ---------------------------->
 
<section class="header-extradiv">
    <div class="container headings text-center">
        <h1 class="text-center font-weight-bold pb-4">Why Choose Us </h1>
         </div>
<div class="container">
  <div class="row">
    <div class="extra-div col-lg-4 col-md-4 col-12">
      <a href="#"><i class="fa-3x fa fa-calendar" aria-hidden="true"></i></a>
      <h2>Easy Appoitment</h2>
      <p>Simply call us @ 056 57 57 077 or send us an email to Alshamalalbahar@gmail.com to book your next cleaning service.</p>
      </div>
  <div class="extra-div col-lg-4 col-md-4 col-12">
    <a href="#"><i class="fa-3x fa fa-phone" aria-hidden="true"></i></a>
      <h2>Premium Services</h2>
        <p>We provide premium and quality service to our customers. Customer satisfaction is our priority.</p>
        </div>
    <div class=" extra-div col-lg-4 col-md-4 col-12">
        <a href="#"><i class="fa-3x fa fa-thumbs-up" aria-hidden="true"></i></a>
          <h2>Happy Clients</h2>
           <p>We make our customers happy with our services. Our team always be there whenever you need.</p>
            </div>
  </div>

</div>
</section>
  <!------------------------------------- 3 extra div end ---------------------------->
<!------------------------------------- Pricing section ---------------------------->

<section class="pricing" id="pricingdiv">
<div class="container headings text-center">
  <h1 class="text-center font-weight-bold text-white pb-5">OUR BEST PRICING </h1>
   </div>
<div class="container">
  <div class="row">
    <div class="col-lg-4  col-12">
        <div class="card text-center">
            <div class="card-header">Daily</div>
            <div class="card-body">
            <li>AED: <span class="money">35</span>/hour</li>
            <li>We provide our best</li>
            <li>Cleaning you need everyday</li>
            <li>Make your house shine</li>
            </div>
            <?php if (isset($_SESSION['email'])) : ?>
              <div class="card-footer">
                <a href="orders_page.php">Get a Quote</a>
              </div>
            <?php elseif (!isset($_SESSION['email'])) : ?>
            <div class="card-footer">
                <a href="register.php">Get a Quote</a>
              </div>
            <?php endif ?>
          </div>
    </div>
    <div class="col-lg-4 col-12 card-second">
        <div class="card text-center">
            <div class="card-header">Weekly</div>
            <div class="card-body">
            <li>AED: <span class="money">35</span>/hour</li>
            <li>Book our team on weekly basis</li>
            <li>We clean your houses</li>
            <li>All you need is cleaning</li>
            </div>
            <?php if (isset($_SESSION['email'])) : ?>
              <div class="card-footer">
                <a href="orders_page.php">Get a Quote</a>
              </div>
            <?php elseif (!isset($_SESSION['email'])) : ?>
            <div class="card-footer">
                <a href="register.php">Get a Quote</a>
              </div>
            <?php endif ?>
          </div>
    </div>
    <div class="col-lg-4 col-12 ">
        <div class="card text-center">
            <div class="card-header">Bi-Weekly</div>
            <div class="card-body">
            <li>AED: <span class="money">35</span>/hour</li>
            <li>Make your house shine</li>
            <li>All you need is cleaning</li>
            <li>Make your house shine</li>
            </div>
            <?php if (isset($_SESSION['email'])) : ?>
              <div class="card-footer">
                <a href="orders_page.php">Get a Quote</a>
              </div>
            <?php elseif (!isset($_SESSION['email'])) : ?>
            <div class="card-footer">
                <a href="register.php">Get a Quote</a>
              </div>
            <?php endif ?>
          </div>
    </div>
  </div>
</div></section>

 <!------------------------------------- Pricing section End ---------------------------->
 <!------------------------------------- Customer feedback start ---------------------------->
 
 <section class="happyclients">
  <div class="container headings text-center">
    <h1 class="text-center font-weight-bold pb-5">Our Happy Clients </h1>
     </div>
     <div id="demo" class="carousel slide" data-ride="carousel">

      <!-- Indicators -->
      <ul class="carousel-indicators">
        <li data-target="#demo" data-slide-to="0" class="active"></li>
        <li data-target="#demo" data-slide-to="1"></li>
        <li data-target="#demo" data-slide-to="2"></li>
      </ul>
    
      <!-- The slideshow -->
      <div class="carousel-inner container">
        <div class="carousel-item active">
          <div class="row">
            <div class="col-lg-4 col-md-4 col-12">
              <div class="box">
                <a href="#"><img src="img/pic4.jpg" class="img-fluidi img-thumbnail" ></a>
                <p class="m-4" >Laura and Betty did a great job! I called late on Friday, and they were nice enough to get 
                  me in the very next day. Highly recommend.</p>
                  <h1>Bilal ijaz</h1>
                  <h2>Customer</h2>

              </div>

            </div>
            <div class="col-lg-4 col-md-4 col-12">
                <div class="box">
                  <a href="#"><img src="img/pic4.jpg" class="img-fluidi img-thumbnail" ></a>
                  <p class="m-4" >Laura and Betty did a great job! I called late on Friday, and they were nice enough to get 
                    me in the very next day. Highly recommend.</p>
                    <h1>Bilal ijaz</h1>
                    <h2>Customer</h2>
  
                </div>
  
              </div>
              <div class="col-lg-4 col-md-4 col-12">
                  <div class="box">
                    <a href="#"><img src="img/pic4.jpg" class="img-fluidi img-thumbnail" ></a>
                    <p class="m-4" >Laura and Betty did a great job! I called late on Friday, and they were nice enough to get 
                      me in the very next day. Highly recommend.</p>
                      <h1>Bilal ijaz</h1>
                      <h2>Customer</h2>
    
                  </div>
    
                </div>
              </div>
        
            </div>
        <div class="carousel-item">
            <div class="row">
                <div class="col-lg-4 col-md-4 col-12">
                  <div class="box">
                    <a href="#"><img src="img/pic4.jpg" class="img-fluidi img-thumbnail" ></a>
                    <p class="m-4" >Laura and Betty did a great job! I called late on Friday, and they were nice enough to get 
                      me in the very next day. Highly recommend.</p>
                      <h1>Bilal ijaz</h1>
                      <h2>Customer</h2>
    
                  </div>
    
                </div>
                <div class="col-lg-4 col-md-4 col-12">
                    <div class="box">
                      <a href="#"><img src="img/pic4.jpg" class="img-fluidi img-thumbnail" ></a>
                      <p class="m-4" >Laura and Betty did a great job! I called late on Friday, and they were nice enough to get 
                        me in the very next day. Highly recommend.</p>
                        <h1>Bilal ijaz</h1>
                        <h2>Customer</h2>
      
                    </div>
      
                  </div>
                  <div class="col-lg-4 col-md-4 col-12">
                      <div class="box">
                        <a href="#"><img src="img/pic4.jpg" class="img-fluidi img-thumbnail" ></a>
                        <p class="m-4" >Laura and Betty did a great job! I called late on Friday, and they were nice enough to get 
                          me in the very next day. Highly recommend.</p>
                          <h1>Bilal ijaz</h1>
                          <h2>Customer</h2>
        
                      </div>
        
                    </div>
                  </div>
        </div>
        <div class="carousel-item">
            <div class="row">
                <div class="col-lg-4 col-md-4 col-12">
                  <div class="box">
                    <a href="#"><img src="img/pic4.jpg" class="img-fluidi img-thumbnail" ></a>
                    <p class="m-4" >Laura and Betty did a great job! I called late on Friday, and they were nice enough to get 
                      me in the very next day. Highly recommend.</p>
                      <h1>Bilal ijaz</h1>
                      <h2>Customer</h2>
    
                  </div>
    
                </div>
                <div class="col-lg-4 col-md-4 col-12">
                    <div class="box">
                      <a href="#"><img src="img/pic4.jpg" class="img-fluidi img-thumbnail" ></a>
                      <p class="m-4" >Laura and Betty did a great job! I called late on Friday, and they were nice enough to get 
                        me in the very next day. Highly recommend.</p>
                        <h1>Bilal ijaz</h1>
                        <h2>Customer</h2>
      
                    </div>
      
                  </div>
                  <div class="col-lg-4 col-md-4 col-12">
                      <div class="box">
                        <a href="#"><img src="img/pic4.jpg" class="img-fluidi img-thumbnail" ></a>
                        <p class="m-4" >Laura and Betty did a great job! I called late on Friday, 
                          and they were nice enough to get 
                          me in the very next day. Highly recommend.</p>
                          <h1>Bilal ijaz</h1>
                          <h2>Customer</h2>
        
                      </div>
        
                    </div>
                  </div>

        </div>
      </div>
    
      <!-- Left and right controls -->
      <a class="carousel-control-prev" href="#demo" data-slide="prev">
        <span class="carousel-control-prev-icon"></span>
      </a>
      <a class="carousel-control-next" href="#demo" data-slide="next">
        <span class="carousel-control-next-icon"></span>
      </a>
    
    </div>
</section>

  <!------------------------------------- customer feedback end ---------------------------->
<!------------------------------------- ccontact us start ---------------------------->
<section class="contactus" id="contactid">
  <div class="container headings text-center">
    <h1 class="text-center font-weight-bold pb-5">Contact us </h1>
    <p><b>We Are Here To Help And Answer Any Question You Might Have !! </b></p>
     </div>
<div class="container">
  <div class="row">
    <div class="col-lg-8 col-md-8 col-10 offset-lg-2 offset-md-2 offset-1">
      <form action="index.php" method="post">
        <div class="form-group">
          <input type="text" class="form-control" placeholder="Enter Username" id="username" required autocomplete="off"
          name="username">
        </div>
          <div class="form-group">
            <input type="number" class="form-control" placeholder="Enter Phone Number" id="mobile" required autocomplete="off" name="mobile_number">
          </div>
            <div class="form-group">
              <input type="email" class="form-control" placeholder="Enter email" id="email"required autocomplete="off" name="email">
            </div>

            <div class="form-group">
              <textarea class="form-control" rows="4" id="comment" placeholder="Enter your massege" name="message"></textarea>
            </div>
            <div class="d-flex justify-content-center">

        <button type="submit" class="btn btn-primary" name="customer_feedback">Submit</button>
      </div>
      </form>


      

    </div>

  </div>

</div>
</section>



<!------------------------------------- contact us end ---------------------------->
<!------------------------------------- further notification start---------------------------->
<section class="notification" id="notificationid">
    <div class="container headings text-center">
      <h1 class="text-center  pb-5">For Further Notification </h1>
       </div>
       <div class="container" align="center">
         <div class="row">
          <div class="col-lg-8 offset-lg-2 col-12">
              
                <form action="index.php" method="post">
                  
                  <input type="text" placeholder="Your Email" name="email">
                  <button type="submit" class="btn btn-primary" name="customer_email">Send</button>
                </form>
                  

            </div>
          </div>

       </div>

</section>
<!------------------------------------- further notification end  ---------------------------->
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
          <div class="col-lg-4 col-md-12 col-12 footer-div">
            <div>
              <h3>Employee</h3>
              <?php if(!isset($_SESSION['employee_email'])):?>
              <li><a href="employee_login.php">Login</a></li>
              <?php elseif (isset($_SESSION['employee_email'])) :?>
                <li><a href="index.php?logout='1'">Logout</a></li>
              <?php endif?>
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