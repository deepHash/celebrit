<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">

        <title>CELEBRIT:My Events login</title>
        <link rel="stylesheet" href="includes/styles.css">
        <!-- favi icon -->
		<link rel="icon" type="image/ico" href="images/favicon.ico">

    </head>

    <body>
   		<div class="wrapper">
           <header>     	
            <a href="index.html" ><img id="logo" src="images/Celebrit.gif" alt="celebrit logo"></img></a>
            <img id="face" src="images/guest.png" alt="guest"></img>
            	<section class="miniLogin">
           				<p>Hello,Guest</p>  					
           				<p><a href="index.html"> Login </a></p>
           		</section>
           </header>
           
           <nav>    
               <ul>
               	<li><a href="invitations.html">	My Invitations	</a></li>
               	<li><a href="settings.html">	My Settings		</a></li>
               	<li><a href="events.html">		My Events		</a></li>
               	<li><a href="shopping.html">	My Shopping		</a></li>
               	<li><a href="about.html">		About			</a></li>
               </ul>
           </nav>
           
           <main>
               <h1>Login</h1>
               <p>Please login to see your events</p>
               
               <article>
                   <section id="login">
					<form action="events.html" method="post">
                   		<p><label>User Name:</label><input type="text" required name="userName" value="" placeholder="User Name"></p>
                   		<p><label>Password:	</label><input type="password" required name="Password" value="" placeholder="your Password *****"></p>
                   		<button type="submit" class="submit" ></button>
                   	</form>	
						<br><br>
                   		<a href="#recover">	Recover Password</a>
                   		<br>
                   		<a href="#register">Register</a>
                   </section>
                   
               </article>
           </main>
           
		</div>
		<footer>© 2017 - All Rights Reserved</footer>
    </body>
</html>