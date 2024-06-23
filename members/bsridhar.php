<!-- Sierra Janson, Class of 2023 -->
<!-- Simran Saluja: fixing the formatting to be the same for all club members -->
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

        <!-- Your page's content begins here.-->
		<div class="bodyStyling">
			<h1 style = "text-align: center;margin-top:10px;"> Bhavya Sridhar, Class of 2025 </h1>
			<h2 style = "text-align: center;margin-top:10px;"> President </h2>
			
			<div class="similar">
				<a href="/" target="_blank"><button id="sLin"> LinkedIn </button></a>
				<a href="/" target="_blank"><button id="sLin"> GitHub </button></a>
				<p id="sDes"> Links coming soon! </p>
				<br>
				<!-- eventually will have a <button> Discord Contact --> 
				
				<img src="/members/bhavya.jpg" alt="profile picture for Bhavya Sridhar" width="450"> 
				<!-- future: make this a pop out!; have other pictures/projects either below or behind the information pop out :) -->
				<p id="sDes"> Description coming soon! </p>
			</div>
		</div>	
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
        <!-- Page content ends here.-->

        <!-- This line brings in the footer. -->
        <?php include "../common/footer.php" ?>
    </body>
</html>