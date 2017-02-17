<?php
	include('session.php');
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">

        <title>CELEBRIT:About</title>
        <link rel="stylesheet" href="includes/styles.css">
        <link rel="icon" type="image/ico" href="images/favicon.ico">
    </head>

    <body>
   		<div class="wrapper">
           <main>
               <h1>About</h1>
               <article>
                   <section id="login">
                   		<p>Welcome To CELEBRIT</p>
                   		<p>CELEBRIT is a site created for Shenkar</p>
                   		<p>HCI and Web App Dev Courses by Yonit Rusho</p>
               			<p>Site Created by:</p>
               			<p>Serj Romashkin - sergrom@gmail.com</p>
               			<p>Igal Tsesis - itsesisx@gmail.com</p>
                   </section>
                   
               </article>
           </main>
           
       <header>
           	<div class="headSection">     	         	
            <a href="events.php" ><img id="logo" src="images/Celebrit.gif" alt="celebrit logo">
                        
             <?php if($profile_session == NULL){echo "<img id='face' src='data/profiles/default.png' alt='default profile'>";} 
                        else {echo "<img id='face' src='data/profiles/".$profile_session."' alt='profile picture'>";}
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
			      <div id="cp"> some interesting info here </div>	
			
           <nav>    
               <ul>
                <li><a href="invitations.php">  My Invitations  </a>
                <li><a href="settings.php">     My Settings     </a>
                <li><a href="events.php">       My Events       </a>
                <li><a href="shopping.php">     My Shopping     </a>
                <li class="currentPage"><a href="about.php">        About           </a>
               </ul>
           </nav>
           </div>
           </header>
           
		</div>
		<footer>© 2017 - All Rights Reserved</footer>
    </body>
</html>
