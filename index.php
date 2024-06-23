<?php 
/*

Put your name and year of graduation here!
*Melody Gill, Class of 2021
*Emily Broad, Class of 2022
*Sierra Janson, Class of 2023: 5/29/2022 fixed typo, gave fixed text spacing (more centered), added styling to header
*2023-08-30, McAdams: modified home page with notice about meeting times, also changed home page image, and max width style so it isn't huge on desktops. Also changed attribute/documentation comments like these to PHP comments, so people viewing source won't see them (no need to show the internet your business😎)
*/
/* The provided code snippet is an HTML document that serves as the homepage for the Rocklin High
School's Girls Who Code club website. It includes the necessary structure for an HTML page, such as
the doctype declaration, head section with title and CSS links, body section with content, and PHP
includes for the header and footer of the page. */

?>
<!DOCTYPE html>
<html>
    <!--This is a comment. The browser won't show it.-->
    <head>
        <title>RHS Girls Who Code</title>
        <!-- This line links the CSS file to this one.-->
		<!-- This page isn't connecting to the default css page !!!!!!!!!!!-->
	<link href="css/bootstrap.css" type="text/css" rel="stylesheet" />
    <link rel="stylesheet" href="css/default.css" type="text/css" />  
    </head>
	<body>
    <section class = "index-intro">
        <!-- The line below brings in the header from another file, using PHP. -->
        <?php include "common/header.php" ?>
		<h1 style = "text-align: center;margin-top:10px;"> Rocklin High School Girls Who Code! </h1>
		
        <!-- Your page's content begins here.-->
        <div class="bodyStyling">
			<img style = "margin-top:10px" id="clubPhoto" src="full_club_photo_2024.jpg" alt="Club Photo">
			<!-- <h1 id="pageHeader">Rocklin High School's Girls Who Code</h1> -->
			<p style="color:red; font-weight:bold;text-align:center; font-size:1.5em; margin-top:10px;">We meet on Thursdays in room J7 during Flex!</p>
			<p style="text-align:center;"> Hello there, this is the home page for the Rocklin High School chapter of Girls Who Code. </h2>
			<p style="text-align:center;">We'd love to have you join our club! </h2> 
			<p style="text-align:center;"> This website is also for anyone interested in seeing what it is we do, from computer science education to coding competitions. <u> All students are welcome</u> to participate in Girls Who Code regardless of sex or gender identity!</p>
			<p style="text-align:center;">For recruiters and admissions officers: </h2> 
			<p style="text-align:center;"> Check out our <a href="/memberprofiles.php">member profiles</a>! Feel free to explore the hard work our members have put into this website.</p>
			<p style="text-align:center;">For more information about Rocklin High School, visit the school site: <a href="https://rhs.rocklinusd.org/#">here</a></p>
		</div>
        <!-- Page content ends here.-->

        <!-- This line brings in the footer. -->
	</section>

	<section class = "index-login">
		<div class = "wrapper">
			<div class = "index-login-signup">
				<h4 style="text-align:center;margin-top:10px;">SIGN UP</h4>
				<p style="text-align:center;margin-top:10px;">Don't have an account yet? Sign up here!</p>
				<form action="includes/signup.inc.php" method="post" style="text-align:center;margin-top:10px;" id="sDes">
					<input type="text" name = "uid" placeholder="Username">
					<input type="password" name="pwd" placeholder="Password">
					<input type="password" name="pwdRepeat" placeholder="Repeat Password">
					<input type="text" name="email" placeholder="E-Mail">
					<br>
					<button type="submit" name="submit" style="text-align:center;margin-top:10px;" id="sBut">SIGN UP</button>
				</form>
			</div>
			<div class="index-login-login">
				<h4 style="margin-top:10px;text-align:center;">LOGIN</h4>
				<p style="margin-top:10px;text-align:center;">Login with your username and password here!</p>
				<form action="includes/login.inc.php" method = "post" style="margin-top:10px;text-align:center;" id="sDes">
					<input type="text" name="uid" placeholder="Username">
					<input type="password" name="pwd" placeholder="Password">
					<br>
					<button type="submit" name="submit" style="text-align:center;margin-top:10px;" id="sBut">LOGIN</button>
				</form>
			</div>
		</div>
		<div>
			<?php include "common/footer.php" ?>
		</div>
	</section>
	
	<style>
			.similar{
				margin-left: 100px;
				margin-right: 100px;				
				
			}
			#sDes{
				margin-top: 30px;
				font-size: 20px;
				background-color: rgba(13, 110, 253, 0.3);
				padding: 30px 50px;

			}
			#sBut{
				margin-bottom: 15px;
				font-weight: 600;
				pointer: cursor;
				background-color: rgba(13, 110, 253, 0.3);
				border-style: none;
				padding: 5px 10px;
				text-transform: uppercase;
				font-weight: 600;
				transition: color 0.2s ease-in, background-color 0.2s ease-in;
			}
			#sBut:hover{
				background-color: rgba(13, 110, 253, 0.6);
				color: #eee;
			}
			
			</body>


</html>
...
<!--2024-04-14 new server-->