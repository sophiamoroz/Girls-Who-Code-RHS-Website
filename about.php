<!-- Amesha Banjara: Class of 2023!: wrote text content for page!! -->
<!-- Sunny Liu: Class of 2023! -->
<!-- Sierra Janson: Class of 2023! -->
 <!-- Sierra Janson: Class of 2023! -->

<!DOCTYPE html>
<html>
    <head>
        <title>About Girls Who Code!</title>

        <!-- This line links the CSS file to this one.-->
	<link href="css/bootstrap.css" type="text/css" rel="stylesheet" />
        <link href="css/default.css" type="text/css" rel="stylesheet" />
    </head>

    <body>
        <!-- The line below brings in the header from another file, using PHP. -->
        <!-- You'll have to change this relative file path, depending on where your file is in the tree. -->
        <!-- Don't worry about the HTML links; those use absolute paths. Just change the PHP ones! -->
        <?php include "common/header.php" ?>

        <!-- Your page's content begins here.-->
	<div class="bodyStyling">
		<h1>About Us!</h1>
			 <!-- Here's a photo from 2019 (SJ edit: 
			 This was in the bottom of resources but I feel as though it is more fitting here until we acquire a better group photo...let me know! -->
			<img src="McAdams Teaching.JPG" alt="McAdams Teaching 2019" style="display: block;margin-left: auto; margin-right: auto;width:35vw;height:auto;max-width:60%;margin-bottom:20px;">
			<!-- <p>Here's a photo from when Mr. Robert McAdams came from Hewlett Packard to teach us some Python fundamental principles (2019)</p> -->
			<p><b>According to computerscience.org, only 20% of computer science professionals in America are women.</b></p>

		<p>Not only this, but the amount of women pursuing a bachelor's degree in computer science has <b>decreased</b> since 1970. WHAT?! Even with more and more technology being available, the computer science field and the STEM field in general, is lacking in terms of female representation. So what can we do?  </p>
			<p>To combat this issue, we started at the root of the problem: awareness and opportunity. We all know that when beginning a new path or starting to learn something new, complications are inevitable. Especially with a topic as complex as computer science, it is bewildering to know where to begin. For this reason, we decided to take the opportunity to create a safe community in which anyone, no matter their experience in computer science, is allowed to join and grow both as a programmer and an individual! </p>
		<p>Based in Rocklin High School, <!-- our club has grown to __ people in just __ years! --> From learning Python to participating in HPE CodeWars to learning to code our very own club website, we have had the honor of working with some of the kindest people that we've ever met. </p>
		<p>Thank you so much to Mr. Werner and Mr. Clarion for inspiring us to expand our knowledge outside of the computer science classroom and into larger clubs and communities. And thank you so much to Mr. McAdams for teaching us everything we know. 
	</div>
	<!-- Page content ends here.-->

        <!-- This line brings in the footer. -->
        <!-- Make sure to change this file path too. -->
        <?php include "common/footer.php" ?>
    </body>
</html>