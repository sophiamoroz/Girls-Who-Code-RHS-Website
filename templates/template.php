<!-- Put your name and year of graduation here!-->
<!-- Example: Melody Gill, class of 2021-->
<!-- When someone edits this file, they will add their name too.-->

<!DOCTYPE html>
<html>
    <head>
        <title>Insert your title here</title>

        <!-- This line links the BootStrap and CSS file to this one.-->
	<link href="css/bootstrap.css" type="text/css" rel="stylesheet" />
        <link href="css/default.css" type="text/css" rel="stylesheet" />
    </head>

    <body>
        <!-- The line below brings in the header from another file, using PHP. -->
        <!-- You'll have to change this relative file path, depending on where your file is in the tree. -->
        <!-- Don't worry about the HTML links; those use absolute paths. Just change the PHP ones! -->
        <?php include "common/header.php" ?>

        <!-- Your page's content begins here.-->
        <h1>Page name</h1>
        <p>Whatever you want your page to say!</p>
        <!-- Page content ends here.-->

        <!-- This line brings in the footer. -->
        <!-- Make sure to change this file path too. -->
        <?php include "common/footer.php" ?>
    </body>
</html>