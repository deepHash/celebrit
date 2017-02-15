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
           
           <nav>    
               <ul>
               	<li class="currentPage"><a href="invitations.php">	My Invitations	</a></li>
               	<li><a href="settings.php">	My Settings		</a></li>
               	<li><a href="events.php">		My Events		</a></li>
               	<li><a href="shopping.php">	My Shopping		</a></li>
               	<li><a href="about.php">		About			</a></li>
               </ul>
           </nav>
           
           <main>
               <h1>My Invitations</h1>
               
               <article>
                   <section id="myInvitations">
					<table class="tg">
					  <tr>
					    <th class="tg-2bn0">Occasion</th>
					    <th class="tg-2bn0">Guests</th>
					    <th class="tg-2bn0">Location</th>
					    <th class="tg-2bn0">Time &amp; Date</th>
					    <th class="tg-2bn0">Shopping List</th>
					  </tr>
					  <tr>
					    <td class="tg-2bn0">House Party</td>
					    <td class="tg-2bn0">3</td>
					    <td class="tg-2bn0">Your House</td>
					    <td class="tg-2bn0">18:00</td>
					    <td class="tg-2bn0"><a class="popup-with-form" href="http://www.shufersal.co.il/Pages/Catalog.aspx"><img src="images/shop.png"></img></a></td>
					  </tr>
					  <tr>
					    <td class="tg-2bn0">Outdoor Party</td>
					    <td class="tg-2bn0">4</td>
					    <td class="tg-2bn0">Yarkon</td>
					    <td class="tg-2bn0">19:30</td>
					    <td class="tg-2bn0"><a class="popup-with-form" href="http://www.shufersal.co.il/Pages/Catalog.aspx"><img src="images/shop.png"></img></a></td>
					  </tr>
					  <tr>
					    <td class="tg-2bn0">Disco Party</td>
					    <td class="tg-2bn0">10</td>
					    <td class="tg-2bn0">Moses</td>
					    <td class="tg-2bn0">21:00</td>
					    <td class="tg-2bn0"><a class="popup-with-form" href="http://www.shufersal.co.il/Pages/Catalog.aspx"><img src="images/shop.png"></img></a></td>
					  </tr>
					</table>
                   </section>
                   
               </article>
           </main>
           
		</div>
		<footer>© 2017 - All Rights Reserved</footer>
    </body>
</html>
