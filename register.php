<?php
	session_start();
	if(isset($_SESSION['username'])) {
		header("Location: index.php");
	}
	include("dbh.php");
	
	//error flag
	$error = false;
	if($_SERVER["REQUEST_METHOD"] == "POST"){ 
		//check for submission
		if (isset($_POST['signup'])) {
			$first_name = mysqli_real_escape_string($con, $_POST['first_name']);
			$last_name = mysqli_real_escape_string($con, $_POST['last_name']);
			$email = mysqli_real_escape_string($con, $_POST['email']);
			$password = mysqli_real_escape_string($con, $_POST['password']);
			$cpassword = mysqli_real_escape_string($con, $_POST['cpassword']);
			$picture = $_FILES['file']['name'];
			 
			
			//name can contain only alphabet characters
		    if (!preg_match("/^[a-zA-Z ]+$/",$first_name)) {
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
		    if(strlen($password) < 4) {
		        $error = true;
		        $password_error = "Password must be minimum of 4 characters";
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
		            $successmsg = "Successfully Registered! <a href='index.php'>Click here to Login</a>";
		        } else {
		            $errormsg = "Error in registering...Please try again later!";
		        }
		    }
		}
	}	
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">

        <title>CELEBRIT: Register</title>
        <link rel="stylesheet" href="includes/styles.css">
        <!-- favi icon -->
		<link rel="icon" type="image/ico" href="images/favicon.ico">

    </head>

    <body>
   		<div class="wrapper">
           <main>
               <h1>Register</h1>
               <p>Please fill the following details to register to CELEBRIT</p>           
               <fieldset>
                   <section id="login">
					<form id="registerForm" action="" method="post" name="register" enctype="multipart/form-data">
						<p>
							<label>First Name<span class="redStar">*</span></label>
							<input type="text" name="first_name" required value="<?php if ($error) echo $first_name; ?>" />
							<span class="error"><? if (isset($firstName_error)) echo $firstName_error; ?></span>	
						</p>
						<p>
							<label>Last Name<span class="redStar">*</span></label>
							<input type="text" name="last_name" required value="<?php if ($error) echo $last_name; ?>" />
							<span class="error"><? if (isset($lastName_error)) echo $lastName_error; ?></span>	
						</p>
						<p>
							<label>Email<span class="redStar">*</span></label>
							<input type="text" name="email" required value="<?php if ($error) echo $email; ?>" />
							<span class="error"><? if (isset($email_error)) echo $email_error; ?></span>	
						</p>
						<p>
							<label>Password<span class="redStar">*</span></label>
							<input type="password" name="password"/>
							<span class="error"><? if (isset($password_error)) echo $password_error; ?></span>	
						</p>
						<p>
							<label>Confirm Password<span class="redStar">*</span></label>
							<input type="password" name="cpassword" />
							<span class="error"><? if (isset($cpassword_error)) echo $cpassword_error; ?></span>	
						</p>
						<p>
							<label>Profile Picture</label>
							<input type="file" name="file" title=" "/>
							<span class="error"><? if (isset($picture_error)) echo $picture_error; ?></span>
						</p>
						<br>
						<input type="submit" name="signup"></input>

					</form>
					<?php if (isset($successmsg)) { echo $successmsg; } ?>
					<?php if (isset($errormsg)) { echo $errormsg; } ?>
                   </section>
                   
               </fieldset>
           </main>
           
           <header>
           <div class="headSection">     	
            <a href="index.php" ><img id="logo" src="images/Celebrit.gif" alt="celebrit logo"></img></a>
			</div>
           </header>
           
		</div>
		<footer>© 2017 - All Rights Reserved</footer>
    </body>
</html>