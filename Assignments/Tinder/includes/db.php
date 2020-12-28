<?php

$dbServername="ID328605_tinder.db.webhosting.be";
$dbUsername="ID328605_tinder";
$dbPassword="Fool182?";
$dbName="ID328605_tinder";

$conn=mysqli_connect($dbServername,$dbUsername,$dbPassword,$dbName);

if($conn==false){
    die("connection failed");
}


$sql="SELECT * FROM choices";
$results=mysqli_query($conn,$sql);



foreach($results as $result){
    echo $result["name"]." ".$result["age"]."<br>";
}