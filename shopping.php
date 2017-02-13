<?php
	include('session.php');
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">

        <title>CELEBRIT:My Events</title>
        <link rel="stylesheet" href="includes/styles.css">
        <link rel="icon" type="image/ico" href="images/favicon.ico">
    </head>

    <body>
   		<div class="wrapper">
           <header>     	
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
           </header>
           </header>
           
           <nav>    
               <ul>
               	<li><a href="invitations.php">	My Invitations	</a></li>
               	<li><a href="settings.php">	My Settings		</a></li>
               	<li><a href="events.php">		My Events		</a></li>
               	<li><a href="shopping.php">	My Shopping		</a></li>
               	<li><a href="about.php">		About			</a></li>
               </ul>
           </nav>
           
           <main>
               <h1>My Shopping</h1>
               <p>Shop near your location</p>
               
               <article>
                   <section id="shopping">
                   	<a href="http://www.ampm.co.il/map/"><img src="images/ampmlogo.png"></img></a>
                   	</p>
                   	<iframe src="http://www.ampm.co.il/map/" width="800" height="600" frameborder="0" style="border:0" allowfullscreen></iframe></section>
                   	
                   	<br>
                   	<a href="http://www.shufersal.co.il/Pages/Catalog.aspx"><img src="images/shufersalLogo.png"></img></a>
                   	</p>
                   	<iframe src="http://www.shufersal.co.il/Pages/Catalog.aspx" width="800" height="600" frameborder="0" style="border:0" allowfullscreen></iframe></section>
                   </section>
                   
               </article>
           </main>
           
		</div>
		<footer>© 2017 - All Rights Reserved</footer>
    </body>
</html>
