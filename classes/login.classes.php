<?php
//this is for changing things regarding the database

class Login extends Dbh{

    protected  function getUser($uid, $pwd){
        $stmt = $this->connect()->prepare('INSERT INTO rhsgwcdb(users_uid, users_pwd, users_email) VALUES (?,?,?);');
        
        $hashedPwd password_hash($pwd, PASSWORD_DEFAULT);
        
        if(!$stmt->execute(array($uid, $hashedPwd))){
            $stmt = null;
            header("location:../index.php?error=stmtfailed");
            exit();
        }

        $stmt = null;
    }

}