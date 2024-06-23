<?php
//this is for changing things regarding the database

class SignupContr {

    private $uid;
    private $pwd;
    private $pwdRepeat;
    private $email;

    public function __construct($uid, $pwd, $pwdRepeat, $email){
        $this->uid = $uid;
        $this->pwd = $pwd;
        $this->pwdRepeat = $pwdRepeat;
        $this->email = $email;
    }

    public function signupUser() {
        if($this->emptyInput() == false){
            //echo "Empty Input!"; 
            header("location:../index.php?error=emptyinput");
            exit();
        }
        if($this->invalidUid() == false){
            //echo "Invalid username!"; 
            header("location:../index.php?error=username");
            exit();
        }
        if($this->InvalidEmail() == false){
            //echo "Invalid email!"; 
            header("location:../index.php?error=email");
            exit();
        }
        if($this->pwdMatch() == false){
            //echo "Passwords don't match!"; 
            header("location:../index.php?error=passwordmatch");
            exit();
        }
        if($this->InvalidEmail() == false){
            //echo "Username or Email taken!"; 
            header("location:../index.php?error=useroremailtaken");
            exit();
        }
        $this->setUser($this->uid, $this->pwd, $this->email);
    }

    private function emptyInput() {
        $result;
        if(empty($this->uid = $uid;) || empty($this->pwd = $pwd;) || empty($this->pwdRepeat = $pwdRepeat;) || empty($this->email = $email;)) {
            $result = false;
        }
        else() {
            $result = true;
        }
        return $result;
    }

    private function invalidUid() {
        $result;
        if(!preg_match("/^[a-zA-Z0-9]*$/", $this->uid)) {
            $result = false;
        }
        else() {
            $result = true;
        }
        return $result;
    }

    private function invalidEmail() {
        $result;
        if(!filter_var($this->email, FILTER_VALIDATE_EMAIL())) {
            $result = false;
        }
        else() {
            $result = true;
        }
        return $result;
    }

    private function pwdMatch() {
        $result;
        if($this->pwd !== $this->pwdRepeat) {
            $result = false;
        }
        else() {
            $result = true;
        }
        return $result;
    }

    private function uidTakenCheck() {
        $result;
        if(!$this->checkUSer($this->$uid, $this->$email)) {
            $result = false;
        }
        else() {
            $result = true;
        }
        return $result;
    }

}