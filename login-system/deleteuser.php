<!--Melody Gill, class of 2021-->

<!DOCTYPE html>
<html>
    <head>
        <title>Delete User</title>

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
        <h1>Delete User</h1>
        <p>Please enter your username and password to delete your account.</p>

        <?php
        //Checks whether user's credentials are valid
        if (isset($_POST["username"]))
        {
            if (authenticate($_POST["username"], $_POST["password"]))
            {
                //Username and password match
                deleteUser($_POST["username"]);

                echo("<p>User deleted</p>");
                //Delete cookie
                if(isset($_COOKIE['rhsgwc_security']))
                {
                    setcookie("rhsgwc_security", "", time()-3600, "/");
                }
                //redirect to home page
                header("Location: /index.php");
                die();
                
            }
            else
            {
                //Don't change password. Credentials didn't match
                echo("<p>Username and old password did not match. Please try again</p>");
            }
            
        }

        ?>

        <!-- HTML form where user will input login credentials -->
        <form action="deleteuser.php" method = "post">
            <table>
                <tr>
                    <td>Username:</td> <td><input id="username" name="username" type="text" /></td>
                </tr>
                <tr>
                    <td>Password:</td> <td><input id="password" name="password" type="password" /></td>
                </tr>
                <tr>
                    <td><input type="submit" value="Delete account" /> </td>
                </tr>
            </table>

        </form>

        <!-- Page content ends here.-->

        <!-- This line brings in the footer. -->
        <!-- Make sure to change this file path too. -->
        <?php include "../common/footer.php" ?>
    </body>
</html>