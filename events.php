<?php
	include('session.php');
	$sql = "SELECT * FROM tbl_event_224 WHERE user_id = '$id_session' ";
	$events_result = mysqli_query($con,$sql);
	$count = mysqli_num_rows($events_result);
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
		<meta name="viewport" content="width=device-width,initial-scale=1">
        <title>CELEBRIT:My Events</title>
        <script type="text/javascript" src="includes/jquery-3.1.0.min.js"></script> 
		<script src="includes/scripts.js"></script>
   		<link rel="stylesheet" href="includes/styles.css">
		<link rel="icon" type="image/ico" href="images/favicon.ico">
     </head>

     <body>
   		<div class="wrapper">
           <main>
               <h1>My Events</h1>
               <article>
                   <section id="myEvents">
					<table class="tg">
							<?php
								if ($count > 0){
									echo 
									 "<tr>
						    			<th class='tg-2bn0'>Occasion</th>
						    			<th class='tg-2bn0'>Guests</th>
						    			<th class='tg-2bn0'>Location</th>
						    			<th class='tg-2bn0'>Time &amp; Date</th>
						    			<th class='tg-2bn0'>Shopping List</th>
						  			  </tr>";
						  	
						  			while($row = $events_result->fetch_assoc()) {
						  				echo "<tr>";
										echo "<td class='tg-2bn0'>".$row['type']."</td>";
										echo "<td class='tg-2bn0'>".$row['guests']."</td>";
										echo "<td class='tg-2bn0'>".$row['location']."</td>";
										echo "<td class='tg-2bn0'>".$row['date']."</td>";
										echo "<td class='tg-2bn0'><button class='myBtn'><img src='images/shop.png'></img></button></td></td>";
										echo "</tr>";
								}//end loop
									
						  		}else{
						  			echo "You have not created any events yet, press the button bellow to start";
						  		}
								?>
					</table>
                   </section>
               </article>
							<div id="myModal" class="Mmodal">
								<div class="modal-content">
									<span id="close">&times;</span><p>Your Shopping List:</p>
									<table class="tg">
					  					<tr>
					    					<th>Guest</th>
					    					<th>Shop</th>
					    				</tr>
					    				<tr>
					    					<td>Mor</td>
					    					<td>Wine</td>
					    				</tr>
					    		</table>
								</div>	
							</div>
               
               <a href="newEvent.php"><button><p>Create New Event</p></button></a>
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
                <li class="currentPage"><a href="events.php">       My Events       </a></li>
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
