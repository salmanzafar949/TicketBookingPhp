<?php
include 'db.php';
if(isset($_POST['submit']))
{
$var1=$_POST['fname'];
$var2=$_POST['lname'];
$var3=$_POST['username'];
$var4=$_POST['password'];
$var5=$_POST['email'];
$var6=$_POST['gender'];

if(!empty(trim($var1)) && !empty(trim($var2)) && !empty(trim($var3)) && !empty(trim($var4)) && !empty(trim($var5)) && !empty(trim($var6))){

	$sql = "INSERT INTO `signup`(fname, lname, uname, pass, email, gender) VALUES('$var1', '$var2', '$var3', '$var4', '$var5', '$var6')";
  //print_r($sql);
	$res = mysqli_query($conn, $sql);
	if($res && mysqli_affected_rows($conn) > 0)
	{
		header('location: success.php');
	}else{
		header('location: try.php');
	}
}else{
	echo "Please fill all the fields";
}
}else{
	header('location: signup.php');
}
?>
