<!-- Put your name and year of graduation here! -->
<!-- Simran Saluja, Class of 2025 -->
<!-- When someone edits this file, they will add their name too. 
4/21/24
-->

<!DOCTYPE html>
<html>

    <head>
        <title> Simran Saluja </title>

	<link href="/css/bootstrap.css" type="text/css" rel="stylesheet" />
        <link rel="stylesheet" href="/css/default.css" type="text/css"/>
    </head>

    <body>
        <!-- The line below brings in the header from another file, using PHP. -->
        <?php include "../common/header.php" ?>
		<div class="bodyStyling">
			<h1 style = "text-align: center;margin-top:10px;"> Simran Saluja, Class of 2025 </h1>
            <h2 style = "text-align: center;margin-top:10px;"> Vice-President </h2>
			
			<div class="similar">
				<a href="https://www.linkedin.com/in/simran-saluja-a4bb0622a/" target="_blank"><button id="sBut"> LinkedIn </button></a>
                <a href="https://github.com/simranxxsaluja" target="_blank"><button id="sBut"> GitHub </button></a>
                <br> 
				
				<img src="/members/ssaluja.png" alt="profile picture for Simran Saluja" width="450"> 
				<!-- future: make this a pop out!; have other pictures/projects either below or behind the information pop out :) -->
				<p id="sDes"> Simran is currently Vice President for Girls Who Code! In her free time, she enjoys reading, debating, volunteering (runs her own women's rights youth organization called The Optimism Project), and coding of course! Learn more about her through her LinkedIn and Github pages above! </p>
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