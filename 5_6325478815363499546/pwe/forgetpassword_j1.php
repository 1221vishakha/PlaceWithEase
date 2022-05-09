<!doctype html>
<html lang="en">

  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

    <!-- style.css  -->
    <link rel="stylesheet" href="style3.css">

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
            <a class="navbar-brand pl-5 pl-small-0" href="home.php">
                <img src="assets/images/logo.png" class="img img-fluid" width="120px" alt="logo">
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mx-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="home.php">Home</a>
                        </li>
                        <li>  
                            <a class="nav-link" href="aboutus.php">About Us</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="contactus.php">Contact Us</a>
                        </li>    
                    </ul>
                    <div class="dropdown mr-3">
                        <button class="btn btn-primary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Log in
                        </button>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                            <a class="dropdown-item" href="login_s.php">Senior</a>
                            <a class="dropdown-item" href="login_j.php">Junior</a>
                            <a class="dropdown-item" href="login_a.php">Admin</a>
                        </div>
                    </div>
                    <div class="dropdown mr-3">
                        <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Register
                        </button>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                            <a class="dropdown-item" href="register_s1.php">Senior</a>
                            <a class="dropdown-item" href="register_j1.php">Junior</a>
                        </div>
                    </div>
                </div>
            </nav>
        </div>
    </section>      
    <!-- ==============header menu section ends here============== -->

    <?php
        $login = false;
        $showError = false;
        $email  = $emailErr = "";
      
        if($_SERVER["REQUEST_METHOD"] == "POST"){
          
          $email = $_POST["email"]; 
          
          $servername = "localhost";
          $username = "root";
          $password = "";
          $database = "pwe";     
                
          $conn=mysqli_connect($servername, $username, $password, $database);

          if(!$conn) {
            die(mysqli_connect_error());
          }                

          if (empty($_POST["email"])) {
            $emailErr = "Email is required";
          } 
          else {
            $sql = "Select * from junior where email='$email'";
            $result = mysqli_query($conn, $sql);
            $num = mysqli_num_rows($result);

            if ($num == 1) {
                $otp = generate_OTP();
                $to_email = $email;
                $subject = "Reset Your Password";
                $body = " The verification code for your account is  $otp";
                $headers = "From: placewithease@gmail.com";

                if (mail($to_email, $subject, $body, $headers)) {
                    //echo "Email successfully sent to $to_email...";
                    session_start();
                    $_SESSION['email'] = $email;
                    $_SESSION['otp'] = $otp;
                    $_SESSION['flag'] = true;
                    $_SESSION['reset'] = 0;
                    
                    header("Location: forgetpassword_j2.php");
                    exit();
                } 
                else {
                    echo "Email sending failed...";
                }
               
             }       
            
            else { 
              $emailErr = "Email address not registered!";
            }
        }
        }
        function generate_OTP() {
            $num = mt_rand(110011,999999);
            return $num;
        }
         
    ?>

    <!-- ==============form section starts here============== -->
    <section class="vh-100" id="register">
        <div class="container d-flex justify-content-center align-items-center" style="min-height: 100vh;">
            <form class=" p-3 rounded fg"  action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post" style="width: 35rem;">
                
                <div class="d-flex justify-content-center align-items-center mb-3 pb-1">                                  
                    <span class="h1 fw-bold mb-3"><i>Reset Your Password</i></span>
                </div>

                <div class="form-outline mb-2">
                    <input type="email" id="email" name="email" class="form-control form-control-lg mb-1"  value="<?php echo $email;?>" />
                    <label class="form-label" for="form2Example17">Email address</label>
                    <small style="color: #FF0000;"><?php echo $emailErr;?></small> 
                </div>

                <div class="d-flex justify-content-center pt-1 mb-2">
                  <button type="submit" class=" btn btn-primary btn-lg">Continue</button>
                </div>
            </form>
        </div>
    </section>
    <!-- ==============form section ends here============== -->

    <!-- ==============footer starts here============== -->
    <section class="footer_section pt-5 pb-2" id="footer_section">
      <footer>
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-3 col-6 pl-5 pl-small-15">
              <div class="footer_title">
                <a href="home.php"><img src="assets/images/logo.png" width="150px" class="img img-fluid" alt="logo"></a>
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
                  <li><a href="javascript:;">Resources</a></li>
                  <li><a href="javascript:;">Experience</a></li>
                  <li><a href="javascript:;">Tips</a></li>
                  <li><a href="javascript:;">Q/A </a></li>
                </ul>
              </div>
            </div>
            <div class="col-md-3 col-6">
              <div class="footer_title pt-3 mb-3">
                <h3>Quick Links</h3>
              </div>
              <div class="footer_links">
                <ul>
                  <li><a href="aboutus.php">About</a></li>           
                  <li><a href="contactus.php">Contact Us</a></li>
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
      crossorigin="anonymous">
    </script>
  </body>
</html>