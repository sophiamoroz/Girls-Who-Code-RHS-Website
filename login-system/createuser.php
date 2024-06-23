<!--Melody Gill, class of 2021-->

<!DOCTYPE html>
<html>
    <head>
        <title>Create User</title>

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
        <h1>Create User</h1>
        <p>Please enter the new user's username and password.</p>

        <?php
        //Checks whether user's credentials are valid
        if (isset($_POST["username"]))
        {
            $sqlQuery = 'SELECT id FROM `rhsgirls_ProductionDB`.`Users` where `username`=?';
            $result  = $connection->prepare($sqlQuery);
            $result->bind_param('s',$_POST["username"]);
            $result = $connection->query($sqlQuery);

            if ($result->num_rows > 0){
                //username already exists
                echo("<p>Username must be unique. Please try again</p>");
            }
            else //username is unique
            {
                createUser($_POST["username"], $_POST["password"]);
                echo("<p>Account successfully created. You may log in</p>");
            }
        }

        ?>

        <!-- HTML form where user will input login credentials -->
        <form action="createuser.php" method = "post">
            <table>
                <tr>
                    <td>Username:</td> <td><input id="username" name="username" type="text" /></td>
                </tr>
                <tr>
                    <td>Password:</td> <td><input id="password" name="password" type="password" /></td>
                </tr>
                <tr>
                    <td><input type="submit" value="Create account" /> </td>
                </tr>
            </table>

        </form>

        <!-- Page content ends here.-->

        <!-- This line brings in the footer. -->
        <!-- Make sure to change this file path too. -->
        <?php include "../common/footer.php" ?>
    </body>
</html>