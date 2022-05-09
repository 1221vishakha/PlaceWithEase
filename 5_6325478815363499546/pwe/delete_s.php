<?php

$servername = "localhost";
        $username = "root";
        $password = "";
        $database = "pwe";     
                    
        $conn=mysqli_connect($servername, $username, $password, $database);

        if(!$conn) {
        die(mysqli_connect_error());
        }

        $id = $_GET['cid'];
        $sql = "DELETE FROM `content` WHERE c_id=$id"; 
        $result = mysqli_query($conn, $sql);
        if(! $result) {
            echo '<div class="alert alert-warning alert-dismissible fade show" role="alert">
                    <strong>Warning!</strong> Failed! '. mysqli_connect_error() . '!
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                      <span aria-hidden="true">×</span>
                    </button>
                  </div>';
          }
        else   
            header("location: history_s.php");


?>