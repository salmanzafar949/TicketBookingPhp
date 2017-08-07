<?php
include 'db.php';
session_start();
if(isset($_POST['submit']))
{
    $uname = $_POST['username'];
    $pass  = $_POST['pass'];
     $_SESSION['username'] = $uname;
    if(!empty(trim($uname)) && !empty(trim($pass)))
    {
              $query = "SELECT * FROM `signup` WHERE uname = '$uname' AND pass = '$pass' ";
              $res = mysqli_query($conn, $query);
              if($res && mysqli_num_rows($res) > 0)
              {

                 //print_r($_SESSION['username']);
               header('location: adblogin.php');
              }else{
								echo "Invalid credentials";              }
    }else{
      echo "Enter username and password";
    }

 }
else{
  header('location: userlogin.php');
}
