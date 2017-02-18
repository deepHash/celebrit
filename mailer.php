<?php

include('session.php');
	//error flag
	$error = false;
	
	//

		
// The message
$name = $_POST["name"];
$issue = $_POST["issue"];
$email = $_POST["email"];
$message = $_POST["message"];
$headers = "From: $email\r\n";
$headers .= "Content-type: text/html\r\n";
$txt = 'From: ' . $name . ' on the topic of ' . $issue . '  , in Celebrit Web-Site. ' . "\n" .
'you can write them back at:' . $email . "<p></p>\n" . '  the message is:   ' . $message;

$subject = $_POST["subject"];
// In case any of our lines are larger than 70 characters, we should use wordwrap()
$txt = wordwrap($txt, 70, "\r\n");
//mail to:
// Send
mail("sergrom@gmail.com", $subject, $txt ,$headers);
mail("itsesisx@gmail.com", $subject, $txt ,$headers);
?>


<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
		<meta name="viewport" content="width=device-width,initial-scale=1.0">
        <title>CELEBRIT:Sent contact us</title>
        <script type="text/javascript" src="includes/jquery-3.1.0.min.js"></script> 
		<script src="includes/scripts.js"></script>
   		<link rel="stylesheet" href="includes/styles.css">
		<link rel="icon" type="image/ico" href="images/favicon.ico">
    </head>

     <body>
   		<div class="wrapper">
           <main>
               <h1>Sent "Contact Us"</h1>

               <article>
                   <section id="sent">
						<p>Your message was sent to the developer team.</p>
						<p>Thank you!</p>
                   </section>
                   
               </article>
               
               <a href="about.php"><button><p>back</p></button></a>
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
           		
           	<div id="cpBtn">
  				<div></div>
  				<div></div>
  				<div></div>
			</div>
			<div id="cp"> some interesting info here </div>	
			
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