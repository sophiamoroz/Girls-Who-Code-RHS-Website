<!-- Melody Gill, class of 2021 -->

<!DOCTYPE html>
<html>
    <head>
        <title>Log In</title>

        <!-- This line links the CSS file to this one.-->
		<link href="../css/bootstrap.css" type="text/css" rel="stylesheet" />
        <link href="../css/default.css" type="text/css" rel="stylesheet" />
    </head>

    <body>
			<!-- The line below brings in the header from another file, using PHP. -->
			<?php include "../common/header.php" ?>
			<div class="bodyStyling">
			<!-- The line below brings in the authentication functions, used for logging in. -->
			<?php include "authentication.php" ?>
			

			<!-- Your page's content begins here.-->
			<h1>Log In</h1>

			<?php
			//Checks whether user's credentials are valid
			if (isset($_POST["username"]))
			{
				if (authenticate($_POST["username"], $_POST["password"]))
				{
					//Set logged in cookie
					//86400 seconds in a day; cookie expires after 30 days
					setcookie("rhsgwc_security", $_POST["username"], time()+(86400 * 30), "/");
					echo("<p>Logged in</p>");
					header("Location: /login-system/landingpage.php");
					die();
				}
				else
				{
					//User's credentials are incorrect
					echo("<p>Username or password was incorrect. Please try again</p>");
				}
			}

			?>

			<!-- HTML form where user will input login credentials -->
			<form action="login.php" method = "post">
				<table>
					<tr>
						<td>Username:</td> <td><input id="username" name="username" type="text" /></td>
					</tr>
					<tr>
						<td>Password:</td> <td><input id="password" name="password" type="password" /></td>
					</tr>
					<tr>
						<td><input type="submit" value="Log In" /> </td>
					</tr>
				</table>

			</form>
		</div>
        <!-- Page content ends here.-->

        <!-- This line brings in the footer. -->
        <?php include "../common/footer.php" ?>
    </body>
</html>