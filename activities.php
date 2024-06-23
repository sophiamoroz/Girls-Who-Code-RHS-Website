<!-- Put your name and year of graduation here!-->
<!-- Example: Melody Gill, class of 2021-->
<!-- When someone edits this file, they will add their name too.-->

<!DOCTYPE html>
<html>
    <!--This is a comment. The browser won't show it.-->

    <head>
        <title>Activities</title>

        <!-- This line links the CSS file to this one.-->
	<link href="css/bootstrap.css" type="text/css" rel="stylesheet" />
        <link href="css/default.css" type="text/css" rel="stylesheet" />
    </head>

    <body>
        <!-- The line below brings in the header from another file, using PHP. -->
        <?php include "common/header.php" ?>

        <!-- Your page's content begins here.-->
		<div class="bodyStyling">
			<h1>Activities</h1>
			<p>Over the past few years, RHS Girls Who Code has had guest speakers, gone on field trips and volunteered throughout the Rocklin community
			in an effort to stay involved and promote computer science education while sharing new experiences together as a club. Most recently, we went
			on a field trip to the Google headquarters in the Bay Area!</p>
			
			<ul>
				<li><a href="/activities/google_field_trip.php">Google field trip</a></li>
				<li><a href="/activities/hpe.php">HPE field trip</a></li>
				<li><a href="/activities/computer_build_project.php"> Building a Computer! (WIP) </a> </li>
				<!-- <a href="/activities/arduinovolunteering.php">Arduino Volunteering</a> -->
			</ul>
		</div>
        <!-- Page content ends here.-->

        <!-- This line brings in the footer. -->
        <?php include "common/footer.php" ?>
    </body>
</html>