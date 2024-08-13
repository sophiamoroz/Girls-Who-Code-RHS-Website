<?php 
//Simran Saluja, Class of 2025: creating login and sign up page

?>
<!DOCTYPE html>
<html>
    <!--This is a comment. The browser won't show it.-->
    <head>
        <title>Log In</title>
        <!-- This line links the CSS file to this one.-->
		<!-- This page isn't connecting to the default css page !!!!!!!!!!!-->
	<link href="css/bootstrap.css" type="text/css" rel="stylesheet" />
    <link rel="stylesheet" href="css/default.css" type="text/css" /> 
    
    <section class = "index-intro">
        <!-- The line below brings in the header from another file, using PHP. -->
        <?php include "common/header.php" ?>
        <!-- This line brings in the footer. -->
	</section>

    <style>
		.alert{
			padding: 20px;
			background-color: #f44336;
			color: white;
			margin-bottom: 15px;
		}
		.alert.success{background-color: #4CAF50;}
		.alert.info{background-color: #2196F3;}
		.alert.warning{background-color:#ff9800;}
		.closebtn{
			margin-left: 15px;
			color: white;
			font-weight: bold;
			float: right;
			font-size:22px;
			line-height:20px;
			cursor:pointer;
			transition:0.3s;
		}
		.closebtn:hover{
			color:black;
		}
		</style>
		<script>
			function closeAlert(){
				var alert = document.getElementById('alert');
				alert.style.display = 'none';
			}
		</script>
	</head>
	<body>
			<?php if (isset($_GET['error'])): ?>
				<?php
				$error = $_GET['error'];
				$message = '';
				$alertType = 'alert';

				switch ($error){
					case 'none':
						$message = 'Logged in successfully!';
						$alertType = 'alert success';
						break;
                    case 'emptyinput':
                        $message = 'Please fill in all fields.';
                        break;
                    case 'username':
                        $message = 'Invalid username.';
                        break;
                    case 'email':
                        $message = 'Invalid email.';
                        break;
                    default:
                        $message = 'An unknown error occurred.';
                        break;
					}
					?>
					<div id="alert" class="<?= $alertType ?>">
            <span class="closebtn" onclick="closeAlert();">&times;</span> 
            <?= $message ?>
        </div>
    <?php endif; ?>

	<section class = "index-login">
		<div class = "wrapper">
			<div class="index-login-login">
				<h1 style="margin-top:10px;text-align:center;">LOG IN</h1>
				<p style="margin-top:10px;text-align:center;">Login with your username and password here!</p>
				<form class="captchaForm" action="includes/login.inc.php" method = "post" style="margin-top:10px;text-align:center;" id="sDes">
					<input type="text" name="uid" placeholder="Username">
					<input type="password" name="pwd" placeholder="Password">
					<br>
					<button class="g-recaptcha" 
                        data-sitekey="6LeP5hkqAAAAAGU6-XaZmvYB-9UenmhWG13F1GJP" 
                        data-callback='onSubmit' 
                        data-action='submit' onclick="onSubmit()" type="submit" name="submit" style="text-align:center;margin-top:10px;" id="sBut">LOGIN</button>
                    <button type="button" style="text-align:center;margin-top:10px;" id="sBut" onclick="window.location.href='signUpBackEnd.php'">SIGN UP</button>
				</form>
			</div>
		</div>
		<div>
			<?php include "common/footer.php" ?>
		</div>
	</section>
	
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
			
			</body>


</html>