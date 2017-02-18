<?php
	include('session.php');
	//error flag
	$error = false;
	
	//selectBox
	$sql = "SELECT * FROM tbl_event_224 WHERE user_id = '$id_session' ";
	$result = mysqli_query($con, $sql);
	

	
	//check for submission
	if (isset($_POST['personal'])) {
		$first_name = mysqli_real_escape_string($con, $_POST['first_name']);
		$last_name = mysqli_real_escape_string($con, $_POST['last_name']);
		$email = mysqli_real_escape_string($con, $_POST['email']);
		$opassword = mysqli_real_escape_string($con, $_POST['opassword']); //old password
		$npassword = mysqli_real_escape_string($con, $_POST['npassword']); //new password
		$cpassword = mysqli_real_escape_string($con, $_POST['cpassword']); //confirm password
		$picture = $_FILES['file']['name'];
		
		//password value
		$sql = "SELECT * FROM tbl_user_224 WHERE id = '$id_session' AND password = '".md5($mypassword)."'";
		$password_result = mysqli_query($con, $sql);
		$rightPass = mysqli_num_rows($password_result);
			 
		//name can contain only alphabet characters
		if (!preg_match("/^[a-zA-Z ]+$/",$first_name) && $first_name!="") {
			$error = true;
			$firstName_error = "Name must contain only alphabet characters";
		}
		if (!preg_match("/^[a-zA-Z ]+$/",$last_name)) {
		    $error = true;
		    $lastName_error = "Last name must contain only alphabet letters";
		}
		if(!filter_var($email,FILTER_VALIDATE_EMAIL)) {
		    $error = true;
		    $email_error = "Please enter a valid eMail";
		}
		if($rightPass != 1){
			$error = true;
			$opassword_error = "Wrong password, please try again";
		}
		if(strlen($npassword) < 4) {
		    $error = true;
		    $npassword_error = "Password must be minimum of 4 characters";
		}
		if($password != $cpassword) {
		    $error = true;
		    $cpassword_error = "Password and Confirm Password doesn't match";
		}
		if($_FILES['file']['size'] > 500000){
			$error = true;
			$picture_error = "The file size is too large must be under 500KB";
		}
		if (!$error) {
		   if ($picture){
		    	move_uploaded_file($_FILES['file']['tmp_name'],"images/profiles/".$picture);
				$sql = "INSERT INTO tbl_users_224(username,first_name,last_name,password,profile) VALUES('" . $email . "', '" . $first_name . "', '" . $last_name . "', '" . md5($password) . "','". $picture ."')";
		    } else{
		    	$sql = "INSERT INTO tbl_users_224(username,first_name,last_name,password) VALUES('" . $email . "', '" . $first_name . "', '" . $last_name . "', '" . md5($password) . "')";	
		    }
		    if(mysqli_query($con, $sql)) {
		        $successmsg = "Successfully changed the info";
		    } else {
		        $errormsg = "Error in changing...try again later please";
		    }
		 }
	}	
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
<<<<<<< HEAD
		<meta name="viewport" content="width=device-width,initial-scale=1">
=======
		<meta name="viewport" content="width=device-width,initial-scale=1.0">
>>>>>>> 4985c82743170e7a831e9cddfdee3e5916b967f9
        <title>CELEBRIT:My Settings</title>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
        <link rel="stylesheet" href="includes/styles.css">
        <script type="text/javascript">var username = "<?= $user_check ?>";</script>
        <script src="includes/settings.js" type="text/javascript"></script>
        <script src="includes/scripts.js" type="text/javascript"></script> 
        <link rel="icon" type="image/ico" href="images/favicon.ico">
    </head>
    <body>
   		<div class="wrapper">
           <main>
               <h1>My Settings</h1>
               <section id="settings">
               <fieldset>
               	<legend>Edit your personal Info</legend>               	
               	<form id="changeInfo" action="" method="POST" enctype="multipart/form-data">
               		<p>
               			<label>First Name:</label>
               			<input type="text" name="first_name"/>
               			<span class="error"><? if (isset($firstName_error)) echo $firstName_error; ?></span>
               		</p>
               		<p>
               			<label>Last Name:</label>
               			<input type="text" name="first_name"/>
               			<span class="error"><? if (isset($lastName_error)) echo $lastName_error; ?></span>
               		</p>
               		<p>
               			<label>Email:</label>
               			<input type="text" name="first_name"/>
               			<span class="error"><? if (isset($email_error)) echo $email_error; ?></span>
               		</p>
               		<p>
               			<label>Current Password:</label>
               			<input type="password" name="opassword"/>
               			<span class="error"><? if (isset($opassword_error)) echo $opassword_error; ?></span>	
               		</p>    
               		<p>
               			<label>New Password:</label>
               			<input type="password" name="npassword"/>
               			<span class="error"><? if (isset($password_error)) echo $password_error; ?></span>	
               		</p> 
               		<p>
               			<label>Confirm Password:</label>
               			<input type="password" name="cpassword"/>
               			<span class="error"><? if (isset($cpassword_error)) echo $cpassword_error; ?></span>
               		</p>
               		<p>
               			<label>Profile Picture</label>
						<input type="file" name="file" title=" "/>
						<span class="error"><? if (isset($picture_error)) echo $picture_error; ?></span>
               		</p>
               		<br>
					<input type="submit" name="personal" value="Update"></input>            		               		        
               	</form>
               	
               </fieldset>
               <fieldset>
               	<legend>Edit your Preferences</legend> 
               	<form id="changePreference" action="" method="post" enctype="multipart/form-data">
               		<p>
               			<label>Specific Event</label>
               			<!--write updateCheckBox function to select the type option and update the checkboxes -->
               			<select name="eventType" id="eventType" onchange="return updateCheckBox();"> 
               				<?php while($row = mysqli_fetch_array($result)):;?>
               				<option><?php echo $row[2]; ?></option>
               				<?php endwhile;?>
               			</select>
               		</p>
               		<p>
               			<label>Shopping</label>
               			<input type="checkbox" id="shopping"/>
               		</p>
               		<p>
               			<label>Coupons</label>
               			<input type="checkbox" id="coupons" />
               		</p>
               		<br>
               		<input type="submit" name="preference" value="Update"></input>
               	</form>
               </fieldset>

              </section>
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
           		
           	<div id="cpBtn">
  				<div></div>
  				<div></div>
  				<div></div>
			</div>
			<div id="cp"> some interesting info here </div>	
			
           		<nav>    
               		<ul>
                		<li><a href="invitations.php">  My Invitations  </a></li>
                		<li class="currentPage"><a href="settings.php">     My Settings     </a></li>
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
