<?php
session_start();
include 'db.php';
if(!isset($_SESSION['username']))
{
  header('location: userlogin.php');
}
?>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>Gujrat Transport Service</title>
<link rel="stylesheet" type="text/css" href="xres/css/style.css" />
<link rel="icon" type="image/png" href="xres/images/favicon.png" />
<!--[if IE 6]><style type="text/css"> * html img { behavior: url("xres/iepngfix.htc") }</style><![endif]-->

<link rel="stylesheet" href="vallenato/vallenato.css" type="text/css" media="screen" charset="utf-8">
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet"></link>
      <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css">

        <link rel="stylesheet" href="css/swiper.min.css"></link>
	<!--sa calendar-->

        <link href="css/demo.css"       rel="stylesheet" type="text/css" />
        <link href="css/datepicker.css" rel="stylesheet" type="text/css" />


</head>

<body>
    <header>
        <div class="container-fluid">
            <div class="logo-container col-md-3 col-sm-3 col-xs-12">
                <img src="img/defaultLogo.png"/>
            </div>
            <div class="nav-wrapper col-md-7">
                <nav>
                    <ul id="mainnav">
			<li class="current"><a href="index.php">Home</a></li>

            <li><a href="routes.php">Routes</a></li>
            <li><a href="location.php">location</a></li>
            <li><a href="contact.php">Contact Us</a></li>
            <li><a href="register.php">Staff Register</a></li>
    	</ul>
                </nav>
            </div>
           <div class="online-book">
                <a href="userlogin.php">Book Here</a>
            </div>
            <div class="online-book">
                <a href="signup.php">Sign up</a>
            </div>
        </div>
    </header>
<div id="wrapper">

    <div id="content">
      <h3 align="center"> Ticket Booking </h3>
<?php

  include 'db.php';
  $q = "SELECT * FROM `route`";
  //print_r($q);
  //var_dump($q);
  echo "<table align=\"center\" border=\"2\" width=\"70%\">
   <tr>
  <td><b>Bus#</b></td><td><b>Route</b></td><td><b>Price</b></td><td><b>Numseat</b></td><td><b>Type</b></td><td><b>Time</b></td><td><b>Action</b></td></tr> ";
  $res = mysqli_query($conn, $q);
  while($row = mysqli_fetch_assoc($res))
  {
    echo '<tr><td>'.$row['id'].'</td><td>';
    echo $row['route'].'</td><td>';
    echo $row['price'].'</td><td>';
    echo $row['numseats'].'</td><td>';
    echo $row['type'].'</td><td>';
    echo $row['time'].'</td><td>';
    echo "<a href=\"boktckt.php?id=".$row['id']."\"> <input type=\"button\" value=\"book\"></a>
    </td></tr>";

    //  echo "<pre>";
     //  print_r($row);
    //  echo "</pre>";
  }

  ?>
</tbody>
</table>

  <h2><b> Your Reservations</b> </h2>
  <?php
  $name = $_SESSION['username'];
  $sql = "SELECT * FROM `signup` WHERE uname='$name'";
  $res1 = mysqli_query($conn, $sql);
  $user_id;
  while($row = mysqli_fetch_assoc($res1))
  {
     $user_id = $row['id'];
  }
  $q = "SELECT * FROM `booktckt` WHERE user_id = '$user_id'";
  $res = mysqli_query($conn, $q);
  echo "<table align=\"center\" border=\"2\" width=\"70%\">";
  echo "<tr><td><b>R_Id</b></td><td><b>bus_id</b></td><td><b>Time</b></td></tr>";
  while($row1 = mysqli_fetch_assoc($res))
  {
    echo "<tr><td>";
    echo $row1['id'] ."</td><td>";
    echo $row1['bus_id'] ."</td><td>";
    echo $row1['time'] ."</td></tr>";
    //echo "<pre>";
    //print_r($row1);
  }
  echo "</table>";
  ?>
</form>
				<div class="column-clear"></div>
            </div>
			<div class="clearfix"></div>
        </div>
    </div>







</div>
    <footer>
        <div class="container text-center"
        <h3>
           <h4> <a href="contact.php">Virtual University of Pakistan<br />

M.A Jinnah Campus, Defence Road,
Off Raiwind Road, Lahore  </a><br />+92-42-111-880-880 &bull;<br /></h4>
	<p>Hours of Operation&nbsp;&nbsp;&bull;&nbsp;&nbsp;Mon - Sun: 10:00 am - 12:00 am</p>
	<a href="index.php"> <img src="img/defaultLogo.png"/></a>
        </h3>
    </footer>
</body>
</html>
