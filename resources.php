<!-- Put your name and year of graduation here! -->
<!-- Emily Broad, class of 2022 -->
<!-- When someone edits this file, they will add their name too. -->

<!DOCTYPE html>
<html>
    <!--This is a comment. The browser won't show it.-->

    <head>
        <title>Resources</title>

        <!-- This line links the CSS file to this one.-->
	<link href="css/bootstrap.css" type="text/css" rel="stylesheet" />
        <link rel="stylesheet" href="css/default.css" type="text/css"/>
    </head>

    <body>
        <!-- The line below brings in the header from another file, using PHP. -->
        <?php include "common/header.php" ?>

        <!-- Your page's content begins here.-->
		<div class="bodyStyling">
			<h1>Resources</h1>
			<p>This page has some links to resources for learning Python, the Girls Who Code program, HPE CodeWars and HPE Interships.</p>

			<br>

			<h2>Python</h2>
			<!-- Mostly just includes links to videos about Python -->
			<ul>
				<li><a href="https://mcadams.dev">Mr. McAdams' Resources Website</a></li>
				<li><a href="https://youtu.be/U4t8AgO6wSc">Video 00: Setting Up Your Coding Environment</a></li>
				<li><a href="https://youtu.be/FCmwHFRYP_A">Video 01: Programming First Steps</a></li>
				<li><a href="https://youtu.be/skFNljJo4aY">Video 02: Basic Data Types & Program Control</a></li>
				<li><a href="https://youtu.be/wfUENYHKEys">Video 03: All About Strings</a></li>
				<li><a href="https://youtu.be/OBWnOXEG78g">Video 04: Loops & Lists</a></li>
				<li><a href="https://youtu.be/AJjbcSNgK40">Video 11: Importing External Libraries & Automatic I/O Quality Control</a></li>
				<li><a href="https://youtu.be/R-IOm-gQLsk">Video 12: Dependency Injection + Objects & Classes Review</a></li>
				<li><a href="https://www.khanacademy.org/computing">Khan Academy: Computing</a></li>
				<li>There's also a ton of sample CodeWars and other Python problems in our Github repo</li>
			</ul>

			<h2>Girls Who Code</h2>
			<ul>
				<li><a href="https://girlswhocode.com/">Girls Who Code Official Website</a></li>
				<li><a href="https://hq.girlswhocode.com/login">Girls Who Code HQ Login</a></li>
			</ul>

			<h2>HPE CodeWars</h2>
			<ul>
				<li><a href="https://codewarscentral.org/">CodeWars Central</a></li>
				<li><a href="https://codewarscentral.org/samples">CodeWars Sample Problems</a></li>
			</ul>

			<h2>HPE Interships</h2>
			<ul>
				<li><a href="https://careers.hpe.com/jobs">HPE Careers</a></li>
				<li>Make sure to search for internships in Roseville, Calif.</li>
			</ul>
			<br>
		</div>
        <!-- Page content ends here.-->

        <!-- This line brings in the footer. -->
        <?php include "common/footer.php" ?>
    </body>
</html>