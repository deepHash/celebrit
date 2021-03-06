<?php
	include("dbh.php");
	session_start();
	
	if($_SERVER["REQUEST_METHOD"] == "POST") {
	    // username and password sent from form 
	      
	    $myusername = mysqli_real_escape_string($con,$_POST['username']);
	    $mypassword = mysqli_real_escape_string($con,$_POST['password']); 
	    $sql = "SELECT id FROM tbl_users_224 WHERE username = '$myusername' AND password = '".md5($mypassword)."'";
	    $result = mysqli_query($con,$sql);
		if (!$result) {
	    	printf("Error: %s\n", mysqli_error($con));
	    exit();
		}
	    $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
	    $active = $row['active'];
		
	    $count = mysqli_num_rows($result);
	    // If result matched $myusername and $mypassword, table row must be 1 row
			
	    if($count == 1) {
	        session_register("myusername");
	        $_SESSION['login_user'] = $myusername;
	        header("location: events.php");
	    }else {
	        $error = "Your Login Name or Password is invalid <br><a href='#recover'>click here to recover password</a>";
		}
   }
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
		<meta name="viewport" content="width=device-width,initial-scale=1.0">
        <title>CELEBRIT:My Events login</title>
        <link rel="stylesheet" href="includes/styles.css">
        <!-- favi icon -->
		<link rel="icon" type="image/ico" href="images/favicon.ico">
		<script src="includes/scripts.js" type="text/javascript"></script>	
    </head>

    <body>
   		<div class="wrapper">
           <header>
           <div class="headSection">     	
            <a href="index.php" ><img id="logo" src="images/Celebrit.gif" alt="celebrit logo"></img></a>
            <img id="face" src="images/guest.png" alt="guest"></img>
            	<section class="miniLogin">
           				<p>Hello,Guest</p>  					
           				<p><a href="index.php"> Login </a></p>
           		</section>
           	
           	<div id="cpBtn">
  				<div></div>
  				<div></div>
  				<div></div>
			</div>
			<div id="cp"> some interesting info here </div>	
			</div>
           </header>
           <main>
               <h1>Login</h1>
               <p>Please login to see your events</p>
               
               <article>
                   <section id="login">
					<form action="" method="post">
                   		<p><label>Email:</label><input type="text" name="username" placeholder="Your Email"></p>
                   		<p><label>Password:	</label><input type="password" name="password" placeholder="**********"></p>
                   		<br>
                   		<button type="submit" class="submit" ></button>
                   	</form>	
                   	<span class="error"><?php echo $error; ?></span>
						<br><br>
                   		<a href="register.php">Register</a>
                   </section>
                   
               </article>
           </main>
           
		</div>
		<footer>© 2017 - All Rights Reserved</footer>
    </body>
</html>