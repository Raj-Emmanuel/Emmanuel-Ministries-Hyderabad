<?php


     //EDIT THE 2 LINES BELOW AS REQUIRED
    $email_to = "emmanuelministrieshyd@gmail.com";
    $email_subject = "New Prayer Request Form Submission";
    $error_message = '';

     

     
    // validation
    if(
        !isset($_POST['name']) ||
		!isset($_POST['phone']) ||
		!isset($_POST['Place']) ||
		!isset($_POST['Request']))
		
		{
			
			echo "Fields are not filled properly";
			die();
    }
     
        $name = $_POST['name']; // required
	$phone = $_POST['phone']; // required
	$Place = $_POST['Place']; // required
	$subject = $_POST['Request']; // required



$servername = "localhost";
$username = "emman5e4_raj";
$password = "raj123!@#$";
$dbname = "emman5e4_Emmanuel";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO Requests VALUES ('$name', '$phone', '$Place','$subject','CURDATE()')";

if ($conn->query($sql) === TRUE) {
   // echo "New record created successfully";
} else {
   // echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();







//$sql="insert into Requests values('$name', '$phone', '$Place', '$subject', 'now()')";

     
$email_message = '<html>';
$email_message = '<body>';
$email_message = '<head><meta http-equiv="Content-Type" content="text/html; charset=windows-1252">';
$email_message = '<title> Prayer Request Details Are Below</title>';
$email_message = '</head>';
$email_message .= '<h1>Prayer Request Details Are Below</h1>';
$email_message .= '<table rules="all" style="border-color: #666;" cellpadding="10">';
$email_message .= "<tr style='background: #eee;'><td><strong>Name:</strong> </td><td>" . strip_tags($_POST['name']) . "</td></tr>";
$email_message .= "<tr><td><strong>Phone:</strong> </td><td>" . strip_tags($_POST['phone']) . "</td></tr>";
$email_message .= "<tr><td><strong>Place:</strong> </td><td>" . strip_tags($_POST['Place']) . "</td></tr>";
$email_message .= "<tr><td><strong>Prayer Request:</strong> </td><td>" . strip_tags($_POST['Request']) . "</td></tr>";
$email_message .= "</table>";
$email_message .= "</body></html>";	






$headers = "From:info@emmanuelministrieshyd.com \r\n";
$headers .= "Reply-To: ". $email . "\r\n";
//$headers .= "CC: susan@example.com\r\n";
$headers .= "MIME-Version: 1.0\r\n";
$headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";


@mail($email_to, $email_subject, $email_message, $headers); 




?>





<!DOCTYPE HTML>
<html>
<head>

<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Emmanuel Ministries </title>
<!--Custom Css-->
<link href="css/custom.css" rel="stylesheet" type="text/css">
<!--Bootstrap 3.1.1 Css-->
<link href="css/bootstrap.css" rel="stylesheet" type="text/css">
<!--Color Css-->
<link href="css/color.css" rel="stylesheet" type="text/css">
<!--Font Awesome-->
<link href="css/font-awesome.min.css" rel="stylesheet" type="text/css">
<!--Fevicon-->
<link rel="icon" href="images/favicon.ico" type="image/x-icon">
<!--Google Fonts-->
<link href='http://fonts.googleapis.com/css?family=Noto+Serif:400,700,400italic' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Open+Sans:400italic,400,300,600' rel='stylesheet' type='text/css'>
<!--Bxslider Css-->
<link href="css/jquery.bxslider.css" rel="stylesheet" type="text/css">
<!--Content Slider Css-->
<link href="css/content_slider_style.css" rel="stylesheet" type="text/css" />
<!--Pretty Photo Css-->
<link rel="stylesheet" href="css/prettyPhoto.css" type="text/css" media="screen"/>
<!--[if lt IE 9]>
<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
<!--Html 5 Js-->
<script src="js/html5.js"></script>
</head>
<body>
<!--Wrapper Start-->
<div id="wrapper"> 
  <!--Header Start-->
  <header id="header"> 
    <!--Head Topbar Start-->
    <section class="head-topbar">
      <div class="container holder">
        <div class="left"> <strong class="ph"><i class="fa fa-phone"></i>(+91) 9440147146 </strong> <a href="mailto:" class="email"><i class="fa fa-envelope"></i>emmanuelministrieshyd@gmail.com</a> </div>
       <div class="right">
          <ul class="topbar-social">
           <li><a href="https://www.facebook.com/EmmanuelChurchhyderabad/"><i class="fa fa-facebook-square"></i></a></li>
            <li><a href="#"><i class="fa fa-linkedin-square"></i></a></li>
            <li><a href="https://plus.google.com/109665427628788273372"><i class="fa fa-google-plus-square"></i></a></li>
            <li><a href="#"><i class="fa fa-twitter-square"></i></a></li>
            <li><a href="#"><i class="fa fa-tumblr-square"></i></a></li>
		
            <li><a href="https://www.youtube.com/channel/UCI0gJhfHNlpAm5bXYcThmrw"><i class="fa fa-instagram"></i></a></li>
            <li><a href=""><i class="fa fa-flickr"></i></a></li>
          </ul>
          <a id="active-btn" href="#" class="btn-search"><i class="fa fa-search"></i></a> <a href="#" class="btn-login"><i class="fa fa-user"></i></a> </div>
        <form action="#" id="search-box-form" class="search-box">
          <input name="" type="text" class="topbar-search-input" placeholder="Search for...">
          <button value="" class="topbar-btn-search"><i class="fa fa-search"></i></button>
          <a href="#" class="crose"><i class="fa fa-times"></i></a>
        </form>
      </div>
    </section>
    <!--Head Topbar End--> 
    
    <!--Logo Row Star-->
    <section class="logo-row">
      <div class="container"> <strong class="logo"><a href="#"><img src="images/logo.png" alt="logo"></a></strong>
        <div class="event-timer"> <strong class="title">Next Event:</strong>
          <div class="countdown countdown-container "
     data-start="1362139200"
     data-end="1388461320"
     data-now="1387461319"
     data-border-color="rgba(255, 255, 255,1)">
            <div class="clock">
              <div class="clock-item clock-days countdown-time-value">
                <div class="wrap">
                  <div class="inner">
                    <div id="canvas-days" class="clock-canvas"></div>
                    <div class="text">
                      <p class="val">0</p>
                      <p class="type-days type-time">DAYS</p>
                    </div>
                  </div>
                </div>
                <span class="colun-1">:</span> </div>
              <div class="clock-item clock-hours countdown-time-value">
                <div class="wrap">
                  <div class="inner">
                    <div id="canvas-hours" class="clock-canvas"></div>
                    <div class="text">
                      <p class="val">0</p>
                      <p class="type-hours type-time">HRS</p>
                    </div>
                  </div>
                </div>
                <span class="colun-2">:</span> </div>
              <div class="clock-item clock-minutes countdown-time-value">
                <div class="wrap">
                  <div class="inner">
                    <div id="canvas-minutes" class="clock-canvas"></div>
                    <div class="text">
                      <p class="val">0</p>
                      <p class="type-minutes type-time">MNTS</p>
                    </div>
                  </div>
                </div>
                <span class="colun-3">:</span> </div>
              <div class="clock-item clock-seconds countdown-time-value">
                <div class="wrap">
                  <div class="inner">
                    <div id="canvas-seconds" class="clock-canvas"></div>
                    <div class="text">
                      <p class="val">0</p>
                      <p class="type-seconds type-time">SECS</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!--Logo Row End--> 
    
    <!--Navigation Row Start-->
     <section class="navigation-row">
      <div class="container">
        <div role="navigation" class="navbar-inverse">
          <div class="container">
            <div class="navbar-header">
              <button data-target=".navbar-collapse" data-toggle="collapse" class="navbar-toggle" type="button"> <span class="sr-only"> </span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
            </div>
            <div class="collapse navbar-collapse">
              <nav>
                <ul id="nav">
                  <li class="active"><a href="index.html">Home</a></li>
                  <li><a href="#">About Us</a>
				  
				  <ul>
                      <li><a href="#">Pastor B.Jeremiah </a></li>
                      <li><a href="Ourcaption.html"> Our Caption </a></li>
                      <li><a href="Aimandobjectives.html"> Aims and Objective </a></li>
                      <li><a href="Visionandmision.html"> Vision and Mission </a></li>
                    </ul>
					
				  </li>
                  <li><a href="#">Ministries</a>
                    <ul>
                      <li><a href="sermon.html"> Worship Details </a></li>
					  		  
                      <li><a href="Outreach.html">Gospel Outreach</a></li>
					  <li><a href="DVDMinistries.html">Gospel Through DVDs  </a></li>
                      <li><a href="Skitministries.html">Gospel Through Documentaries & Skits </a></li>
                      <li><a href="SpecialSemi.html">Special Seminars for Pastors </a></li>
					  <li><a href="prayer-wall.html">Prayer Tower </a></li>
                      <li><a href="Sundayschool.html">Sunday School </a></li>
					  <li><a href="ChurchConstruct.html">Chruch Planting </a></li>
                      <li><a href="Magazines.html">Magazine </a></li>
                    </ul>
                  </li>
                  <li><a href="#"> Events </a>
                    <ul>
                      <li><a href="Eventscalendar.html"> Monthly Gospel Calender </a></li>
					   <li><a href="Eventsdetails.html"> Upcomming Events </a></li>
                       <li><a href=""> Recent Events </a></li>
					     <li><a href="">Christian Articles</a></li>
                    </ul>
                  </li>
                  <li><a href="#">Gallery</a>
                    <ul>
                      <li><a href="SundayWorship.html"> Sunday Worship </a></li>
                      <li><a href="Gospelmeeting.html"> Gospel Meetings</a></li>
                      <li><a href="Churchopening.html"> Church Dedication </a></li>
                      <li><a href="Specialeventsggal.html"> Special Events </a></li>
					   <li><a href=""> Testimonies </a></li>
                   </ul> 
                  </li>
                  <li><a href="#">Watch Live Broadcasting </a>
                    </li>
                    
                  <li><a href="#">Contact</a>
                    <ul>
                      <li><a href="contact.html">Contact</a></li>
                      <li><a href="church-location.html">Church Locations</a></li>
                    </ul>
                  </li>
				  
				   <li><a href="Prayerreq.html"> Prayer Request </a>
                    </li>
                </ul>
              </nav>
            </div>
            <!--/.nav-collapse --> 
          </div>
        </div>
      </div>
    </section>
    <!--Navigation Row End--> 
  </header>
  <!--Header End--> 
  <!-- Main Start-->
  <div id="main"> 
    <!--Inner Pages Heading Area Start-->
    <section class="inner-headding">
      <div class="container">
        <h1>Prayer Request</h1>
         <p>We are Ambassadors for Jesus Christ</p>
      </div>
    </section>
    <!--Inner Pages Heading Area End--> 
    <!-- Start of Thank -->
    <section id="content_Wrapper" class="mbtm">
      <section class="container container-fluid">
        <section class="row-fluid">
          <section class="span12 thanx-page">
          <div class="holder">
            <h2>Thank You</h2>
            <p>Thank you for your form submission, as soon as we get this we will get back to you shortly.</p>
            </div>
          </section>
        </section>
      </section>
    </section>
	<!-- End of Thank -->
  </div>
  <!-- Main End--> 
  
  <!-- Footer Area Start-->
  
  <footer id="footer">
    <section class="footer-section">
      <div class="container">
        <div class="row">
          <div class="col-md-3 col-sm-6">
            <div class="footer-box-1">
              <h4>About Church</h4>
              <p>The power of God’s word is always magnified and exalted. The people come voluntarily to hear the good news of the gospel, confess their sins and experience a new life. The ministry is started with very few souls. By the grace of the God, every Sunday around 2000 peoples are gathering in the church to worship almighty. </p>
            </div>
          </div>
          <div class="col-md-3 col-sm-6">
            <div class="footer-box-1">
              <h4>Tweets</h4>
              <ul id="footer-tweet">
                <li>
                  <div class="tweets"> <strong class="name">@emmanuelministries</strong>
                    <p>There are many variations of passages the majority.</p>
                    <a href="#">Emmanuel Ministries Hyderabad </a> </div>
                  <div class="tweets"> <strong class="name">@jeremiah</strong>
                    <p>There are many variations of passages the majority.</p>
                    <a href="#"> </a> </div>
                </li>
               
              </ul>
            </div>
          </div>
          <div class="col-md-3 col-sm-6">
            <div class="footer-box-1">
              <h4>Stay with US</h4>
              <p> For latest updates </p>
              <form action="#" class="newsletter">
                <input class="input-newsletter" type="text" required pattern="^[a-zA-Z0-9-\_.]+@[a-zA-Z0-9-\_.]+\.[a-zA-Z0-9.]{2,5}$" placeholder="Enter email for Newsletter">
                <input type="submit" class="btn-submit-news" value="Submit">
              </form>
            </div>
          </div>
          <div class="col-md-3 col-sm-6">
            <div class="footer-box-1">
              <h4>Contact</h4>
              <address>
              <p>Emmanuel Ministries,<br>
                Suraram Colony, IDA Jeedimetla, Hyderabad. 500055 </p>
              <ul>
                <li><i class="fa fa-phone"></i> +91 9440147146 </li>
                <li><i class="fa fa-phone"></i> +91 9989331155 </li>
				<li><i class="fa fa-phone"></i> +91 8801244825 </li>
                <li><i class="fa fa-envelope-o"></i><a href="mailto:" class="email">emmanuelministrieshyd@gmail.com</a></li>
                
              </ul>
              </address>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!--Footer Social Row Start-->
    <section class="footer-social">
      <div class="container">
        <ul>
          <li><a href="https://www.facebook.com/EmmanuelChurchhyderabad/" class="social-color-1"><i class="fa fa-facebook"></i></a></li>
          <li><a href="#" class="social-color-2"><i class="fa fa-twitter"></i></a></li>
          <li><a href="#" class="social-color-3"><i class="fa fa-linkedin"></i></a></li>
          <li><a href="https://plus.google.com/109665427628788273372" class="social-color-4"><i class="fa fa-google-plus"></i></a></li>
          <li><a href="#" class="social-color-5"><i class="fa fa-tumblr"></i></a></li>
          <li><a href="#" class="social-color-6"><i class="fa fa-skype"></i></a></li>
          <li><a href="https://www.youtube.com/channel/UCI0gJhfHNlpAm5bXYcThmrw" class="social-color-7"><i class="fa fa-youtube"></i></a></li>
        </ul>
      </div>
    </section>
    <!--Footer Social Row End--> 
    <!-- Copyrights Section Start-->
    <section class="copyrights-section">
      <div class="container"> <strong class="copy"><span class="bold">Emmanuel Ministries </span> &copy; 2018, All Rights Reserved, Designed &amp; Developed by: <a href="http://www.emmanuelministrieshyd.com/" target="_blank" class="web"> Emmanuel Ministries Hyderabad </a></strong> </div>
    </section>
    <!-- Copyrights Section End--> 
  </footer>
  <!-- Footer Area End--> 
</div>
<!--Wrapper End--> 
<!--Jquery Js--> 
<script src="js/jquery.js" type="text/javascript"></script> 
<!--Bootstrap Js--> 
<script src="js/bootstrap.js" type="text/javascript"></script> 
<!--Upcoming News Times Js--> 
<script src="js/jquery.plugin.js"></script> 
<!--Upcoming News Times Js--> 
<script src="js/jquery.countdown.js"></script> 
<!--Bxslider Js--> 
<script src="js/jquery.bxslider.min.js"></script> 
<!--Filterable JS--> 
<script type="text/javascript" src="js/jquery-filterable.js"></script> 
<!--Flex Timeline JS--> 
<script type="text/javascript" src="js/jquery.flexisel.js"></script> 
<!-- Style Switcher --> 
<script type="text/javascript" src="js/styleswitch.js"></script> 
<script type="text/javascript" src="js/jquery.tabSlideOut.v1.3.js"></script> 
<!--Costom Js--> 
<script src="js/custom.js" type="text/javascript"></script>
</body>

</html>
