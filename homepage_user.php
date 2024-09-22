
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>FoodValue - Charity Category</title>

    <link href="//fonts.googleapis.com/css2?family=DM+Sans:wght@400;700&display=swap" rel="stylesheet">
    
    <!-- Template CSS -->
    <link rel="stylesheet" href="assets/css/style-starter.css">
    
  </head>
  <body>
<!--header-->
<header id="site-header" class="fixed-top">
  <div class="container">
    <nav class="navbar navbar-expand-lg stroke">
      <h1><a class="navbar-brand mr-lg-5" href="index.php">
        <img src="assets/images/logo.png" alt="Your logo" title="Your logo" />FoodValue
        </a></h1>
      <!-- if logo is image enable this   
    <a class="navbar-brand" href="#index.php">
        <img src="image-path" alt="Your logo" title="Your logo" style="height:35px;" />
    </a> -->
      <button class="navbar-toggler  collapsed bg-gradient" type="button" data-toggle="collapse"
        data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false"
        aria-label="Toggle navigation">
        <span class="navbar-toggler-icon fa icon-expand fa-bars"></span>
        <span class="navbar-toggler-icon fa icon-close fa-times"></span>
        </span>
      </button>

      <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
        <ul class="navbar-nav w-100">
        <li class="nav-item @@home__active">
            <a class="nav-link" href="homepage_user.php">Home <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item @@causes__active">
            <a class="nav-link" href="causes.php">Causes</a>
          </li>
          <li class="nav-item @@contact__active">
                <div class="dropdown">
                    <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" aria-expanded="false">
                        Food
                    </a>
                    <div class="dropdown-menu">
                        <a class="nav-link" href="add_food.php">Add</a>
                        <a class="nav-link" href="user_food.php">Manage</a>
                    </div>
                </div>
                            
            </li>
          </li>
          <li class="nav-item @@contact__active">
            <a class="nav-link" href="user_enquiry.php">Contact</a>
          </li>
          <li class="nav-item @@contact__active">
            <a class="nav-link" href="logout_user.php">Logout</a>
          </li>
          
          
        </ul>
      </div>
      <!-- toggle switch for light and dark theme -->
      <!-- <div class="mobile-position">
        <nav class="navigation">
          <div class="theme-switch-wrapper">
            <label class="theme-switch" for="checkbox">
              <input type="checkbox" id="checkbox">
              <div class="mode-container">
                <i class="gg-sun"></i>
                <i class="gg-moon"></i>
              </div>
            </label>
          </div>
        </nav>
      </div> -->
      <!-- //toggle switch for light and dark theme -->
    </nav>
  </div>
</header>
<!-- //header -->
<div class="inner-banner">
    <section class="w3l-breadcrumb py-5">
        <div class="container py-lg-5 py-md-3">
            <h2 class="title">WELCOME USER</h2>
        </div>
    </section>
</div>
<!-- banner bottom shape -->
<div class="position-relative">
    <div class="shape overflow-hidden">
        <svg viewBox="0 0 2880 48" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M0 48H1437.5H2880V0H2160C1442.5 52 720 0 720 0H0V48Z" fill="currentColor"></path>
        </svg>
    </div>
</div>
<!-- banner bottom shape -->
<section class="w3l-aboutblock1 py-5" id="about">
    <div class="container py-lg-5 py-md-3">
        <div class="row">
            <div class="col-lg-6">
                <h5 class="title-small">A little about Us</h5>
                <h3 class="title-big">Welcome to FoodValue charity</h3>
                <p class="mt-3">If you can't feed hundred people,Then just feed one.</p>
                <p class="mt-3">We make a living by what we get,But we make a life by what we give.
                    Food is moral right of all those who are born into this world.
                </p>
                
                
            </div>
            <div class="col-lg-6 mt-lg-0 mt-5">
                <img src="assets/images/banner1.jpg" alt="" class="radius-image img-fluid">
            </div>
        </div>
    </div>
</section>
 <!-- forms -->
 <section class="w3l-forms-9 py-5" id="">
     <div class="main-w3 py-lg-5 py-md-3">
         <div class="container">
             <div class="row align-items-center">
                 <div class="main-midd col-lg-9">
                     <h3 class="title-big">Facts about FoodValue charity</h3>
                     <p class="mt-3">A lot of work goes down at the grass root level in villages in the remotest corners
                         as
                         well as the most populous metros across India, with schools and government bodies.
                         We need your contributions to keep coming in.</p>
                 </div>
                 
             </div>

             <div class="donar-img mt-5">
                <div class="right-side text-center">
                    <span class="fa fa-heart"></span>
                    
                    <h4 class="big my-3">The greatest Happiness in the world is to make other happy.</h4>
                    
                </div>
            </div>
         </div>
     </div>
 </section>
<?php
include("footer.php");
?>