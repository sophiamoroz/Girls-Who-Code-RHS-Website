<!-- Put your name and year of graduation here! -->
<!-- Amesha Banjara, class of 2023 -->
<!-- Sunny Liu: updating my info (5/22/2022) -->
<!-- Simran Saluja: fixing the formatting to be the same for all club members, adding Sunny to the Alumni Section -->
<!-- When someone edits this file, they will add their name too. -->

<!DOCTYPE html>
<html>

    <head>
        <title> Sunny Liu </title>

	<link href="/css/bootstrap.css" type="text/css" rel="stylesheet" />
        <link rel="stylesheet" href="/css/default.css" type="text/css"/>
    </head>

    <body>
        <!-- The line below brings in the header from another file, using PHP. -->
        <?php include "../common/header.php" ?>
		<div class="bodyStyling">
			<h1 style = "text-align: center;margin-top:10px;"> Sunny Liu, Class of 2023 </h1>
            <h2 style = "text-align: center;margin-top:10px;"> Co-President </h2>
			
			<div class="similar">
				<a href="https://www.linkedin.com/in/liu-sunny" target="_blank"><button id="sBut"> LinkedIn </button></a>
                <a href="https://github.com/SunnyCLiu" target="_blank"><button id="sBut"> GitHub </button></a>
                <br> 
				
				<img src="/members/sliu.jpg" alt="profile picture for Sunny Liu" width="450"> 
				<!-- future: make this a pop out!; have other pictures/projects either below or behind the information pop out :) -->
				<p id="sDes"> Sunny Liu was formerly the Co-President and a Tutor within the Girls Who Code club. She helped make the HTML and developed the main CSS of the website you’re reading right now! In her free time, Sunny loves to work on community service projects, code games and programs, swim, play the piano, and hang out with friends. Learn more about Sunny through her GitHub and LinkedIn above! </p>
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
            
		</style>
        <!-- This line brings in the footer. -->
        <?php include "../common/footer.php" ?>
    </body>
</html>