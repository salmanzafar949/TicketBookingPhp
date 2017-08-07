<?php
include "connect.php";
if(isset($_POST['sumbit']))
{
       $name = $_POST['name'];
      $email = $_POST['email'];
	  $query = "insert into User(name,email	) values('".$name."','".$email."')";
	  if(mysqli_query($conn,$query))
	  {
		  echo "data is inserted";
		  
		  
	  }
	
}


?>

<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>
<form action="login2" method="post">
<table border="1" align="center">
<tr>
    <td>Name:</td>
     <td><input type="text" id="" name="name"></td>
</tr>
<tr> 
      <td>Email</td>
      <td><input type="email" id="" name="email"></td>
</tr>
<td colspan="2" align="center"><input type="submit" id="" name="sumbit" value="pressNow"></td>
</table>
</form>
</body>
</html>