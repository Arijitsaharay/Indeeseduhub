<?php 
include_once('header.php');
include_once('calendar.php');
include('connection.php');
include('functions.php');
?>

<!-- Hero section -->

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" type="text/css" href="css/owl.carousel.min.css">
    <style type="text/css">
       .hero-section{
        display:;
       }
        .carousel-item {
  transition: -webkit-transform 0.5s ease;
  transition: transform 0.5s ease;
  transition: transform 0.5s ease, -webkit-transform 0.5s ease;
  -webkit-backface-visibility: visible;
  backface-visibility: visible;
  

}
.carousel-inner img
{
    height:40vh;
    width: 100%;
}
@media (min-width: 683px){
        .carousel-inner{display: none;}
        .carousel-indicators{display: none;}
    }
@media (min-width: 320px) and (max-width: 683px){
        .hero-section{display: none;}
    }
    </style>
</head>
    <section class="hero-section">
        <div class="hero-slider owl-carousel">
            <div class="hs-item set-bg" data-setbg="img/02.jpg">
                
            </div>
            
            <div class="hs-item set-bg" data-setbg="img/3.jpg">
                
            </div>
            <div class="hs-item set-bg" data-setbg="img/12.jpg">
                
            </div>
            <div class="hs-item set-bg" data-setbg="img/5.jpg">
                
            </div>
            <div class="hs-item set-bg" data-setbg="img/44.jpg">
                
            </div>
            <div class="hs-item set-bg" data-setbg="img/6.png">
                
            </div>
        </div>
        <div class="container">
            <div class="slide-num-holder" id="snh-1"></div>
        </div>
    </section>
    <!-- Hero section end -->
     

    <div id="slides" class="carousel slide" data-ride="carousel">
    <ul class="carousel-indicators">
        <li data-target="#slides" data-slide-to="0" class="active"></li>
        <li data-target="#slides" data-slide-to="1"></li>
        <li data-target="#slides" data-slide-to="2"></li>
        <li data-target="#slides" data-slide-to="3"></li>
        <li data-target="#slides" data-slide-to="4"></li>
    </ul>
   
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img src="img/02.jpg">
        </div>
        <div class="carousel-item">
            <img src="img/3.jpg">
        </div>
        <div class="carousel-item">
            <img src="img/12.jpg">
        </div>
        <div class="carousel-item">
            <img src="img/5.jpg">
        </div>
        <div class="carousel-item">
            <img src="img/44.jpg">
        </div>
        <div class="carousel-item">
            <img src="img/6.png">
        </div>
    </div>
</div>

    <!-- Features section -->
    <section class="features-section">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-4 p-0 feature">
                    <div class="feature-inner">
                        <div class="feature-icon">
                            <img src="img/icons/1.png" alt="#">
                        </div>
                        <h2>Fast & Secure Services</h2>
                    </div>
                </div>
                <div class="col-md-4 p-0 feature">
                    <div class="feature-inner">
                        <div class="feature-icon">
                            <img src="img/icons/2.png" alt="#">
                        </div>
                        <h2>Live Classes</h2>
                    </div>
                </div>
                <div class="col-md-4 p-0 feature">
                    <div class="feature-inner">
                        <div class="feature-icon">
                            <img src="img/icons/3.png" alt="#">
                        </div>
                        <h2>Free & fast Interaction</h2>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Features section end -->

    
    <!-- letest product section -->
        <br><br>
        <div class="container">
            <div class="section-title">
                <h2>DYNAMIC ROUTINE</h2>
               <br>
                <h4>Enter Class Date</h4>
            </div>
        </div>
        <br>
   
    <!-- letest product section end -->

    <!-- Calendar section -->
    <section class="view-calender" >
        <form action="class.php" method="post">
            <div class='input-group date' id='datepicker' align="center" style="" >
            <input type='text' id="date" name="class_date" class="form-control"  required="" style="width:30vw;height: 55px; " autocomplete="off">
                            <span class="input-group-addon" style="float: left; height: 55px; width: 45px">
                                <br>
                                <span class="glyphicon glyphicon-calendar" ></span>
                            </span>
                        </div><br>
             <div><center class="center"  ><button class="site-btn" >VIEW</button></center></div> 
                          
        </form>
    </section>
    <!-- Calendar section end -->

    <!-- Product filter section -->
    <!-- letest product section -->
    <section class="top-letest-product-section">
        <div class="container">
            <div class="section-title">
                <h2>LIVE CLASSES</h2>
            </div>
            <div class="product-slider owl-carousel">
                
                  <?php
               getPremium();
               ?>
                              
                
            </div>
            <div class="text-center pt-5">
                <a href="gig.php" style="color:black "><button class="site-btn sb-line sb-dark">LOAD MORE</button></a>
            </div>
        </div>
    </section>
    <!-- letest product section end -->


      



    <?php include_once('footer.php');?>