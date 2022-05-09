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
    <!-- ==============header menu section starts here============== -->
     <section class="header_menu" id="header_menu">
    <div class="container-fluid px-0 shadow">
      <nav class="navbar navbar-expand-lg navbar-light bg-light py-3  ">
        <a class="navbar-brand pl-5 pl-small-0" href="home_j.php">
          <img src="assets/images/logo.png" class="img img-fluid" width="120px" alt="logo">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
          aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav mx-auto">
            <li class="nav-item ">
              <a class="nav-link" href="home_j.php">Home</a>
            </li>
           <li>
              <a class="nav-link" href="aboutus_j.php">About Us</a>
            </li>
            <li class="nav-item active">
              <a class="nav-link" href="contactus_j.php">Contact Us <span class="sr-only">(current)</span></a>
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
         
          <a class="dropdown-item" href="myprofile_j.php">My Profile</a>
          <a class="dropdown-item" href="history_j.php">History</a>
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

  <?php
    session_start();

    if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin']!=true){
        header("location: login_j.php");
        exit;
    }

    ?>
    <!-- ==============contact starts here============== -->
    <section class="contact py-5 my-5" id="contact">
        <div class="container ">
            <div class="section_title text-center mb-5">
                <h1 class="text-capitalize">Contact Us</h1>
            </div>
            <div class="row mb-5">
                <div class="col-md-4 col-12">
                    <div class="border border-success rounded shadow text-center p-3">
                        <div class="mb-4">
                            <i class="fas fa-phone-alt fa-3x"></i>
                        </div>
                        <div>
                            <h3>Let's Talk</h3>
                            <p><b>Phone:</b> +91-987654XXXX</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-12">
                    <div class="border border-success rounded shadow text-center p-3">
                        <div class="mb-4">
                            <i class="fas fa-envelope-open fa-3x"></i>
                        </div>
                        <div>
                            <h3>Drop a Line</h3>
                            <p><b>Email:</b> <a href="https://mail.google.com">placewithease@gmail.com</a></p>
                        </div>
                    </div>
                </div>
               <div class="col-md-4 col-12">
                    <div class="border border-success rounded shadow text-center p-3">
                        <div class="mb-4">
                            <i class="far fa-life-ring fa-3x"></i>
                        </div>
                        <div>
                            <h3>24x7 Support</h3>
                            <p><b>Customer:</b> 1800 101 303</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row mb-5">
                <div class="col-md-4 col-12">
                    <div class="border border-success rounded shadow text-center p-3">
                        <div class="mb-4">
                            <i class="fab fa-instagram fa-3x "></i>

                        </div>
                        <div>
                            <h3>Follow us on insta!</h3>
                            <p><a href="https://www.instagram.com/"> @placeWithEase</a></p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-12">
                    <div class="border border-success rounded shadow text-center p-3">
                        <div class="mb-4">
                            <i class="fab fa-twitter fa-3x"></i>
                        </div>
                        <div>
                            <h3>Follow us on Twitter!</h3>
                            <p><a href="https://twitter.com/"> @placeWithEase</a></p>
                        </div>
                    </div>
                </div>
                
             <div class="col-md-4 col-12">
                    <div class="border border-success rounded shadow text-center p-3">
                        <div class="mb-4">
                            <i class="fas fa-map-marker-alt fa-3x"></i>
                        </div>
                        <div>
                            <h3>Location</h3>
                            <p><a href="https://www.google.com/maps/place/Swaroop+Nagar,+Kanpur,+Uttar+Pradesh/@26.4835263,80.312143,16z/data=!3m1!4b1!4m5!3m4!1s0x399c3863fd11b27d:0x684e6f416b44409b!8m2!3d26.4878169!4d80.3206131" >Swaroop nagar kanpur-208014</a></p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-8 col-10 mx-auto mb-3 my-5 py-5 border shadow">
                    <h3 class="text-center mb-3">Submit your query</h3>
                    <form action="contact.html" method="POST" id="form" onsubmit="return formValidation();">
                        <div class="form-group">
                            <label>Name</label>
                            <input name="name" id="name" type="text" placeholder="Name" class="form-control">
                        </div>
                        <div class="form-group">
                            <label>Email address</label>
                            <input name="email" id="email" type="email" placeholder="Email" class="form-control">
                        </div>
                        <div class="form-group">
                            <label>Message</label>
                            <textarea name="msg" id="msg" class="form-control" placeholder="Message"></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary btn-block">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <!-- ==============contact ends here============== -->
     <!-- ==============footer starts here============== -->
  <section class="footer_section pt-5 pb-2" id="footer_section">
    <footer>
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-3 col-6 pl-5 pl-small-15">
            <div class="footer_title">
              <a href="home_j.php"><img src="assets/images/logo.png" width="150px" class="img img-fluid" alt="logo"></a>
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
                <li><a href="resource_j.php">Resources</a></li>
                <li><a href="interview_j.php">Experience</a></li>
                <li><a href="strategy_j.php">Preparation strategy</a></li>
                <li><a href="qa_j.php">Q/A </a></li>
              </ul>
            </div>
          </div>
          <div class="col-md-3 col-6">
            <div class="footer_title pt-3 mb-3">
              <h3>Quick Links</h3>
            </div>
            <div class="footer_links">
              <ul>
                <li><a href="aboutus_j.php">About</a></li>
                
                <li><a href="contactus_j.php">Contact Us</a></li>
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
  <script>

    //Form validation with Jquery and JavaScript
    $(document).ready(function () {

        $('#form').submit(function (e) {

            //Get Value
            var name = $('#name').val().trim();
            var email = $('#email').val().trim();
            var msg = $('#msg').val().trim();

            //reset the errors
            $(".error").remove();

            var isValidForm = true; 

            //Validation Conditions here
            if (name.length < 1) {
                $('#name').after('<span class="error"><i>This field is required</i></span>');
                var isValidForm = false;
            }
            
            if (email.length < 1) {
                $('#email').after('<span class="error"><i>This field is required</i></span>');
                var isValidForm = false;
            } 

            if (msg.length < 1) {
                $('#msg').after('<span class="error"><i>This field is required</i></span>');
                var isValidForm = false;
            }

            return isValidForm;  //if isValidForm is true then form submits else submission is stopped
                     
        });

    });

</script>