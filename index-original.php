<?php 
/*
Put your name and year of graduation here!
*Melody Gill, Class of 2021
*Emily Broad, Class of 2022
*Sierra Janson, Class of 2023: 5/29/2022 fixed typo, gave fixed text spacing (more centered), added styling to header
*2023-08-30, McAdams: modified home page with notice about meeting times, also changed home page image, and max width style so it isn't huge on desktops. Also changed attribute/documentation comments like these to PHP comments, so people viewing source won't see them (no need to show the internet your business😎)
*/
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
        <!-- The line below brings in the header from another file, using PHP. -->
        <?php include "common/header.php" ?>
		
        <!-- Your page's content begins here.-->
        <div class="bodyStyling">
			<!-- club photo from Spring 2022 -->
			<img id="clubPhoto" src="clubphoto.jpg" alt="Spring 2021 Club Photo">
			<!-- <h1 id="pageHeader">Rocklin High School's Girls Who Code</h1> -->
			<p style="color:red; font-weight:bold;text-align:center; font-size:1.5em; margin-top:10px;">We meet on Fridays in room J7 during Flex Time!</p>
			<br>
			<div id="textSection">
					<!-- <h1> closing the gender gap in the computer science industry </h1> -->
				<div id="textSpacing">
					<h2>Hello there, this is the home page for the Rocklin High School chapter of Girls Who Code. </h2>
					<h2>We'd love to have you join our club! </h2> 
						<p> This website is also for anyone interested in seeing what it is we do, from computer science education to coding competitions. <u> All students are welcome</u> to participate in Girls Who Code regardless of sex or gender identity!</p>
					<h2>For recruiters and admissions officers: </h2> 
						<p> Check out our <a href="/memberprofiles.php">member profiles</a>! Feel free to explore the hard work our members have put into this website.</p>
						<p>For more information about Rocklin High School, visit the school site: <a href="https://rhs.rocklinusd.org/#">here</a></p>
				</div>
			</div>
		</div>
        <!-- Page content ends here.-->

        <!-- This line brings in the footer. -->
		<div>
			<?php include "common/footer.php" ?>
		</div>

    </body>
</html>