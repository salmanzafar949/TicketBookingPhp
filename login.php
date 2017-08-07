<?php
include 'db.php';
if(isset($_POST['submit'])){

	 $uname = $_POST['username'];
	 $pass  = $_POST['pass'];

	 if(!empty(trim($uname)) && !empty(trim($pass)))
	 {
	         $q = "SELECT * FROM `admin` WHERE username = '$uname' AND password = '$pass' ";
					 $res = mysqli_query($conn, $q);
					 if($res && mysqli_num_rows($res) > 0)
					 {
						  $_SESSION['adminname']=$uname;
						 header('location: admin/dashboard.php');
					 }else{
						 echo "invalid Credentails";
					 }
	 }else{
		 echo "Fill all the fields";
	 }
}else{
     header('location: admin.php');
}

?>
