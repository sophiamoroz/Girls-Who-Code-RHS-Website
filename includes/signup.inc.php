<?php
$dbschema = "rhsgwc5_sandbox";
$dbhost = "rhsgwc.com:3306";
$dbuser = "rhsgwc5_dev";
$dbpass = "ZSlV,jGOjN[)8[P&]r8ZOVS#zpXf#O7TM[";
$connection = new mysqli($dbhost,$dbuser,$dbpass);
if ($connection->connect_error){
    die("Connection to database failed: " . $connection->connect_error);
}
if(strlen($_POST["uid"]) && strlen($_POST["pwd"]) && strlen($_POST["email"]))
{

    //grabbing the data
    $uid = $_POST["uid"];
    $pwd = $_POST["pwd"];
    $pwdRepeat = $_POST["pwdRepeat"];
    $email = $_POST["email"];

    $signup = new Signup($uid, $pwd, $pwdRepeat, $email);
    $signup->signupUser();
    
    // $query = "INSERT into `$dbschema`.`rhsgwcdb` (users_uid, users_pwd, users_email) values(?,?,?)";
    // $sqlCmd = $connection->prepare($query);
    // $sqlCmd->bind_param('sss',$uid,$pwd,$email);
    // $sqlCmd->execute();
    // $sqlCmd->close();
}

else{
    header("Location: ../login_page.php?error=emptyinput");
}

class Signup {
    private $uid;
    private $pwd;
    private $pwdRepeat;
    private $email;

    public function __construct($uid, $pwd, $pwdRepeat, $email) {
        $this->uid = $uid;
        $this->pwd = $pwd;
        $this->pwdRepeat = $pwdRepeat;
        $this->email = $email;
    }
    
    public function signupUser() {
        if ($this->emptyInput() == false) {
            //echo "<script>console.log('condition 1 ran')</script>";
            header("Location: ../login_page.php?error=emptyinput");
            exit();
        }
        if ($this->invalidUid() == false) {
            //echo "<script>console.log('condition 2 ran')</script>";
            header("Location: ../login_page.php?error=username");
            exit();
        }
        if ($this->invalidEmail() == false) {
            //echo "<script>console.log('condition 3 ran')</script>";
            header("Location: ../login_page.php?error=email");
            exit();
        }
        if ($this->pwdMatch() == false) {
            //echo "<script>console.log('condition 4 ran')</script>";
            header("Location: ../login_page.php?error=passwordmatch");
            exit();
        }
        if ($this->uidTakenCheck() == false) {
            //echo "<script>console.log('condition 5 ran')</script>";
            header("Location: ../login_page.php?error=useroremailtaken");
            exit();
        }

        //change setuser to return a success flag, then return to the error=none page linked below
        //check for the return value from set user, if true set = none otherwise we assume it failed and tell the user that.
        $this->setUser($this->uid, $this->pwd, $this->email);
        //going to back to front page
        header("Location: ../login_page.php?error=none");
    }

    private function emptyInput(){
        if (empty($this->uid) || empty($this->pwd) || empty($this->pwdRepeat) || empty($this->email)) {
            return false;
        } else {
            return true;
        }
    }

    private function invalidUid(){
        if (!preg_match("/^[a-zA-Z0-9]*$/", $this->uid)) {
            return false;
        } else {
            return true;
        }
    }

    private function invalidEmail(){
        if (!filter_var($this->email, FILTER_VALIDATE_EMAIL)) {
            return false;
        } else {
            return true;
        }
    }

    private function pwdMatch(){
        if ($this->pwd !== $this->pwdRepeat) {
            return false;
        } else {
            return true;
        }
    }

    private function noError(){
        
    }

    private function infoNotSent(){

    }

    private function uidTakenCheck() {
        global $connection;
        global $dbschema;
        $query = "SELECT * FROM `$dbschema`.`rhsgwcdb` WHERE users_uid = ? OR users_email = ?";
        $stmt = $connection->prepare($query);
        $stmt->bind_param('ss', $this->uid, $this->email);
        $stmt->execute();
        $result = $stmt->get_result();
        //echo "<script>console.log($result->num_rows)</script>";
        if ($result->num_rows > 0) {
            //echo "<script>console.log('returning false')</script>";
            return false;
        } 
        else {
            //echo "<script>console.log('returning true')</script>";
            return true;
        }
    }

    private function setUser($uid, $pwd, $email) {
        //inserting record into database
        echo "<script>console.log('running')</script>";
        global $connection;
        global $dbschema;
        try {
            $query = "INSERT INTO `$dbschema`.`rhsgwcdb` (users_uid, users_pwd, users_email) VALUES (?, ?, ?)";
            $stmt = $connection->prepare($query);
            $stmt->bind_param('sss', $uid, $pwd, $email);
            $stmt->execute();
            //create an error code for this - this needs to be a check, if its less than one, then they need to try again in 5 minutes (or some amount of time) otherwise it redirects right back to homepage & tells them it was created
            //if number of rows < 1, then tell them whats in comment above this

            $stmt->close();
        }
          //catch exception
        catch(Exception $e) {
            echo 'Message: ' .$e->getMessage();
        }
    }

}

?>
