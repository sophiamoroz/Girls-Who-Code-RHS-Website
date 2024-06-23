<!--Melody Gill, class of 2021-->
<!--Sunny Liu, class of 2023-->

<?php
//Module with function that checks if the user's credentials match those in the database

#Global variables for connection to database
$dbhost = 'az1-ss39.a2hosting.com';
$dbuser = 'rhsgirls_sunny';
$dbpass = 'yha3lp5Qwe6od4g';
$dbschema = 'rhsgirls_ProductionDB';
$connection = new mysqli($dbhost,$dbuser,$dbpass);
if ($connection->connect_error)
{
	die("Connection to database failed: " . $connection->connect_error);
}


function authenticate($username, $password)
{
    global $connection;

    $result = $connection->query("SELECT * FROM `rhsgirls_ProductionDB`.`Users` WHERE username = '$username'");

    if ($result->num_rows > 0)
    {
        while($row = $result->fetch_assoc())
        {
            $hashedPW = $row["password"];
            $salt = $row["salt"];
        }

    }
    else
    {
        //Doing the same thing even though there was no username found. 
        //(so people can't measure the response time and figure out that the username was wrong)
        $hashedPW = "hgsdjnf";
        $salt = "DFHDFN";
    }

    $testHash = hashPassword($salt, $password);

    if ($testHash == $hashedPW)
    {
        return True;
    }
    else
    {
        return False;
    }
}

function makeSalt()
{
    $salt = hash('sha256', rand(), False);
    return $salt;
}

function hashPassword($salt, $password)
{
    $saltedPW = $salt . $password;
    $salthashPW = hash('sha256', $saltedPW, False);
    return $salthashPW;
}

function createUser($username, $password)
{
    //Authentication level is 1 by default for everyone. Can be changed later when there is need for different authentication levels
    $salt = makeSalt();
    $hashedPW = hashPassword($salt, $password);
    global $connection;

    $result = $connection->query("INSERT INTO `rhsgirls_ProductionDB`.`Users` (username, authLevel, salt, password) VALUES ('$username', 1, '$salt', '$hashedPW')");
}

function changePassword($username, $newpw)
{
    global $connection;
    //create new salt and salted password
    $salt = makeSalt();
    $salthashPW = hashPassword($salt, $newpw);

    $result = $connection->query("UPDATE `rhsgirls_ProductionDB`.`Users` SET salt='$salt', password='$salthashPW' WHERE username='$username'");

}

function deleteUser($username)
{
    global $connection;
    $result = $connection->query("DELETE FROM `rhsgirls_ProductionDB`.`Users` WHERE username='$username'");
}

//for debugging
function dbOutput($result)
{
    if ($result->num_rows > 0){
        while($row = $result->fetch_assoc()){
            $msg = "<p>".$row["password"]."</p>";
            echo($msg);
        }
    }
    else
    {
        echo("result is empty");
    }
}

?>