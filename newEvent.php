<?php
	include('session.php');
?>

<!DOCTYPE html>
<html lang="en">
    <head>
    	
        <meta charset="utf-8">
        <title>CELEBRIT:New Event</title>
		<script src="includes/scripts.js"></script>
   		<link rel="stylesheet" href="includes/styles.css">
   		<link rel="icon" type="image/ico" href="images/favicon.ico">
   		
    </head>

     <body>
   		<div class="wrapper">
   			
           <main>
               <h1>New Event</h1>
               <article>          	
                   <section id="newEventName">
                   	<p><label>Event Name: </label><input type="text" required name="eventName" value="" placeholder="Event Name"></p>
                   </section>

                   <section id="newEventType">
  							<li><a href="#"> 	Type 		</a></li>
  							<li><a href="#">	Party		</a></li>
  							<li><a href="#">	Birthday	</a></li>
  							<li><a href="#">	Celebration	</a></li>
  							<li><a href="#">	Wedding		</a></li>
  							<li><a href="#">	Other		</a></li>
  							-----------------------------------------
  							<li><a href="#"> 	Location 	</a></li>
  							<li><a href="#"> 	Indoor		</a></li>
  							<li><a href="#"> 	Outdoor		</a></li>
  							<li><a href="#"> 	Public		</a></li>
  							<li><a href="#"> 	Private		</a></li>
  							<li><a href="#"> 	VIP			</a></li>
                   </section>

<h2>Guests</h2>
                   <section id="newEventGuests">
                   	  		<li class="active"><a href="#"> Group </a></li>
  							<li><a href="#">Friends 	</a></li>
  							<li><a href="#">Family		</a></li>
  							<li><a href="#">Coworkers	</a></li>
  							<li><a href="#"> other 1	</a></li>
  							<li><a href="#"> other 2	</a></li>
                   </section>
<h2>Location</h2>
                   <section id="newEventMap">
                   	 <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3379.834005752797!2d34.80970861562072!3d32.10077168118139!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x151d4bf40ab4383d%3A0xff5dd29c8016355f!2sHayarkon+Park!5e0!3m2!1sen!2sus!4v1484274761372" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe></section>

               
<h2>Date & Time</h2>
                   <section id="newEventTime">
                   	
                   		<div class="container well">
							<div class="row">
								<div class="col-md-12">
										<input type="text" id="time-demo" class="form-control floating-label" placeholder="Time">
								</div>
							</div>
						</div>
		
		
						<div class="container well">
							<div class="row">
								<div class="col-md-12">
										<input type="text" id="only-date-demo" class="form-control floating-label" placeholder="Select Date">
								</div>
							</div>
						</div>
					</section>
               
<h2>Shopping</h2>
                   <section id="newEventShop">
                   	<a href="http://www.ampm.co.il/map/"><img src="images/ampmlogo.png"></img></a>
                   	</p>
                   	<iframe src="http://www.ampm.co.il/map/" width="800" height="600" frameborder="0" style="border:0" allowfullscreen></iframe></section>
                   	
                   	<br>
                   	<a href="http://www.shufersal.co.il/Pages/Catalog.aspx"><img src="images/shufersalLogo.png"></img></a>
                   	</p>
                   	<iframe src="http://www.shufersal.co.il/Pages/Catalog.aspx" width="800" height="600" frameborder="0" style="border:0" allowfullscreen></iframe></section>
                   </section>
               
<h2>Personal message</h2>
                   <section id="newEventInvite">
                   	<div class="form-group">
  							<textarea class="form-control"  id="Invitation">
Hi Everybody!
I'm planning an Outdoor party this Friday at 7 pm.
The location is "Yarkon Park"
Bring snacks and drinks!
  							</textarea>
					</div>
                   </section>
               </article>
               
               <a href="events.php"><button><p>Cancel</p></button></a> 
               <a href=" sent.php"><button><p>Send</p></button></a>
           </main>
           
           <header>
           	<div class="headSection">     	         	
            <a href="events.php" ><img id="logo" src="images/Celebrit.gif" alt="celebrit logo"></img></a>
             <?php if($profile_session == NULL){
						echo "<img id='face' src='images/profiles/default.png' alt='default profile'>";             	
             		} else {
             			echo "<img id='face' src='images/profiles/".$profile_session."' alt='profile picture'>";
             		}
			 ?>		 
            	<section class="miniLogin">
           				<p>Hello <?php echo $login_session;?>,</p>  					
           				<p><a href="logout.php"> Logout </a></p>
           		</section>
           		
           	<div id="cpBtn" onclick="toggleCP()">
  				<div></div>
  				<div></div>
  				<div></div>
			</div>
			<div id="cp">
				<ul>
                <li><a href="#newEventName">  		Name			</a></li>
                <li><a href="#newEventGuests">  	Guests			</a></li>
                <li><a href="#newEventMap">  		Location		</a></li>
                <li><a href="#newEventTime">  		Date &amp; Time	</a></li>
                <li><a href="#newEventShop">  		Shopping		</a></li>
                <li><a href="#newEventInvite">  	Invitation		</a></li>
               </ul>
             </div>	
			
           		<nav>    
               <ul>
                <li><a href="invitations.php">  My Invitations  </a></li>
                <li><a href="settings.php">     My Settings     </a></li>
                <li><a href="events.php">       My Events       </a></li>
                <li><a href="shopping.php">     My Shopping     </a></li>
                <li><a href="about.php">        About           </a></li>
               </ul>
           </nav>
           </div>
          </header>
          
		</div>
		<footer>© 2017 - All Rights Reserved</footer>
    </body>    	
</html>
