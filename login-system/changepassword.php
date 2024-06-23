<!--Melody Gill, class of 2021-->

<!DOCTYPE html>
<html>
    <head>
        <title>Change Password</title>

        <!-- This line links the CSS file to this one.-->
        <link href="css/default.css" type="text/css" rel="stylesheet" />
    </head>

    <body>
        <!-- The line below brings in the header from another file, using PHP. -->
        <?php include "../common/header.php" ?>

        <!-- The line below brings in the authentication functions, used for creating a new user in the database. -->
        <?php include "authentication.php" ?>

        <?php
        //Make sure user is logged in to access this page. If not, redirect to home page
        if(isset($_COOKIE['rhsgwc_security']) == False)
        {
            header("Location: /index.php");
            die();
        }
        ?>

        <!-- Your page's content begins here.-->
        <h1>Change Password</h1>
        <p>Please enter your username, your old password, and your new password.</p>

        <?php
        //Changes password in database
        if (isset($_POST["username"]))
        {
            if (authenticate($_POST["username"], $_POST["oldpw"]))
            {
                //Username and password match
                changePassword($_POST["username"], $_POST["newpw"]);
                echo("<p>Password changed</p>");
            }
            else
            {
                //Don't change password. Credentials didn't match
                echo("<p>Username and old password did not match. Please try again</p>");
            }
            
        }

        ?>

        <!-- HTML form where user will input login credentials -->
        <form action="changepassword.php" method = "post">
            <table>
                <tr>
                    <td>Username:</td> <td><input id="username" name="username" type="text" /></td>
                </tr>
                <tr>
                    <td>Old password:</td> <td><input id="oldpw" name="oldpw" type="text" /></td>
                </tr>
                <tr>
                    <td>New password:</td> <td><input id="newpw" name="newpw" type="password" /></td>
                </tr>
                <tr>
                    <td><input type="submit" value="Change password" /> </td>
                </tr>
            </table>

        </form>

        <!-- Page content ends here.-->

        <!-- This line brings in the footer. -->
        <!-- Make sure to change this file path too. -->
        <?php include "../common/footer.php" ?>
    </body>
</html>