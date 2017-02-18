<?php
	include('session.php');
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
		<meta name="viewport" content="width=device-width,initial-scale=1">
        <title>CELEBRIT:My Shopping</title>
        <link rel="stylesheet" href="includes/styles.css">
        <script src="includes/scripts.js" type="text/javascript"></script>
        <link rel="icon" type="image/ico" href="images/favicon.ico">
    </head>

    <body>
   		<div class="wrapper">
			<main>
               <h1>My Shopping</h1>
               <p>Shop near your location - Enjoy a daily coupon</p>
               
               <article>
                   <section id="shopping">
                   	<a href="http://www.ampm.co.il/map/"><img src="images/ampmlogo.png"></img></a>
                   	<p>Your Dily Coupon:</p>	<p>"CELEBRIT123"</p> <br>
                   	<a href="http://www.shufersal.co.il/Pages/Catalog.aspx"><img src="images/shufersalLogo.png"></img></a>
                   	<p>Your Dily Coupon:</p>	<p>"CELEBRIT123"</p> <br>
                   	<a href="http://www.benedict.co.il/en/"><img src="images/benedicLogo.png"></img></a>
                   	<p>Your Dily Coupon:</p>	<p>"CELEBRIT123"</p> <br>
                   	<a href="https://www.mosesrest.co.il"><img src="images/mozesLogo.png"></img></a>
                   	<p>Your Dily Coupon:</p>	<p>"CELEBRIT123"</p> <br>
                   </section>
                   
               </article>
           </main>
           
                       <header>
           	<div class="headSection">     	         	
            <a href="events.php" ><img id="logo" src="images/Celebrit.gif" alt="celebrit logo"></img></a>
             <?php if($profile_session == NULL){
						echo "<img id='face' src='data/profiles/default.png' alt='default profile'>";             	
             		} else {
             			echo "<img id='face' src='data/profiles/".$profile_session."' alt='profile picture'>";
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
                   	<p>Your Dily Coupon:</p> <p>"CELEBRIT123"</p>
			</div>	
			
           		<nav>    
               		<ul>
                		<li><a href="invitations.php">  My Invitations  </a></li>
                		<li><a href="settings.php">     My Settings     </a></li>
                		<li><a href="events.php">       My Events       </a></li>
                		<li class="currentPage"><a href="shopping.php">     My Shopping     </a></li>
                		<li><a href="about.php">        About           </a></li>
               		</ul>
           		</nav>
           </div>
          </header>
          
		</div>
		<footer>© 2017 - All Rights Reserved</footer>
    </body>
</html>
