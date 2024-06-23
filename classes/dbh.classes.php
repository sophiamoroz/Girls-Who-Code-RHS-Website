<?php

class Dbh {

    public function __construct(){
        $connection = connect();
        $sqlQuery = 'SELECT * from rhsgwcdb';
        $result  = $connection->prepare($sqlQuery);
        //$result->bind_param('s',$_POST["username"]);
        $result = $connection->query($sqlQuery);

        while($row = $result->fetch_assoc())
        {
            echo $row["nameLast"];
        }
    }
    
    protected function connect(){
        try{
            $username = "rhsgirls5_dev";
            $password = "ZSlV,jGOjN[)8[P&]r8ZOVS#zpXf#O7TM[";
            $dbh = new PDO('mysql:host=rhsgwc.com;dbname=rhsgirls5_sandbox'); //<!-- this may change-->
            return $dbh;
        }
        catch (PDOException $e){
            print "Error!: " . $e->getMessage() . "<br/>";
            die();
        }
    }
    
}