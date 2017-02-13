<?php
	include('session.php');
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">

        <title>CELEBRIT:Sent Invitation</title>
        <script type="text/javascript" src="includes/jquery-3.1.0.min.js"></script> 
		<script src="includes/scripts.js"></script>
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
           	
               <h1>Sent Invitation</h1>

               <article>
                   <section id="sent">
						<p>Your invitation was sent.</p>
                   </section>
                   
               </article>
               
               <a href="events.php"><button><p>back</p></button></a>
           </main>
           
		</div>
		<footer>© 2017 - All Rights Reserved</footer>
    </body>
</html>
