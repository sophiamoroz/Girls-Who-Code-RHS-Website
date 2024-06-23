<!-- Melody Gill, class of 2021-->

<!DOCTYPE html>
<html>
    <!--This is a comment. The browser won't show it.-->

    <head>
        <title>Melody</title>

        <!-- This line links the CSS file to this one.-->
        <link href="css/default.css" type="text/css" rel="stylesheet" />
    </head>

    <body>
        <!-- The line below brings in the header from another file, using PHP. -->
        <?php include "../../common/header.php" ?>

        <!-- Your page's content begins here.-->
        <h1>Melody</h1>
        
        <?php include "../../login-system/authentication.php";
        echo(checkUsername("bell"));
        echo("here");
        echo(checkusername("dhfsf"));
        //echo(authenticate("sam", "girl"));
        ?>

        

        <!-- Page content ends here.-->

        <!-- This line brings in the footer. -->
        <?php include "../../common/footer.php" ?>
    </body>
</html>