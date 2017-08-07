<?php
include 'db.php';
session_start();
$name = $_SESSION['username'];
$sql = "SELECT * FROM `signup` WHERE uname='$name'";
$res1 = mysqli_query($conn, $sql);
$user_id;
while($row = mysqli_fetch_assoc($res1))
{
   $user_id = $row['id'];
}
//print_r($name);
if(isset($_GET['id']))
{
  $bus_id = $_GET['id'];
  if(!empty($bus_id) && !empty($user_id))
  {
     $q = "INSERT INTO `booktckt`(bus_id, user_id)  VALUES('$bus_id', '$user_id')";
     $res = mysqli_query($conn,$q);
     if($res && mysqli_affected_rows($conn)> 0)
     {
       header('location:adblogin.php');
     }else{
       echo "Error Occured";
     }
  }else{
    echo "Missing Some thing";
  }
}

?>
