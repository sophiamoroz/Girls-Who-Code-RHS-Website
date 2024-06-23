<!-- Put your name and year of graduation here! -->
<!-- Amesha Banjara, class of 2023 -->
<!-- Simran Saluja: fixing the formatting to be the same for all club members, adding to the Alumni Section -->
<!-- When someone edits this file, they will add their name too. -->
<!DOCTYPE html>
<html>

    <head>
        <title> Amesha Banjara </title>

	<link href="/css/bootstrap.css" type="text/css" rel="stylesheet" />
        <link rel="stylesheet" href="/css/default.css" type="text/css"/>
    </head>

    <body>
        <!-- The line below brings in the header from another file, using PHP. -->
        <?php include "../common/header.php" ?>
		<div class="bodyStyling">
			<h1 style = "text-align: center;margin-top:10px;"> Amesha Banjara, Class of 2023 </h1>
            <h2 style = "text-align: center;margin-top:10px;"> Club Member </h2>
			
			<div class="similar">
				<a href="https://www.linkedin.com/in/amesha-banjara-8719a0212/" target="_blank"><button id="sBut"> LinkedIn </button></a>
                <a href="https://github.com/ameshabanjara" target="_blank"><button id="sBut"> GitHub </button></a>
                <br> 
				
				<img src="/members/abanjara.jpg" alt="profile picture for Amesha Banjara" width="450"> 
				<!-- future: make this a pop out!; have other pictures/projects either below or behind the information pop out :) -->
				<p id="sDes"> Ever since Amesha Banjara took her first computer class in her freshman year of high school, she has been enthralled in all aspects of technology. As a member and leader of several technology-related clubs, Amesha has competed in HPE CodeWars, CyberPatriot, Mayor’s Cup, National Cyber League, National Cyber Scholarship, and was a 2021 NCWIT Regional Affiliate Winner. Within Girls Who Code, Amesha currently serves as the Club Secretary and developed the “About Us” page as well as the Member Profiles page that you’re reading right now! In the future, Amesha hopes to continue pursuing a career in Computer Science or Information Technology in order to use her knowledge to help develop and manage innovations in technology. For more information, check her out on GitHub and LinkedIn! </p>
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
