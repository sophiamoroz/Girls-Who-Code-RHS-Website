<!-- Put your name and year of graduation here! -->
<!-- Emily Broad, class of 2022 -->
<!-- Amesha Banjara, class of 2023 -->
<!-- Simran Saluja: fixing the formatting to be the same for all club members, adding to the Alumni Section -->
<!-- When someone edits this file, they will add their name too. -->

<!DOCTYPE html>
<html>

    <head>
        <title> Emily Broad </title>

	<link href="/css/bootstrap.css" type="text/css" rel="stylesheet" />
        <link rel="stylesheet" href="/css/default.css" type="text/css"/>
    </head>

    <body>
        <!-- The line below brings in the header from another file, using PHP. -->
        <?php include "../common/header.php" ?>
		<div class="bodyStyling">
			<h1 style = "text-align: center;margin-top:10px;"> Emily Broad, Class of 2022 </h1>
            <h2 style = "text-align: center;margin-top:10px;"> Club Member </h2>
			
			<div class="similar">
				<a href="https://www.linkedin.com/in/emily-broad-819833210/" target="_blank"><button id="sBut"> LinkedIn </button></a>
                <a href="https://github.com/embroad" target="_blank"><button id="sBut"> GitHub </button></a>
                <br> 
				
				<img src="/members/ebroad.jpg" alt="profile picture for Emily Broad" width="450"> 
				<!-- future: make this a pop out!; have other pictures/projects either below or behind the information pop out :) -->
				<p id="sDes"> Emily first started Girls Who Code after discovering her love for problem solving and computer science during her freshman year at Rocklin High School. As the president of the Rocklin High School Girls Who Code, Emily says that her introduction to computer science stemmed from her dad who used to be a computer science/mathematics professor. She enjoys programming mainly because of the connection it has to math and how it brings like-minded people together within the club. Over the years, Emily has participated in HPE CodeWars, learned to code in Python, and even has some experience in C! Outside of Girls Who Code, she also enjoys applying her computer science based problem solving skills to helping student athletes through the Sports Medicine Program at RHS. For more information, check out her GitHub and LinkedIn above! </p>
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