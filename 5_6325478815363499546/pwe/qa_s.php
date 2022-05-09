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
              <li class="nav-item ">
                <a class="nav-link" href="home_s.php">Home </a>
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

      $servername = "localhost";
      $username = "root";
      $password = "";
      $database = "pwe";     
                    
      $conn=mysqli_connect($servername, $username, $password, $database);
    
      if(!$conn) {
        die(mysqli_connect_error());
      }  

      $ansErr = $ans = "";
      $email = $_SESSION['email'];
      
      /*
      if ($_SERVER['REQUEST_METHOD'] == 'POST') {     // post answer

        if (empty($_POST["answer"])) {
          $ansErr = "This field is empty!";
        } 
        else {
          $ans = test_input($_POST["answer"]);
          
          
          //$sql = "INSERT INTO `qa` (`answer`, `answerer`) VALUES ('$ans', '$email')";

          // how to identify on which question is the senior pressing submit button?
          UPDATE `qa` SET `answer` = 'lrekdf vfeke lwoe4596 60707.', `answerer` = 'btbtc19181_vertika@banasthali.in' WHERE `qa`.`q_id` = 6;

          $result=mysqli_query($conn, $sql);

          if(! $result) {
            echo '<div class="alert alert-warning alert-dismissible fade show" role="alert">
                    <strong>Warning!</strong> Failed due to Your details '. mysqli_connect_error() . '!
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                      <span aria-hidden="true">×</span>
                    </button>
                  </div>';
          }
          else {
            $ansErr = $ans = "";
            header("location: qa_s.php");
          }  


        }
      } */

    ?>
        
    <!-- ==============search bar starts here here============== -->
    <section class="search-sec">
    <div class="container">
      <form action="searchq_s.php" method="GET" novalidate="novalidate">
        <div class="row">
          <div class="col-lg-12">
            <div class="row">
                      
              <div class="col-lg-3 col-md-3 col-sm-12 p-1">
                <select class="form-control search-slt" name="course" id="course" required >
                  <option disabled selected hidden >Select course</option>
                  <option value="General">General</option>
                  <option value="B.TECH_CS">B.TECH CS</option>
                  <option value="B.TECH_IT">B.TECH IT</option>
                  <option value="B.TECH_EC">B.TECH EC</option>
                  <option value="B.TECH_MT">B.TECH MT</option>    
                </select>
              </div>
              
              <div class="col-lg-3 col-md-3 col-sm-12 p-1">
                <button type="submit" class="btn btn-danger wrn-btn">Search</button>
              </div>
            </div>
          </div>
        </div>
      </form>
    </div>
  </section>
   <!--search bar end-->  

    <!-- ==============Q/A section starts here============== --> 
    <div class="container">
      <div class="be-comment-block">
        <!-- ==============answered============== -->
	      <?php

          $q_name = $data = $q_email = $question = $date = $answer = $a_email = "";

          $sql = "SELECT * FROM qa ORDER BY q_id DESC;";
          $result = mysqli_query($conn, $sql);
          $num = mysqli_num_rows($result);
          //echo "$num";

          if(! $result) {
            echo '<div class="alert alert-warning alert-dismissible fade show" role="alert">
                    <strong>Warning!</strong> Failed due to Your details '. mysqli_connect_error() . '!
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                      <span aria-hidden="true">×</span>
                    </button>
                  </div>';
          }

        
          while($row=mysqli_fetch_assoc($result)) {

            $qid = $row['q_id'];
            $q_email = $row['questioner']; 
            $question = $row['question'];
            $date = $row['date']; 
            $answer = $row['answer']; 
            $a_email = $row['answerer'];
            $tag = $row['course']; 
            $type = $row['qtype']; 
          //} 
          
            $sql = "SELECT * FROM `junior` WHERE email='$q_email'";
            $result2 = mysqli_query($conn, $sql);
            $num2 = mysqli_num_rows($result2);

            if(! $result2) {
              echo '<div class="alert alert-warning alert-dismissible fade show" role="alert">
                      <strong>Warning!</strong> Failed due to Your details '. mysqli_connect_error() . '!
                      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">×</span>
                      </button>
                    </div>';
            }

            if ($num2 == 1) {
              while($row=mysqli_fetch_assoc($result2)) {
                $q_name = $row['name'];
              }
            }

            if(!is_null($answer))
              $link = "javascript:;";
            else
              $link ="question.php?quesid=$qid";  

            echo "
                  <div class='be-comment'>
                    <div class='be-img-comment'>	
                      <a href='#'>
                        <img src='https://bootdey.com/img/Content/avatar/avatar1.png' alt='' class='be-ava-comment'>
                      </a>
                    </div>
                    <div class='be-comment-content'>
                      <span class='be-comment-name'>
                        <a href='#'>$q_name</a>
                      </span>
                      <span class='be-comment-time'>
                        <i class='fa fa-clock-o'></i>$date
                      </span>
                      <p class='be-comment-text'><a href='$link'>$question</a></p>
  
                ";

            if(!is_null($answer)) {
              $sql = "SELECT * FROM `senior` WHERE email='$a_email'";
              $result3 = mysqli_query($conn, $sql);
              $num3 = mysqli_num_rows($result2);
              
              if ($num3 == 1) {
                while($row=mysqli_fetch_assoc($result3)) {
                  $a_name = $row['name'];
                }
              }
              
              echo "
                    <p class='be-comment-text'>
                    <a href=#><strong>$a_name</strong><br></a> 
                    $answer</p>
                    </div>
                  </div>
                  ";
            }
            else {
                echo "</div>
                </div> 
                ";
            /*  echo "
                    <form action='question.php?quesid=$qid' method='post'>
                      <div class='row'>
                        <div class='col-xs-12 col-sm-6'>
                          <div class='form-group'>
                            <textarea class='form-input' required='' name='answer' placeholder='Your answer..'></textarea>
                          </div>
                        </div>
                        <div class='col-xs-12 col-sm-6 fl_icon'>
                          <button type='submit' class='btn btn-primary pull-right'>Submit</button>
                        </div>
                      </div>
                    </form>     
                    </div>
                  </div>
                  ";*/
            }
            echo "<span class='badge badge-pill badge-info mb-3 mr-2'>$tag</span>";
            echo "<span class='badge badge-pill badge-danger mb-3 mr-2'>$type</span> <hr>";
          }
        ?>    
      </div>
    </div>
  <!-- ==============not answered============== -->
    

    <!-- ==============Q/A section ends here============== -->
    
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