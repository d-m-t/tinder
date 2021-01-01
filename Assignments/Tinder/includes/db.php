<?php
    function makeConnection(){
        $dbServername="ID328605_tinder.db.webhosting.be";
        $dbUsername="ID328605_tinder";
        $dbPassword="Fool182?";
        $dbName="ID328605_tinder";

        $conn=mysqli_connect($dbServername,$dbUsername,$dbPassword,$dbName);

        if($conn == false){
            die("Connection Failed");
        }
        return $conn;
        }
        
    function closeConnection($conn){
        $conn->close();
    }

        
    function getQuery($sql){
       $conn = makeConnection(); 

       $result = MYSQLI_QUERY($conn,$sql);

       return $result;
    }

    function insertData($insertsql){
        $conn = makeConnection();

        MYSQLI_QUERY($conn,$insertsql);

        
    }