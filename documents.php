<?php
    session_start();
?>


<link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet"> 
<link rel="stylesheet" type="text/css" href="css/documentscss.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<!--Webpage Starts-->
<html>
    <!--Head Starts-->
    <head>
        <!--Document Level Styling if needed-->
        <style>
        /*Styling if any goes here*/
        
        </style>
        
        <title>Our Fleet</title><!--Title of the webpage-->
    </head>
<meta name="viewport" content="width=device-width"><!--Responsive Webpage-->
    <!--Head Ends-->
    <!--Body Starts-->
    <body>
<!--Naviation Bar Section Starts Here-->
        <div class="navbar">
                <div class="topnav">
                <img src="imgs\Soulo_Ride_Color_Logo.png" class="logo" />
                <ul class="nav">
                    <li><a href="homepage.html">Home</a></li>
                    <li><a href="ourfleet.html">Our Fleet</a></li>
                    <li><a href="tariff.html">Tariff</a></li>
                    <li><a href="rides.html">Rides</a></li>
                    <li><a href="aboutus.html">About Us</a></li>
                    <li><a href="contact.html">Contact Us</a></li>
                    <li><a href="login.html">Login/SignUp</a></li>
                </ul>
                </div>
        </div>
<!--Documents of Soulo Ride Website-->


<!--Webpage starts-->
<html>
	<!--head starts-->
	<head>
		<title>Soulo Ride | Documents</title><!--Title of the webpage-->
	</head>
	<meta name="viewport" content="width=device-width"><!--Responsive Webpage-->
	<!--Head Ends-->
	<!--Body Starts-->
	<body>
		<div class="content1">
			<div class="head">
				<h1 style="color: #ff6600;">Documents Required</h1>
			</div>
			<div class="box">
				<p>The following documents need to be submitted before renting a ride:</p> 
				<ol class="points">
					<li class="bullet">1. Valid driver's license to ride a motor-vehicle with or without gear, in India. (For international visitors, a valid driving license from their home country with <br>&nbsp;&nbsp;&nbsp;&nbsp;International Driving Permit is necessary along with a valid Visa. Original to be brought, copy will be retained for record.) </li>
					<li class="bullet">2. A copy of your Passport (OR) Original Aadhar Card (OR) A test mail from your corporate e-mail ID.</li>
					<li class="bullet">3. 1 Rupee swipe with either your debit or credit card (not mandatory if condition (1) is satisfied.)</li>
				</ol>
				<br>
				<p>If you're a student, following are the documents to be submitted, in addition to a valid Driver's license-</p>
				<ol class="points">
					<li class="bullet">1. Original College ID</li>
					<li class="bullet">2. Original Aadhar card</li>
					<li class="bullet">3. 1 Rupee swipe with either your debit or credit card (not mandatory if conditions (1) and (2) are satisfied.)</li>
				</ol>


				<p> Note: Souloride reserves the right to hold back the booking if the documents submitted are not satisfactory.</p>
			</div>
		<br><br>
			<div class="form">
				<form action="document_next.php" method="post" enctype="multipart/form-data">
				  <label>License:&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</label>
				  <input id="license" type="file" name="license">
				  <br><br>
				

				
				  <label>Passport:&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</label>
				  <input id="passport" type="file" name="passport">
				  <br><br>



				  <label>Aadhar Card:&nbsp&nbsp&nbsp</label>
				  <input id="aadhar" type="file" name="aadhar">
			
                    <br><br>


				  <label>College Id:&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</label>
				  <input id="collegeid" type="file" name="collegeid">
                    <br>
                    <br>
                    <br>
				  <input type="submit" value="Send">
				</form>

				 
			</div>
		<!--Disclaimer Part begins here-->
	<!--Subscribe Section Starts Here-->
		<div class="subscribe">
			<img src="imgs\Soulo_Ride_Color_Logo.png" class="logo" top:"60%" />
			<p style = "text-align:right; font-size:24px; padding-right:5%; margin:0;"> 	
				Follow us on :	
				<br/>
				<i class="fa fa-facebook-square" aria-hidden="true" style="color:white;"></i>
				<i class="fa fa-linkedin-square" aria-hidden="true" style="color:white;"></i>
				<i class="fa fa-instagram" aria-hidden="true" style="color:white;"></i>
				<i class="fa fa-pinterest-square" aria-hidden="true" style="color:white;"></i>
				<i class="fa fa-twitter-square" aria-hidden="true" style="color:white;"></i>
				<i class="fa fa-tumblr-square" aria-hidden="true" style="color:white;"></i>
			</p>
			<br/> 
			<p style="text-align:center; padding: 0%; font-size:15px;">
				How often do you wish to get away from your mundane day to day life and seek newer terrains? How many times have movie frames allured you to wish to buy a luxury bike? Soulo Ride provides you a one stop solution to these problems...
				Before you buy a luxury bike just rent your favorite luxury bike and then decide "Is it worth investing huge money on buying it" Soulo Ride's wide range of bikes will definitely complete your need without any doubt. Hassle free renting and restriction less riding. Rent it to believe it. A class experience on luxury bike rentals. Subscribe Now for more details and offers!!</p>
			<center>
            <div style="display:inline;width:135px;">
			<form action="email.php" method="post">
			<input type="email" placeholder="  ENTER EMAIL ID TO SUBSCRIBE" style="height:35px; width:25%; font-size:10px;font-family: 'Montserrat',sans-serif;border-radius:4px; border :0;text-align : center;" name="subemail"/>
                &nbsp;<div style="display :inline;margin-top:200px;position: relative;top: 3.5px;">
			<input type="submit" name="subscribe" style="color:white; background-color:#ff6600;border:0;border-radius:5px; height:35px; width:135px; font-size:20px;font-family: 'Montserrat',sans-serif;font-weight:500; text-align:center"value="Subscribe">
                </form>
            </div>
			</center>
			
			<p style="font-size:10px; text-align:left;">
				<span style="font-size:18px; color:#ff6600;">	Disclaimer :	</span>	
				Soulo Ride has solicited information from numerous other sources in compiling the contents of this website. Although every effort has been made to insure accuracy, some of the information, products and services published on this website may include inaccuracies and typographical errors.
				Soulo Ride makes no representations about the suitability of the information and services contained on this website for any purpose.
				<br/>
				<span style="font-size:13px; color:white;">	&copy 2017 SOULO RIDE PIXELATOR STUDIOS PVT.LTD.ALL RIGHTS RESERVED	</span>
			</p>
		</div>
		<!--Subscribe Section Ends Here-->
	</body>
	<!--Body Ends-->
</html>
<!--Webpage Ends-->