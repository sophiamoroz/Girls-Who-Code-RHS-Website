<!-- Put your name and year of graduation here!-->
<!-- Example: Melody Gill, class of 2021-->
<!-- When someone edits this file, they will add their name too.-->

<!DOCTYPE html>
<html>
    <!--This is a comment. The browser won't show it.-->

    <head>
        <title>RHS Girls Who Code</title>

        <!-- This line links the CSS file to this one.-->
	<link href="css/bootstrap.css" type="text/css" rel="stylesheet" />
        <link href="css/default.css" type="text/css" rel="stylesheet" />
    </head>

    <body>
        <!-- The line below brings in the header from another file, using PHP. -->
        <?php include "common/header.php" ?>

        <!-- Your page's content begins here.-->
        <h1>Home page</h1>
        <p>This is the home page of our website!</p>

        <h2>PHP demo</h2>
        <p>Here is an introduction to PHP that might help you out!</p>
        <!-- Include links to PHP demo pages-->
        <?php include "workspaces/gill/phpdemolinks.php" ?>

        <!-- Page content ends here.-->

        <!-- This line brings in the footer. -->
        <?php include "common/footer.php" ?>
    </body>
</html>