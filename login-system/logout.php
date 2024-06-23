<!-- Melody Gill, class of 2021 -->

<!DOCTYPE html>
<html>
    <head>
        <title>Log Out</title>

        <!-- This line links the CSS file to this one.-->
        <link href="css/default.css" type="text/css" rel="stylesheet" />
    </head>

    <body>
        <?php
        //Check to see if cookie is set first (so the code in header.php runs correctly)
        if(isset($_COOKIE['rhsgwc_security']))
        {
            setcookie("rhsgwc_security", "", time()-3600, "/");
            $loggedout = True;
        }
        else
        {
            $loggedout = False;
        }
        ?>

        <!-- The line below brings in the header from another file, using PHP. -->
        <?php include "../common/header.php" ?>

        <!-- Your page's content begins here.-->
        <h1>Log Out</h1>
        <?php
        //Redirect to home page
        if($loggedout)
        {
            echo("Logged out");
            header("Location: /index.php");
            die();
        }
        else
        {
            //Users shouldn't be able to get here unless they accessed the page directly
            echo("We're sorry, you're currently logged out.");
        }

        ?>
        <!-- Page content ends here.-->

        <!-- This line brings in the footer. -->
        <?php include "../common/footer.php" ?>
    </body>
</html>