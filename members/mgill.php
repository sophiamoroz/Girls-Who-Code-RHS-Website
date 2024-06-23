<!-- Put your name and year of graduation here! -->
<!-- Amesha Banjara, class of 2023 -->
<!-- Simran Saluja: fixing the formatting to be the same for all club members, adding to the Alumni Section -->
<!-- When someone edits this file, they will add their name too. -->
<!DOCTYPE html>
<html>

    <head>
        <title> Melody Gill </title>

	<link href="/css/bootstrap.css" type="text/css" rel="stylesheet" />
        <link rel="stylesheet" href="/css/default.css" type="text/css"/>
    </head>

    <body>
        <!-- The line below brings in the header from another file, using PHP. -->
        <?php include "../common/header.php" ?>
		<div class="bodyStyling">
			<h1 style = "text-align: center;margin-top:10px;"> Melody Gill, Class of 2023 </h1>
            <h2 style = "text-align: center;margin-top:10px;"> Vice-President </h2>
			
			<div class="similar">
				<a href="https://www.linkedin.com/in/melody-gill" target="_blank"><button id="sBut"> LinkedIn </button></a>
                <a href="https://github.com/melodygill" target="_blank"><button id="sBut"> GitHub </button></a>
                <br> 
				
				<img src="/members/mgill.jpg" alt="profile picture for Melody Gill" width="450"> 
				<!-- future: make this a pop out!; have other pictures/projects either below or behind the information pop out :) -->
				<p id="sDes"> Ever since she began learning Python in sixth grade, Melody Gill has been interested in computer science. Since then, Melody has learned Java and started learning PHP. She also has had experience in the field with a Hewlett Packard Enterprise internship. As the project manager of her Girls Who Code club, she is responsible for planning the website you're currently reading, as well as creating the login system. Melody plans to attend UC San Diego with a major in Computer Science in the class of 2025! Learn more about Melody through her links above! </p>
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
