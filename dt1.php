    <!DOCTYPE html>
<html lang="en">
<head>
  <title>doctor finding</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
   
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
* {box-sizing: border-box;}
body {font-family: Verdana, sans-serif;}
.mySlides {display: none;}
img {vertical-align: middle;}

/* Slideshow container */
.slideshow-container {
  max-width: 100px;
  position: relative;
  margin: auto;
}

/* Caption text */
.text {
  color: #f2f2f2;
  font-size: 15px;
  padding: 8px 12px;
  position: absolute;
  bottom: 8px;
  width: 100%;
  text-align: center;
}

/* Number text (1/3 etc) */
.numbertext {
  color: #f2f2f2;
  font-size: 12px;
  padding: 8px 12px;
  position: absolute;
  top: 0;
}

/* The dots/bullets/indicators */
.dot {
  height: 15px;
  width: 15px;
  margin: 0 2px;
  background-color: #bbb;
  border-radius: 50%;
  display: inline-block;
  transition: background-color 0.6s ease;
}

.active {
  background-color: #717171;
}

/* Fading animation */
.fade {
  -webkit-animation-name: fade;
  -webkit-animation-duration: 1.5s;
  animation-name: fade;
  animation-duration: 1.5s;
}

@-webkit-keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}

@keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}

/* On smaller screens, decrease text size */
@media only screen and (max-width: 300px) {
  .text {font-size: 11px}
}
    img
    {
     width: 1400%;
    height: 500px;
     margin-left: -650px;
    margin-right: 40px;
    background-size: 100% 100%;
    border: 1px solid blue;
    }  
    footer{
        background-color:gainsboro;
    }
    
</style>
    
    
</head>
<body>
    <nav class="navbar navbar-inverse navbar-fixed-top">
     <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand">Doctor Finding</a>
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="index.php">Home</a></li>
      
      <li><a href="abt.html">About</a></li>
    </ul>
    <ul class="nav navbar-nav navbar-right">
      <li><a href="sign.php"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
      <li><a href="login.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
    </ul>
  </div>
</nav>
    
 <br><br><br><br>   
<div class="slideshow-container " >

<div class="mySlides fade">
  <div class="numbertext">1 / 3</div>
    <img src="ss.jpg">
  <div class="text">hello doc</div>
</div>

<div class="mySlides fade">
  <div class="numbertext">2 / 3</div>
  <img src="11.jpg" >
  <div class="text">find doc</div>
</div>

<div class="mySlides fade">
  <div class="numbertext">3 / 3</div>
  <img src="dd.jpg" >
  <div class="text">hello doc</div>
</div>

</div>
<br>

<div style="text-align:center">
  <span class="dot"></span> 
  <span class="dot"></span> 
  <span class="dot"></span> 
</div>

<script>
var slideIndex = 0;
showSlides();

function showSlides() {
    var i;
    var slides = document.getElementsByClassName("mySlides");
    var dots = document.getElementsByClassName("dot");
    for (i = 0; i < slides.length; i++) {
       slides[i].style.display = "none";  
    }
    slideIndex++;
    if (slideIndex > slides.length) {slideIndex = 1}    
    for (i = 0; i < dots.length; i++) {
        dots[i].className = dots[i].className.replace(" active", "");
    }
    slides[slideIndex-1].style.display = "block";  
    dots[slideIndex-1].className += " active";
    setTimeout(showSlides, 2000); // Change image every 2 seconds
}
</script>
    
    
<div class="container">
  <div class="jumbotron">
    <h1>DOCTOR FINDING</h1>      
    <p>Find a Doctor
Whether you are just checking to make sure things are on track, or have a specific symptom you are concerned about, choosing your doctor is the first step.</p>
  </div>
    </div>
    <?php
$new_date = date('d-m-y', strtotime($_POST['dateFrom']));
$time = date('h:i',strtotime($_POST['time']));
    $name=$_POST['name'];
    echo "<b>your appointment is fixed on </b>";
echo $new_date;
    echo " <b>at time</b> ";
    echo $time;
    echo " with ";
    echo $name;
    
?>
      &nbsp&nbsp&nbsp&nbsp
   
       <br>
       <br><br><br><br><br>
<!--Footer-->
<footer class="page-footer font-small unique-color-dark pt-0">

    <div style="background-color: gray;">
        <div class="container">
            <!--Grid row-->
            <div class="row py-10 d-flex align-items-center">

                <!--Grid column-->
                <div class="col-md-6 col-lg-5 text-center text-md-left mb-4 mb-md-0">
                    <h6 class="mb-0 white-text"></h6>
                </div>
                <!--Grid column-->

                <!--Grid column-->
                

            </div>
            <!--Grid row-->
        </div>
    </div>

    <!--Footer Links-->
    <div class="container mt-5 mb-4 text-center text-md-left">
        <div class="row mt-3">

            <!--First column-->
            <div class="col-md-3 col-lg-4 col-xl-3 mb-4">
                <h6 class="text-uppercase font-weight-bold">
                    <strong>Company name</strong>
                </h6>
                <hr class="deep-purple accent-2 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
                <p>  Doctor finder system .
                    Here you  can search the doctor in any  given city.
                         
                    .</p>
            </div>
            <!--/.First column-->

            <!--Second column-->
            <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">
                <h6 class="text-uppercase font-weight-bold">
                    <strong>Products</strong>
                </h6>
                <hr class="deep-purple accent-2 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
                <p>
                    <a href="facebook.com">docfinder facebook page </a>
                </p>
                <p>
                    <a href="twitter.com">doc finder twitter page</a>
                </p>
                
            </div>
            <!--/.Second column-->

            <!--Third column-->
            <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">
                <h6 class="text-uppercase font-weight-bold">
                    <strong>Useful links</strong>
                </h6>
                <hr class="deep-purple accent-2 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
                <p>
                    <a href="doclog.php"> Doc login</a>
                </p>
                <p>
                    <a href="login.php"> patient login</a>
                </p>
                <p>
                    <a href="#!"></a>
                </p>
                <p>
                    <a href="#!">Help</a>
                </p>
            </div>
            <!--/.Third column-->

            <!--Fourth column-->
            <div class="col-md-4 col-lg-3 col-xl-3">
                <h6 class="text-uppercase font-weight-bold">
                    <strong>Contact</strong>
                </h6>
                <hr class="deep-purple accent-2 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
                <p>
                    <i class="fa fa-home mr-3"></i> New Delhi,Noida</p>
                <p>
                    <i class="fa fa-envelope mr-3"></i> docfindermini.000webhostapp.com</p>
                <p>
                    <i class="fa fa-phone mr-3"></i> + 91 54321334</p>
                <p>
                    <i class="fa fa-print mr-3"></i> + 91 54321456</p>
            </div>
            <!--/.Fourth column-->

        </div>
    </div>
    <!--/.Footer Links-->

    

</footer>
<!--/.Footer-->
                      
    </body>
</html>
   