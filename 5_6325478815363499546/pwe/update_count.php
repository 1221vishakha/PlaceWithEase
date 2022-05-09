<?php
    session_start();

    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "pwe";     
                  
    $conn=mysqli_connect($servername, $username, $password, $database);
  
    if(!$conn) {
      die(mysqli_connect_error());
    }   

    $type=$_POST['type'];
    $id=$_POST['id'];
    if($type=='like') {
        $sql="update content set spam=spam+1 where id=$id";
    }
    ?>