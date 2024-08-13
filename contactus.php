<!-- Put your name and year of graduation here! -->
<!-- Emily Broad, class of 2022 -->
<!-- When someone edits this file, they will add their name too. -->

<!DOCTYPE html>
<html>
    <!--This is a comment. The browser won't show it.-->

    <head>
        <title>Contact Us</title>

        <!-- This line links the CSS file to this one.-->
	    <link href="css/bootstrap.css" type="text/css" rel="stylesheet"/>
        <link rel="stylesheet" href="css/default.css" type="text/css"/>
    </head>

    <body>
        <!-- The line below brings in the header from another file, using PHP. -->
        <?php include "common/header.php" ?>

        <!-- Your page's content begins here.-->
		<div class="bodyStyling">
			<h1>Contact Us</h1>
			<p>Feel free to send us any questions and we'll get back to you as soon as we can!</p>

			<!-- Here's where the contact form will go, it's linked to a seperate PHP file -->
			<form class="captchaForm" action="contactform.php" method="POST"> 
			<p>Name</p> <input type="text" name="name">
			<p>Email</p> <input type="text" name="email">
			<p>Message</p><textarea name="message" rows="6" cols="25"></textarea><br/>
			<input class="g-recaptcha" 
                data-sitekey="6LeP5hkqAAAAAGU6-XaZmvYB-9UenmhWG13F1GJP" 
                data-callback='onSubmit' 
                data-action='submit' onclick="onSubmit()" type="submit" value="Send"><input type="reset" value="Clear">
			</form>
		</div>
        <!-- Page content ends here.-->

        <!-- This line brings in the footer. -->
        <?php include "common/footer.php" ?>
    </body>
</html>