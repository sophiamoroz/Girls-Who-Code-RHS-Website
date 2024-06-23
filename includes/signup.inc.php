<?php
$dbschema = "rhsgwc5_sandbox";
$dbhost = "rhsgwc.com:3306";
$dbuser = "rhsgwc5_dev";
$dbpass = "ZSlV,jGOjN[)8[P&]r8ZOVS#zpXf#O7TM[";
$connection = new mysqli($dbhost,$dbuser,$dbpass);
if ($connection->connect_error){
    die("Connection to database failed: " . $connection->connect_error);
}


$sqlQuery = "SELECT * from `$dbschema`.`rhsgwcdb`";
$result  = $connection->prepare($sqlQuery);
//$result->bind_param('s',$_POST["username"]);
$result = $connection->query($sqlQuery);

while($row = $result->fetch_assoc())
{
    echo $row["users_uid"];
}

if(isset($_POST["submit"]))
{

    //grabbing the data
    $uid = $_POST["uid"];
    $pwd = $_POST["pwd"];
    $pwdRepeat = $_POST["pwdRepeat"];
    $email = $_POST["email"];
    
    $query = "INSERT into `$dbschema`.`rhsgwcdb` (users_uid, users_pwd, users_email) values(?,?,?)";
    $sqlCmd = $connection->prepare($query);
    $sqlCmd->bind_param('sss',$uid,$pwd,$email);
    $sqlCmd->execute();
    $sqlCmd->close();

    // instantiate SignupContr class
    // include "../classes/dbh.classes.php";
    // include "../classes/signup.classes.php";
    // include "../classes/signup-contr.classes.php";
    // $signup = new SignupContr($uid, $pwd, $pwdRepeat, $email);
    
    // //running error handlers and user signup
    // $signup->signupUser();

    // //going to back to front page
    // header("location: ../index.php?error=none");
    
}

else{
    echo "poem";
}
?>