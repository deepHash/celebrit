<?php
	include('session.php');
	
			//check for submission
	if (isset($_POST['personal'])) {
		$first_name = mysqli_real_escape_string($con, $_POST['first_name']);
		$email = mysqli_real_escape_string($con, $_POST['email']);
	}
	
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
		<meta name="viewport" content="width=device-width,initial-scale=1">
        <title>CELEBRIT:About</title>
        <link rel="stylesheet" href="includes/styles.css">
        <script src="includes/scripts.js" type="text/javascript"></script>
        <link rel="icon" type="image/ico" href="images/favicon.ico">
    </head>

    <body>
   		<div class="wrapper">
           <main>
               <h1>About</h1>
               <article>
                   <section>
                   		<p>Welcome To CELEBRIT</p>
                   		<p>CELEBRIT is a site created for Shenkar</p>
                   		<p>HCI and Web App Dev Courses by Yonit Rusho</p>
               			<p>Site Created by:</p>
               			<p>Serj Romashkin - sergrom@gmail.com</p>
               			<p>Igal Tsesis - itsesisx@gmail.com</p>
                   </section>
                   
                   <h2>Contact Us</h2>
                   <section id="login">
                   		<p>CELEBRIT is always improving - give us your tips and advice</p>
                   		
                   			<form method="post" action="mailer.php" name="mail" id="contactForm">
									<p><label>Your Name:</label>
									<input  id="field" type="text" 	name="name"  id="name" 	placeholder="name" value="<?php if ($error) echo $first_name; ?>">
									<span class="error"><? if (isset($firstName_error)) echo $firstName_error; ?></span>
			</p><br>
									<p><label>Email:</label></p>
									<input id="field" type="text" 	name="email"  id="email" 	placeholder="mail" value="<?php if ($error) echo $email; ?>">
									<span class="error"><? if (isset($email_error)) echo $email_error; ?></span>	
			</p><br>
									<p><label>Please choose type for the message:</label>
				<br>
									<select id="field" name="issue" form="form1">
			</p><br>
										<option name="issue" id="issue" value="an Error">			Error		</option>
										<option name="issue" id="issue" value="a Malfunction">		Malfunction	</option>
										<option name="issue" id="issue" value="an Advice">			Advice		</option>
										<option name="issue" id="issue" value="a Tip">				a Tip		</option>
										<option name="issue" id="issue" value="a Thank you note">	Thank you	</option>
									</select>
			</p><br>					
									<p><label>Your message:</label>
									<input id="field" type="text" 	name="subject"  id="subject" 	placeholder="subject" value="subject">
			</p><br>
									<input style="height:25%;width:80%;top:0px;margin-bottom:-20px;" type="text" 	name="message"  id="message">
			</p><br>
									<input type=submit value="Send"></input>
							</form>
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
           		
           	<div id="cpBtn">
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
