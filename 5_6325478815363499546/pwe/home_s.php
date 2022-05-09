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
        <a class="navbar-brand pl-5 pl-small-0" href="home_s.php">
          <img src="assets/images/logo.png" class="img img-fluid" width="120px" alt="logo">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
          aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav mx-auto">
            <li class="nav-item active">
              <a class="nav-link" href="homes_s.php">Home <span class="sr-only">(current)</span></a>
            </li>
           <li>
              <a class="nav-link" href="aboutus_s.php">About Us</a>
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

  <?php
    session_start();

    if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin']!=true){
        header("location: login_s.php");
        exit;
    }

    ?>
 <!-- ==============category starts here============== -->
    <section class="products py-5 my-5 bg-light" id="main">
        <div class="container ">
            <div class="section_title text-center mb-5">
                <h1 class="text-capitalize" style="color: antiquewhite;">Welcome <?php echo $_SESSION['name']?>!</h1>
            </div>
            <div class="row mb-5">
                <div class="col-md-4 col-12">
                    <div class="single_product shadow text-center p-1 bg-light">
                        <div class="product_img">
                            <a href="resourse_s.php"><img src="https://img.freepik.com/free-vector/online-courses-cartoon-composition-with-graduate-student-climbing-textbooks-pile-get-diploma-from-monitor_1284-27833.jpg" class="img img-fluid rounded"
                                    alt=""></a>
                        </div>
                        <div class="product-caption my-3">
                            <h4><a href="resource_s.php">RESOURCES</a></h4>
                        </div>
                        <div class="mt-3">
                            <p>
                             Share the right resources with your peers and juniors.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-12">
                    <div class="single_product shadow text-center p-1 mt-small-5 mb-small-5 bg-light">
                        <div class="product_img">
                            <a href="interview_s.php"><img src="https://content.techgig.com/thumb/msid-88026247,width-460,resizemode-4/Want-to-work-at-Accenture-Prepare-these-job-interview-questions.jpg?16292" class="img img-fluid rounded"
                                    alt=""></a>
                           
                        </div>
                        <div class="product-caption my-3">
                            <h4><a href="interview_s.php"><br><br>EXPERIENCE</a></h4>
                        </div>
                        <div class="mt-3">
                            <p>
                              There are different experiences to learn from.Share your experiences with your peers and juniors.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-12">
                    <div class="single_product shadow text-center p-1 bg-light">
                        <div class="product_img">
                            <a href="strategy_s.php"><img src="https://leverageedu.com/blog/wp-content/uploads/2019/09/TOEFL.png" class="img img-fluid rounded"
                                    alt=""></a>
                           
                        </div>
                        <div class="product-caption my-3">
                            <h4><a href="strategy_s.php"><br>PREPARATION STRATEGY</a></h4>
                        </div>
                        <div class="mt-3">
                            <p>
                            <br>We know you've got that roadmap.Help your juniors by sharing that strategy!
                            </p>
                        </div>
                    </div>
                </div>
            </div>
           <div class="row">
                <div class="col-md-4 col-12">
                    <div class="single_product shadow text-center p-1 bg-light">
                        <div class="product_img">
                            <a href="qa_s.php"><img src="https://thumbs.dreamstime.com/b/q-faq-concept-tiny-people-characters-big-question-mark-frequently-asked-questions-template-answers-business-support-219830530.jpg" class="img img-fluid rounded"
                                    alt=""></a>
                            
                        </div>
                        <div class="product-caption my-3">
                            <h4><a href="qa_s.php">Q/A</a></h4>
                        </div>
                        <div class="mt-3">
                            <p>
                             Answer all the doubts of your juniors here !  
                            </p>
                        </div>
                    </div>
                </div>
            
               
            </div>

        </div>
    </section>
       
    <!-- ==============category ends here============== -->
  

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
</body>
  </html>