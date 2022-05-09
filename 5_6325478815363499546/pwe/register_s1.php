<!doctype html>
<html lang="en">

  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

    <!-- style.css  -->
    <link rel="stylesheet" href="style2.css">

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
                <a class="nav-link" href="home.php">Home </a>
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
      // define variables and set to empty values
      $reg = false;
      static $mail = 0;
      $nameErr = $emailErr = $gyearErr = $courseErr = $passErr = $cpassErr = $codeErr = $urlErr = "";
      $name = $email = $gyear = $course = $pass = $cpass = $code = $url = "";
      $check = 0;
      if ($_SERVER['REQUEST_METHOD'] == 'POST') {

        if (empty($_POST["name"])) {
          $nameErr = "Name is required";
        } 
        else {
          $name = test_input($_POST["name"]);
                  
          // check if name only contains letters and whitespace
          if (!preg_match("/^[a-zA-Z-' ]*$/",$name))
            $nameErr = "Only letters and white space allowed";

          else {
            $servername = "localhost";
            $username = "root";
            $password = "";
            $database = "pwe";     
                    
            $conn=mysqli_connect($servername, $username, $password, $database);

            if(!$conn)
              die(mysqli_connect_error());
                              
            $sql = "Select * from junior where email='$email'";
            $result = mysqli_query($conn, $sql);
            $num = mysqli_num_rows($result);

            if ($num != 0) {
              $emailErr= "<br> Email already registered! Try logging in instead";
              //$nameErr = $gyearErr = $courseErr = $passErr = $codeErr = $urlErr "";
              //$name = $gyear = $course = $pass = $code = $url "";
            }
            else 
              $check++;
          }
        }
                
        if (empty($_POST["email"])) {
          $emailErr = "Email is required";
        } 
        else {
          $email = test_input($_POST["email"]);

          // check if e-mail address is well-formed
          // if (!filter_var($email, FILTER_VALIDATE_EMAIL))
          // $emailErr = "Invalid email format";
          $allowed = ['banasthali.in'];
                  
          if (filter_var($email, FILTER_VALIDATE_EMAIL))
          {
            // Separate string by @ characters (there should be only one)
            $parts = explode('@', $email);
                  
            // Remove and return the last part, which should be the domain
            $domain = array_pop($parts);
                  
            // Check if the domain is in our list
            if ( ! in_array($domain, $allowed))
            {
              $emailErr = "<br>Enter email provided by institution";
            }
            else {
              $servername = "localhost";
              $username = "root";
              $password = "";
              $database = "pwe";     
                    
              $conn=mysqli_connect($servername, $username, $password, $database);

              if(!$conn)
                die(mysqli_connect_error());
                              
              $sql = "Select * from senior where email='$email'";
              $result = mysqli_query($conn, $sql);
              $num = mysqli_num_rows($result);

              if ($num != 0) {
                $emailErr= "<br> Email already registered! Try logging in instead";
                $nameErr = $gyearErr = $courseErr = $passErr = $codeErr = "";
                $name = $gyear = $course = $pass = $code = "";
                //echo "<a href='login_j.php' style='color: #393f81;'>Try Logging in</a>";
              }
              else 
                $check++;
            }
              
          }
          else
            $emailErr = "Invalid email format";

            // -------- TODO- Include checking for- if the email is already taken i.e., search for email in database 
        }
                
        if (empty($_POST["gyear"])) {
          $gyearErr = "Graduation Year is required";
        } 
        else {
          $gyear = test_input( $_POST['gyear']);
          $y = date("Y");
          if (!is_numeric($gyear))
            $gyearErr = "Invalid format";
          elseif(($gyear-$y)>1 || $gyear<2000)
            $gyearErr = "Not Applicable";
                  
          else
            $check++;
        }
                
        if (empty($_POST["course"])) {
          $courseErr = "Course is required";
        } 
        else {
          $course = test_input($_POST["course"]);
          $check++;
        }
                
        if (empty($_POST["pass"])) {
          $passErr = "Password is required";
        } 
        else {
          $pass = test_input($_POST["pass"]);
                  
          if (preg_match('/\s/', $pass)) {
            $passErr = "Whitespaces Are Not Allowed!"; 
            $pass = "";
          } 
          //      elseif (preg_match('^(?=.*[A-Za-z])(?=.*?[0-9])(?=.*?[#?!@$%^&*-]){8,15}$', $pass)) {
          //        $passErr = "Invalid format"; 
          //        $pass = "";
          //      }              
          elseif (strlen($pass) < '8') {
            $passErr = "Password Must Contain Atleast 8 Characters!";
            $pass = "";
          }
          elseif (strlen($pass) > '15') {
            $passErr = "Password Must Contain Atmost 15 Characters!";  
            $pass = ""; 
          }          
          else
            $check++;
        }

        if (empty($_POST["cpass"]) && !empty($_POST["pass"])) {
          $cpassErr = "Confirm your password";
        } 
        else {
          $cpass = test_input($_POST["cpass"]);
          if($cpass != $pass) {
            $cpassErr = "Passwords do not match";
            $cpass="";
          } 
          else
            $check++;

        }

        if (!empty($_POST["url"])) {
          $url = test_input($_POST["url"]);
          if (!preg_match("/\b(?:(?:https?|ftp):\/\/|www\.)[-a-z0-9+&@#\/%?=~_|!:,.;]*[-a-z0-9+&@#\/%=~_|]/i",$url)) {
            $urlErr = "Invalid URL";
          }
          else
            $check++;
        }

        if( (!empty($_POST["url"]) && $check == 7) || (empty($_POST["url"]) && $check == 6) )   
        {
          $otp = generate_OTP();

          session_start();
          $_SESSION['otp'] = $otp;
          $_SESSION['name'] = $name;
          $_SESSION['email'] = $email;
          $_SESSION['gyear'] = $gyear;
          $_SESSION['course'] = $course;
          $_SESSION['pass'] = $pass;
          $_SESSION['url'] = $url;
          $_SESSION['r1'] = true;

          //echo $otp;
          $to_email = $email;
          //$to_email = "sahu.vertika306@gmail.com";
          $subject = "Confirm Your Email";
          $body = " The verification code for your account is  $otp";
          $headers = "From: placewithease@gmail.com";

          if (mail($to_email, $subject, $body, $headers)) {
            //echo "Email successfully sent to $to_email...";
            header("Location: register_s2.php");
            exit();
          } 
          else {
            echo "Email sending failed...";
          }
        } 
      }
      function test_input($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
      }

      function generate_OTP() {
        $num = mt_rand(110011,999999);
        return $num;
      }
                  
    ?> 

    <!-- ==============form section starts here============== -->
    <section  id="register">
      <div class="container py-5 h-100">
        <div class="row d-flex justify-content-center align-items-center h-100">
          <div class="col col-xl-12">
            <div class="card" style="border-radius: 1rem;">
              <div class="row g-0">
                <div class="col-md-6 col-lg-6 d-none d-md-block">
                    <img 
                        src="assets/images/registerp.jpg"
                        alt="login form"
                        class="img-fluid  w-100 h-100" style="border-radius: 1rem 0 0 1rem;"
                    />
                </div>
                <div class="col-md-6 col-lg-6 d-flex align-items-center">
                  <div class="card-body p-4 p-lg-5 text-black">   

                    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
                      
                      <div class="d-flex align-items-center mb-4 pb-1">
                        <span class="h1 fw-bold mb-0 ft"><i>Register as Senior</i></span>
                      </div>

                      <div class="form-outline mb-2">
                        <input type="name" name="name" id="email" class="form-control form-control-lg" maxlength="30" value="<?php echo $name;?>" />
                        <label class="form-label" for="form2Example17">Name*</label>
                        <small class="error"><?php echo $nameErr;?></small> 
                      </div>

                      <div class="form-outline mb-2" id="move">
                        <input type="email" name="email" id="email" class="form-control form-control-lg" maxlength="45" value="<?php echo $email;?>" />
                        <label class="form-label" for="form2Example17">Email provided by the Institution*</label> 
                        <small class="error mt--2"><?php echo $emailErr;?></small> 
                      </div>

                      <div class="form-outline mb-2">
                        <input type="year" name="gyear" id="email" class="form-control form-control-lg" maxlength="4" value="<?php echo $gyear;?>" />
                        <label class="form-label" for="form2Example17">Graduation Year*</label>
                        <small class="error"><?php echo $gyearErr;?></small>
                      </div>

                      <div class="form-outline mb-2">
                        <select name="course" id="" class="form-control">
                          <option disabled selected hidden>select</option>
                          <option value="B.TECH_CS" <?php if (isset($course) && $course=="B.TECH_CS") echo "selected";?> >B.Tech CS</option>
                          <option value="B.TECH_EC" <?php if (isset($course) && $course=="B.TECH_EC") echo "selected";?> >B.Tech EC</option>
                          <option value="B.TECH_EE" <?php if (isset($course) && $course=="B.TECH_EE") echo "selected";?> >B.Tech EE</option>
                          <option value="B.TECH_IT" <?php if (isset($course) && $course=="B.TECH_IT") echo "selected";?> >B.Tech IT</option>
                          <option value="B.TECH_MT" <?php if (isset($course) && $course=="B.TECH_MT") echo "selected";?> >B.Tech MT</option>
                        </select>
                        <label class="form-label" for="form2Example17">Course*</label>  
                        <small class="error"><?php echo $courseErr;?></small>  
                      </div>

                      <div class="form-outline mb-2">
                        <input type="password" name="pass" id="pass" class="form-control form-control-lg" value="<?php echo $pass;?>" />
                        <label class="form-label" for="form2Example27">Password*</label>
                        <small class="error"><?php echo $passErr;?></small> 
                        <small class="text-muted">Your password must be 8-15 characters long and must not contain any white spaces</small>
                      </div>

                      <div class="form-outline mb-2">
                        <input type="password" name="cpass" id="cpass" class="form-control form-control-lg" value="<?php echo $cpass;?>" />
                        <label class="form-label" for="form2Example27">Confirm you password*</label>
                        <small class="error"><?php echo $cpassErr;?></small> 
                      </div>

                      <div class="form-outline mb-2">
                        <input type="text" name="url" id="url" class="form-control form-control-lg" value="<?php echo $url;?>" />
                        <label class="form-label" for="form2Example27">LinkedIn Profile Link (optional)</label>
                        <small class="error"><?php echo $urlErr;?></small>    
                      </div>

                      <div class="d-flex justify-content-center pt-3">
                        <button type="submit" class="btn btn-dark btn-block">Register</button>
                      </div>
                    </form>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
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