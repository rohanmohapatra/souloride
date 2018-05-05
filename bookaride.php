<?php

    $id = $_GET['data']; 
    $bike=array(1=>'Suzuki Hayabusa',2=>'Bajaj Avenger',3=>'Bajaj Dominar',4=>'Benelli 300',5=>'Benelli 302R',6=>'Ducati Hyperstrada',7=>'Harley Davidson Iron 883',8=>'Yamaha R3',9=>'Yamaha FZ25',10=>'Yamaha Fazer25',11=>'Suzuki Gixxer SF',12=>'Honda CBR 250',13=>'KTM Duke 250',14=>'KTM Duke 390',15=>'KTM RC 390',16=>'KTM RC 200',17=>'Kawasaki Z250',18=>'Triumph Tiger 800 XR',19=>'Mahindra MOJO',20=>'Royal Enfield Himalayan',21=>'Royal Enfield Bullet 350',22=>'Royal Enfield Classic 350',23=>'Royal Enfield Thunderbird 350',24=>'Royal Enfield Thunderbird 500');
    //echo "$bike[$id]";
?>
<!--Soulo Ride Website-->

<link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet"> 
<link rel="stylesheet" type="text/css" href="css/bookaride.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<!--Webpage Starts-->
<html>
    <!--Head Starts-->
    <head>
        <!--Document Level Styling if needed-->
        <style>
        /*Styling if any goes here*/
        /* The Modal (background) */
            .modal {
                display: none; /* Hidden by default */
                position: fixed; /* Stay in place */
                z-index: 1; /* Sit on top */
                padding-top: 100px; /* Location of the box */
                left: 0;
                top: 0;
                width: 100%; /* Full width */
                height: 100%; /* Full height */
                overflow: auto; /* Enable scroll if needed */
                background-color: rgb(0,0,0); /* Fallback color */
                background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
            }
            .text1{
                font-family: 'Montserrat',sans-serif;
                font-weight: 900;   
                text-align: center;
                font-size: 25px;
            }
            .text2{
                font-family: 'Montserrat',sans-serif;
                font-weight: 900;   
                text-align: center;
                font-size: 25px;
            }

            .modal-content {
                position: relative;
                background-color: #fefefe;
                margin: auto;
                padding: 0;
                border: 1px solid #888;
                width: 80%;
                box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2),0 6px 20px 0 rgba(0,0,0,0.19);
                -webkit-animation-name: animatetop;
                -webkit-animation-duration: 0.4s;
                animation-name: animatetop;
                animation-duration: 0.4s
            }

            @-webkit-keyframes animatetop {
                from {top:-300px; opacity:0} 
                to {top:0; opacity:1}
            }

            @keyframes animatetop {
                from {top:-300px; opacity:0}
                to {top:0; opacity:1}
            }

  
            .close {
                color: white;
                float: right;
                font-size: 28px;
                font-weight: bold;
            }

            .close:hover,
            .close:focus {
                color: #000;
                text-decoration: none;
                cursor: pointer;
            }

            .modal-header {
                padding: 2px 16px;
                background-color: #ff6600;
                color: white;
                font-family: 'Montserrat',sans-serif;
                font-weight: 900;   
                text-align: center;
            }

            .modal-body {padding: 2px 16px;height: 200px;}

            .modal-footer {
                padding: 2px 16px;
                background-color: #ff6600;
                color: white;
                font-family: 'Montserrat',sans-serif;
                font-weight: 900;   
                text-align: center;
            }
            </style>
        
        <title>Soulo Ride | Ride with Us.</title><!--Title of the webpage-->
    </head>
<meta name="viewport" content="width=device-width"><!--Responsive Webpage-->
    <!--Head Ends-->
    <!--Body Starts-->
    <body>
    
<!--NavBar Section Starts Here-->
        <div class="navbar">
                <div class="topnav">
                <img src="imgs\Soulo_Ride_Color_Logo.png" class="logo" />
                <ul class="nav">
                    <li><a href="homepage.html">Home</a></li>
                    <li><a href="ourfleet.html">Our Fleet</a></li>
                    <li><a href="tariff.html">Tariff</a></li>
                    <li><a href="rides.html">Earn</a></li>
                    <li><a href="aboutus.html">About Us</a></li>
                    <li><a href="contact.html">Contact Us</a></li>
                    <li><a href="login.html">Login/SignUp</a></li>
                </ul>
        </div>
<!--NavBar Section Ends Here-->
            <div class="us-container" id="stardiv">
                <center><h1 class="us-text">HOW IT WORKS?</h1></center>
                <div class="us-card">
                    <center><div class="us-image"><img class="us-img" src="imgs/Calender.png"></div></center>
                    <p class="us-div-text">Select location, pickup &amp; dropoff times</p>
                </div>
                <div class="us-card">
                    <center><div class="us-image"><img class="us-img" src="imgs/Cash.png"></div></center>
                    <p class="us-div-text">Register, pay &amp; book the bike</p>
                </div>
                <div class="us-card">
                    <center><div class="us-image"><img class="us-img" src="imgs/Scooter.png"></div></center>
                    <p class="us-div-text">Pick the bike<br> and ride</p>
                </div>
                <div class="us-card">
                    <center><div class="us-image"><img class="us-img" src="imgs/Refund.png"></div></center>
                    <p class="us-div-text">Return and get deposit refund</p>
                </div>
            </div>
        </div>
<!--HowitWorks Section Ends Here-->
        <center>
        <div class="book">
				<h4 style ="margin-top: 0px;font-family: 'Montserrat',sans-serif;font-weight: 900;color: #ff6600;font-size: 40px;">Choose the dates for renting your ride.  </h4>
				<!--booking date main starts here-->
				<div class="booking">
					                     
						<input id="fromdatepicker" name="start_date" type="text" class="date_picker" placeholder="Start Date" autocomplete="off"onfocus="(this.type='date')" onblur="(this.type='text')">
                        
                        
						<input id="fromtimepicker" name="start_time" type="text" class="time_picker" placeholder="Time" autocomplete="off">
                        
						&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
						<span class="inbetween" style ="font-family: 'Montserrat',sans-serif;font-weight: 900;color: black;font-size: 20px;">to</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        
						<input id="todatepicker" name="end_date" type="text" class="date_picker" placeholder="End Date" autocomplete="off"onfocus="(this.type='date')" onblur="(this.type='text')">
                        
						<input id="totimepicker" name="end_time" type="text"  class="time_picker" placeholder="Time" autocomplete="off">
                        <br>
                        <br>
                        <br>
                        <span style ="font-family: 'Montserrat',sans-serif;font-weight: 900;color: black;font-size: 20px;">Select your Ride :</span>

                        <!--<select name="bikes" class="dropdown">
                            <option value="haya">Suzuki Hayabusa</option>
                            <option value="d250">KTM Duke 250</option>
                         </select>-->
                        <input type="text" class="dropdown" readonly>
                        <?php
                            echo"<script> 
                                    var drop=document.querySelector('.dropdown');
                                    drop.value='$bike[$id]';
                                    </script>
                        
                                 "
                        ?>
                        <br><br><br><br>
                        <br>
                        <input type="button" class="search" name="search" id="search" value="SEARCH">
					   
				</div>
           
            </div>
        </center>
            
            <!-- Trigger/Open The Modal -->
            
            <!-- The Modal -->
            <div id="popup" class="modal">

              <!-- Modal content -->
              <div class="modal-content">
                <div class="modal-header">
                  <span class="close">&times;</span>
                  <h2 id="textheader">Modal Header</h2>
                </div>
                <div class="modal-body">
                  <p class="text1">Your Ride is</p>
                  <p id="text2" class="text2"></p>
                </div>
                <div class="modal-footer">
                  <h3>&copy;SouloRide Bike Rentals</h3>
                </div>
              </div>

            </div>

            <script>
            // Get the modal
            var modal = document.getElementById('popup');

            // Get the button that opens the modal
            var btn = document.getElementById("search");

            // Get the <span> element that closes the modal
            var span = document.getElementsByClassName("close")[0];
            var text2 = document.getElementById("text2");
            var texthead = document.getElementById("textheader");
            // When the user clicks the button, open the modal 
            btn.onclick = function() {
                modal.style.display = "block";
            }

            // When the user clicks on <span> (x), close the modal
            span.onclick = function() {
                modal.style.display = "none";
            }

            // When the user clicks anywhere outside of the modal, close it
            window.onclick = function(event) {
                if (event.target == modal) {
                    modal.style.display = "none";
                }
            }
            if(Math.round(Math.random())==1){
                text2.innerHTML="Available";
                text2.style.color="green";
                text2.style.fontSize="40px";
            }
            else{
                text2.innerHTML="Not Available";
                text2.style.color="red";
                text2.style.fontSize="40px";
            }
                
            texthead.innerHTML="<?php echo "$bike[$id]"; ?>";
            </script>

        
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