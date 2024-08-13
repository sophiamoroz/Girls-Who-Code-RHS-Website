<?php
$dbschema = "rhsgwc5_sandbox";
$dbhost = "rhsgwc.com:3306";
$dbuser = "rhsgwc5_dev";
$dbpass = "ZSlV,jGOjN[)8[P&]r8ZOVS#zpXf#O7TM[";

$connection = new mysqli($dbhost,$dbuser,$dbpass);
if ($connection->connect_error){
    die("Connection to database failed: " . $connection->connect_error);
}

//grabbing the data
$uid = $_POST["uid"];
$pwd = $_POST["pwd"];

if(strlen($uid) && strlen($pwd))
{
    echo "<script>console.log('condition 0 ran')</script>";
    $login = new Login($uid, $pwd);
    $login->loginUser();

}

else{
    
    header("Location: ../login_page.php?error=emptyinput");
    echo "<script>console.log('condition 1 ran')</script>";
}

class Login{
    private $uid;
    private $pwd;

    public function __construct($uid, $pwd) {
        $this->uid = $uid;
        $this->pwd = $pwd;
        echo "<script>console.log('constructor')</script>";
    }
    
    public function loginUser() {
        if ($this->emptyInput() == false) {
            header("Location: ../login_page.php?error=emptyinput");
            exit();
        }
        $this->getUser($this->uid, $this->pwd);
        //going to back to front page
        header("Location: ../login_page.php?error=none");
    }

    private function emptyInput(){
        if (empty($this->uid) || empty($this->pwd)) {
            return false;
        } else {
            return true;
        }
    }

    private function getUser($uid, $pwd) {
        echo "<script>console.log('running')</script>";
        global $connection;
        global $dbschema;
        try {
            $query = 'SELECT users_pwd FROM `$dbschema`.`rhsgwcdb` WHERE users_uid = ? or users_email = ?;';
            $stmt = $connection->prepare($query);
            $stmt->bind_param($uid, $email);
            $stmt->execute();
            $stmt->close();
            if($stmt->rowCount()==0){
                $stmt=null;
                header("Location: ../login_page.php?error=userNotFound");
                exit();
            }

            $pwdHashed = $stmt->fetchAll(PDO::FETCH_ASSOC);
            $checkPwd = password_verify($pwd, $pwdHashed[0]["users_pwd"]);
            if($checkPwd = false){
                $stmt=null;
                header("Location: ../login_page.php?error=wrongPassword");
                exit();
            }
            
            else if($checkPwd = true){
                $query = 'SELECT users_pwd FROM `$dbschema`.`rhsgwcdb` WHERE users_uid = ? or users_email = ? AND users_pwd = ?;';
                $stmt = $connection->prepare($query);
                $stmt->bind_param($uid, $email, $pwd);
                $stmt->execute();
                $stmt->close();

                if(!stmt->execute(array($uid, $email,$pwd))){
                    $stmt = null;
                    header("location:../login_page.php?error=stmtfailed");
                    exit();
                }
                if($stmt->rowCount()==0){
                    $stmt=null;
                    header("Location: ../login_page.php?error=userNotFound");
                    exit();
                }

                $user = $stmt->fetchAll(PDO::FETCH_ASSOC);

                session_start();
                $_SESSION["userid"] = $user[0]["users_id"];
                $_SESSION["userid"] = $user[0]["users_uid"];

                $stmt=null;
            }
        }
          //catch exception
        catch(Exception $e) {
            echo 'Message: ' .$e->getMessage();
        }
    }

}

?>
