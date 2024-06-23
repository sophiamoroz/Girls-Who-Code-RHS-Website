<!-- Put your name and year of graduation here! -->
<!-- Sierra Janson, Class of 2023 -->
<!-- When someone edits this file, they will add their name too. 
5/23/2022
-->

<!DOCTYPE html>
<html>

    <head>
        <title>Sierra Janson</title>

	<link href="/css/bootstrap.css" type="text/css" rel="stylesheet" />
        <link rel="stylesheet" href="/css/default.css" type="text/css"/>
    </head>

    <body>
        <!-- The line below brings in the header from another file, using PHP. -->
        <?php include "../common/header.php" ?>
		<div class="bodyStyling">
			<h1 style = "text-align: center;margin-top:10px;"> Sierra Janson, Class of 2023 </h1>
			<h2 style = "text-align: center;margin-top:10px;"> Co-President </h2>
			
			<div class="similar">
				<a href="https://www.linkedin.com/in/sierra-janson-06175b216/" target="_blank"><button id="sLin"> LinkedIn </button></a>
				<br>
				<!-- eventually will have a <button> Discord Contact --> 
				
				<img src="/members/sjanson.jpg" alt="profile picture for Sierra Janson" width="450"> 
				<!-- future: make this a pop out!; have other pictures/projects either below or behind the information pop out :) -->
				<p id="sDes"> Sierra is currently Co-President of Rocklin High School Girls Who Code! In my free time, 
				I repair chromebooks for the Rocklin Unified District, compete in cybersecurity competitions with friends
				(2nd in California + 4th in the US for CyberPatriot in 2022), study French, play chess, hurdle for Varsity track, play the guitar, and study programming of course! ._> </p>
			</div>
		</div>
		<!-- this is temporary no worries o__o -->
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
			#sLin{
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
			#sLin:hover{
				background-color: rgba(13, 110, 253, 0.6);
				color: #eee;
			}
		</style>
        <!-- This line brings in the footer. -->
        <?php include "../common/footer.php" ?>
    </body>
</html>