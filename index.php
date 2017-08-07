<?php
	//Start session
	session_start();

	//Unset the variables stored in session
	unset($_SESSION['SESS_MEMBER_ID']);
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
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
            <!--<li><a href="adblogin.php">LogIn Page</a></li>-->
            <li><a href="routes.php">Routes</a></li>
            <li><a href="location.php">location</a></li>
            <li><a href="register.php">Staff Register</a></li>
            <li><a href="contact.php">Contact Us</a></li>
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

    <section class="slider">
           <div class="swiper-container">
        <div class="swiper-wrapper">
              <div class="swiper-slide"><img src="img/banner_2.jpg"/></div>
            <div class="swiper-slide"><img src="img/hm_rotator_bus-report_2014-07-v01.jpg"/></div>

            <div class="swiper-slide"><img src="img/banner1.jpg"/></div>


        </div>
        <!-- Add Pagination -->
        <div class="swiper-pagination"></div>
        <!-- Add Arrows -->
        <div class="swiper-button-next"></div>
        <div class="swiper-button-prev"></div>
    </div>
    </section>
    <section class="about-bus">
        <div class="container">
            <div class="col-md-4 col-sm-4 col-xs-12 text-center">
                <a href="main-course.php"><img src="xres/images/01_featured.jpg" alt="" /></a>
               <h3><a href="main-course.php">Specials Offers</a></h3>
            <p><strong>Daewoo Bus</strong><br />
			Come in and experience<br /> Our
			new Bus Type<br /> specials today!</p>
            </div>
             <div class="col-md-4 col-sm-4 col-xs-12 text-center">
                <a href="main-course.php"><img src="xres/images/01_featured.jpg" alt="" /></a>
               <h3><a href="main-course.php">Specials Offers</a></h3>
            <p><strong>Daewoo Bus</strong><br />
			Come in and experience<br /> Our
			new Bus Type<br /> specials today!</p>
            </div>
             <div class="col-md-4 col-sm-4 col-xs-12 text-center">
                <a href="main-course.php"><img src="xres/images/01_featured.jpg" alt="" /></a>
               <h3><a href="main-course.php">Specials Offers</a></h3>
            <p><strong>Daewoo Bus</strong><br />
			Come in and experience<br /> Our
			new Bus Type<br /> specials today!</p>
            </div>
        </div>
    </section>
    <section class="contact-home">
        <div class="container">
            <h3 class="text-center">Send us your Query</h3>
            <div class="col-md-6 col-sm-6 col-xs-12">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d217758.11109467733!2d74.32620605!3d31.48374925!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39190483e58107d9%3A0xc23abe6ccc7e2462!2sLahore%2C+Pakistan!5e0!3m2!1sen!2s!4v1441019542791" style="width: 100%;" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
            </div>
            <div class="col-md-6 col-sm-6 col-xs-12">
            <form class="validate " action="messageexec.php" method="POST">
                        <p>
                            <label for="name" class="required label">Name:</label><br>
                            <input id="name" class="contactform form-control" type="text" name="name" />
                        </p>
                        <p>
                            <label for="email" class="required label">Email:</label><br>
                            <input id="email" class="contactform form-control" placeholder="Example: john@doe.com" type="text" name="email" />
                        </p>
                        <p>
                            <label for="subject" class="required label">Subject:</label><br>
                            <input id="subject" class="contactform form-control" type="text" name="subject" />
                        </p>
                        <p>
                            <label id="message-label" for="message" class="required label">Message:</label><br>
                            <textarea id="message" class="contactform form-control" name="msg" cols="18" rows="5"></textarea>
                        </p>
                        <p>
                            <label></label>
                            <input class="contactform" id="submit-button" type="submit" name="Submit" value="Submit" />
                        </p>
                    </form>
            </div>
        </div>
    </section>
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


<script type="text/javascript" src="js/datepicker.js"></script>
<script type="text/javascript" src="xres/js/saslideshow.js"></script>
<script type="text/javascript" src="xres/js/slideshow.js"></script>
<script src="js/jquery-1.5.min.js" type="text/javascript" charset="utf-8"></script>
<script src="vallenato/vallenato.js" type="text/javascript" charset="utf-8"></script>
  <script src="js/bootstrap.min.js"></script>

	<script type="text/javascript">
		//<![CDATA[

		/*
				A "Reservation Date" example using two datePickers
				--------------------------------------------------

				* Functionality

				1. When the page loads:
						- We clear the value of the two inputs (to clear any values cached by the browser)
						- We set an "onchange" event handler on the startDate input to call the setReservationDates function
				2. When a start date is selected
						- We set the low range of the endDate datePicker to be the start date the user has just selected
						- If the endDate input already has a date stipulated and the date falls before the new start date then we clear the input's value

				* Caveats (aren't there always)

				- This demo has been written for dates that have NOT been split across three inputs

		*/

		function makeTwoChars(inp) {
				return String(inp).length < 2 ? "0" + inp : inp;
		}

		function initialiseInputs() {
				// Clear any old values from the inputs (that might be cached by the browser after a page reload)
				document.getElementById("sd").value = "";
				document.getElementById("ed").value = "";

				// Add the onchange event handler to the start date input
				datePickerController.addEvent(document.getElementById("sd"), "change", setReservationDates);
		}

		var initAttempts = 0;

		function setReservationDates(e) {
				// Internet Explorer will not have created the datePickers yet so we poll the datePickerController Object using a setTimeout
				// until they become available (a maximum of ten times in case something has gone horribly wrong)

				try {
						var sd = datePickerController.getDatePicker("sd");
						var ed = datePickerController.getDatePicker("ed");
				} catch (err) {
						if(initAttempts++ < 10) setTimeout("setReservationDates()", 50);
						return;
				}

				// Check the value of the input is a date of the correct format
				var dt = datePickerController.dateFormat(this.value, sd.format.charAt(0) == "m");

				// If the input's value cannot be parsed as a valid date then return
				if(dt == 0) return;

				// At this stage we have a valid YYYYMMDD date

				// Grab the value set within the endDate input and parse it using the dateFormat method
				// N.B: The second parameter to the dateFormat function, if TRUE, tells the function to favour the m-d-y date format
				var edv = datePickerController.dateFormat(document.getElementById("ed").value, ed.format.charAt(0) == "m");

				// Set the low range of the second datePicker to be the date parsed from the first
				ed.setRangeLow( dt );

				// If theres a value already present within the end date input and it's smaller than the start date
				// then clear the end date value
				if(edv < dt) {
						document.getElementById("ed").value = "";
				}
		}

		function removeInputEvents() {
				// Remove the onchange event handler set within the function initialiseInputs
				datePickerController.removeEvent(document.getElementById("sd"), "change", setReservationDates);
		}

		datePickerController.addEvent(window, 'load', initialiseInputs);
		datePickerController.addEvent(window, 'unload', removeInputEvents);

		//]]>
		</script>



  <script src="js/swiper.min.js"></script>

    <!-- Initialize Swiper -->
    <script>
    var swiper = new Swiper('.swiper-container', {
        pagination: '.swiper-pagination',
        slidesPerView: 1,
        paginationClickable: true,
        spaceBetween: 30,
        keyboardControl: true,
        nextButton: '.swiper-button-next',
        prevButton: '.swiper-button-prev',
    });
    </script>


</body>
</html>
