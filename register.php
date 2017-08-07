<?php
// include 'db.php';
// session_start();
// if(!isset($_SESSION['adminname']))
// {
//   header('location: admin.php');
// }
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
    	<div id="gallerycontainer">

			<ul class="portfolio-area" style="width: 860px;">

               		<li class="portfolio-item2" data-id="id-0" data-type="cat-item-4">
			        <div>
                   <span class="image-block">
					<img src="images/reglogo.png" width="830" height="240" />                    </span>

                    </div>

					</div>
                    </li>
                    <form action="regprocess.php" method="post">
<table style="width: 100%;" border="0" class=" regstrtbl" align="center" cellpadding="5px" cellspacing="2px">
                    <tr><td>Staff Deg:</td>
                    <td>
                    <select name="deg">
                    <option value="Driver">Driver</option>
                    <option value="Security Guard">Security Guard</option>
                    <option value="Doctor">Doctor</option>
                    <option value="Bus Hostes">Bus Hostess</option>
                    </select></td>
                    </tr>

                    <tr><td>First Name:</td>
                    <td><input type="text" name="f_name" size="50" /></td>
                    </tr>

                    <tr><td>Last Name:</td>
                    <td><input type="text" name="l_name" size="50" /></td>
                    </tr>

                    <tr><td>Address:</td>
                    <td><textarea cols="40" rows="2" name="add"></textarea></td>
                    </tr>

                    <tr><td>Contact No:</td>
                    <td><input type="text" name="cellno" size="50" /></td>
                    </tr>

                    <tr><td>Route:</td>
                    <td><select name="rote">
                    <option value="LAHORE / MULTAN">LAHORE / MULTAN</option>
                    <option value="LAHORE / ISLAMABAD">LAHORE / ISLAMABAD</option>
                    <option value="LAHORE / SAHIWAL">LAHORE / SAHIWAL</option>
                    <option value="LAHORE / RAWALPINDI">LAHORE / RAWALPINDI</option>
                    <option value="LAHORE / FAISALABAD">LAHORE / FAISALABAD</option>
                    <option value="LAHORE / GUJRANWALA">LAHORE / GUJRANWALA</option>
                    <option value="LAHORE / KALARKHAR">LAHORE / KALARKHAR</option>
                    <option value="ISLAMABAD / LAHORE">ISLAMABAD / LAHORE</option>
                    <option value="ISLAMABAD / MULTAN">ISLAMABAD / MULTAN</option>
                    <option value="ISLAMABAD / KALARKHAR">ISLAMABAD / KALARKHAR</option>
                    <option value="ISLAMABAD / FAISALABD">ISLAMABAD / FAISALABD</option>
                    <option value="MULTAN / ISLAMABAD">MULTAN / ISLAMABAD</option>
                    <option value="MULTAN / LAHORE">MULTAN / LAHORE</option>
                    <option value="MULTAN / FAISALABAD">MULTAN / FAISALABAD</option>
                    <option value="SAHIWAL / GUJRANWALA">SAHIWAL / GUJRANWALA</option>
                    <option value="OTHERS">OTHERS</option>
                    </select></td>
                    </tr>

                    <tr><td>Bus Type:</td>
                    <td><input type="text" name="bs_type" size="50" /></td>
                    </tr>

                    <tr><td>Time:</td>
                    <td><select name="tym">
                    <option value="L 6:00PM">L 6:00PM</option>
                    <option value="L 6:30PM">L 6:30PM</option>
                    <option>L 7:00PM</option>
                    <option>L 7:15PM</option>
                    <option>L 7:30PM</option>
                    <option>L 7:45PM</option>
                    <option>L 8:00PM</option>
                    <option>I 6:30PM</option>
                    <option>I 7:30PM</option>
                    <option>I 8:30PM</option>
                    <option>I 8:45PM</option>
                    <option>M 3:00PM</option>
                    <option>M 8:00PM</option>
                    <option>M 5:00PM</option>
                    <option>S 2:00PM</option>
                    <option>OTHERS</option>
                    </select></td>
                    </tr>
                    <tr><td></td>
                    <td><input type="submit" name="button" value="Register"/> </td>
                    </tr>
                    </table>

            </form>
                        <div class="column-clear"></div>
            		</ul>
			<div class="clearfix"></div>
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
