<!-- Put your name and year of graduation here!-->
<!-- Melody Gill, class of 2021-->
<!-- When someone edits this file, they will add their name too.-->

<!DOCTYPE html>
<html>
    <head>
        <title>Logged in</title>

        <!-- This line links the CSS file to this one.-->
        <link href="css/default.css" type="text/css" rel="stylesheet" />
    </head>

    <body>
        <!-- The line below brings in the header from another file, using PHP. -->
        <!-- You'll have to change this relative file path, depending on where your file is in the tree. -->
        <!-- Don't worry about the HTML links; those use absolute paths. Just change the PHP ones! -->
        <?php include "../common/header.php" ?>

        <!-- Your page's content begins here.-->
        <?php
        //Check if user has cookie set (logged in)
        if(isset($_COOKIE['rhsgwc_security']))
        {
            echo("<p>You have logged in successfully!</p>");
            echo("<p>Some PHP demos that might be helpful as you learn PHP:</p>");
            include "../workspaces/gill/phpdemolinks.php";
        }
        else
        {
            echo("<p>Log in to access this page.</p>");
        }

        ?>
        <!-- Page content ends here.-->

        <!-- This line brings in the footer. -->
        <!-- Make sure to change this file path too. -->
        <?php include "../common/footer.php" ?>
    </body>
</html>