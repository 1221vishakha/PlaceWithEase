<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

  <!-- style.css  -->
  <link rel="stylesheet" href="assets/style.css">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
    integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

  <!-- fontawesome cdn link -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css"
    integrity="sha512-PgQMlq+nqFLV4ylk1gwUOgm6CtIIXkKwaIHp/PAIWHzig/lKZSEGKEysh0TCVbHJXCLN7WetD8TFecIky75ZfQ=="
    crossorigin="anonymous" />

  <title>PlaceWithEase</title>
</head>

  <body>
    <body>
    <!-- ==============header menu section starts here============== -->
    <section class="header_menu" id="header_menu">
    <div class="container-fluid px-0 shadow">
      <nav class="navbar navbar-expand-lg navbar-light bg-light py-3  ">
        <a class="navbar-brand pl-5 pl-small-0" href="home_s.php">
          <img src="assets/images/logo.png" class="img img-fluid" width="120px" alt="logo">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
          aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav mx-auto">
            <li class="nav-item">
              <a class="nav-link" href="home_s.php">Home </a>
            </li>
           <li class="nav-item active">
              <a class="nav-link" href="about_s.php">About Us <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="contactus_s.php">Contact Us</a>
            </li>
          
          </ul>
    
          <div class="dropdown mr-3">
        <div class="collapse navbar-collapse" id="navbar-list-4">
      <ul class="navbar-nav">
        <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <img src="https://s3.eu-central-1.amazonaws.com/bootstrapbaymisc/blog/24_days_bootstrap/fox.jpg" width="40" height="40" class="rounded-circle">
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
         
          <a class="dropdown-item" href="myprofile_s.php">My Profile</a>
          <a class="dropdown-item" href="history_s.php">History</a>
          <a class="dropdown-item" href="logout.php">Log Out</a>
        </div>
      </li>   
      </ul>
  </div>
</div>
 
        </div>
      </nav>
    </div>
  </section>
  <!-- ==============header menu section ends here============== -->
     <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">

     <?php
    session_start();

    if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin']!=true){
        header("location: login_s.php");
        exit;
    }

    ?>

<section class="section services-section" id="services">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="section-title">
                    <h2>What We Do</h2>
                    <p>This platform connects seniors and juniors of a particular institution virtually mainly to guide the juniors how they should crack their desired comapany because at the time of placements , the best people who can guide us is our seniors.</p>
                  <p>
                    Our website offers following features-
                  </p>
                   
                </div>
            </div>
        </div>
        <div class="row">
            <!-- feaure box -->
            <div class="col-sm-6 col-lg-4">
                <div class="feature-box-1">
                    <div class="icon">
                        <i class="fa fa-desktop"></i>
                    </div>
                    <div class="feature-content">
                        <h5>Resources</h5>
                        <p>A senior can share their resources form where they studied and a junior can view and access them anytime. Isin't it amazing?</p>
                    </div>
                </div>
            </div>
            <!-- / -->
            <!-- feaure box -->
            <div class="col-sm-6 col-lg-4">
                <div class="feature-box-1">
                    <div class="icon">
                        <i class="fa fa-user"></i>
                    </div>
                    <div class="feature-content">
                        <h5>Interview Experience</h5>
                        <p>Senior can share their experiences of interviews , online tests etc with the juniors so that they can get a deeper knowledge and can prepare accordingly</p>
                    </div>
                </div>
            </div>
            <!-- / -->
            <!-- feaure box -->
            <div class="col-sm-6 col-lg-4">
                <div class="feature-box-1">
                    <div class="icon">
                        <i class="fa fa-comment"></i>
                    </div>
                    <div class="feature-content">
                        <h5>Q/A</h5>
                        <p>Juniors can reach out to their seniors anytime with their queries and thay are liable to answer that. </p>
                    </div>
                </div>
            </div>
            <!-- / -->
            <!-- feaure box -->
            <div class="col-sm-6 col-lg-4">
                <div class="feature-box-1">
                    <div class="icon">
                        <i class="fa fa-image"></i>
                    </div>
                    <div class="feature-content">
                        <h5>Preparation Strategy</h5>
                        <p>Seniors can share their roadmap of how they prepared for the companies with their juniors so that they can also follow that and get placed in their desired company</p>
                    </div>
                </div>
            </div>
            <!-- / -->
            <!-- feaure box -->
            <div class="col-sm-6 col-lg-4">
                <div class="feature-box-1">
                    <div class="icon">
                        <i class="fa fa-th"></i>
                    </div>
                    <div class="feature-content">
                        <h5>Contact Seniors</h5>
                        <p>Juniors can reach out to any senior they want and can connect with them personally through the linked-id available with their profile </p>
                    </div>
                </div>
            </div>
            <!-- / -->
            <!-- feaure box -->
          <div class="col-sm-6 col-lg-4">
                <div class="feature-box-1">
                    <div class="icon">
                        <i class="fa fa-cog"></i>
                    </div>
                    <div class="feature-content">
                        <h5>Spam Check</h5>
                        <p>This is useful in removing all such content posted by the seniors that might b irrelvant for the website.This will help in maintaing the website spam free.</p>
                    </div>
                </div>
            </div>
            <!-- / -->
        </div>
    </div>
</section>
            
       <!-- ==============footer starts here============== -->
       <section class="footer_section pt-5 pb-2" id="footer_section">
    <footer>
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-3 col-6 pl-5 pl-small-15">
            <div class="footer_title">
              <a href="home_s.php"><img src="assets/images/logo.png" width="150px" class="img img-fluid" alt="logo"></a>
            </div>
            <div>
              THINK BEYOND THE DEGREE!
            </div>
          </div>
          
          <div class="col-md-3 col-6">
            <div class="footer_title pt-3 mb-3">
              <h3>Features</h3>
            </div>
            <div class="footer_links">
              <ul>
                <li><a href="resource_s.php">Resources</a></li>
                <li><a href="interview_s.php">Experience</a></li>
                <li><a href="strategy_s.php">Preparation strategy</a></li>
                <li><a href="qa_s.php">Q/A </a></li>
              </ul>
            </div>
          </div>
          <div class="col-md-3 col-6">
            <div class="footer_title pt-3 mb-3">
              <h3>Quick Links</h3>
            </div>
            <div class="footer_links">
              <ul>
                <li><a href="aboutus_s.php">About</a></li>
                
                <li><a href="contactus_s.php">Contact Us</a></li>
              </ul>
            </div>
          </div>
          <div class="col-md-3 col-6">
            <div class="footer_title pt-3 mb-3">
              <h3>Support</h3>
            </div>
            <div class="footer_links">
              <ul>
                <li><a href="javascript:;">Frequently Asked Questions</a></li>
                <li><a href="javascript:;">Terms & Conditions</a></li>
                <li><a href="javascript:;">Privacy Policy</a></li>
                <li><a href="javascript:;">Report Issue</a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
      <div class="border-top">
        <h6 class="text-center mt-3">Copyright ©2022 All rights reserved 
        </h6>
      </div>
    </footer>
  </section>
  <div class="backtop">
    <a id="button" href="#top" class="btn btn-lg btn-outline-danger" role="button">
      <i class="fas fa-chevron-up text-dark"></i>
    </a>
  </div>
  <!-- ==============footer ends here============== -->
 <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
    integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
    crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
    integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN"
    crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"
    integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV"
    crossorigin="anonymous"></script>
</body>
  </html>