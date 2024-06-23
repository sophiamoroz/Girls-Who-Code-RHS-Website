<!-- Put your name and year of graduation here!-->
<!-- Melody Gill, Class of 2021 -->
<!-- Emily Broad, Class of 2022 -->
<!-- Sierra Janson, Class of 2023: 5/29/2022 fixed typo, gave fixed text spacing (more centered), added styling to header-->
<!-- Simran Saluja, Class of 2025: 6/5/24 fixed some formatting issues and making this official home page.-->
<!-- When someone edits this file, they will add their name too.-->

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
        
        <!-- club photo from Spring 2022 -->
        <img id="clubPhoto" src="clubphoto.jpg" alt="Spring 2021 Club Photo">
		<h1 id="pageHeader">Rocklin High School's Girls Who Code</h1>
        <br>
		<div id="textSpacing">
			<p>Hello there, this is the home page for the Rocklin High School chapter of Girls Who Code, an international organization with the goal of closing the gender gap in the computer science industry.</p>
			<p>We'd love to have you join our club!</p>
            <p>This website is also for anyone interested in seeing what it is we do, from computer science education to coding competitions. All students are welcome to participate in Girls Who Code regardless of sex or gender identity.</p>
			<p>heck out our <a href="/memberprofiles.php">member profiles</a>! Feel free to explore the hard work our members have put into this website.</p>
			<p>For more information about Rocklin High School, visit the school site: <a href="https://rhs.rocklinusd.org/#">here</a></p>
        </div>
        <!-- Page content ends here.-->

        <!-- This line brings in the footer. -->
		<div>
			<?php include "common/footer.php" ?>
		</div>
    </body>
</html>