<html>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>Sign Up</title>
<link rel="stylesheet" type="text/css" href="xres/css/style.css" />
<link rel="icon" type="image/png" href="xres/images/favicon.png" />
<!--[if IE 6]><style type="text/css"> * html img { behavior: url("xres/iepngfix.htc") }</style><![endif]-->
<script type="text/javascript" src="xres/js/saslideshow.js"></script>
<script type="text/javascript" src="xres/js/slideshow.js"></script>
<script src="js/jquery-1.5.min.js" type="text/javascript" charset="utf-8"></script>
<script src="vallenato/vallenato.js" type="text/javascript" charset="utf-8"></script>
<link rel="stylesheet" href="vallenato/vallenato.css" type="text/css" media="screen" charset="utf-8">
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet"></link>
      <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css">

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
<center>
<?php
echo "<h3>Your account is successfull</h3>";
?>
<input type="button" value="LOGIN" onClick="parent.location='userlogin.php'">
</center>
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
