<?php
	include('session.php');
	//error flag
	$error = false;
	
	//check for submission
	if (isset($_POST['personal'])) {
		$first_name = mysqli_real_escape_string($con, $_POST['first_name']);
		$last_name = mysqli_real_escape_string($con, $_POST['last_name']);
		$email = mysqli_real_escape_string($con, $_POST['email']);
		$opassword = mysqli_real_escape_string($con, $_POST['opassword']); //old password
		$npassword = mysqli_real_escape_string($con, $_POST['npassword']); //new password
		$cpassword = mysqli_real_escape_string($con, $_POST['cpassword']); //confirm password
		$picture = $_FILES['file']['name'];
	}
	
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">

        <title>CELEBRIT:My Settings</title>
        <link rel="stylesheet" href="includes/styles.css">
        <link rel="icon" type="image/ico" href="images/favicon.ico">
    </head>

    <body>
   		<div class="wrapper">
   			
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
           
           <main>
               <h1>My Settings</h1>
               <fieldset>
               	<legend>Edit your personal Info</legend>
               	<section id="settings">
               	<form action="" method="POST" enctype="multipart/form-data">
               		<p>
               			<label>First Name:</label>
               			<input type="text" name="first_name"/>
               		</p>
               		<p>
               			<label>Last Name:</label>
               			<input type="text" name="first_name"/>
               		</p>
               		<p>
               			<label>Email:</label>
               			<input type="text" name="first_name"/>
               		</p>
               		<p>
               			<label>Current Password:</label>
               			<input type="password" name="opassword"/>
               		</p>    
               		<p>
               			<label>New Password:</label>
               			<input type="password" name="npassword"/>
               		</p> 
               		<p>
               			<label>Confirm Password:</label>
               			<input type="password" name="cpassword"/>
               		</p>
               		<p>
               			<label>Profile Picture</label>
						<input type="file" name="file" title=" "/>
               		</p>
               		<br>
					<button type="submit" name="personal" class="submit" ></button>                		               		        
               	</form>
               	</section>
               </fieldset>
               <fieldset>
               	<legend>Edit your Preferences</legend>
               	<section id="settings"></section>
               	<form action="" method="POSt" enctype="multipart/form-data">
               		
               	</form>
               </fieldset>
               
               <article>
                   <section id="info">

                   </section>
                   
               </article>
           </main>
           
		</div>
		<footer>© 2017 - All Rights Reserved</footer>
    </body>
</html>
